<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<div class="top-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-6">
						<div class="mobile-holder-logo">
							<a href="/wpdev">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
						</a>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="top-header-contact">
							<a href="tel:0548482872"><i class="fa fa-phone"></i>+233(0) 548 482 872</a>
							<a href="mailto: quashieeyram@gmail.com" class="top-header-email"><i class="fa fa-envelope-o"></i>quashieeyram@gmail.com</a>
							<div class="mobile-menu-dropdown">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
								<span>Menu</span> <i class="fa fa-bars"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">

			<div class="container">

				<div class="search-input-holder">
					<div class="title">Quote:</div>
					<input type="text" placeholder="Type your suburb here">
				</div>

				<div class="mobile-menu-dropdown">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span>Menu</span> <i class="fa fa-bars"></i>
					</button>
				</div>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
