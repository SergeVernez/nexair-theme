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
					<h2>Nos produits</h2>
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
								<a href="<?php the_permalink () ?>" class="btn">voir plus</a>                           
							</div>
						</div>
				<?php endwhile;
				?> 
			</div>
		</section>
	</main><!-- #main -->

<?php

get_footer();
