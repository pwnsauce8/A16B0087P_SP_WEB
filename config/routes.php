<?php
/**
 * Seznam cest
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

return array(

    // Autorizace
    'login' => 'user/login',            // actionIndex v LoginController
    'user/logout' => 'user/logout',
    'registrace' => 'user/register',    // actionIndex v RegistraceController
    'editprofile' => 'user/editprofile',

    // Hlavni stranky
    'konf' => 'site/konf',             // actionIndex v KonfController
    'temata' => 'site/temata',         // actionIndex v TemataController
    'misto' => 'site/misto',           // actionIndex v MistoController
    'sponsori' => 'site/sponsori',     // actionIndex v SponsoriController ......


    // Uzivatel
    'novy' => 'seznam/add',
    'seznam/update/([0-9]+)' => 'seznam/update/$1', // actionUpdate v SeznamController
    'seznam/delete/([0-9]+)' => 'seznam/delete/$1', // actionDelete v SeznamController
    'seznam' => 'seznam/index',
    'posouzeni' => 'posouzeni/index',


    // Admin
    'admin' => 'admin/index',
    'admsez' => 'adminseznam/index',
    'novyadmin' => 'novyadmin/index',
    'download/([0-9]+)' => 'admin/download/$1',
    'userban' => 'admin/usersban',
    'banuser/([0-9]+)' => 'admin/ban/$1',

    'home' => 'site/home',


    '' => 'site/login',                 // actionIndex v SiteController

);
