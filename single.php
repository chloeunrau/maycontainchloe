<?php get_header(); ?>

<div id="content">

  <div id="blog-controls">
    <?php dynamic_sidebar( 'Blog Controls' ); ?>
  </div>

  <div id="blog">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="post">
        <h1>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h1>
        <h2><?php the_date(); ?></h2>
        <?php the_content() ?>
      </div>

      <?php endwhile; else: ?>

      <div class="error">
        <h1>This page does not exist</h1>
        <p>
          The requested URL may have been entered incorrectly or removed.
        </p>
      </div>

    <?php endif; ?>

  </div>

  <div id="about">

    <img class="alignleft size-full" 
         alt="Chloe Unrau" 
         src="<?php echo bloginfo('template_url'); ?>/images/chloe.jpg"/>

    <h1>Chloe Unrau</h1>

    <?php dynamic_sidebar( 'Blog Post About Me' ); ?>

    <div id="small-social-container">
      <div id="small-social">
        <a href="mailto:chloe.unrau@gmail.com">
          <div id="small-social-email"></div>
        </a>
        <a href="https://twitter.com/chloeunrau" target="_blank">
          <div id="small-social-twitter"></div>
        </a>
        <a href="https://github.com/chloeunrau" target="_blank">
          <div id="small-social-github"></div>
        </a>
        <a href="http://linkedin.com/in/chloeunrau" target="_blank">
          <div id="small-social-linkedin"></div>
        </a>
      </div>
    </div>

  </div>

</div>

<?php get_footer(); ?>