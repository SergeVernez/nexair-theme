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

	<main>
		<section class="bg-realisation" style="background-image:url('<?php get_the_post_thumbnail_url() ?>')">
			<div class="container">
				<h1><?php the_title() ?></h1>
			</div>
		</section>
		<section class="contenu container">
			<article class="desc">
				<?php the_content() ?>
			</article>
			<article class="galerie">
				<div id="unite">
					<?php 
						$images = get_field('galerie');
						if( $images ): ?>
							<?php foreach( $images as $image ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endforeach; ?>
						<?php endif; ?>
				</div>
			</article>
		</section>
	</main><!-- #main -->

<?php
get_footer();