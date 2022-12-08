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
    <section class="bg-agroalimentaire" style="background-image:url('<?php the_post_thumbnail_url(  ) ?>')">
        <div class="bg-black">
            <div class="container">
                <!----- début TXT ----->
                <div class="w50">
                    <h1>agroalimentaire</h1>
                    <h2>Filtre à manches - Céréale - Dépoussiérage</h2>
                    <p>Que vous soyez <strong>céréalier, semencier, producteur de sucre, ou de tout autre secteur alimentaire</strong>, Nexair est capable de répondre à vos problématiques de traitement air.
					Que ce soit pour améliorer la qualité de l'air intérieur ou optimiser vos process, découvrez l’ensemble de nos interventions.
					Lors de la conception de nos installations, nous prenons en compte des <strong>risques d’explosion de poussière</strong>.</p>
                    </div>
            </div>
        </div>
    </section>

<?php the_content() ?>

	</main><!-- #main -->

<?php

get_footer();
