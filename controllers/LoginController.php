<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

class LoginController
{
    public function actionIndex()
    {

        require_once(ROOT . '/views/blog/login.php');

        return true;
    }
}