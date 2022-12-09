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


	<main id="primary" class="site-main">

	    <!----- début de section produit ----->

	<section>
		<div>
			<img src="<?php the_post_thumbnail_url(  ) ?>" alt="">
		</div>
		<div>
			<h1><?php the_title() ?></h1>
			<h2>Description</h2>
			<?php the_content() ?>
        </div>
		<div>
			<h2>Avantages</h2>
			<?php the_field("avantage") ?>
			<div class="liens">
				<a href="<?php the_field("fiche") ?>" class="btn"></a>
				<a href="<?php echo home_url() ?>/contact" class="btn"></a>
			</div>
		</div>
		<div>
			<img src="<?php the_field ("image") ?>" alt="">
		</div>
	</section>


	</main><!-- #main -->

<?php

get_footer();
