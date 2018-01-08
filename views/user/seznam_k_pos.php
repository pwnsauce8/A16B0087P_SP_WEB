<?php
/**
 * Seznam prispevku k posouzeni
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
                                        <div class="novy">Seznam přispěvků k posouzení</div>

                                        <div class="form-group">
                                            <hr/>
                                        </div>

                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Název </th>
                                                <th>Ohodnocení </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td data-label="Nazev"><a href="?posouzeni=$row[post_id]"">$row[nazev]</a></td>
                                                <td data-label="Autori">$row[autor]</td>
                                            </tr>
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


<?php include ROOT . '/views/layouts/footer.php'; ?>