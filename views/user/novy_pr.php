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
                                <div class="col-md-12">
                                    <section class="login">
                                        <div class="novy">Nový přispěvek</div>

                                        <div class="form-group">
                                            <hr/>
                                        </div>

                                        <form method="post" action="#" autocomplete="off" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="nazev">Název přispěvku: <span>***</span></label>
                                                    <span class="input-group-addon"><span
                                                                class="glyphicon glyphicon-user"></span></span>
                                                    <input type="text" name="nazev" class="form-control"
                                                           placeholder=" Název přispěvku" maxlength="50" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="autori">Autoři: <span>***</span></label>
                                                    <span class="input-group-addon"><span
                                                                class="glyphicon glyphicon-user"></span></span>
                                                    <input type="text" name="autori" class="form-control"
                                                           placeholder=" Autoři přispěvku" maxlength="200" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="abstract">Abstract: <span>***</span></label>
                                                    <span class="input-group-addon"><span
                                                                class="glyphicon glyphicon-user"></span></span>
                                                    <textarea name="abstract" rows="8"> Max. 1500 symbolů</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>PDF soubor:<br></label>
                                                    <span class="input-group-addon"><span
                                                                class="glyphicon glyphicon-user"></span></span>
                                                    <input style="margin-bottom: 9px;" type="FILE" name="fupload"
                                                           class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn" name="btn-signup">Uložit</button>
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