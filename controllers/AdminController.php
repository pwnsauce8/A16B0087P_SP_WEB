<?php
/**
 * Controller Admin
 * Ridi vsem, co dela admin
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
 * Osobní číslo : A16B0087P
 */

class AdminController
{
    /**
     * Kontroluje, zda li uzivatel ma pristup
     * pokud ano, presmeruje na hlavni stranku admin-panel
     * pokud ne, presmeruje na hlavni stranku uzivatele
     * @return bool
     */
    public function actionIndex()
    {
        // Kontroluje, zda uzivatel ma ban
        User::checkBan();
        // Kontroluje, zda uzivatel ma pristup
        Admin::checkAdmin();
        require_once(ROOT . '/views/admin/admin.php');

        return true;
    }

    /**
     * Stahne soubor
     * @param $idPost id zaznamu
     * @return bool   uspesne/ne
     */
    public function actionDownload($idPost)
    {

        // zjisti informace o zaznamu
        $result = Articles::getPostById($idPost);
        // zapise do $filename cestu k souboru
        $filename = $result['file'];

        // Stahne soubor
        Files::file_force_download($filename);

        return true;
    }

    /**
     * Nastavi BAN na uzivatele
     * @param $id
     * @return bool
     */
    public function actionBan($id)
    {

        // Kontroluje, zda uzivatel ma pristup
        Admin::checkAdmin();
        // BAN
        Admin::banUser($id);

        require_once(ROOT . '/views/admin/users.php');

        return true;
    }

    /**
     * Nastavi UNBAN na uzivatele
     * @param $id
     * @return bool
     */
    public function actionUnban($id)
    {

        // Kontroluje, zda uzivatel ma pristup
        Admin::checkAdmin();
        // BAN
        Admin::unBanUser($id);

        require_once(ROOT . '/views/admin/users.php');

        return true;
    }
}