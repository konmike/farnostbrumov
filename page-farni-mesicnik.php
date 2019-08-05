<?php get_header(); ?>

<main>
	<section class="section section--top">
		<?php wp_nav_menu(  array( 'theme_location' => 'primary-menu',
		                           'container' => 'nav',
		                           'container_class' => 'nav nav--block nav--primary menu-fixed',
		                           'container_id' => 'menu'));  ?>

		<header class="header header--dark-theme">
			<h1>Farnost sv.&nbsp;Václava</h1>
			<h3>Brumov-Bylnice</h3>
		</header>
	</section>
	<section class="section section--parish-monthly">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<article class="article article--parish-monthly">
					<h1 class="article__title">
						<?php the_title();?>
					</h1>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>

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
	</section>
</main>

<div style="clear: both"></div>

<?php get_footer(); ?>
