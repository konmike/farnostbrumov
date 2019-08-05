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

	<section class="section section--custom-page section--custom-page-about-us">
		<h1 class="section__title">
			Malá schola
		</h1>

		<?php wp_nav_menu(  array( 'theme_location' => 'menu--side-mala-schola',
		                           'container' => 'nav',
		                           'container_class' => 'nav--side',
		                           'container_id' => 'nav--side'));  ?>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<article class="article article--text">
					<h1 class="article__title">
						<?php the_title();?>
					</h1>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>

	</section>
</main>

<div style="clear: both"></div>

<?php get_footer(); ?>
