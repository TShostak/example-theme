<?php
/*
 * The Header template for theme
 * @package WordPress
 * @subpackage Green
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/images/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page-preloader" class="preloader">
        <img src="<?php echo get_template_directory_uri() ?>/images/simple-logo.svg" alt="preloader" class="loader">
    </div>

  	<header class="header">
        <div class="container">
            <div class="header-wrap">
          
                <a href="/" class="main-logo">
                    <?php 
                    $logo = get_field('main_logo', 'options');
                    if( !empty( $logo ) ): ?>
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"  title="<?php echo esc_attr($logo['alt']); ?>" />
                    <?php endif; ?>
                </a>

                <div class="header-controls-wrap">

                    <div class="mobile-menu-bg"></div>

                    <div class="header-menu-wrap">
                        <?php 
                            wp_nav_menu(array(
                              'theme_location'  => 'header-menu',
                              'menu_class'      => 'main-nav',
                              'echo'            => true,
                              'fallback_cb'     => 'wp_page_menu',
                              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                              'container'       => false
                            ));
                        ?>
                    </div>

                    <div class="header-social-wrap">
                        <?php if( have_rows('social_links', 'options') ): ?>
                            <?php while( have_rows('social_links', 'options') ): the_row(); ?>

                                <?php if ( get_sub_field('facebook') ): ?>
                                    <a href="<?php echo get_sub_field('facebook') ?>">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                <?php endif ?>

                                <?php if ( get_sub_field('youtube') ): ?>
                                    <a href="<?php echo get_sub_field('youtube') ?>">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                <?php endif ?>

                                <?php if ( get_sub_field('email') ): ?>
                                    <a href="mailto:<?php echo get_sub_field('email') ?>">
                                        <i class="fa-regular fa-envelope"></i>
                                    </a>
                                <?php endif ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                </div>

                <div class="header__menu-btn">
                    <span class="sandwitch"> 
                      <span class="sw-topper sw-line"></span> 
                      <span class="sw-bottom sw-line"></span> 
                      <span class="sw-footer sw-line"></span> 
                    </span>
                </div>

            </div>
        </div>
  	</header>