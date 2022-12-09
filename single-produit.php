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
        	<h2><?php the_field("produit") ?></h2>
        	<?php the_field("avantage") ?>
		</div>
	</section>
<?php the_content() ?>

	</main><!-- #main -->

<?php

get_footer();
