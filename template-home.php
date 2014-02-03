<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="content">

  <div id="about">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; else: ?>
      <?php _e(($_GET['s']) . " does not exist."); ?>
    <?php endif; ?>
  </div>

  <div id="social-container">
    <div id="social">
      <a href="https://github.com/chloeunrau" target="_blank">
        <div id="social-github"></div>
      </a>
      <a href="https://twitter.com/chloeunrau" target="_blank">
        <div id="social-twitter"></div>
      </a>
      <a href="http://linkedin.com/in/chloeunrau" target="_blank">
        <div id="social-linkedin"></div>
      </a>
      <a href="#">
        <div id="social-resume" target="_blank"></div>
      </a>
    </div>
  </div>

  <div id="activities">
    <div class="title">
      <h1>Recent Activities</h1>
    </div>
    <?php dynamic_sidebar( 'Activities' ); ?>
  </div>

</div>

<?php get_footer(); ?>