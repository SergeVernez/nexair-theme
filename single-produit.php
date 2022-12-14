<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nexair
 */

get_header();
?>


	<main class="container">

	    <!----- début de section produit ----->

	<section class="contenu">
		<p class="arianne"><?php bcn_display() ?></p>
		<div class="w-50">
			
			<img src="<?php the_post_thumbnail_url(  ) ?>" alt="">
		</div>
		<div class="w-50">
			
			<h1><?php the_title() ?></h1>
			<h2>Description</h2>
			<?php the_content() ?>
        </div>
	</section>
	<section class="contenu">
		<div class="w-70">
			<h2>Avantages</h2>
			<?php the_field("avantage") ?>
			<div class="liens">
				<a href="<?php the_field("fiche_produit") ?>" target="_blank" class="btn">fiche</a>
				<a href="#" class="btn btnContact">contact</a>
			</div>
		</div>
		<div>
			<?php 
				$image = get_field('image');
				if( !empty( $image ) ): ?>
					<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>
	</section>


	</main><!-- #main -->

<?php

get_footer();
