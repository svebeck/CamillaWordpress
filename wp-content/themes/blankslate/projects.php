
  <section id="projects" class="row collapse">
  	<div class="column small-12">
  		<h1 class="projects">Senaste projekten</h1>
	</div>
	<?php $page = get_page_by_title("Index"); ?>
	<?php $page_id = $page->ID; ?>
	<?php $post = get_field("featured1", $page_id); setup_postdata( $post ); ?>
	<div class="column small-6 project" style="background-color: <?php the_field('featured_background_color') ?> ">
		<div class="title-right">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
		</div>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
			<img src="<?php the_field('featured_image'); ?>" />
		</a>
	</div>
	<div class="column small-6 project-side-column"></div>
	<div class="column small-6 project-side-column"></div>
<?php wp_reset_postdata(); ?>
<?php $post = get_field("featured2", $page_id); setup_postdata( $post ); ?>
	<div class="column small-6 project">
		<div class="margin-left project-bottom project-small" style="background-color: <?php the_field('featured_background_color') ?> ">
			<div class="hide-for-medium-down title-right">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
			<div class="show-for-medium-down title-left">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
		
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<img src="<?php the_field('featured_image'); ?>" />
			</a>
		</div>
	</div>
<?php wp_reset_postdata(); ?>
<?php $post = get_field("featured3", $page_id); setup_postdata( $post ); ?>
	<div class="column small-6 project text-right">
		<div class="margin-right project-right project-small" style="background-color: <?php the_field('featured_background_color') ?> ">
			<div class="hide-for-medium-down title-left">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
			<div class="show-for-medium-down title-right">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
		
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<img src="<?php the_field('featured_image'); ?>" />
			</a>
		</div>
	</div>
	<div class="column small-6 project-side-column"></div>
	<div class="column small-6 project-side-column"></div>
<?php wp_reset_postdata(); ?>
<?php $post = get_field("featured4", $page_id); setup_postdata( $post ); ?>
	<div class="column small-6 project" style="background-color: <?php the_field('featured_background_color') ?> ">
		<div class="hide-for-medium-down title-left-down">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
		</div>
		<div class="show-for-medium-down title-left">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
		</div>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
			<img src="<?php the_field('featured_image'); ?>" />
		</a>
	</div>
<?php wp_reset_postdata(); ?>
<?php $post = get_field("featured5", $page_id); setup_postdata( $post ); ?>
	<div class="column small-6 project text-right">
		<div class="project-right project-small" style="background-color: <?php the_field('featured_background_color') ?> ">
			<div class="hide-for-medium-down title-left">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
			<div class="show-for-medium-down title-right">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
	
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<img src="<?php the_field('featured_image'); ?>" />
			</a>
		</div>
	</div>
	<div class="column small-6 project-side-column"></div>
	<div class="column small-6 project-side-column"></div>
<?php wp_reset_postdata(); ?>
<?php $post = get_field("featured6", $page_id); setup_postdata( $post ); ?>
	<div class="column small-6 project">
		<div class="margin-left project-left project-small" style="background-color: <?php the_field('featured_background_color') ?> ">
			<div class="hide-for-medium-down title-right">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
			<div class="show-for-medium-down title-left">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
		
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<img src="<?php the_field('featured_image'); ?>" />
			</a>
		</div>
	</div>	
<?php wp_reset_postdata(); ?>
	<?php $post = get_field("featured7", $page_id); setup_postdata( $post ); ?>
	<div class="column small-6 project" style="background-color: <?php the_field('featured_background_color') ?> ">
		<div class="hide-for-medium-down title-right-down">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
		</div>
		<div class="show-for-medium-down title-right">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
		</div>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
			<img src="<?php the_field('featured_image'); ?>" />
		</a>
	</div>
	<div class="column small-6 project-side-column"></div>
	<div class="column small-6 project-side-column"></div>
<?php wp_reset_postdata(); ?>
<?php $post = get_field("featured8", $page_id); setup_postdata( $post ); ?>
	<div class="column small-6 project">
		<div class="margin-left project-left project-small" style="background-color: <?php the_field('featured_background_color') ?> ">
			<div class="hide-for-medium-down title-right">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
			<div class="show-for-medium-down title-left">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
			</div>
		
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<img src="<?php the_field('featured_image'); ?>" />
			</a>
		</div>
	</div>	
<?php wp_reset_postdata(); ?>
	<div class="column small-6 project hide-for-medium-down"></div>
	<div class="column small-6 project feedback">
		<div class="margin-left project-left project-small" style="background-color: <?php the_field('featured_background_color') ?> ">
			<div class="title-right">
				<p>Magnus Lind, Fula Fisken</p>
			</div>
		
			<p class="quote">“Camilla tog sig an uppdraget att modernisera vår hemsida proffsigt och med stor entusiasm.” </p>
		</div>
	</div>	
  </section>