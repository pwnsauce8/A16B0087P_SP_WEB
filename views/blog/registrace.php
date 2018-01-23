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
                                                <h2>Registrace.</h2>
                                            </div>

                                            <?php if ($result): ?>

                                            <div class="alert alert-success alert-dismissable">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Success!</strong> Děkujeme za registraci
                                            </div>
                                            <?php else: ?>
                                            <div class="input-group">

                                                <?php if (isset($errors) && is_array($errors)): ?>

                                                    <div class="alert alert-info fade in alert-dismissable">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                                                        <?php foreach ($errors as $error): ?>
                                                            <strong>Info!</strong> <?php echo $error ?> <br>
                                                        <?php endforeach; ?>
                                                    </div>

                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <label for="name">Jméno: <span>***</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input id="name" type="text" class="form-control" name="name" placeholder="Email">
                                            </div>

                                            <label for="email">Email: <span>***</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                                            </div>

                                            <label for="email">Heslo: <span>***</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                            </div>

                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success" name="submit">Registrace</button>
                                            </div>

                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <div class="form-group">
                                                <a href="/login">Autorizace...</a>
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
        <?php  endif;?>
    </section>



<?php include ROOT . '/views/layouts/footer.php'; ?>