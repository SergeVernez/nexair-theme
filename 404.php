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
		<img src="<?php echo get_template_directory_uri() ?>/assets/img/404cover.webp" alt="404">
        <div class="bg-black">
            <div class="container">
                <!----- début TXT ----->
                <div class="w50">
                    <h1>Erreur 404</h1>
                    <p>La page que vous cherchez à atteindre n'est pas disponible, cliquez sur le bouton ci-dessous pour retourner à l'accueil</p>
					 <a href="#" class="btn">retour à l'accueil</a>
				</div>
            </div>
        </div>
    </section>


	</main><!-- #main -->

<?php
get_footer();
