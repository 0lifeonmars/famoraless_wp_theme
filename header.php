<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Famoraless_Portafolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<!-- LOADER
        ================================ -->
        <div id="loader">
            <!-- LOADER: ICON -->
            <div class="spinner">
                <div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>
            </div>

            <!-- LOADER: TITLE -->
            <h2>cargando</h2>
        </div>

        <!--HEADER
        ================================-->
        <header class="push">
            <!-- HEADER: TITLE -->
            <h1>famoraless</h1>

            <img src="<?= get_template_directory_uri().'/assets/images/icons/icon_arrow_header.png'; ?>" alt="">

            <div>
                <!-- HEADER: BUTTON -->
                <button type="button" class="menu-btn"><span class="bi bi-list"></span></button>
                
                <!-- HEADER: SOCIAL MEDIAL -->
                <ul class="social-media"></ul> 
            </div>   
        </header>

        <!--NAV
        ================================-->
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-close">
                <button type="button" class="pushy-link btn-nav-close">x</button>
            </div>
  
            <div class="pushy-content">
                <ul>
                    <li class="pushy-link item-contact">
                        <a href="#">
                            <span class="bi bi-envelope-fill"></span>contacto
                        </a>
                    </li>
                </ul>
            </div>
  
            <div class="pushy-social">
                <ul></ul>
            </div>
        </nav>

        <!--NAV OVERLAY
        ================================-->
        <div class="site-overlay">&nbsp;</div>