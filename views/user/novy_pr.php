<?php
/**
 * Novy prispevek
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h2>Nový příspěvek.</h2>
                                    </div>

                                        <?php if ($result): ?>
                                            <span>Uspěch</span>
                                        <?php else: ?>

                                        <?php if (isset($errors) && is_array($errors)): ?>
                                        <div class="alert alert-info fade in alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>

                                            <?php foreach ($errors as $error): ?>
                                                    <strong>Info!</strong> <?php echo $error ?> <br>
                                                <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <hr/>
                                        </div>

                                        <form method="post" action="#" autocomplete="off" enctype="multipart/form-data">

                                            <label for="name">Název přispěvku: <span>***</span></label>
                                            <div class="input-group">
                                                <i class="input-group-addon"><i class="fa fa-comment" aria-hidden="true"></i></i>
                                                <input id="name" type="text" name="nazev" class="form-control"
                                                       placeholder=" Název přispěvku" maxlength="50" value="">
                                            </div>

                                            <label for="autori">Autoři: <span>***</span></label>
                                            <div class="input-group">
                                                <i class="input-group-addon"><i class="glyphicon glyphicon-user"></i></i>
                                                <input id="autori" name="autori" type="text" class="form-control"
                                                       placeholder=" Autoři přispěvku" maxlength="200" value=""/>
                                            </div>

                                            <label for="textarea">Abstract: <span>***</span></label>
                                            <div class="input-group">
                                                <i class="input-group-addon"><i class="fa fa-align-justify" aria-hidden="true"></i></i>
                                                <textarea class="form-control" id="textarea" name="abstract" rows="8"> Max. 1500 symbolů</textarea>
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