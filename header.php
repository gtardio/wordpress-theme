<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
      <header>
        <div class="container">
          <div class="header_left">
            <img src="https://www.boolean.careers/images/common/logo.png" alt="">
          </div>
          <div class="header_right">
            <?php wp_nav_menu(array(
              'theme_location' => 'header',
              'container' => false,
              'menu_class' => 'nav_item'
            )); ?>
          </div>
        </div>
      </header>
