<?php
/**
 * Tabulka prispevku
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
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

                                        <div class="textq">Všechné nerecenzované příspěvky </div>

                                        <div class="form-group">
                                            <hr/>
                                        </div>

                                        <table class="tg_user">
                                            <thead>
                                            <tr>
                                                <th>Datum</th>
                                                <th>Nazev</th>
                                                <th>Autoři</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($list as $posts): ?>
                                                <tr>
                                                    <td data-label="Date"><?php echo $posts['date']; ?></td>
                                                    <td data-label="Nazev"><a href="posoudit/<?php echo $posts['idpost']; ?>"><?php echo $posts['name']; ?></a></td>
                                                    <td data-label="Autori"><?php echo $posts['autors']; ?></td>
                                                    <td data-label="Vymazat"><a href="admin/delete/<?php echo $posts['idpost']; ?>"><i
                                                                    class="fa fa-times" aria-hidden="true"></i> Smazat</a></td>

                                                    <td data-label="Download"><a href="download/<?php echo $posts['idpost']; ?>"><i class="fa fa-download" aria-hidden="true"></i></a>
                                                    </td>

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