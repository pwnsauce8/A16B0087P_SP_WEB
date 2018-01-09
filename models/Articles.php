<?php
/**
 * Funkce pro praci s zaznamy
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

class Articles
{
    /**
     * @param $name jmeno uzivatele
     * @return bool zkontroluje delku
     */
    public static function checkName ($name) {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * @param $name autori
     * @return bool zkontroluje delku
     */
    public static function checkAutori ($name) {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * @param $options      pole ve kterem se nachazi informace z FORM
     * @return int|string   id zaznamu nebo 0
     */
    public static function addAbstract($options) {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = 'INSERT INTO post '
            . '(`name`, `abstract`, `autors`, `file`, `date`, `users_idusers`)'
            . 'VALUES '
            . '(:nazev, :abstract, :autori, :file, :date, :userid)';

        // Příjem a vracení výsledků
        $result = $db->prepare($sql);
        $result->bindParam(':nazev', $options['nazev'], PDO::PARAM_STR);
        $result->bindParam(':autori', $options['autori'], PDO::PARAM_STR);
        $result->bindParam(':abstract', $options['abstract'], PDO::PARAM_STR);
        $result->bindParam(':date', $options['date'], PDO::PARAM_INT);
        $result->bindParam(':file', $options['file'], PDO::PARAM_STR);
        $result->bindParam(':userid', $options['userid'], PDO::PARAM_INT);

        if ($result->execute()) {
            // Pokud je dotaz uspesne proveden, vytvarime id přidaneho zaznamu
            return $db->lastInsertId();
        }
        // Jinak 0
        return 0;
    }

    /**
     * Zjisti informace o zaznamech
     * @return array pole s informacemi o zaznamech
     */
    public static function getArtList()
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        $userId = User::checkLogged();

        // Příjem a vracení výsledků
        $result = $db->query('SELECT * FROM post WHERE doneAdm IS NULL');
        $artList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $artList[$i]['idpost'] = $row['idpost'];
            $artList[$i]['name'] = $row['name'];
            $artList[$i]['abstract'] = $row['abstract'];
            $artList[$i]['autors'] = $row['autors'];
            $artList[$i]['date'] = $row['date'];
            $artList[$i]['file'] = $row['file'];
            $i++;
        }
        return $artList;
    }

    /**
     * Zjisti vsechny zaznamy od jedneho uzivatele
     * @param $id     id izivatele
     * @return array  zaznamy
     */
    public static function getArtUserList($id)
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        $artList = array();

        // SQL dotaz
        $result = $db->prepare("SELECT idpost, name, autors, date FROM post 
                                            WHERE users_idusers = :id
                                            ORDER BY idpost DESC");

        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Ukazujeme, ze chceme dostat pole s data
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $artList[] = $row;
        }

        return $artList;
    }

    /**
     * Zjisti vsechny zaznamy k posudku
     * @param $id     id izivatele
     * @return array  zaznamy
     */
    public static function getArtUserListPos($id)
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        $artList = array();

        // SQL dotaz
        $result = $db->prepare("SELECT idpost, name, autors, date FROM post 
                                            WHERE posouzeni = :id AND done IS NULL");

        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Ukazujeme, ze chceme dostat pole s data
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $artList[] = $row;
        }

        return $artList;
    }

    /**
     * Odstrani soobor
     * @param $id   id souboru
     * @return bool uspesne/ne
     */
    public static function deletePostById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM post WHERE idpost = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Zmeni informace zaznamu
     * @param $id       id zaznamu
     * @param $options  zmenena informace
     * @return bool     uspesne/ne
     */
    public static function updatePostById($id, $options)
    {
        // Pribojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = "UPDATE `post` SET `name`= :nazev,`abstract`= :abstract,`autors`= :autori,`file`= :file,`date`= :date WHERE idpost = :id;";

        // Příjem a vracení výsledků
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':nazev', $options['nazev'], PDO::PARAM_STR);
        $result->bindParam(':autori', $options['autori'], PDO::PARAM_STR);
        $result->bindParam(':abstract', $options['abstract'], PDO::PARAM_STR);
        $result->bindParam(':date', $options['date'], PDO::PARAM_STR);
        $result->bindParam(':file', $options['file'], PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Dostaneme zaznamy po id
     * @param $id    id zaznamu
     * @return       pole z zaznamy
     */
    public static function getPostById($id)
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = 'SELECT * FROM post WHERE idpost = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Spusteni prikazu
        $result->execute();

        // Příjem a vracení výsledků
        return $result->fetch();
    }

    /**
     * Nastavi done v tabulce POST na 1
     * @param $id   id zaznamu
     * @return bool
     */
    public static function updatePostDone($id)
    {
        // Pribojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = "UPDATE `post` SET `done`= '1' WHERE idpost = :id;";

        // Příjem a vracení výsledků
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }

    /**
     * Nastavi doneAdm v tabulce POST na 1
     * @param $id   id zaznamu
     * @return bool
     */
    public static function updatePostDoneAdm($id)
    {
        // Pribojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = "UPDATE `post` SET `doneAdm`= '1' WHERE idpost = :id;";

        // Příjem a vracení výsledků
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }

    /**
     * @param $options      pole ve kterem se nachazi informace z FORM
     * @return int|string   id zaznamu nebo 0
     */
    public static function addVote($options) {
        // Pripojeni k DB
        $db = Db::getConnection();

        $user = $options['userId'];
        $originalita = $options['originalita'];
        $tema = $options['tema'];
        $tech_kvalita = $options['tech_kvalita'];
        $jaz_kvalita = $options['jaz_kvalita'];
        $doporuceni = $options['doporuceni'];
        $poznamky = $options['poznamky'];
        $post = $options['idpost'];

        $celkem = ($originalita + $tema + $tech_kvalita + $jaz_kvalita + $doporuceni) / 5;

        // SQL dotaz
        $sql = "INSERT INTO `votes`(`originalita`, `tema`, `tech_kval`, `jaz_kval`, `doporuceni`, `poznamka`, `post_idpost`, `celkem`, `uzivatel`)
                VALUES (:originalita, :tema, :tech_kvalita, :jaz_kvalita, :doporuceni, :poznamky, :post, :celkem, :user)";

//        $sql = "INSERT INTO `votes`(`originalita`, `tema`, `tech_kval`, `jaz_kval`, `doporuceni`, `poznamka`, `post_idpost`, `uzivatel`)
//                VALUES ('2', '2', '2', '2', '2', 'dddddd','1');";
        self::updatePostDone($post);
        // Příjem a vracení výsledků
        $result = $db->prepare($sql);

        $result->bindParam(':originalita', $originalita, PDO::PARAM_INT);
        $result->bindParam(':tema', $tema, PDO::PARAM_INT);
        $result->bindParam(':tech_kvalita',  $tech_kvalita, PDO::PARAM_INT);
        $result->bindParam(':jaz_kvalita', $jaz_kvalita, PDO::PARAM_INT);
        $result->bindParam(':doporuceni', $doporuceni, PDO::PARAM_INT);
        $result->bindParam(':poznamky', $poznamky, PDO::PARAM_STR);
        $result->bindParam(':post', $post, PDO::PARAM_INT);
        $result->bindParam(':celkem', $celkem, PDO::PARAM_INT);
        $result->bindParam(':user', $user, PDO::PARAM_INT);

        if ($result->execute()) {
            // Pokud je dotaz uspesne proveden, vytvarime id přidaneho zaznamu
            return $db->lastInsertId();
        }
        // Jinak 0
        return 0;
    }

}
