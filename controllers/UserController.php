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
     * Registrace uzivatelu
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
     * @return bool
     */
    public function actionLogin()
    {
        $email = false;
        $password = false;

        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            // Chyby
            $errors = false;

            // Validace
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            $password = md5($password);

            // Kontrola na existence uzivatele
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                // Pokud vyskytly chyby -> vypisujeme chyby
                $errors[] = 'Špatné údaje';
            } else {
                // Pokud nevyskytly chyby -> zapisujeme uzivatele do  SESSION
                User::auth($userId);

                User::checkBan();
                header("Location: /home");
            }
        }
        require_once(ROOT . '/views/blog/login.php');
        return true;
    }

    /**
     * Logout
     */
    public function actionLogout()
    {

        // Znicime informace o uzovetele v SESSION
        unset($_SESSION["user"]);

        header("Location: /");
    }

    /**
     * Zmena informaci uzivatele
     * @return bool
     */
    public function actionEditprofile()
    {
        $userId = User::checkLogged();


        if (isset($_POST['submit'])) {

            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['password'] = $_POST['password'];
            $options['jmeno'] = $_POST['jmeno'];
            $options['organizace'] = $_POST['organizace'];

            // znicime html tagy


            $options['name']  = strip_tags($options['name']);
            $options['email'] = strip_tags($options['email']);
            $options['jmeno'] = strip_tags($options['jmeno']);
            $options['organizace']  = strip_tags($options['organizace']);

            $options['name']  = htmlspecialchars($options['name']);
            $options['email'] = htmlspecialchars($options['email']);
            $options['jmeno'] = htmlspecialchars($options['jmeno']);
            $options['organizace']  = htmlspecialchars($options['organizace']);

            // Chyby
            $errors = false;

            // Kontrola dat
            if (!User::checkName($options['name'])) {
                $errors[] = 'Jméno musí být délší, než 2 symboly';
            }

            if ($errors == false) {
                $options['password']  = md5($options['password']);
                // Pokud nevyskytly chyby -> registrace
                $result = User::updateUserById($userId, $options);
            }


        }

        // Подключаем вид
        require_once(ROOT . '/views/user/editprofile.php');
        return true;
    }
}