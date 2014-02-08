<?php get_header(); ?>

<div id="content">

  <div id="blog-controls">
    <div class="links">
      <ul>
        <li><a href="<?php echo bloginfo('home'); ?>/blog">&laquo; Back to blog</a></li>
      </ul>
    </div>
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
         src="<?php echo bloginfo('template_url'); ?>/images/chloe.png" width="123px" height="164px" />

    <h1>Chloe Unrau</h1>

    <?php dynamic_sidebar( 'Blog Post About Me' ); ?>

    <div id="small-social-container">
      <div id="small-social">
        <a href="https://twitter.com/chloeunrau" title="Follow me on Twitter">
          <div id="small-social-twitter"></div>
        </a>
        <a href="https://github.com/chloeunrau" title="Visit me on GitHub">
          <div id="small-social-github"></div>
        </a>
        <a href="http://linkedin.com/in/chloeunrau" title="Add me on LinkedIn">
          <div id="small-social-linkedin"></div>
        </a>
        <a href="mailto:chloe.unrau@gmail.com" title="Send me an Email">
          <div id="small-social-email"></div>
        </a>
      </div>
    </div>

  </div>

</div>

<?php get_footer(); ?>