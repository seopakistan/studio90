<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studio90
 */

?>

	</div><!-- #content -->

	<?php
	if ( is_customize_preview() ) {
		echo '<div id="Studio90-footer-control" style="margin-top:-30px;position:absolute;"></div>';
	}
	?>
<div class="screw"></div>
<footer class="container-fluid" role="contentinfo">

	
  
    <div class="container widget-area">
      <div class="row">
        <div class="col-sm-8">
          <div class="row">
        
            <div class="col-sm-4">
              <?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
                
                  <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                
              <?php endif; ?>
            </div>
            <div class="col-sm-3">
              <?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
                
                  <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                
              <?php endif; ?>
            </div>
            <div class="col-sm-5">
              <?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
                
                  <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                
              <?php endif; ?>
            </div>

          </div>

        </div>
        <div class="col-sm-4">
          <?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
            
              <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
            
          <?php endif; ?>
        </div>
      </div><!-- .row -->
    </div><!-- .container -->
	

    <!--CopyRight Row Start-->
    <div class="copyright-row">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php
				echo Studio90\Api\Customizer::text( 'Studio90_footer_copy_text' );
			?>
          </div>
        </div>
      </div>
    </div><!--CopyRight Row End-->
	</footer><!-- #colophon -->


</div><!-- #page -->

<a href="#" id="scroll-top" class="d-none">
	Back to Top
</a>

<?php wp_footer(); ?>

</body>
</html>
