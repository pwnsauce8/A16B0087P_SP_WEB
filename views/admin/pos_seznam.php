<?php
/**
 * Tabulka posouzeni
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

                                        <h2>Seznam přispěvků</h2>
                                        <div class="textq">Všechné recenzované příspěvky </div>

                                        <div class="form-group">
                                            <hr/>
                                        </div>

                                        <table class="tg_user">
                                            <thead>
                                            <tr>
                                                <th>Název</th>
                                                <th>Autoři</th>
                                                <th>Recenzent</th>
                                                <th>Poznamka</th>
                                                <th>Hodnocení</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($list as $posts):?>
                                                <tr>
                                                    <td data-label="name"><a href="info/<?php echo $posts['post_idpost'];?>"><?php echo $posts['name']; ?></a></td>
                                                    <td data-label="autors"><?php echo $posts['autors']; ?></td>
                                                    <td data-label="uzivatel"><?php echo $posts['username']; ?></td>
                                                    <td data-label="poznamka"><?php echo mb_substr(strip_tags($posts['poznamka']), 0, 10, 'utf-8'); ?>...</td>
                                                    <td data-label="celkem"><?php echo $posts['celkem']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
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