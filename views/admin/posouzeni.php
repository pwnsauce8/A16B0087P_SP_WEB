<?php
/**
 * Prispevek k posouzeni
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 08.01.2018
 * Osobní číslo : A16B0087P
 */
include ROOT . '/views/layouts/admin-header.php'; ?>


    <section class="main_content">
        <div class="container">
            <div class="col-md-8">
                <div class="content-text">
                    <div class="blog_item">
                        <div class="row">
                            <div class="text">
                                <div class="col-md-12">
                                    <section class="login">
                                        <form method="post" action="#" autocomplete="off">
                                            <div class="novy">Příspěvek k posouzení.</div>
                                            <?php $post = Articles::getPostById($id);?>
                                            <a href="download/<?php echo $post['idpost']; ?>"><i class="fa fa-download" aria-hidden="true"></i> Stáhnout příspěvek</a>

                                            <div class="form-group">
                                                <hr/>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="textq">Název:
                                                        <span>
                                                            <?php echo $post['name']; ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="textq">Autoři:
                                                            <?php $post = Articles::getPostById($id);
                                                            echo $post['autors']; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="textq">Datum:
                                                        <?php $post = Articles::getPostById($id);
                                                        echo $post['date']; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="textq">Uživatel:</div>
                                                    <select name="username">
                                                        <?php if (is_array($userlist)):?>
                                                        <?php foreach ($userlist as $user): ?>
                                                        <option value="<?php echo $user['idusers']; ?>">
                                                            <?php echo $user['username']; ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="textq">Kratký obsáh:</div>
                                                    <div class="text2"><?php $post = Articles::getPostById($id);
                                                        echo $post['abstract']; ?></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <hr>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn" name="submit">Odeslat</button>
                                            </div>
                                            
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <aside class="right_aside">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iste maiores sapiente, omnis
                        nostrum earum aperiam non, facilis cum dolore sint labore eligendi nulla laborum consectetur
                        quis officia. Reprehenderit, natus.</p>
                    <p>Soluta consequuntur ipsam asperiores quos sint odio, sed accusamus cum reiciendis quae. Iure,
                        cumque dolorem, aliquam aliquid id quo deleniti, quibusdam similique sunt aut eligendi. Vel
                        ullam, necessitatibus! Ab, ipsa.</p>
                </aside>
            </div>
        </div>
    </section>


<?php include ROOT . '/views/layouts/admin-footer.php'; ?>