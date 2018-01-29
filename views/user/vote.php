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
                                        <h2>Editace posudku </h2>
                                        <div class="textq">Název příspěvku:
                                            <span><?php
                                            $post = Articles::getPostById($id);
                                            echo $post['name']; ?>
                                            </span>
                                        </div>
                                        <?php
                                        $post = Articles::getPostById($id);
                                        ?>
                                            <a href="download/<?php echo $post['idpost']; ?>"><i class="fa fa-download" aria-hidden="true"></i> Stáhnout příspěvek</a>


                                        <div class="form-group"><hr /></div>


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
                                        <div class="textq">Kratký obsáh:</div>
                                        <div class="text2"><?php $post = Articles::getPostById($id);
                                            echo $post['abstract']; ?></div>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <hr />
                                        </div>
                                        <form method="post" action="#" autocomplete="off">

                                            <table class="tg_user">
<!--                                                <thead>-->
<!--                                                <tr>-->
<!--                                                    <th></th>-->
<!--                                                    <th></th>-->
<!--                                                </tr>-->
<!--                                                </thead>-->

                                                <tbody>
                                                <tr>
                                                    <td class="col_one"><label for="originalita">Originalita: <span>***</span></label></td>
                                                    <td class="col_two">
                                                        <div class="form-group">
                                                            <div class="input-group">

                                                                <span class="input-group-ja"></span>
                                                                <select name="originalita" style="width:50px" class="input-small" id="originalita">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col_one"><label for="tema">Téma: <span>***</span></label></td>
                                                    <td class="col_two">
                                                        <div class="form-group">
                                                            <div class="input-group">

                                                                <span class="input-group-ja"></span>
                                                                <select name="tema" style="width:50px" class="input-small" id="tema">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2 </option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col_one"><label for="tech_kvalita">Technická kvalita: <span>***</span></label></td>
                                                    <td class="col_two">
                                                        <div class="form-group">
                                                            <div class="input-group">

                                                                <span class="input-group-ja"></span>
                                                                <select name="tech_kvalita" style="width:50px" id="tech_kvalita">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col_one"><label for="jaz_kvalita">Jazyková kvalita: <span>***</span></label></td>
                                                    <td class="col_two">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-ja"></span>
                                                                <select name="jaz_kvalita" style="width:50px" id="jaz_kvalita">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col_one"><label for="doporuceni">Doporučení: <span>***</span></label></td>
                                                    <td class="col_two">
                                                        <div class="form-group">
                                                            <div class="input-group">

                                                                <span class="input-group-ja"></span>
                                                                <select name="doporuceni" style="width:50px" id="doporuceni">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <!-- **************************************************************************************************** -->
                                            <!-- POZNAMKY -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="poznamky">Poznámky: <span>***</span></label>
                                                    <textarea name="poznamky" id="poznamky" rows="8" style="margin-bottom: 9px; width: 333px;"> Max. 1500 symbolů</textarea>
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