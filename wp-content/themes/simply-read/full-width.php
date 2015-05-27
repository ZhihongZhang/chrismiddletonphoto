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

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>


	<style>
		#logo{
			text-align: center;
		}
	</style>
</head>

<body <?php body_class(); ?> style="overflow-x: hidden;">

<div id="container" style="display: block;overflow-x: hidden;" class="container">
	<header class="header" role="banner" style="background-size:cover;" class="col-xs-12">
		<div id="inner-header" class="wrap cf row">

			<?php if ( get_theme_mod( 'simplyread_logo' ) ) : ?>
				<p id="logo" class="h1 col-xs-12 col-sm-8 col-sm-offset-2"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo esc_url( get_theme_mod( 'simplyread_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></p>
			<?php else : ?>
				<p id="logo" class="h1 col-xs-12 col-sm-8 col-sm-offset-2"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
			<?php endif; ?>
			<div id="responsive-nav">
				<img src="<?php echo IMAGES; ?>/nav.png" alt="Nav">
			</div>
			<div class="clear no-display"></div>
			<nav role="navigation" id="main-navigation" class="col-xs-12 col-sm-2">
				<ul id="menu-nav" class="nav">
					<li>
						<a href="<?php echo home_url(); ?>">Home</a>
					</li>
					<li>
						<a href="">Contact</a>
					</li>
				</ul>
			</nav>

		</div>

	</header>

<div id="content" style="margin-top: 120px;" class="container">
	<div id="inner-content" class="wrap cf">

		<div id="main" class="m-all col-xs-6 col-md-offset-3 cf " role="main">
			<form id="swpsmtp_settings_form" method="post" action="">
				<p id="Form-error" class="message" style="display:none" ></p>

				<div class="form-group">
					<div id="Name" class="form-group">
						<label for="swpsmtp_name"><?php _e( "Name", 'easy_wp_smtp' ); ?>:</label>
						<input type="text" class="form-control text" name="swpsmtp_name" id="swpsmtp_name" value="" required="required" aria-required="true"/>
					</div>
				</div>
				<div class="form-group">
					<div id="Email" class="form-group">
						<label for="swpsmtp_email"><?php _e( "Email", 'easy_wp_smtp' ); ?>:</label>
						<input type="email" class="form-control text" name="swpsmtp_email" id="swpsmtp_email" value="" required="required" aria-required="true"/>
					</div>
				</div>
				<div class="form-group">
					<div id="Message" class="form-group">
						<label for="swpsmtp_message"><?php _e( "Message", 'easy_wp_smtp' ); ?>:</label>
						<textarea class="form-control textarea" name="swpsmtp_message" id="swpsmtp_message" rows="5" cols="20" required="required" aria-required="true"></textarea>
					</div>
				</div>
				<p class="submit">
					<button type="submit" id="settings-form-submit" class="btn btn-default">
						<?php _e( 'Submit', 'easy_wp_smtp' ) ?>
					</button>
					<div id="ajax-response"></div>
				</p>
			</form>

		</div>

	</div>

</div>


<?php get_footer(); ?>
