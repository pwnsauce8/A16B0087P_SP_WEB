<?php

class SiteController
{

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
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function actionHome()
    {

        $userId = User::checkLogged();
        $user = User::getUserById($userId);


        require_once(ROOT . '/views/user/home.php');

        return true;
    }

    public function actionKonf()
    {
        User::checkBan();
        require_once(ROOT . '/views/blog/o_konf.php');

        return true;
    }

    public function actionMisto()
    {

        require_once(ROOT . '/views/blog/misto.php');

        return true;
    }

    public function actionSponsori()
    {
        require_once(ROOT . '/views/blog/sponsori.php');

        return true;
    }

    public function actionTemata()
    {

        require_once(ROOT . '/views/blog/temata.php');

        return true;
    }


}
