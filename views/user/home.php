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
                                    <div class="novy">Vítame Vás, <?php echo $user['username'];?></div>
                                    <div class="form-group">
                                        <hr>
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque ipsum. Ut tempus purus at lorem. Curabitur bibendum justo non orci. Praesent dapibus.
                                    Etiam posuere lacus quis dolor. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,
                                    omnis voluptas assumenda est, omnis dolor repellendus. Nunc dapibus tortor vel mi dapibus sollicitudin. Aliquam erat volutpat. Aenean placerat. Donec iaculis
                                    gravida nulla. Pellentesque arcu. Mauris elementum mauris vitae tortor. Sed ac dolor sit amet purus malesuada congue. Aliquam erat volutpat. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    <br><br>

                                    <ul>
                                        <li>Voluptas</li>
                                        <li>Pellentesque</li>
                                        <li>Sagittis</li>
                                        <li>Aliquam</li>
                                        <li>Donec</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <aside class="right_aside">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iste maiores sapiente, omnis nostrum earum aperiam non, facilis cum dolore sint labore eligendi nulla laborum consectetur quis officia. Reprehenderit, natus.</p>
                    <p>Soluta consequuntur ipsam asperiores quos sint odio, sed accusamus cum reiciendis quae. Iure, cumque dolorem, aliquam aliquid id quo deleniti, quibusdam similique sunt aut eligendi. Vel ullam, necessitatibus! Ab, ipsa.</p>
                </aside>
            </div>
        </div>
    </section>




<?php include ROOT . '/views/layouts/footer.php'; ?>