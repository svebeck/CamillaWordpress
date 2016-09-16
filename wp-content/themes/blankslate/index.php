<?php get_header(); ?>
<?php 
$args = array(
  'numberposts' => 6,
  'category_name' => 'Featured',
	'orderby'   => 'meta_value_num',
	'meta_key'  => 'num'
);
 
$latest_posts = get_posts( $args );


 ?>
<section id="content" role="main">
  <div class="splash">
  </div>
  <div class="row align-center">
    <div class="column small-4 arrow">
		<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" />
    </div>
  </div>
  <section id="projects">
  	<h1 class="projects">Senaste projekten</h1>
  	<div class="row collapse">
  		<div class="column small-12 medium-6 gray project">
			<?php $post = $latest_posts[0]; setup_postdata( $latest_posts[0] ); ?>
  			<div class="title-right">
  			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
  			</div>
			
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<img src="<?php the_field('image'); ?>" />
			</a>
  		</div>
  		<div class="column small-12 medium-6 project">
  			<div class="margin-left project-bottom project-small">
			<?php $post = $latest_posts[1]; setup_postdata( $latest_posts[1] ); ?>
  				<span class="title-right"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
				<img src="<?php echo get_template_directory_uri(); ?>/images/installation.png" />
			</div>
		</div>
  		<div class="column small-12 medium-6 project text-right">
  			<div class="margin-right project-right project-small">
  				<span class="title-left">Koncept, digitalt</span>
				<img src="<?php echo get_template_directory_uri(); ?>/images/installation.png" />
			</div>
		</div>
  		<div class="column small-12 medium-6 blue project">
			<span class="title-left-down">Redesign, Fula Fisken</span>
			<img src="<?php echo get_template_directory_uri(); ?>/images/fulafisken.png" />
		</div>
  		<div class="column small-12 medium-6 project text-right">
  			<div class="project-right project-small">
  				<span class="title-left">Redesign, Fula Fisken</span>
				<img src="<?php echo get_template_directory_uri(); ?>/images/installation.png" />
			</div>
		</div>
  		<div class="column small-12 medium-6 project">
  			<div class="margin-left project-left project-small">
  				<span class="title-right">Redesign, Fula Fisken</span>
				<img class="gray" src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
			</div>
		</div>
	</div>
  </section>
  <section class="row collapse align-center quote">
	<div class="column small-12">
	  	<p class="quote-icon">“</p>
	  	<p class="quote-text">Archicienem con corrum qui ipient ad unditatia is endictur remporeicius sitis cum sum dusti comnihitium nus aut et plit et ut dolutem ex et quam aut pra dolumqu atiorest.
		</p>
	</div>
  </section>
  <aside class="contact hide-for-small-only hide-for-medium-only hide-for-large-only">
  	<ul>
	  	<li class="header">E-MAIL</li>
		<li><?php echo get_option("admin_email"); ?></li>

		<li class="header">BEHANCE</li>
		<li><?php the_field("behance", "user_1"); ?></li>

		<li class="header">TELFONNUMMER</li>
		<li><?php the_field("phone", "user_1"); ?></li>
	</ul>
  </aside>
  <section class="row collapse align-center about">
	<div class="column small-12">
	  	<h2>Archicienem con corrum qui ipient</h2>
	  	<p><?php the_field("bio", "user_1"); ?></p>
	</div>
</section>
<!-- Old Entry Code
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
-->
</section>
<?php get_footer(); ?>