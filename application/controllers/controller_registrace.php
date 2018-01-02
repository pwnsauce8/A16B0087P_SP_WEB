<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 02.01.2018
 * Osobní číslo : A16B0087P
 */

class Controller_Registrace extends Controller
{

    function action_index()
    {
        $this->view->generate('registrace_view.php', 'template_view.php');
    }
}