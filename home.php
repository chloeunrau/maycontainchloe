<?php get_header(); ?>

<!-- DEFAULT BLOG PAGE -->
<!-- applied to blog views with no defined template -->

<div id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?>
    <?php _e(($_GET['s']) . " does not exist."); ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>