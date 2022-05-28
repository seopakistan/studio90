<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studio90
 */

if ( ! is_active_sidebar( 'Studio90-sidebar' ) ) :
	return;
endif;
?>

<?php
if ( is_customize_preview() ) {
	echo '<div id="Studio90-sidebar-control"></div>';
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php
	dynamic_sidebar( 'Studio90-sidebar' );
	?>
</aside><!-- #secondary -->
