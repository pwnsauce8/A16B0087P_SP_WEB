<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

class PosouzeniController
{
    public function actionIndex()
    {
        User::checkBan();
        require_once(ROOT . '/views/user/seznam_k_pos.php');

        return true;
    }

}