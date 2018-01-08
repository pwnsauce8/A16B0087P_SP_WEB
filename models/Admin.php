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
}