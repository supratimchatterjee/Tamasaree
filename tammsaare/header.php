<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tammsaare
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
<div class="row">

		<div class="level-one">
			<div class="help-bar clearfix">
				<ul>
					<li><a href="#"><span class="icons"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone-icon.png"></span>+372 000 0000</a></li>
					<li><a href="#"><span class="icons"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail-icon.png"></span>info@kaamos.ee</a></li>
					<li><a href="#"><span class="icons"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon.png"></span></a></li>
					<li><a href="#">EST&nbsp;<span class="icons"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="level-two">
			<div class="logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="">
			</div>
			<div class="burger-menu">
				<a href="#"><span class="burger-menu-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-icon.png"></span></a>
			</div>
			<ul>
				<li><a href="#">MEIST</a></li>
				<li><a href="#">MAJAJUHT</a></li>
				<li><a href="#">VABAD PINNAD</a></li>
				<li><a href="#">GALERII</a></li>
				<li><a href="#">KUIDAS TULLA</a></li>
				<li><a href="#">ARENDAJA</a></li>
				<li><a href="#">KONTAKT</a></li>
			</ul>
			
		</div>

	
</div>
</header>
