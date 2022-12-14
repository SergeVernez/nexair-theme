<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nexair
 */

get_header();
?>

	<main>
		<section class="produits">
			<div class="container">
				<?php if(ICL_LANGUAGE_CODE=='fr'): ?>
					<p class="arianne"><?php bcn_display() ?></p>
					<h1>tous nos produits</h1>
				<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					<h2>Our products</h2>
				<?php endif; ?>
				<?php 
				while ( have_posts() ) :
					the_post(); ?>
						<div>
							<img src="<?php the_post_thumbnail_url ('medium') ?>" alt="">
							<div>
								<h3> <?php the_title () ?></h3>
								<p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p> 
								<a href="<?php the_permalink () ?>" class="btn">
									<?php if(ICL_LANGUAGE_CODE=='fr'): ?>
										Voir plus
									<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
										See more
									<?php endif; ?>
								</a>                           
							</div>
						</div>
				<?php endwhile;
				?> 
			</div>
		</section>
	</main><!-- #main -->

<?php

get_footer();
