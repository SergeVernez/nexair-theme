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
			<h1><?php the_title() ?></h1>
		</section>
		<section class="contenu">
			<div class="desc">
				<?php the_content() ?>
			</div>
			<div class="galerie">
				<div id="unite">
					<?php 
						$images = get_field('galerie');
						if( $images ): ?>
							<?php foreach( $images as $image ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endforeach; ?>
						<?php endif; ?>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
