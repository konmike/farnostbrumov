<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php wp_title( $sep = '»', $display = true, $seplocation = 'right' );?>
		<?php bloginfo( $show = 'name' ); ?>
	</title>

	<?php
	wp_head();
	?>

</head>

<body>
<img class="hidden" alt="preload" src="http://farbru.cekuj.net/wp-content/uploads/2019/02/fullkostel.jpg" />