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
    </section>.
	<section>
		<div class="container">
			<p class="accroche"><?php the_field('accroche') ?></p>
			<?php the_field('texte_accroche') ?>
		</div>
	</section>
	<section class="bleu">
		<div class="container">
			<h2><?php the_field('equipe') ?></h2>
			<?php the_field('texte_accroche') ?>
			<a href="#" class="btn btnContact">Nous contacter</a>
		</div>
	</section>
	<section>
		<div class="container">
			<h2><?php the_field('projet') ?></h2>
			<?php the_field('texte_projet') ?>
			<a href="#" class="btn btnContact">Nous contacter</a>
		</div>
	</section>
		<section class="bleu">
		<div class="container">

		</div>
	</section>
</main><!-- #main -->

<?php

get_footer();