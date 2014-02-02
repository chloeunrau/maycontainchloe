<!DOCTYPE html>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title('');?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body> <!--ends in footer.php -->
<div id="wrapper"> <!-- ends in footer.php -->

<header>
  <a href="#">
    <img src="<?php echo bloginfo('template_url'); ?>/images/header.jpg">
  </a>
</header>

<nav>
  <div id="menu">
    <a href="#"><div id="menu-home"></div></a>
    <a href="#"><div id="menu-blog"></div></a>
    <a href="#"><div id="menu-portfolio"></div></a>
  </div>
</nav>