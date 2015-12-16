<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Patricklaan
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.5&appId=170009683138828";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="centered">
			<div class="site-branding">
				<h1>
				  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				    <img src="<?php echo xvilo_getLogo(); ?>" alt="<?php bloginfo( 'name' ); ?>" />
				  </a>
				</h1>
			</div><!-- .site-branding -->
			<div id="menu-icon">
				<i class="fa fa-bars"></i> MENU
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				<br class="clear">
			</nav><!-- #site-navigation -->
			<?php echo clean_custom_menus(); ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php if ( function_exists('yoast_breadcrumb') ) 
	{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>