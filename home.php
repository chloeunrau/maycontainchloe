<?php get_header(); ?>

<!-- DEFAULT BLOG PAGE -->
<!-- applied to blog views with no defined template -->

<div id="content">
  <div id="blog">

    <div id="rss">
      <a href="<?php echo bloginfo('home'); ?>/feed">
        Subscribe to this blog via RSS
      </a>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="post">
        <h1>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h1>
        <h2><?php the_date(); ?></h2>
        <?php the_content( $more_link_text, $stripteaser ); ?>
      </div>

      <div class="separator"></div>

      <?php endwhile; else: ?>

      <div class="error">
        <h1>This page does not exist</h1>
        <p>
          The requested URL may have been entered incorrectly or removed.
        </p>
      </div>

    <?php endif; ?>

    <div id="pagination">
      <div class="alignleft">
        <?php previous_posts_link('&laquo; Newer Posts') ?>
      </div>
      <div class="alignright">
        <?php next_posts_link('Older Posts &raquo;') ?>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>