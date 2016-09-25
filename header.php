<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <!--Link to stylesheet file-->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"
</head>
<body>
  <div class="container"> <!-- Start Container Div-->
    <header class="row">
      <div class="twelve columns">
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
      </div>
    </header>
    <div class="row">
      <div clas="twelve column">
        <?php
          wp_nav_menu( array(
            'sort_column' => 'menu_order',
            'container_class' => 'blank-menu-header'
          ));
        ?>
      </div>
    </div>
