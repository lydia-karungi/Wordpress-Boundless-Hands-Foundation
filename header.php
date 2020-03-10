<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenberg-starter-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site" style="margin-top: -3%;">

	<div class="header" style="background-color: black;">

<hr>  
	<a href="http://localhost/foundation/"><img src="<?php echo
get_template_directory_uri() . '/assets/images/mylogo2.jpg' ?>
" alt="photo"></a>

<a href="http://localhost/foundation/"><h2 style=" padding-top:5px; margin-top:-7.5%;"><strong style="color: rgb(239, 150, 32);">BOUNDLESS HANDS</strong> 
<br><strong style="color: rgb(39,169,225)">FOUNDATION</strong></h2></a>

<div class="topnav">
	

  <a class="active" href="http://localhost/foundation/">Home</a>
  <a class="active" href="http://localhost/foundation/index.php/gallery/">Gallery</a>
  <a class="active" href="http://localhost/foundation/index.php/information/">Information</a>
  <a class="active" href="http://localhost/foundation/index.php/aboutus/">AboutUs</a>
  <a class="active" href="http://localhost/foundation/index.php/contactus/">ContactUs</a>
</div>
<hr>


	</div>
	
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
