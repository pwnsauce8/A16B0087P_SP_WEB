<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

class User
{
/** ===================================REGISTRACE================================= */
    /**
     * @param $name      jmeno
     * @param $email     email
     * @param $password  heslo
     * @return bool      pokud vsechno spravne -> uzivatel zaregistrovan
     */
    public static function register($name, $email, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO users (username, email, password) '
            . 'VALUES (:name, :email, :password)';

        // Получение и возврат результатов. Используется подготовленный запрос
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

/** ===================================AUTORIZACE================================= */

    public static function checkUserData($email, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE email = :email AND password = :password';

        // Получение результатов. Используется подготовленный запрос

        $result = $db->prepare($sql);
        $result->execute(array(
            ":email" => $email,
            ":password" => $password
        ));

        // Обращаемся к записи
        $user = $result->fetch();

        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['idusers'];
        }
        return false;
    }

    public static function auth($userId)
    {
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
    }


/** ============================================================================== */


    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return true;
        }
        return false;
    }

    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /login");
    }

    public static function getUserById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE idusers = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

}