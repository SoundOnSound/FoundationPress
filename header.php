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
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img class="logo-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/sosmusictools-logo.svg" alt="SOS Music Tools Logo" width="" height="40">
								</a>
							</span>
						</div>
					</div>

					<nav class="site-navigation top-bar top-nav show-for-medium" role="navigation">
						<div class="top-bar-left">
							<div class="site-desktop-title top-bar-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/sosmusictools-logo.svg" alt="SOS Music Tools Logo" width="187" height="123">
								</a>
							</div>
						</div>
						<div class="top-bar-right">
							<?php // foundationpress_top_bar_r(); ?>
							<?php dynamic_sidebar( 'header-widgets' ); ?>
							<div class="basket-account">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>/basket" class="button" data-toggle="basket-dropdown"><i class="fas fa-shopping-basket"></i>Basket
									<span class="basket-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
								</a>
								<!-- <div class="dropdown-pane" id="basket-dropdown" data-dropdown data-hover="true" data-hover-pane="true">
									<a class="basket-dropdown" href="<?php // echo wc_get_cart_url(); ?>" title="<?php // _e( 'View Your Shopping Basket' ); ?>"><?php // echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php // echo WC()->cart->get_cart_total(); ?></a>
								</div> -->
								<?php if (is_user_logged_in()) : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>/my-account" class="button" data-toggle="logout-dropdown"><i class="fa fa-user"></i>Account</a>
									<div class="dropdown-pane" id="logout-dropdown" data-dropdown data-hover="true" data-hover-pane="true">
								  	<a class="button" href="<?php echo wp_logout_url(); ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
									</div>
								<?php else : ?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>/my-account" class="button" data-toggle="login-dropdown"><i class="fa fa-user"></i>Login</a>
										<div class="dropdown-pane" id="login-dropdown" data-dropdown data-hover="true" data-hover-pane="true">
										 <?php wp_login_form( $args ); ?>
										</div>
								<?php endif; ?>
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
