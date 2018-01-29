<?php
/**
 * Funkce pro praci s uzivatelem
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

class User
{
//  ___   ____  __    _   __  _____  ___    __    __    ____
// | |_) | |_  / /`_ | | ( (`  | |  | |_)  / /\  / /`  | |_
// |_| \ |_|__ \_\_/ |_| _)_)  |_|  |_| \ /_/--\ \_\_, |_|__

    /**
     * Regestruje uzivatele
     * @param $name      jmeno uzivatele
     * @param $email     email
     * @param $password  heslo
     * @return bool      pokud vsechno spravne -> uzivatel zaregistrovan
     */
    public static function register($name, $email, $password)
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = 'INSERT INTO users (username, email, password) '
            . 'VALUES (:name, :email, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Kontroluje zda jmeno delsi, nez 2
     * @param $name jmeno
     * @return bool ano nebo ne
     */
    public static function checkName ($name) {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Kontroluje zda heslo delsi, nez 6
     * @param $password heslo
     * @return bool     ano nebo ne
     */
    public static function checkPassword ($password) {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * Kontroluje existuje-li email
     * @param $email email
     * @return bool  existuje nebo ne
     */
    public static function checkEmailExists ($email) {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL kod
        $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

//    __    _     _____ ___   ___   _  ____   __    __    ____
//   / /\  | |  | | |  / / \ | |_) | |  / /  / /\  / /`  | |_
//  /_/--\ \_\_/  |_|  \_\_/ |_| \ |_| /_/_ /_/--\ \_\_, |_|__

    /**
     * Kontroluje data o uzivateli
     * @param $email     email uzivatele
     * @param $password  heslo uzivatele
     * @return bool      Pokud existuje uzivatel vratime jeho id jinak false
     */
    public static function checkUserData($email, $password)
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = 'SELECT * FROM users WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->execute(array(
            ":email" => $email,
            ":password" => $password
        ));

        $user = $result->fetch();

        if ($user) {
            // Pokud existuje uzivatel vratime jeho id
            return $user['idusers'];
        }
        return false;
    }

    /**
     * Zapisujeme id uzivatele v SESSION
     * @param $userId id uzivatele
     */
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }


/** ============================================================================== */


    /**
     * Kontrolujeme zda je uzivatel zaregestrovan
     * @return bool true/false
     */
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return true;
        }
        return false;
    }

    /**
     * @return pokud existuje SESSION vratime id uzivatele
     */
    public static function checkLogged()
    {
        if (isset($_SESSION['user']) ) {
            return $_SESSION['user'];
        }
        // jinak na stranku s autorizaci
        header("Location: /login");
    }

    /**
     * Vrati vsechnu informace ob uzivateli
     * @param $id     id uzivatele
     * @return mixed  vsechna informace
     */
    public static function getUserById($id)
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = 'SELECT * FROM users WHERE idusers = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    /**
     * Vrati seznam vsech uzivatelu
     * @return array pole uzivatelu
     */
    public static function getUsersList()
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $result = $db->query('SELECT idusers, username, isBan FROM users ');

        // Prijem a vraceni vysledku
        $i = 0;
        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['idusers'] = $row['idusers'];
            $categoryList[$i]['username'] = $row['username'];
            $categoryList[$i]['isBan'] = $row['isBan'];
            $i++;
        }
        return $categoryList;
    }

    /**
     * Uprava informace ob uzivateli
     * @param $id       id uzivatele
     * @param $options  vsechna nova informace
     * @return bool
     */
    public static function updateUserById($id, $options)
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = "UPDATE `users` 
                SET `username`= :name,`email`= :email,`jmeno`= :jmeno,`organizace`= :organizace 
                WHERE idusers = :id;";

        // Prijem a vraceni vysledku
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':jmeno', $options['jmeno'], PDO::PARAM_STR);
        $result->bindParam(':organizace', $options['organizace'], PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Ban uzivatele
     * @param $id   id uzivatele
     * @return bool vysledek
     */
    public static function getUserBanById($id, $options)
    {
        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = "UPDATE `users` 
                SET 
                WHERE idusers = :id;";

        // Prijem a vraceni vysledku
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':password', $options['password'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':jmeno', $options['jmeno'], PDO::PARAM_STR);
        $result->bindParam(':organizace', $options['organizace'], PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Zkomtroluje zda uzivatel ma ban
     * @return bool
     */
    public static function checkBan() {

        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        if ($user['isBan'] != '1') {
            return true;
        }
        unset($_SESSION["user"]);

        header("Location: /");

    }

}