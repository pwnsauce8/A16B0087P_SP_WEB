<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */
include ROOT . '/views/layouts/header.php'; ?>

    <section class="main_content">
        <div class="container">
            <div class="col-md-8">
                <div class="content-text">
                    <div class="blog_item">
                        <div class="row">
                            <div class="text">
                                <div id="login-form">
                                    <form method="post" action="#" autocomplete="off">

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <div class="novy">Avtorizace.</div>
                                            </div>

                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                    <label for="email">Email: <span>***</span></label>
                                                    <input type="email" name="email" class="form-control" placeholder=" Zadejte Email" value="" maxlength="40">
                                                </div>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                    <label for="password">Heslo: <span>***</span></label>
                                                    <input type="password" name="pass" class="form-control" placeholder=" Zadejte Heslo" maxlength="15">
                                                </div>
                                                <span class="text-danger"></span>
                                            </div>

                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn" name="btn-login">Sign In</button>
                                            </div>

                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <div class="form-group">
                                                <a href="/registrace">Registrace...</a>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <aside class="right_aside">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iste maiores sapiente, omnis nostrum earum aperiam non, facilis cum dolore sint labore eligendi nulla laborum consectetur quis officia. Reprehenderit, natus.</p>
                    <p>Soluta consequuntur ipsam asperiores quos sint odio, sed accusamus cum reiciendis quae. Iure, cumque dolorem, aliquam aliquid id quo deleniti, quibusdam similique sunt aut eligendi. Vel ullam, necessitatibus! Ab, ipsa.</p>
                </aside>
            </div>
        </div>
    </section>



<?php include ROOT . '/views/layouts/footer.php'; ?>