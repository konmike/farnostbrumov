<?php get_header(); ?>
    <main>
        <article id="home" class="intro">
	        <?php wp_nav_menu(  array( 'theme_location' => 'primary-menu',
                                       'container' => 'nav',
                                       'container_class' => 'menu-fixed',
                                       'container_id' => 'menu'));  ?>

            <header>
                <h1>Farnost sv.&nbsp;Václava</h1>
                <h3>Brumov-Bylnice</h3>
            </header>

            <footer>
                <a href="#contact" id="contactLink" class="contact-link tlacitko smooth-scroll-down" title="Kontakty">
                    Kontakt
                </a>

                <ul>
                    <?php if(date('w') == 0 && date('d') != 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Neděle: 7:30 / 9:00 / 10:30</a></li>
                    <?php } else if(date('w') == 0 && date('d') == 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Neděle: 7:30 / 9:00 / 15:00</a></li>
                    <?php } else if(date('w') == 1 && date('d') != 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Pondělí: 7:30</a></li>
                    <?php } else if(date('w') == 1 && date('d') == 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Pondělí: 16:00</a></li>
                    <?php } else if(date('w') == 2 && date('d') != 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Úterý: 17:00</a></li>
                    <?php } else if(date('w') == 2 && date('d') == 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Úterý: 16:00</a></li>
                    <?php } else if(date('w') == 3 && date('d') != 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Středa: 17:00</a></li>
                    <?php } else if(date('w') == 3 && date('d') == 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Středa: 16:00</a></li>
                    <?php } else if(date('w') == 4 && date('d') != 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Čtvrtek: 17:00</a></li>
                    <?php } else if(date('w') == 4 && date('d') == 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Čtvrtek: 16:00</a></li>
                    <?php } else if(date('w') == 5 && date('d') != 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Pátek: 17:00</a></li>
                    <?php } else if(date('w') == 5 && date('d') == 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Pátek: 16:00</a></li>
                    <?php } else if(date('w') == 6 && date('d') != 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Sobota: 7:30</a></li>
                    <?php } else if(date('w') == 6 && date('d') == 13){ ?>
                        <li><a href="#" title="Bohoslužby" class="today">Sobota: 15:00</a></li>
                    <?php } ?>

                </ul>


                <a href="#news" id="messageLink" class="message-link tlacitko smooth-scroll-down" title="Aktuality">
                    Aktuality
                </a>
            </footer>
        </article>

        <article id="news" class="news">
            <section>
                <?php
                $category = get_the_category();
                $posts = get_posts(['category' => 2,
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

            </section>

            <section>
                <h3>Aktuality</h3>
                <?php
                $category = get_the_category();
                $posts = get_posts(['category' => 3,
                ]);
                ?>

                <?php if ($posts) { ?>
                    <?php foreach ($posts as $post) { ?>
                        <?php setup_postdata($post); ?>
                        <div class="vypisek">
                            <h4>
                                <?php the_title(); ?>
                            </h4>

                            <span>
                                <a href="<?php the_permalink(); ?>">
                                    Celý článek&nbsp;&nbsp;&nbsp;
                                </a>
                            </span>
                        </div>
                    <?php } ?>
                <?php } ?>

                <?php wp_reset_postdata(); ?>
            </section>
        </article>

        <article id="contact" class="contact">
                <h2>Kontakt</h2>

            <section>
                <div>
                    <img src="http://farbru.cekuj.net/wp-content/uploads/2019/02/orichard.jpg" alt="P. Richard Wojciechowski MIC">
                    <h3>P. Richard Wojciechowski MIC</h3>
                    <h4>administrátor v Brumově</h4>
                    <dl>
                        <dt>Tel:</dt>
                        <dd><a href="tel:+420605969613" class="tel">+420 605 969 613</a></dd>
                    </dl>
                </div>

                <div>
                    <img src="http://farbru.cekuj.net/wp-content/uploads/2019/02/ostanislav.jpg" alt="P. Stanislav Malinski MIC">
                    <h3>P. Stanislav Malinski MIC</h3>
                    <h4>kaplan v Brumově a Nedašově</h4>
                    <dl>
                        <dt>Tel:</dt>
                        <dd><a href="tel:+420577330326" class="tel">+420 577 330 326</a></dd>
                    </dl>
                </div>
            </section>

            <section>
                <?php echo do_shortcode( '[contact-form-7 id="16" title="Kontaktní formulář"]' ); ?>
            </section>


        </article>
    </main>

<?php get_footer(); ?>