<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Studio90
 */

get_header(); ?>

<div class="container errorpage">

	<div class="row">

		<div class="col-sm-12">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<div class="triangle">
						<i class="fas fa-exclamation-triangle"></i>
					</div>
					<h1>
					<?php
					esc_html_e( 'Oops! That page can&rsquo;t be found.', 'Studio90' );
					?>
					</h1>

					<h3>The page you are looking for is not available</h3>
					<p>May be a search can help or browser through following sections.</p>

					<?php get_search_form( ); ?>

					<hr>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

		

	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();
