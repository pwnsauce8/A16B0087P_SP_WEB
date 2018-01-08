<?php
/**
 * Controller Admin ridi seznamami do kterych
 * ma pristup pouze Admin
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
 * Osobní číslo : A16B0087P
 */

class AdminSeznamController
{
    /**
     * Vypise seznam vsech prispevku,
     * ktere jeste nemaji posouzeni
     * @return bool
     */
    public function actionSeznamPrispevku()
    {
        // Zkontroluje zda uzivatel ma BAN
        User::checkBan();
        // Zkontroluje zda uzivatel ma pristup
        Admin::checkAdmin();

        // Vrati informace o prispevkach
        $list = Articles::getArtList();
        $userList = User::getUsersList();

        require_once(ROOT . '/views/admin/seznamadmin.php');

        return true;
    }

    /**
     * Tabulka s uzivateli
     * @return bool
     */
    public function actionUsersban()
    {
        // Zkontroluje zda uzivatel ma BAN
        User::checkBan();
        // Zkontroluje zda uzivatel ma pristup
        Admin::checkAdmin();

        require_once(ROOT . '/views/admin/users.php');

        return true;
    }

    /**
     * Nastavi posouzeni
     * @param $id id prispevku
     * @return bool
     */
    public function actionPosouzeni($id)
    {
        // Zkontroluje zda uzivatel ma BAN
        User::checkBan();
        // Zkontroluje zda uzivatel ma pristup
        Admin::checkAdmin();

        $userlist = User::getUsersList();

        if (isset($_POST['submit'])) {

            $options['username'] = $_POST['username'];

            // Chyby
            $errors = false;

            if ($errors == false) {
                // Pokud nevyskytly chyby -> registrace
                $result = Admin::updatePostByIdSetPos($id, $options);
                header("Location: /admsez");
            }
        }


        require_once(ROOT . '/views/admin/posouzeni.php');

        return true;
    }

    /**
     * Posouzene prisoevky
     * @return bool
     */
    public function actionPosouzeniSeznam()
    {
        // Zkontroluje zda uzivatel ma BAN
        User::checkBan();
        // Zkontroluje zda uzivatel ma pristup
        Admin::checkAdmin();

        // Vrati seznam prispevku
        $list = Admin::getPosList();

        require_once(ROOT . '/views/admin/pos_seznam.php');

        return true;
    }

    /**
     * Odstrani zadany prispevek
     * @param $id   id prispevku, ktery chceme odstranit
     * @return bool
     */
    public function actionDelete($id)
    {
        // Zkontroluje zda uzivatel ma ban
        User::checkBan();

        if (isset($_POST['submit'])) {

            // Pokud vsechno je v poradku -> odstranime prispevek
            Articles::deletePostById($id);

            header("Location: /admsez");
        }

        require_once(ROOT . '/views/admin/delete.php');
        return true;
    }

}