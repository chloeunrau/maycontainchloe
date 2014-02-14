<!DOCTYPE html>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title>
    <?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
  </title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body> <!--ends in footer.php -->
<div id="wrapper"> <!-- ends in footer.php -->

<header>
  <a href="<?php echo bloginfo('home'); ?>">
    <img src="<?php echo bloginfo('template_url'); ?>/images/header.png" width="375px" height="72px">
  </a>
</header>

<nav>
  <div id="menu">
    <a href="<?php echo bloginfo('home'); ?>">
      <div id="menu-home"></div>
    </a>
    <a href="<?php echo bloginfo('home'); ?>/blog">
      <div id="menu-blog"></div>
    </a>
    <a href="<?php echo bloginfo('home'); ?>/portfolio">
      <div id="menu-portfolio"></div>
    </a>
  </div>
</nav>