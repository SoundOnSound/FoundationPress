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
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<div class="grid-container full">
		<div class="grid-x">
			<div class="cell">
				<header class="site-header" role="banner">
					<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
						<div class="title-bar-left">
							<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
							<span class="site-mobile-title title-bar-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							</span>
						</div>
					</div>

					<nav class="site-navigation top-bar top-nav" role="navigation">
						<div class="top-bar-left">
							<div class="site-desktop-title top-bar-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/sosmusictools-logo-200.png" alt="SOS Music Tools Logo" width="200" height="123">
								</a>
							</div>
						</div>
						<div class="top-bar-right">
							<?php // foundationpress_top_bar_r(); ?>
							<?php dynamic_sidebar( 'header-widgets' ); ?>
							<div class="basket-account">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>/basket" class="button"><i class="fa fa-shopping-basket"></i> Basket</a>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>/my-account" class="button"><i class="fa fa-user"></i>Account</a>
							</div>
						</div>
					</nav>


				</header>
			</div>
		</div>
	</div>

	<div class="grid-container full">
		<div class="grid-x">
			<div class="cell">
				<nav class="site-navigation top-bar" role="navigation">
					<div class="top-bar-left">
						<?php foundationpress_top_bar_l(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>
					</div>
					<!-- <div class="top-bar-right">

					</div> -->
				</nav>
			</div>
		</div>
	</div>
