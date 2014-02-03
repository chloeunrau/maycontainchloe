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
      <p></p>
    </div>
  </div>

  <div id="activities">
    <p></p>
  </div>

</div>

<?php get_footer(); ?>