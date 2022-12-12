<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nexair
 */

get_header();
?>

	<main>


    <section class="page-id-270">
	<img src="<?php the_post_thumbnail_url(  ) ?>" alt="">
        <div class="bg-black">
            <div class="container">
                <!----- début TXT ----->
                <div class="w50">
                    <p class="arianne"><?php bcn_display() ?></p>
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
