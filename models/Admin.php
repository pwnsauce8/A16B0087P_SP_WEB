<?php
/**
 * Model Admin. Ma funkce, ktere muze delat jen Admin
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
 * Osobní číslo : A16B0087P
 */

class Admin
{
    /**
     * @return bool zkontroluje zda li uzivatel Admin (true/false)
     */
    public static function checkAdmin() {
        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        if ($user['isAdmin'] == '1') {
            return true;
        }

        header("Location: /home");
//        die('Access denied');
    }

    /**
     * Nastavi na isBan '1' v tabulce users
     * @return bool
     */
    public static function banUser($id) {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE `users` SET isBan = '1' WHERE idusers = :id;";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Nastavi na isBan '0' v tabulce users
     * @return bool
     */
    public static function unBanUser($id) {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE `users` SET isBan = '0' WHERE idusers = :id;";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Nastaveni posouzeni
     * @param $id
     * @param $options
     * @return bool
     */
    public static function updatePostByIdSetPos($id, $options) {
        // Pribojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = "UPDATE `post` SET `posouzeni`= :username WHERE idpost = :id;";

        Articles::updatePostDoneAdm($id);
        // Příjem a vracení výsledků
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':username', $options['username'], PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Vrati seznam prispevku
     * @return array pole zaznamu
     */
    public static function getPosList()
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $result = $db->query('SELECT name, autors, celkem, uzivatel, poznamka FROM post, votes WHERE post_idpost = idpost');

        // Prijem a vraceni vysledku
        $i = 0;
        $posList = array();
        while ($row = $result->fetch()) {
            $posList[$i]['name'] = $row['name'];
            $posList[$i]['autors'] = $row['autors'];
            $posList[$i]['celkem'] = $row['celkem'];
            $posList[$i]['uzivatel'] = $row['uzivatel'];
            $posList[$i]['poznamka'] = $row['poznamka'];
            $i++;
        }
        return $posList;
    }

    /**
     * Vrati seznam prispevku
     * @return array pole zaznamu
     */
    public static function getInfoVote() {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $result = $db->query('SELECT post.name, post.posouzeni, post.autors, users.username, votes.poznamka, votes.celkem, votes.post_idpost FROM `votes`,`post`,`users` WHERE votes.post_idpost = post.idpost AND votes.uzivatel = users.idusers');
        // Prijem a vraceni vysledku
        $i = 0;
        $voteInfo = array();
        while ($row = $result->fetch()) {
            $voteInfo[$i]['name'] = $row['name'];
            $voteInfo[$i]['posouzeni'] = $row['posouzeni'];
            $voteInfo[$i]['autors'] = $row['autors'];
            $voteInfo[$i]['username'] = $row['username'];
            $voteInfo[$i]['poznamka'] = $row['poznamka'];
            $voteInfo[$i]['celkem'] = $row['celkem'];
            $voteInfo[$i]['post_idpost'] = $row['post_idpost'];
            $i++;
        }
        return $voteInfo;
    }

    public static function getVotesById($id) {

        // Pripojeni k DB
        $db = Db::getConnection();

        $artList = array();

        // SQL dotaz
        $result = $db->prepare("SELECT originalita, tema, tech_kval, jaz_kval, doporuceni, poznamka, celkem, users.username FROM votes, users WHERE post_idpost = :id AND votes.uzivatel = users.idusers");

        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Ukazujeme, ze chceme dostat pole s data
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $artList[] = $row;
        }

        return $artList;
    }
}