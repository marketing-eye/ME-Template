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
	<?php
	if ( is_active_sidebar( 'footer-widget-above') ) :
	?> 
	<div class="footer-widget-wrapper footer-widget-above-wrapper">
		<div class="footer-widget-container footer-widget-above-container container">
			<div class="row">
				<div class="col-12">
				<?php 
						dynamic_sidebar( 'footer-widget-above' );
				?>
				</div>
			</div>
		</div>
	</div>
	<?php
	endif;
	?>
	<div class="footer-widget-wrapper footer-widget-columns-wrapper">
		<div class="footer-widget-container footer-widget-columns-container container">
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
		</div>
	</div>
	<?php
	if ( is_active_sidebar( 'footer-widget-underneath') ) :
	?> 
	<div class="footer-widget-wrapper footer-widget-underneath-wrapper">
		<div class="footer-widget-container footer-widget-underneath-container container">
			<div class="row">
				<div class="col-12">
				<?php 
						dynamic_sidebar( 'footer-widget-underneath' );
				?>
				</div>
			</div>
		</div>
	</div>
	<?php
	endif;
	?>
	<div class="container">
		<div class="footer-copyright row">
			<div class="col-12">
				<?php echo get_option('opt-footer-copyright');?>
			</div>
		</div>
	</div>
</div>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

