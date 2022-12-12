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
                    <h1>ingénierie traitement de l'air</h1>
                    <h2>20 ans d’expérience...</h2>
                    <p><strong>...Basée dans le Nord de la France à Templemars</strong>,<br>Nexair vous accompagne, de
                        l’étude à la mise en oeuvre de vos installations, pour tout projet de <strong>dépoussiérage,
                            ventilation, transport pneumatique ou nettoyage centralisé,</strong> avec un seul et même
                        objectif : <strong> fournir une solution sur mesure et un accompagnement<br> sur le long
                            terme.</strong></p>
                    <a href="#realisations" class="btn">Voir nos réalisations</a>
                    <h2>Audit - étude - conseil</h2>
                </div>
            </div>
        </div>
    </section>
	</main><!-- #main -->

<?php
get_footer();
