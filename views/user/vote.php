<?php
/**
 * Votes
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 08.01.2018
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
                                        <h2>Editace posudku </h2>
                                        <div class="textq">Název příspěvku:
                                            <span><?php
                                            $post = Articles::getPostById($id);
                                            echo $post['name']; ?>
                                            </span>
                                        </div>
                                        <a href="download/<?php echo $post['idpost']; ?>"><i class="fa fa-download" aria-hidden="true"></i> Stáhnout příspěvek</a>

                                        <div class="form-group"><hr /></div>
                                        <form method="post" action="#" autocomplete="off">

                                            <!-- **************************************************************************************************** -->
                                            <!-- ORIGINALITA -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="originalita">Originalita: <span>***</span></label>
                                                    <select name="originalita">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************** -->
                                            <!-- TEMA -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="tema">Téma: <span>***</span></label>
                                                    <select name="tema">
                                                        <option value="1">1</option>
                                                        <option value="2">2 </option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************** -->
                                            <!-- TECHNICKA KVALITA -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="tech_kvalita">Technická kvalita: <span>***</span></label>
                                                    <select name="tech_kvalita">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************** -->
                                            <!-- JAZYKOVA KVALITA -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="jaz_kvalita">Jazyková kvalita: <span>***</span></label>
                                                    <select name="jaz_kvalita">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************** -->
                                            <!-- DOPORUCENI -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="doporuceni">Doporučení: <span>***</span></label>
                                                    <select name="doporuceni">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************** -->
                                            <!-- POZNAMKY -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="poznamky">Poznámky: <span>***</span></label>
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                    <textarea name="poznamky" rows="8" style="margin-bottom: 9px;"> Max. 1500 symbolů</textarea>
                                                </div>
                                            </div>
                                            <!-- **************************************************************************************************** -->
                                            <!-- TLACITKO -->
                                            <div class="form-group">
                                                <button type="submit" class="btn" name="submit">Uložit</button>
                                            </div>

                                            <div class="form-group">
                                                <hr />
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