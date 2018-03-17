<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		<?php bloginfo('name'); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	<nav>
		<div class="gauche"></div>
		<div class="bande">
			<h1>Commité departemental de Triathlon (Haute-Saone)</h1>
			<button class="menu-burger">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
			<?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>

		</div>
	</nav>
	<div class="menu_tel"></div>

