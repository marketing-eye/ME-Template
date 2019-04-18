<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<div class="wrapper" id="wrapper-footer">
	<div class="container">
		<div class="footer-widgets row">
		<?php 
			for ($column=1;$column<=get_option('opt-footer-sidebar-layout');$column++) {
				echo "<div class='col-12 col-md-".get_option('opt-footer-widget-'.$column.'-columns-width')."'>";
				if ( is_active_sidebar( 'footer-widget-'.$column ) ) : //check the sidebar if used.
					dynamic_sidebar( 'footer-widget-'.$column );  // show the sidebar.
				endif;
				echo "</div>";
			}
		?>
		</div>
		<div class="footer-copyright row">
			<?php echo get_option('opt-footer-copyright');?>
		</div>
	</div>
</div>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

