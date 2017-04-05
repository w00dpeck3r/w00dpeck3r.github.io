<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="header" class="container">
      <div id="header-top">
        <h1><a href="<?php echo site_url(); ?>/#top"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo image"></a></h1>
        <ul class="menu">
          <li><a href="<?php echo site_url(); ?>/#top">TOP</a></li>
          <li><a href="<?php echo site_url(); ?>/#about">ABOUT</a></li>
          <li><a href="<?php echo site_url(); ?>/#project">PROJECT</a></li>
          <li><a href="<?php echo site_url(); ?>/#schedule">SCHEDULE</a></li>
          <li><a href="<?php echo site_url(); ?>/#news">NEWS</a></li>
          <li><a href="<?php echo site_url(); ?>/#contact">CONTACT</a></li>
        </ul>
        <div class="clear"></div> <!-- cancel float -->
      </div>
      <div id="banner">
        <img src="<?php bloginfo('template_directory'); ?>/images/top.png" alt="header image">
      </div>
    </div> <!-- header ends here -->
