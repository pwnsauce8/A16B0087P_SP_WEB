<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
 * Osobní číslo : A16B0087P
 */

class AdminController
{
    public function actionIndex()
    {
        User::checkBan();
        Admin::checkAdmin();
        require_once(ROOT . '/views/admin/index.php');

        return true;
    }

    public function actionDownload($idPost)
    {
        User::checkBan();
        Admin::checkAdmin();
        $result = Articles::getPostById($idPost);
        $filename = $result['file'];

        Files::file_force_download($filename);

        return true;
    }

    public function actionUsersban()
    {
        User::checkBan();
        Admin::checkAdmin();
        require_once(ROOT . '/views/admin/users.php');

        return true;
    }

    public function actionBan($id)
    {
        Admin::checkAdmin();
        Admin::banUser($id);
        require_once(ROOT . '/views/admin/users.php');

        return true;
    }
}