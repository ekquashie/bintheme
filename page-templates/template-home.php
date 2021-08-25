<?php
/**
 * Template Name: Home Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="home-hero-banner-top">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-8 col-xl-7">
				<div class="skip-bin-info-holder">
					<div class="overlay-image-arrow">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-arrow-up.png" alt="Arrow Up West Coast">
				</div>
					<div class="title">
						<i class="fa fa-arrow-circle-up"></i> Skip bin instant quote
					</div>
					<div class="desc">
						Simply type your suburb above and you will be provided with an instant price accros our range
					</div>
				</div>
			</div>
			<div class="col-lg-4 offset-xl-1">
				<div class="seven-days-info">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-right-info.png" alt="West Coast Info" width="100%">
					<div class="title">
						7-Day skip bin hire directly to your home covering Accra to Kumasi
					</div>
				</div>
			</div>
		</div>
		<div class="home-hero-slider">
			<div class="slider">
				<div class="slider-wrapper">
					<div class="slide">
						<div class="image">
						</div>
						<div class="entry-content">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck.png" alt="Slider Truck">
							</div>
							<div class="info">
								We deliver the right skip bin for your residential and commercial projects.
							</div>
							<div class="slider-nav">
								<a href="#"><i class="fa fa-arrow-circle-left"></i></a>
								<a href="#"><i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-product-info">

	<div class="home-special-offer-background-overlay">
	<div class="container">
		<div class="home-special-offer">
			<div class="discount-circle">
				<div class="save">Save</div>
				<div class="percent">20%</div>
			</div>
			<div class="entry-content">
				<div class="title"> 15 Days storm special on 9m<sup>3</sup> Skip Bins</div>
				<div class="desc">Bin Services - We deliver the right skip bin for your residential and commercial projects. We deliver the right skip bin for your residential and commercial projects.</div>
				<a href="#" class="button">Find out more information</a>
			</div>
		</div>
	</div>
	</div>	

	<div class="container">
		<h2>Select the right skip bin for your project</h2>
	</div>
</div>

<?php
get_footer();
