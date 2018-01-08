<?php
/**
 * Admin footer
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
 * Osobní číslo : A16B0087P
 */
?>
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
<script src="/template/libs/jquery/jquery-1.11.1.min.js"></script>
<script src="/template/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script src="/template/libs/fancybox/jquery.fancybox.pack.js"></script>
<script src="/template/libs/waypoints/waypoints-1.6.2.min.js"></script>
<script src="/template/libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="/template/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="/template/libs/countdown/jquery.plugin.js"></script>
<script src="/template/libs/countdown/jquery.countdown.min.js"></script>
<script src="/template/libs/countdown/jquery.countdown-ru.js"></script>
<script src="/template/libs/landing-nav/navigation.js"></script>
<script src="/template/js/common.js"></script>

</body>
</html>
