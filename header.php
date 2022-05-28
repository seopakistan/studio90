<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studio90
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@Studio90_pk">
	<meta name="twitter:image" content="https://www.studio90.pk/wp-content/uploads/2019/04/studio90-web-logo.png">
	<meta name="twitter:title" content="<?php echo get_post_meta( $wp_query->post->ID, '_aioseop_title', true ); ?>">
	<meta name="twitter:description" content="<?php echo get_post_meta( $wp_query->post->ID, '_aioseop_description', true ); ?>">

      <!-- Open Graph Meta Data -->
    <meta property="og:description" content="<?php echo get_post_meta( $wp_query->post->ID, '_aioseop_description', true ); ?>">
    <meta property="og:image" content="https://www.studio90.pk/wp-content/uploads/2019/04/studio90-web-logo.png">
    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
    <meta property="og:title" content="<?php echo get_post_meta( $wp_query->post->ID, '_aioseop_title', true ); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo get_bloginfo('url'); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">

			<?php
			if ( is_customize_preview() ) {
				echo '<div id="Studio90-header-control"></div>';
			}
			?>

			<div class="container-fluid">

				<div class="row">
					<div class="col-xs-12 col-sm-12">
						
						<div class="container top-bar">
						<?php global $wp_query; ?>
						<h1>
							<a href="<?php echo get_permalink( $wp_query->post->ID ); ?>">
								<?php 
									//echo get_the_title( $wp_query->post->ID );
									echo get_post_meta( $wp_query->post->ID, '_seo_title_value_key', true );
								?>
							</a>
						</h1>
						</div>

						<div class="site-branding">
							<div class="site-title">
								
									<?php 
									if ( function_exists( 'the_custom_logo' ) ) {
										the_custom_logo();
									}
									 ?>
								
							</div>
							<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) :
							?>
								<p class="site-description"><?php //echo $description; /* WPCS: xss ok. */ ?></p>
							<?php
							endif;
							?>
						</div><!-- .site-branding -->

					</div><!-- .col -->
				</div><!-- .row -->
				<div class="row navigation">
					<div class="col-sm-2 social">
						<ul>
							<li>
								<a href="https://www.facebook.com/Studio90-448424172375624/" target="_blank"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li>
								<a href="https://twitter.com/Studio90_pk" target="_blank"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/studio90-pk/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
							</li>
						</ul>
						 
					</div><!-- .col-sm-2 -->
					<div class="col-sm-8">
						<nav class="navbar navbar-expand-lg ">
  
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <?php
							if ( has_nav_menu( 'primary' ) ) :
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_id'        => 'primary-menu',
										'walker'         => new Studio90\Core\WalkerNav(),
									)
								);
							endif;
							?>
						  </div>
						</nav>
					</div><!-- .col-sm-8 -->
					<div class="col-sm-2 search">
						<?php get_search_form(); ?>
					</div><!-- .col-sm-2 -->
				</div><!-- .row -->
			
		</div><!-- .container-fluid -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
