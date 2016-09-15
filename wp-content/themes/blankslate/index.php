<?php get_header(); ?>
<section id="content" role="main">
  <div class="row">
    <div class="twelve columns splash">
		<img src="<?php echo get_template_directory_uri(); ?>/images/splash.png" />
    </div>
  </div>
<!-- Old Entry Code
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
-->
</section>
<?php get_footer(); ?>