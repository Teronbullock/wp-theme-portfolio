<?php
/**
 * Template Name: Front Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper py-0" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<?php 
            get_template_part('template-parts/frontpage/section', '', $args = array( 'template' => 'about') );
            get_template_part('template-parts/frontpage/section', '', $args = array( 'template' => 'skills') );
            get_template_part('template-parts/frontpage/section', '', $args = array( 'template' => 'projects') );
            get_template_part('template-parts/frontpage/section', '', $args = array( 'template' => 'cta') );
					?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
