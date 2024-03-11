<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">

  

  <?php wp_head(); ?>

</head>

<body <?php body_class(has_post_thumbnail() ? 'has-thumbnail' : '');  ?>>

  <?php wp_body_open();  ?>

  
    

    <header class="header-container" id="top">
      <div class="header">
        <?php 

          $intothedark_logo_id = get_theme_mod( 'custom_logo' );
          $intothedark_logo = wp_get_attachment_image_src( $intothedark_logo_id , 'full' );
        
          if(has_custom_logo()){ ?>

          <a href="<?php echo esc_url(home_url()); ?>" class="header__logo">
            <img src="<?php echo esc_url( $intothedark_logo[0] ); ?>" alt="<?php echo esc_url( get_bloginfo( 'name' )); ?>"  class="custom-logo">
          </a>

        <?php } else{ ?>

          <a class="header__logo" href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('title'); ?> </a>
        
        <?php } ?>

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'header',
            'container' => false,
            'items_wrap' => '<ul class="header__menu">%3$s</ul>'
          )
        );
        ?>

        <div class="header__hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

    </header>

    <div class="wrap">

   
  