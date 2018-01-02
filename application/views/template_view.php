<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/micon-social-pack/512/vk-128.png">
    <title>Konfefence</title>
</head>
<body>

<header class="top_header">

    <div class="header_topline">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <button class="auth_buttons hidden-md hidden-lg hidden-sm"><i class="fa fa-user" aria-hidden="true"></i></button>

                    <div class="top_links">
                        <!--<a href="#hidden" class="button1 fancybox">Login</a> / -->
                        <a href="/login">Login</a> /
                        <a href="/registrace">Registrace</a>
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
                <a href="/" class="logo">Konference</a>
                <nav class="main_mnu clearfix">
                    <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars" aria-hidden="true"></i></button>
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

<?php include 'application/views/'.$content_view; ?>

<footer>
    <div class="footer_line">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="copyright">
                        <p> Mukanova Zhanel © 2017 <br>
                            Semestrální práce z WEB 2017 <a href="http://www.zcu.cz/">ZCU</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>

<div id="hidden">
    <form method="POST" action="testreg.php" class="login">
        <h3 style="text-align: center;">Příhlašení do systému</h3>

        <label for="username">Login:</label>
        <input type="text" name="login"required placeholder=" Login">

        <label for="password">Heslo:</label>
        <input style="margin-bottom: 9px;" type="password" name="password"required placeholder=" Zadejte heslo">

        <button style="margin: auto;" type="sumbit" name="sumbit" class="btn">Vchod</button>

        <a style="margin-left: 53px;" href="registrace.php">Registrace</a>
    </form>
</div>
<script src="libs/jquery/jquery-1.11.1.min.js"></script>
<script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
<script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="libs/owl-carousel/owl.carousel.min.js"></script>
<script src="libs/countdown/jquery.plugin.js"></script>
<script src="libs/countdown/jquery.countdown.min.js"></script>
<script src="libs/countdown/jquery.countdown-ru.js"></script>
<script src="libs/landing-nav/navigation.js"></script>
<script src="js/common.js"></script>

</body>
</html>