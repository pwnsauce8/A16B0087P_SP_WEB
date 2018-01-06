<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

class UserController
{
    /**
     * @return bool registrace
     */
    public function actionRegister()
    {
        $name = false;
        $email = false;
        $password = false;

        $result = false;

        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $password = md5($password);

            // Chyby
            $errors = false;

            // Kontrola dat
            if (!User::checkName($name)) {
                $errors[] = 'Jméno musí být délší, než 2 symboly';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Heslo musí být délší, než 6 symboly';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Takový email už existuje';
            }

            if ($errors == false) {
                // Pokud nevyskytly chyby -> registrace
                $result = User::register($name, $email, $password);
            }
        }

        require_once(ROOT . '/views/blog/registrace.php');

        return true;
    }

    /**
     * Autorizace uzivatelu
     */
    public function actionLogin()
    {
        $email = false;
        $password = false;

        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            $password = md5($password);

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                // Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /home");
            }
        }
        require_once(ROOT . '/views/blog/login.php');
        return true;
    }

    public function actionLogout()
    {

        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);

        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }
}