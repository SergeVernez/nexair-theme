<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Nexair
 */

get_header();
?>

	<main>

	<section class="image-fond">
		<img src="<?php the_post_thumbnail_url(  ) ?>" alt="">
        <div class="bg-black">
            <div class="container">
                <!----- début TXT ----->
                <div class="w50">
                    <p class="arianne"><?php bcn_display() ?></p>
                    <h1><?php the_title() ?></h1>
                    <h2><?php the_field("titre_bandeau") ?></h2>
                    <?php the_field("texte_bandeau") ?>
					<?php the_content() ?>
				</div>
            </div>
        </div>
    </section>


	</main><!-- #main -->

<?php
get_footer();
