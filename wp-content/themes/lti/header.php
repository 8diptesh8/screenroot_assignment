<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lti
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- bootstrap 5-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/plugins/bootstrap5/css/bootstrap.min.css'?>">
  <!-- slick slider -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/plugins/slick/slick/slick.css'?>">
  <!-- styles -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/customStyles.css'?>">
	<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lti' ); ?></a>

  <!-- header starts -->

	<header id="masthead" class="site-header menuHead">

	<div class="container">
    <div class="header-cont">
      <div class="head-img">
        <a href=""><img src="<?php echo get_template_directory_uri().'/assets/images/logo.png'?>"></a>
      </div>
      <div class="vertical-line"></div>
      <a href=""><img src="<?php echo get_template_directory_uri().'/assets/images/syncordis.png'?>"></a>
    </div>
  </div>



	</header><!-- #masthead -->

 <!-- header ends -->