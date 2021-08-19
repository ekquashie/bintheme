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
	<div class="row">
		<div class="col-lg-8">
			<div class="skip-bin-info-hole">
				<div class="title">
					<i class="fa fa-chevron-top"></i> Skip bin instant quote
				</div>
				<div class="desc">
					Simply type your suburb above and you will be provided with an instant
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
