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

<div id="image-loader">
  <img src="<?php echo bloginfo('template_url'); ?>/images/menu-blog-s.png">
  <img src="<?php echo bloginfo('template_url'); ?>/images/menu-home-s.png">
  <img src="<?php echo bloginfo('template_url'); ?>/images/menu-portfolio-s.png">

  <img src="<?php echo bloginfo('template_url'); ?>/images/social-email-s.png">
  <img src="<?php echo bloginfo('template_url'); ?>/images/social-twitter-s.png">
  <img src="<?php echo bloginfo('template_url'); ?>/images/social-github-s.png">
  <img src="<?php echo bloginfo('template_url'); ?>/images/social-linkedin-s.png">
  <img src="<?php echo bloginfo('template_url'); ?>/images/social-resume-s.png">

  <img src="<?php echo bloginfo('template_url'); ?>/images/small-email-s.png">
  <img src="<?php echo bloginfo('template_url'); ?>/images/small-github-s.png">
  <img src="<?php echo bloginfo('template_url'); ?>/images/small-linkedin-s.png">
  <img src="<?php echo bloginfo('template_url'); ?>/images/small-twitter-s.png">
</div>

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