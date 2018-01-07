<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
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
                                                <div class="novy">Můj profil.</div>
                                            </div>
                                            <?php $userId = User::checkLogged();
                                            $user = User::getUserById($userId);?>


                                            <?php if (isset($errors) && is_array($errors)): ?>
                                                <ul style="margin-left: 0; padding-left: 0;">
                                                    <?php foreach ($errors as $error): ?>
                                                        <li style="color: red; list-style-type: none; "> <?php echo $error?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>

                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="username">Jméno: <span>***</span></label>
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                    <input type="text" name="name" class="form-control" value="<?php echo $user['username']; ?>" maxlength="50" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="email">Email: <span>***</span></label>
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                    <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" maxlength="40" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="password">Heslo: <span>***</span></label>
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                    <input type="password" name="password" class="form-control" placeholder=" Změna hesla" maxlength="15">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="jmeno">Celé jméno: </label>
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                    <input type="text" name="jmeno" class="form-control" value="<?php echo $user['jmeno']; ?>" maxlength="40" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="password">Organizace: </label>
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                    <input type="text" name="organizace" class="form-control" value="<?php echo $user['organizace']; ?>" maxlength="15">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn" name="submit">Upravit</button>
                                            </div>

                                            <div class="form-group">
                                                <hr>
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