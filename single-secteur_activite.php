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

	    <!----- début de section accueil ----->
    <section class="bg-home">
        <div class="bg-black">
            <div class="container">
                <!----- début TXT+CTA ----->
                <div class="w50">
                    <h1>ingénierie traitement de l'air</h1>
                    <h2>20 ans d’expérience...</h2>
                    <p><strong>...Basée dans le Nord de la France à Templemars</strong>,<br>Nexair vous accompagne, de
                        l’étude à la mise en oeuvre de vos installations, pour tout projet de <strong>dépoussiérage,
                            ventilation, transport pneumatique ou nettoyage centralisé,</strong> avec un seul et même
                        objectif : <strong> fournir une solution sur mesure et un accompagnement<br> sur le long
                            terme.</strong></p>
                    <a href="#" class="btn">Voir nos réalisations</a>
                    <h2>Audit - étude - conseil</h2>
                </div>
            </div>
        </div>
    </section>

<?php the_content() ?>

	</main><!-- #main -->

<?php

get_footer();
