<?php
/**
 * Tabulka k posouzeni
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 09.01.2018
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
                                        <div class="novy">Příspěvek k posouzení.</div>
                                        <div class="form-group">
                                            <hr/>
                                        </div>
                                        <div class="tg-wrap">
                                            <table class="tg">
                                                <tr>
                                                    <th class="tg-baqh" rowspan="2">Název</th>
                                                    <th class="tg-baqh" rowspan="2">Autoři</th>
                                                    <th class="tg-baqh" colspan="8">Recenze</th>
                                                    <th class="tg-baqh" rowspan="2">Rozhodnutí</th>
                                                </tr>

                                                <tr class="tg-baqh">
                                                    <td class="tg-baqh">Recenzent</td>
                                                    <td class="tg-baqh">Orig.</td>
                                                    <td class="tg-baqh">Téma</td>
                                                    <td class="tg-baqh">Tech.</td>
                                                    <td class="tg-baqh">Jaz.</td>
                                                    <td class="tg-baqh">Dop.</td>
                                                    <td class="tg-baqh">Celk.</td>
                                                    <td class="tg-baqh">Vymazat</td>
                                                </tr>
 <?php foreach ($list as $posts): ?>
                                                <tr>
                                                    <td class="tg-baqh" rowspan="3"><?php echo $posts['name']; ?></td>
                                                    <td class="tg-baqh" rowspan="3"><?php echo $posts['autors']; ?></td>
                                                    <td class="tg-baqh">
                                                        <select name="username">
                                                        <?php if (is_array($userlist)):?>
                                                            <?php foreach ($userlist as $user): ?>
                                                                <option value="<?php echo $user['idusers']; ?>">
                                                                    <?php echo $user['username']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                        </select>
                                                    </td>
                                                    <td class="tg-baqh">ocenka</td>
                                                    <td class="tg-baqh">ocenka</td>
                                                    <td class="tg-baqh">ocenka</td>
                                                    <td class="tg-baqh">ocenka</td>
                                                    <td class="tg-baqh">ocenka</td>
                                                    <td class="tg-baqh">ocenka</td>
                                                    <td class="tg-baqh"><a href="?delete=#"><i class="fa fa-times" Vymazat</a></td>
                                                    <td class="tg-baqh" rowspan="3"><a href="#">Nepřijmuto</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="tg-baqh">
                                                        <select name="username">
                                                            <?php if (is_array($userlist)):?>
                                                                <?php foreach ($userlist as $user): ?>
                                                                    <option value="<?php echo $user['idusers']; ?>">
                                                                        <?php echo $user['username']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    </td>
                                                    <td class="tg-baqh" colspan="7"><a href="#">Přidělit k recenzi</a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td class="tg-baqh">
                                                        <select name="username">
                                                            <?php if (is_array($userlist)):?>
                                                                <?php foreach ($userlist as $user): ?>
                                                                    <option value="<?php echo $user['idusers']; ?>">
                                                                        <?php echo $user['username']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    </td>
                                                    <td class="tg-baqh" colspan="7">
                                                        <a href="#">Přidělit k recenzi</a>
                                                    </td>
                                                </tr>
 <?php endforeach; ?>

                                            </table>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="col-md-4">-->
<!--                <aside class="right_aside">-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iste maiores sapiente, omnis-->
<!--                        nostrum earum aperiam non, facilis cum dolore sint labore eligendi nulla laborum consectetur-->
<!--                        quis officia. Reprehenderit, natus.</p>-->
<!--                    <p>Soluta consequuntur ipsam asperiores quos sint odio, sed accusamus cum reiciendis quae. Iure,-->
<!--                        cumque dolorem, aliquam aliquid id quo deleniti, quibusdam similique sunt aut eligendi. Vel-->
<!--                        ullam, necessitatibus! Ab, ipsa.</p>-->
<!--                </aside>-->
<!--            </div>-->
        </div>
    </section>


<?php include ROOT . '/views/layouts/admin-footer.php'; ?>