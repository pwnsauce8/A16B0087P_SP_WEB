<?php

// FRONT CONTROLLER

// 1. Všeobecne nastaveni
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// 2. Pripojeni sys souboru
define('ROOT', dirname(__FILE__));

// Autoload trid
require_once(ROOT.'/components/Autoload.php');


// 4. Router
$router = new Router();
$router->run();
