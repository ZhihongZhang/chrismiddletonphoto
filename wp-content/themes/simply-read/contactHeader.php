<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title('|', true, 'left'); ?></title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php if ( get_theme_mod( 'simplyread_favicon' ) ) : ?>
		<link rel="icon" href="<?php echo esc_url( get_theme_mod( 'simplyread_favicon' ) ); ?>">
	<?php endif; ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

</head>

<body <?php body_class(); ?> style="overflow-x: hidden;">

<div id="container" style="display: block;overflow-x: hidden;">

	<header class="header" role="banner" style="background-size:cover;">
		<div id="inner-header" class="wrap cf">

			<?php if ( get_theme_mod( 'simplyread_logo' ) ) : ?>
				<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo esc_url( get_theme_mod( 'simplyread_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></p>
			<?php else : ?>
				<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
			<?php endif; ?>
			<div id="responsive-nav">
				<img src="<?php echo IMAGES; ?>/nav.png" alt="Nav">
			</div>
			<div class="clear no-display"></div>
			<nav role="navigation" id="main-navigation">

			</nav>

		</div>

	</header>
