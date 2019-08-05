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

	<section class="section section--custom-page section--custom-page-mala-schola">
		<h1 class="section__title">
			<?php the_title();?>
		</h1>

		<?php wp_nav_menu(  array( 'theme_location' => 'menu--side-mala-schola',
		                           'container' => 'nav',
		                           'container_class' => 'nav--side',
		                           'container_id' => 'nav--side'));  ?>

		<?php
			$category = get_the_category();
			$posts = get_posts(['category' => 7,
			                    'numberposts' => '-1'
			]);

			$posts_sort = [];
			foreach ($posts as $p){
				if(is_sticky($p->ID)){
					array_unshift($posts_sort, $p);
				}else{
					array_push($posts_sort, $p);
				}
			}

		?>

		<div class="wrapper--article">
			<?php if ($posts) { ?>
				<?php foreach ($posts_sort as $post) { ?>
					<?php setup_postdata($post); ?>
				<?php
					if(is_sticky($post->ID)){
				?>
						<article class="article article--post article--post-sticky">
				<?php
					}else{
				?>
						<article class="article article--post">
				<?php
					}
				?>
							<h3 class="article__title">
								<?php the_title();?>
							</h3>

							<?php the_content(); ?>
						</article>
				<?php } ?>
			<?php }?>
			<?php wp_reset_postdata(); ?>
		</div>

		<!-- <aside class="aside aside--invitation">
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
		</aside> -->
	</section>
</main>

<div style="clear: both"></div>

<?php get_footer(); ?>
