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

	    <!----- début de section agroalimentaire ----->
    <section class="image-fond">
	<img src="<?php the_post_thumbnail_url(  ) ?>" alt="">
        <div class="bg-black">
            <div class="container">
                <!----- début TXT ----->
                <div class="w50">
                    <h1><?php the_title() ?></h1>
                    <h2><?php the_field("titre_bandeau") ?></h2>
                    <?php the_field("texte_bandeau") ?>
                    </div>
            </div>
        </div>
    </section>

<?php the_content() ?>

	</main><!-- #main -->

<?php

get_footer();
