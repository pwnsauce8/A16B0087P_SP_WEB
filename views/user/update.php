<?php
/**
 * Uprava prispevku
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
                                    <section class="login">
                                        <h2>Uprava příspěvku: <span><?php
                                                $post = Articles::getPostById($id);
                                                echo $post['name']; ?> </span></h2>

                                        <?php if (isset($errors) && is_array($errors)): ?>
                                            <ul style="margin-left: 0; padding-left: 0;">
                                                <?php foreach ($errors as $error): ?>
                                                    <li style="color: red; list-style-type: none; "> <?php echo $error?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <hr/>
                                        </div>
                                        

                                        <form method="post" action="#" autocomplete="off" enctype="multipart/form-data">

                                            <label for="name">Název přispěvku: <span>***</span></label>
                                            <div class="input-group">
                                                <i class="input-group-addon"><i class="fa fa-comment" aria-hidden="true"></i></i>
                                                <input id="name" type="text" name="nazev" class="form-control"
                                                       placeholder=" Název přispěvku" maxlength="50" value=" <?php echo $post['name']; ?>">
                                            </div>

                                            <label for="autori">Autoři: <span>***</span></label>
                                            <div class="input-group">
                                                <i class="input-group-addon"><i class="glyphicon glyphicon-user"></i></i>
                                                <input id="autori" name="autori" type="text" class="form-control"
                                                       placeholder=" Autoři přispěvku" maxlength="200" value=" <?php echo $post['autors']; ?>">
                                            </div>

                                            <label for="textarea">Abstract: <span>***</span></label>
                                            <div class="input-group">
                                                <i class="input-group-addon"><i class="fa fa-align-justify" aria-hidden="true"></i></i>
                                                <textarea class="form-control" id="textarea" name="abstract" rows="8" > <?php echo $post['abstract']; ?></textarea>
                                            </div>

                                            <label for="file">PDF soubor:<br></label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input id="file" type="file" name="fupload">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success" name="submit">Uložit</button>
                                            </div>

                                            <div class="form-group">
                                                <hr/>
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

<?php include ROOT . '/views/layouts/footer.php'; ?>