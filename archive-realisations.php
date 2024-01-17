<?php
/*
Template Name: Archives-Realisation
*/
get_header(); ?>


<div class="main">
    <div class="wrap">
		<section class="filters">
			<?php 
			$terms = get_terms(array(
			'taxonomy'=> 'realisations_tax'));
			foreach ($terms as $term) {
				echo ''.$term->name;
			}
				?>
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
					<div  class="realisation-second" style="background-image: url(<?php echo($realisation_picture2['sizes']['realisation_picture']); ?>" 
					height="<?php echo($realisation_picture1['sizes']['realisation_picture-height']); ?>" 
					width="<?php echo($realisation_picture1['sizes']['realisation_picture-width']); ?>" 
					alt="<?php echo($realisation_picture1['alt']); ?>">
					</div>
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
					&#10094;
					<?php if( previous_posts_link('') !== ''){
						previous_posts_link( 'Précédent' ); 
					} else{ ?>
						<p>Précédent</p>
					<?php } ?>
				</span>
			</div>
			<div class="nav-next alignright">
				<span>
				<?php if( next_posts_link('') !== ''){
						next_posts_link( 'suivant' ); 
					} else{ ?>
						<p>Suivant</p>
					<?php } ?>
					&#10095; 
				</span>
			</div>
		</section>
			<!-- End the pagination functions after the loop. -->

	</div><!-- #wrap -->
</div><!-- #main -->

<?php get_footer(); ?>