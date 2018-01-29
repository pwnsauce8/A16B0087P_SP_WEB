<?php
/**
 * Informace o posouzenem prispevku
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 29.01.2018
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
                                    <h2>Informace o příspěvku </h2>
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
                                    <?php foreach ($list as $vote): ?>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="textq">Recenzent:
                                                    <?php echo $vote['username']; ?>
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
                                    <div class="form-group"><hr /></div>

                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Originalita</th>
                                            <th>Tema</th>
                                            <th>Tech. Kvalita</th>
                                            <th>Jaz. Kvalita</th>
                                            <th>Doporučení</th>
                                            <th>Celkem</th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>

                                            <td><?php echo $vote['originalita'];?></td>
                                            <td><?php echo $vote['tema'];?></td>
                                            <td><?php echo $vote['tech_kval'];?></td>
                                            <td><?php echo $vote['jaz_kval'];?></td>
                                            <td><?php echo $vote['doporuceni'];?></td>
                                            <td><?php echo $vote['celkem'];?></td>

                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="form-group"><hr /></div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="textq">Poznamka:</div>
                                            <div class="text2"><?php echo $vote['poznamka'];?></div>
                                        </div>
                                    </div>

                                    <?php endforeach; ?>
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