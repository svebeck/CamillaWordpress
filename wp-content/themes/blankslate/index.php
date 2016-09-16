<?php get_header(); ?>
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
  		<div class="column small-6 gray project-large">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
  		</div>
  		<div class="column small-6 project-small-relative">
  			<div class="margin-left project-bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/images/installation.png" />
			</div>
		</div>
  		<div class="column small-6 project-small text-right">
  			<div class="margin-right">
				<img src="<?php echo get_template_directory_uri(); ?>/images/installation.png" />
			</div>
		</div>
  		<div class="column small-6 blue project-large">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
		</div>
  		<div class="column small-6 project-small text-right">
  			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/installation.png" />
			</div>
		</div>
  		<div class="column small-6 project-small">
  			<div class="margin-left">
				<img src="<?php echo get_template_directory_uri(); ?>/images/installation.png" />
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
		<li>camilla.karlsson@medieinstitutet.se</li>

		<li class="header">BEHANCE</li>
		<li>https://www.behance.net/c_karlssoned26</li>

		<li class="header">TELFONNUMMER</li>
		<li>070-6113064</li>
	</ul>
  </aside>
  <section class="row collapse align-center about">
	<div class="column small-12">
	  	<h2>Archicienem con corrum qui ipient</h2>
	  	<p>Archicienem con corrum qui ipient ad unditatia is endictur remporeicius sitis cum sum dusti comnihitium nus aut et plit et ut dolutem ex et quam aut pra dolumqu atiorest ma niatem illorem porercia sae. Et volent, qui doluptis int. Archicienem con corrum qui ipient ad unditatia is endictur remporeicius sitis cum sum dusti comnihitium nus aut et plit et ut dolutem ex et quam aut pra dolumqu atiorest ma niatem illorem porercia sae. Et volent, qui doluptis int

		Archicienem con corrum qui ipient ad unditatia is endictur remporeicius sitis cum sum dusti comnihitium nus aut et plit et ut dolutem ex et quam aut pra dolumqu atiorest ma niatem illorem porercia sae. Et volent, qui doluptis int

		Archicienem con corrum qui ipient ad unditatia is endictur remporeicius sitis cum sum dusti comnihitium nus aut et plit et ut dolutem ex et quam aut pra dolumqu atiorest ma niatem illorem porercia sae. Et volent, qui doluptis int.
		</p>
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