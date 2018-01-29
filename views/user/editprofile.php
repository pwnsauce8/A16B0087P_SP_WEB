<?php
/**
 * Editace prispevku
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h2>Můj profil.</h2>
                                    </div>

                                    <?php $userId = User::checkLogged();
                                    $user = User::getUserById($userId); ?>

                                    <?php if ($result): ?>
                                        <div class="alert alert-success alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Success!</strong> Profile byl upraven
                                        </div>
                                    <?php endif; ?>

                                    <?php if (isset($errors) && is_array($errors)): ?>
                                        <div class="alert alert-info fade in alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close"
                                               title="close">×</a>
                                            <?php foreach ($errors as $error): ?>
                                                <strong>Info!</strong> <?php echo $error ?> <br>
                                            <?php endforeach; ?>
                                        </div>

                                    <?php endif; ?>

                                    <form method="post" action="#" autocomplete="off" enctype="multipart/form-data">


                                        <div class="form-group">
                                            <hr>
                                        </div>


                                        <label for="username">Username: <span>***</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="username" type="text" class="form-control" name="name" value="<?php echo $user['username']; ?>"">
                                        </div>

                                        <label for="email">Email: <span>***</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <input id="email" type="text" class="form-control" name="email" value="<?php echo $user['email']; ?>">
                                        </div>


                                        <br>
                                        <div class="form-group">
                                            <hr>
                                        </div>


                                        <label for="jmeno">Celé jméno: <span>***</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="jmeno" type="text" class="form-control" name="jmeno" value="<?php echo $user['jmeno']; ?>">
                                        </div>

                                        <label for="organizace">Organizace: <span>***</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i></span>
                                            <input id="organizace" type="text" class="form-control" name="organizace" value="<?php echo $user['organizace']; ?>">
                                        </div>


                                        <div class="form-group">
                                            <hr>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success" name="submit">Upravit</button>
                                        </div>

                                        <div class="form-group">
                                            <hr>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iste maiores sapiente, omnis nostrum
                    earum aperiam non, facilis cum dolore sint labore eligendi nulla laborum consectetur quis officia.
                    Reprehenderit, natus.</p>
                <p>Soluta consequuntur ipsam asperiores quos sint odio, sed accusamus cum reiciendis quae. Iure, cumque
                    dolorem, aliquam aliquid id quo deleniti, quibusdam similique sunt aut eligendi. Vel ullam,
                    necessitatibus! Ab, ipsa.</p>
            </aside>
        </div>
        </div>
    </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>