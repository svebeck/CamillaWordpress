
  <section id="projects" class="row">
  	<div class="columns">
  	<h1 class="projects">Senaste projekten</h1>
	  	<div class="row collapse">
	  		<?php $page = get_page_by_title("Index"); ?>
	  		<?php $page_id = $page->ID; ?>
	  		<?php $post = get_field("featured1", $page_id); setup_postdata( $post ); ?>
	  		<div class="column small-12 medium-6 project" style="background-color: <?php the_field('image_background_color') ?> ">
				<div class="title-right">
	  			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
	  			</div>
				
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<img src="<?php the_field('image'); ?>" />
				</a>
	  		</div>
			<?php wp_reset_postdata(); ?>
			<?php $post = get_field("featured2", $page_id); setup_postdata( $post ); ?>
	  		<div class="column small-12 medium-6 project">
	  			<div class="margin-left project-bottom project-small" style="background-color: <?php the_field('image_background_color') ?> ">
	  				<span class="title-right"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
					
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<img src="<?php the_field('image'); ?>" />
					</a>
				</div>
			</div>
			<?php wp_reset_postdata(); ?>
			<?php $post = get_field("featured3", $page_id); setup_postdata( $post ); ?>
	  		<div class="column small-12 medium-6 project text-right" >
	  			<div class="margin-right project-right project-small" style="background-color: <?php the_field('image_background_color') ?> ">
	  				<span class="title-left"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
					
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<img src="<?php the_field('image'); ?>" />
					</a>
				</div>
			</div>
			<?php wp_reset_postdata(); ?>
			<?php $post = get_field("featured4", $page_id); setup_postdata( $post ); ?>
	  		<div class="column small-12 medium-6 project" style="background-color: <?php the_field('image_background_color') ?> ">
				<span class="title-left-down"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
				
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<img src="<?php the_field('image'); ?>" />
				</a>
			</div>
			<?php wp_reset_postdata(); ?>
			<?php $post = get_field("featured5", $page_id); setup_postdata( $post ); ?>
	  		<div class="column small-12 medium-6 project text-right">
	  			<div class="project-right project-small" style="background-color: <?php the_field('image_background_color') ?> ">
	  				<span class="title-left"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
					
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<img src="<?php the_field('image'); ?>" />
					</a>
				</div>
			</div>
			<?php wp_reset_postdata(); ?>
			<?php $post = get_field("featured6", $page_id); setup_postdata( $post ); ?>
	  		<div class="column small-12 medium-6 project">
	  			<div class="margin-left project-left project-small" style="background-color: <?php the_field('image_background_color') ?> ">
	  				<span class="title-right"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
					
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<img src="<?php the_field('image'); ?>" />
				</a>
				</div>
			</div>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
  </section>