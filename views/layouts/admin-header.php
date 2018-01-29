<?php
/**
 * Admin header
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
 * Osobní číslo : A16B0087P
 */
?>
<!DOCTYPE html>
<head>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="/template/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <link rel="stylesheet" href="/template/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/template/libs/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="/template/libs/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="/template/libs/countdown/jquery.countdown.css" />
    <link rel="stylesheet" href="/template/css/fonts.css" />
    <link rel="stylesheet" href="/template/css/main.css" />
    <link rel="stylesheet" href="/template/css/media.css" />
    <link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/micon-social-pack/512/vk-128.png">
    <title>Konfefence</title>
</head>
<body>

<header class="top_header">

    <div class="header_topline" style="padding: 4px 0;">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <button class="auth_buttons hidden-md hidden-lg hidden-sm"><i class="fa fa-user" aria-hidden="true"></i></button>

                    <div class="top_links">
                            <a href="/user/logout/">Odhlasit</a>
                    </div>
                    <div class="soc_buttons">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <nav class="mnu_user clearfix">
        <ul id="menu">
            <li>
                <a href="/admsez">Seznam přispěvku</a>
            </li>
            <li>
                <a href="/userban">Seznam uživatelů</a>
            </li>
            <li>
                <a href="/seznam/posouzeni">Seznam posouzení</a>
            </li>
<!--            <li>-->
<!--                <a href="/posadm">K posouzeni</a>-->
<!--            </li>-->
            <li>
                <a href="/home">Vrátit se</a>
            </li>
            <li><a href="/user/logout/"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Odhlasit</a></li>
        </ul>
    </nav>

