<?php
/**
 * Seznam cest ktere existuje na mem webu
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
    'seznam/posouzeni' => 'adminseznam/posouzeniseznam',

    // Hlavni stranky
    'konf' => 'site/konf',             // actionIndex v KonfController
    'temata' => 'site/temata',         // actionIndex v TemataController
    'misto' => 'site/misto',           // actionIndex v MistoController
    'sponsori' => 'site/sponsori',     // actionIndex v SponsoriController ......
    'posoudit/download/([0-9]+)' => 'admin/download/$1',
    'vote/download/([0-9]+)' => 'admin/download/$1',

    // Uzivatel
    'novy' => 'seznam/add',
    'seznam/update/([0-9]+)' => 'seznam/update/$1', // actionUpdate v SeznamController
    'seznam/delete/([0-9]+)' => 'seznam/delete/$1', // actionDelete v SeznamController
    'posouzeni' => 'seznam/seznamposouzeni',
    'vote/([0-9]+)' => 'seznam/vote/$1',



    // Admin

    'unbanuser/([0-9]+)' => 'admin/unban/$1',
    'admsez' => 'adminseznam/seznamprispevku',
    'novyadmin' => 'novyadmin/index',
    'download/([0-9]+)' => 'admin/download/$1',
    'userban' => 'adminseznam/usersban',
    'banuser/([0-9]+)' => 'admin/ban/$1',
    'posoudit/([0-9]+)' => 'adminseznam/posouzeni/$1',
    'admin/delete/([0-9]+)' => 'adminseznam/delete/$1',
    'admin' => 'admin/index',
    'posadm' => 'adminseznam/kposouzeni',
    'seznam/info/([0-9]+)' => 'adminseznam/info/$1',




    'seznam' => 'seznam/index',

    'home' => 'site/home',


    '' => 'site/login',                 // actionIndex v SiteController

);
