<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>

<body>

<nav id="main-navigation">
	<a href="/">Mas Palou</a>
	<div id="main-navigation-right">
	<?php
		// Display the navigation menu
		wp_nav_menu(array(
			'theme_location' => 'navbar', // This should match the menu location defined in your theme
			'container' => 'nav',
			'container_class' => 'main-navigation',
			'menu_class' => 'menu',
			'fallback_cb' => false // If no menu is assigned to the location, do not fallback to wp_page_menu()
		));
	?>

	<a style="padding-left: 10px;" id="toggle-menu" onclick="toggleMenu()">menu</a>
</div>
</nav>


	<?php
		// Display the navigation menu
		wp_nav_menu(array(
			'theme_location' => 'navbar', // This should match the menu location defined in your theme
			'container' => 'nav',
			'container_class' => 'mobile-navigation',
			'container_id' => 'mobile-navigation',
			'menu_class' => 'menu',
			'fallback_cb' => false // If no menu is assigned to the location, do not fallback to wp_page_menu()
		));
	?>

<?php wp_body_open(); ?>


