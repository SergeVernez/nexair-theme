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
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home.png" alt="">
        <div class="bg-black">
            <div class="container">
                <!----- début TXT+CTA ----->
                <div class="w50">
                    <h1>service client</h1>
                    <h2>maintenir, d’améliorer, de réparer ou remplacer les caractéristiques ou éléments de vos installations, qu’elle qu’en soit l’origine.</h2>
                    <p><strong>Nous vous suggérons :

Diagnostic des problèmes rencontrés.
Dépannage dans les meilleurs délais.
Visite de contrôle préventive avec ou sans action corrective.
Intervention curative programmée.
Contrat de maintenance

Mais aussi les pièces détachées :

Mannequins de manches, manches, poches & cartouches filtrantes.
Séquenceurs, électrovannes…</strong></p>
                    <a href="#realisations" class="btn">Voir nos réalisations</a>
                    <h2>Audit - étude - conseil</h2>
                </div>
            </div>
        </div>
    </section>
	</main><!-- #main -->

<?php
get_footer();
