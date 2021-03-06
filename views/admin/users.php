<?php
/**
 * Tadulka uzivatelu
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
                                    <h2>Seznam všech uživatelů</h2>

                                    <div class="form-group">
                                        <hr/>
                                    </div>
                                    <table class="tg_user">
                                        <thead>
                                        <tr>
                                            <th>UserName</th>
                                            <th>Má ban</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php  $users = User::getUsersList();
                                        foreach ($users as $user): ?>
                                            <tr>
                                                <td data-label="username"><?php echo $user['username'];?></td>
                                                <td data-label="username"><?php echo $user['isBan'];?></td>
                                                <td data-label="ban"><a href="/banuser/<?php echo $user['idusers'];?>"><i
                                                            class="fa fa-times" aria-hidden="true"></i> ban</a>
                                                </td>
                                                <td data-label="ban"><a href="/unbanuser/<?php echo $user['idusers'];?>"><i
                                                                class="fa fa-times" aria-hidden="true"></i> unban</a>
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
