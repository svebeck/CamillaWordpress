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
  		<div class="column small-12 medium-6 gray project">
  			<span class="title-right">Varumärkesidentitet</span>
			<img src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
  		</div>
  		<div class="column small-12 medium-6 project">
  			<div class="margin-left project-bottom project-small">
  				<span class="title-right">Print, Magasinlayout</span>
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