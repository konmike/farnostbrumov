<?php get_header(); ?>
    <main>
        <section id="home" class="section section--home-page">
	        <?php wp_nav_menu(  array( 'theme_location' => 'primary-menu',
                                       'container' => 'nav',
                                       'container_class' => 'nav nav--block nav--primary menu-fixed',
                                       'container_id' => 'menu'));  ?>

            <header class="header header--home-page">
                <h1>Farnost sv.&nbsp;Václava</h1>
                <h3>Brumov-Bylnice</h3>
            </header>

            <footer class="footer footer--home-page">
                <a href="#contact" id="contactLink" class="footer__link footer__link--go-to-contact smooth-scroll" title="Kontakty">
                    Kontakt
                </a>

                <ul class="list list--home-page">
                    <?php
                        include 'mass.php'
                    ?>
                </ul>


                <a href="#news" id="messageLink" class="footer__link footer__link--go-to-news smooth-scroll" title="Aktuality">
                    Aktuality
                </a>
            </footer>
        </section>

        <section id="news" class="section section--news">
            <article class="article article--news">
                <?php
                $category = get_the_category();
                $posts = get_posts(['category' => 3,
                                    'numberposts' => '1']);
                ?>

                <?php if ($posts) { ?>
                    <?php foreach ($posts as $post) { ?>
                        <?php setup_postdata($post); ?>
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <?php the_content(); ?>
                    <?php } ?>
                <?php } ?>

                <?php wp_reset_postdata(); ?>

            </article>

            <aside class="aside aside--invitation">
                <h3 class="aside__title">Připravujeme a srdečně zveme</h3>
                <?php
                $category = get_the_category();
                $posts = get_posts(['category' => 4,
                ]);
                ?>

                <ul class="list list--invitation">
                    <?php if ($posts) { ?>
                        <?php foreach ($posts as $post) { ?>
                            <?php setup_postdata($post); ?>
                            <li class="list__item">
                                <h4>
                                    <?php the_title(); ?>
                                </h4>

                                <span>
                                    <a href="<?php the_permalink(); ?>" class="list__link">
                                        Více informací&nbsp;&nbsp;&nbsp;
                                    </a>
                                </span>
                            </li>
                        <?php } ?>
                    <?php }else{ ?>
                        <li class="list__item">
                            <h4>
			                    V tuto chvíli nejsou v plánu žádné události.
                            </h4>
                        </li>
                    <?php } ?>
                </ul>

                <?php wp_reset_postdata(); ?>
            </aside>

            <span id="scroll-button" class="scroll-button">
                <a href="#contact" id="down" class="scroll-button__down smooth-scroll"></a>
                <a href="#home" id="up" class="scroll-button__up smooth-scroll"></a>
            </span>

        </section>

        <section id="contact" class="section section--contact">
                <h2>Kontakt</h2>

            <ul class="list list--contacts">
                <li class="list__item">
                    <img src="http://farbru.cekuj.net/wp-content/uploads/2019/02/orichard.jpg" class="img img--contact" alt="P. Richard Wojciechowski MIC">
                    <h3>P. Richard Wojciechowski MIC</h3>
                    <h4>administrátor v Brumově</h4>
                    <dl>
                        <dt>Tel:</dt>
                        <dd><a href="tel:+420605969613" class="list__link list__link--tel">+420 605 969 613</a></dd>
                    </dl>
                </li>

                <li class="list__item">
                    <img src="http://farbru.cekuj.net/wp-content/uploads/2019/07/okrystian-upr.jpg" class="img img--contact" alt="P. Krystian Socha MIC">
                    <h3>P. Krystian Socha MIC</h3>
                    <h4>kaplan v Brumově a Nedašově</h4>
                    <dl>
                        <dt>Tel:</dt>
                        <dd><a href="tel:+420123456789" class="list__link list__link--tel">+420 ??? ??? ???</a></dd>
                    </dl>
                </li>

                <li class="list__item">
                    <img src="http://farbru.cekuj.net/wp-content/uploads/2019/02/ostanislav.jpg" class="img img--contact" alt="P. Stanislav Malinski MIC">
                    <h3>P. Stanislav Malinski MIC</h3>
                    <h4>kaplan v Brumově a Nedašově</h4>
                    <dl>
                        <dt>Tel:</dt>
                        <dd><a href="tel:+420577330326" class="list__link list__link--tel">+420 577 330 326</a></dd>
                    </dl>
                </li>
            </ul>

            <!--
            <div>
                <?php echo do_shortcode( '[contact-form-7 id="16" title="Kontaktní formulář"]' ); ?>
            </div>
            -->
            <div class="form-wrapper">
                <form action="" class="form">
                    <h3>Zanechte nám vzkaz</h3>
                    <p>
                        <label for="">
                            Vaše jméno (Povinné)<br>
                            <span>
                                <input type="text">
                            </span>
                        </label>
                    </p>
                    <p>
                        <label for="">
                            Váš email (Povinné)<br>
                            <input type="email">
                        </label>
                    </p>
                    <p>
                        <label for="">
                            Vaše zpráva (Povinné)<br>
                            <textarea></textarea>
                        </label>
                    </p>
                    <p>
                        <input type="submit">
                    </p>
                </form>
            </div>

        </section>
    </main>

<?php get_footer(); ?>