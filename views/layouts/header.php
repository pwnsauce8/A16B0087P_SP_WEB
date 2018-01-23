<?php
/**
 * Header webu
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
 * Osobní číslo : A16B0087P
 */
?>

    <!DOCTYPE html>
    <html lang="zxx">
    <head>
        <meta name="description" content=""/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="favicon.png"/>


        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="/template/libs/font-awesome-4.2.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/template/libs/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="/template/libs/owl-carousel/owl.carousel.css"/>
        <link rel="stylesheet" href="/template/libs/countdown/jquery.countdown.css"/>
        <link rel="stylesheet" href="/template/css/fonts.css"/>
        <link rel="stylesheet" href="/template/css/main.css"/>
        <link rel="stylesheet" href="/template/css/media.css"/>
        <link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/micon-social-pack/512/vk-128.png">
        <title>Konfefence</title>
    </head>
    <body>

    <header class="top_header">

        <div class="header_topline">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <button class="auth_buttons hidden-md hidden-lg hidden-sm"><i class="fa fa-user"
                                                                                      aria-hidden="true"></i></button>

                        <div class="top_links">

                            <?php if (User::isGuest()): ?>
                                <a href="/user/logout/"><i class="glyphicon glyphicon-log-out"></i> Odhlasit</a>
                            <?php else: ?>
                                <a href="/login">Login</a> /
                                <a href="/registrace">Registrace</a>
                            <?php endif; ?>

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

        <div class="container">
            <div class="col-md-12">
                <div class="row">

                    <?php if (User::isGuest()): ?>
                        <a href="/home" class="logo">Konference</a>
                    <?php else: ?>
                        <a href="/" class="logo">Konference</a>
                    <?php endif; ?>


                    <nav class="main_mnu clearfix">
                        <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"
                                                                               aria-hidden="true"></i></button>
                        <ul>
                            <li class="active"><a href="/konf">O konferenci</a></li>
                            <li><a href="/temata">Témata</a></li>
                            <li><a href="/misto">Místo konáni</a></li>
                            <li><a href="/sponsori">Sponsori</a></li>
                        </ul>
                        <div class="top_contacts"><i class="fa fa-mobile" aria-hidden="true"></i> 420-774-867-898</div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

<?php if (User::isGuest()): ?>

    <nav class="mnu_user clearfix">
        <ul id="menu">
            <li>
                <a href="/seznam">Seznam přispěvku</a>
                <ul class="sub-menu">
                    <li><a href="#">Zobrazí celý seznam přispěvků</a></li>
                </ul>
            </li>
            <li>
                <a href="/novy">Novy přispěvek</a>
                <ul class="sub-menu">
                    <li><a href="#">Napsát nový přispěvek</a></li>
                </ul>
            </li>
            <li>
                <a href="/posouzeni">Seznam přispěvku k posouzení</a>
                <ul class="sub-menu">
                    <li><a href="#">Zobrazit přispěvky k posouzení</a></li>
                </ul>
            </li>
            <li>
                <a href="/editprofile">Můj profil</a>
                <ul class="sub-menu">
                    <li><a href="#">Zobrazit přispěvky k posouzení</a></li>
                </ul>
            </li>
            <li><a href="/user/logout/"><i class="glyphicon glyphicon-log-out"></i>&nbsp;Odhlasit</a></li>
        </ul>
    </nav>
<?php endif; ?>