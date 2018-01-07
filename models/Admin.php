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
     * @return bool zkontroluje zda li uzivatel ma ban (true/false)
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
}