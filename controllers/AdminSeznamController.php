<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
 * Osobní číslo : A16B0087P
 */

class AdminSeznamController
{
    public function actionIndex()
    {
        User::checkBan();
        Admin::checkAdmin();

        $list = Articles::getArtList();
        $userList = User::getUsersList();

        require_once(ROOT . '/views/admin/seznamadmin.php');

        return true;
    }

}