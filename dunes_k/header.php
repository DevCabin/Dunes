<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dunes_Periodontics
 */

?>



<?php /*

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$dunes_k_description = get_bloginfo( 'description', 'display' );
			if ( $dunes_k_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $dunes_k_description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dunes_k' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="format-detection" content="telephone=no">
	<!--link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/Dunes_files/logo.png"-->
	<!-- SET: SCRIPTS -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/Dunes_files/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/Dunes_files/js/IE9.js"></script>
	<style></style>
	<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dunes_k' ); ?></a>

				  <!-- MOBILE MENU -->
		      <div class="sidebar">
						<?php /* js clones menu into this area on mobile */?>
					</div>
					<!-- // MOBILE MENU -->

		      <!-- wrapper starts -->
		      <div class="wrapper">
		         <header>
		            <div class="container">
		               <div class="header-in">
		                  <div class="logo">
		                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
													 <img src="<?php echo get_template_directory_uri(); ?>/Dunes_files/logo.png" width="221" height="118" alt="logo">
												 </a>
		                  </div>
		                  <nav>

											<div id="nav-icon1"><span></span><span></span><span></span></div>

												<?php
												wp_nav_menu( array(
													'theme_location' => 'menu-1',
													'menu_id'        => 'primary-menu',
												) );
												?>

		                  </nav>
		                  <div class="clear"></div>
		               </div>
		            </div>
		         </header>

			<div id="content" class="site-content <?php if(!is_page('our-services') && !is_front_page() && ! is_post_type_archive('services')){ ?>img-bg<?php } ?>">
				<?php if(!is_page('our-services') && !is_front_page() && ! is_post_type_archive('services')){ ?>
					<div class="container">
				<?php } ?>
			<!-- END HEADER.PHP -->
