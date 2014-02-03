<?php get_header(); ?>

<!-- DEFAULT PAGE -->
<!-- applied to pages with no template selected -->

<div id="content">
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

<?php get_footer(); ?>