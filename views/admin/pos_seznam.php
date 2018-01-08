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
                                    <section class="login">
                                        <div class="novy">Seznam přispěvků</div>

                                        <div class="form-group">
                                            <hr/>
                                        </div>

                                        <table class="tg_user">
                                            <thead>
                                            <tr>
                                                <th>Název</th>
                                                <th>Autoři</th>
                                                <th>Uživatel</th>
                                                <th>Poznamka</th>
<!--                                                <th>Hodnocen</th>-->
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($list as $posts):
                                                $user = User::getUserById($posts['uzivatel']);
                                            ?>
                                                <tr>
                                                    <td data-label="name"><?php echo $posts['name']; ?></td>
                                                    <td data-label="autors"><?php echo $posts['autors']; ?></td>
                                                    <td data-label="uzivatel"><?php echo $user['username']; ?></td>
                                                    <td data-label="poznamka"><?php echo $posts['poznamka']; ?></td>
<!--                                                    <td data-label="poznamka">--><?php //echo $posts['celkem']; ?><!--</td>-->
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
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