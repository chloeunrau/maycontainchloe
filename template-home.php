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
      <div class="error">
        <h1>This page does not exist</h1>
        <p>
          The requested URL may have been entered incorrectly or removed.
        </p>
      </div>
    <?php endif; ?>
  </div>

  <div id="social-container">
    <div id="social">
      <a href="https://twitter.com/chloeunrau" title="Follow me on Twitter">
        <div id="social-twitter"></div>
      </a>
      <a href="https://github.com/chloeunrau" title="Visit me on GitHub">
        <div id="social-github"></div>
      </a>
      <a href="http://linkedin.com/in/chloeunrau" title="Add me on LinkedIn">
        <div id="social-linkedin"></div>
      </a>
      <a href="mailto:chloe.unrau@gmail.com" title="Send me an Email">
        <div id="social-email"></div>
      </a>
      <a href="<?php echo bloginfo('home'); ?>/resume-chloe-unrau.pdf" title="Download my Resume">
        <div id="social-resume"></div>
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