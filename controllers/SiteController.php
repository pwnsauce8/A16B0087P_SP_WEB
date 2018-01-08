<?php
/**
 * Controller Site ridi vsemi strankami pro
 * navtevniky
 * uzivatel
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

class SiteController
{

    /**
     * Autorizace uzivatele
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

            // hach hesla
            $password = md5($password);

            // Konrolujeme existuje li uzivatel
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                // Pokud vyskytly chyby -> vypisujeme
                $errors[] = 'Špatné udaje';
            } else {
                // Pokud nevyskytly chyby -> zapisujeme uzivatele do SESSION
                User::auth($userId);

                header("Location: /home");
            }
        }
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    /**
     * Hlavni stranka uzivatele
     * @return bool
     */
    public function actionHome()
    {

        // Konrola uzivatele (vrati id)
        $userId = User::checkLogged();
        // Vrati informace uzivatele
        $user = User::getUserById($userId);


        require_once(ROOT . '/views/user/home.php');

        return true;
    }

    /**
     * Stranka O Konferenci
     * @return bool
     */
    public function actionKonf()
    {
        require_once(ROOT . '/views/blog/o_konf.php');

        return true;
    }

    /**
     * Stranka Misto konani
     * @return bool
     */
    public function actionMisto()
    {

        require_once(ROOT . '/views/blog/misto.php');

        return true;
    }

    /**
     * Stranka Sponsori
     * @return bool
     */
    public function actionSponsori()
    {
        require_once(ROOT . '/views/blog/sponsori.php');

        return true;
    }

    /**
     * Stranka Temata
     * @return bool
     */
    public function actionTemata()
    {

        require_once(ROOT . '/views/blog/temata.php');

        return true;
    }


}
