<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.gstatic.com">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css2?family=Exo:wght@700&display=swap" rel="stylesheet">
	
		<!-- Icon & Animation CDNs -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	</head>

	<body <?php body_class(); ?>>

		<header class="head-container">
			<nav class="n-nav">
				<div class="logo">
					<img src="../../../../proj-wp-calgarynext/wp-content/themes/FoundationPress/src/assets/images/CN-LOGO.png" alt="Calgary Next Logo">
				</div>
				<ul class="nav-links">
					<li><a class="homeMenu" href="../../proj-wp-calgarynext">Home</a></li>
					<li><a class="businessMenu" href="proj-wp-calgarynext/category-business">Business</a></li>
					<li><a class="eventsMenu" href="proj-wp-calgarynext/category-events">Events</a></li>
					<li><a class="restaurantsMenu" href="proj-wp-calgarynext/category-restaurants">Restaurants & Food</a></li>
					<li><a class="entertainmentMenu" href="proj-wp-calgarynext/category-entertainment">Sports & Entertainment</a></li>
					<li><a class="aboutMenu" href="proj-wp-calgarynext/about">About</a></li>
					<li><a class="contactMenu" href="proj-wp-calgarynext/contact/">Contact Us</a></li>
				</ul>
			</nav>
		</header>


		<!-- TODO: Hamburguer Menu -->
	</header>