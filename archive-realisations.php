<?php
/*
Template Name: Archives-Realisation
*/
get_header(); ?>

<div class="main">
    <div class="wrap">
    	<section class="identity">
          <div  class="identity-background" style="background-image: url(<?php echo($header_banner['sizes']['header_banner']); ?>)" 
            height="<?php echo($header_banner['sizes']['header_banner-height']); ?>" 
            width="<?php echo($header_banner['sizes']['header_banner-width']); ?>" 
            alt="<?php echo($header_banner['alt']); ?>">
          </div>
          <div class="identity-content">
            <div>
              <img class="identity-logo" src="../wp-content/uploads/2024/01/pictures/logo-header.svg" alt="logo">
            </div>
            <div>
              <img src="../wp-content/uploads/2024/01/pictures/metallure.svg" alt="metallure">
            </div>
            <h1>Réalisations</h1>
          </div>
      	</section>

		<section class="filter">

		</section>
		<section class="realisation-display">
			<?php if ( have_posts() ) {
				while ( have_posts() ) {
				$realisation_picture1 = get_field('realisation_picture1');
				$realisation_picture2 = get_field('realisation_picture2');
				the_post(); ?>

				<style>
					.realisation-pic-back:hover{
						background-image: url(<?php echo($realisation_picture2['sizes']['realisation_picture']); ?>);
					}
				</style>
				<div class="realisation" 
					style="background-image: url(<?php echo($realisation_picture1['sizes']['realisation_picture']); ?>" 
					height="<?php echo($realisation_picture1['sizes']['realisation_picture-height']); ?>" 
					width="<?php echo($realisation_picture1['sizes']['realisation_picture-width']); ?>" 
					alt="<?php echo($realisation_picture1['alt']); ?>">
					<div class="realisation-mask">
						<h3><?php the_title(); ?></h3>
					</div>
				</div>
			<?php } } ?>
		</section>

		<!-- Start the pagination functions after the loop. -->
		<section class="realisation-navigation">
			<div class="nav-previous alignleft">
				<span>
					<a href="">
						&#10094;
						<?php previous_posts_link( 'Précédent' ); ?>
						
					</a>
				</span>
			</div>
			<div id="exemple" class="nav-next alignright">
				<span>
					<a href="">
						<?php next_posts_link( 'Suivant' ); ?> 
						&#10095; 
					</a>
				</span>
			</div>
		</section>
			<!-- End the pagination functions after the loop. -->

	</div><!-- #wrap -->
</div><!-- #main -->

<?php get_footer(); ?>