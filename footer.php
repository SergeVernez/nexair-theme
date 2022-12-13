<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nexair
 */

?>

		<footer class="bg-footer">
			<div class="container">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/NEXAIR BLANC+BASE LINE.svg" alt="nexair ingenerie traitement de l'air" />

				<!-- <nav>
					<ul>
						<li><a href="#">Secteurs d'activités</a></li>
						<li><a href="#">Nos produits</a></li>
						<li><a href="#">Nos réalisations</a></li>
						<li><a href="#">Nos services</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav> -->

				<nav class="menu">
            <?php 
                wp_nav_menu( array(
                    'container'			=> "", 
                    'theme_location'	=> "menu-header",
                ) ); 
            ?>
        		</nav>

				<hr />
				<?php  
					$count = 0;
					$agences = get_field('footer_agences','option');
					if (is_array($agences)) {
					$count = count($agences);
					}
				?>
				<div class="ligne">
					<?php while( have_rows('footer_agences','option') ) : the_row(); ?>
						<div style="width:calc(100% / <?php echo $count ?>)">
							<h3><?php the_sub_field('nom_agence','option') ?></h3>
							<p>
								<?php the_sub_field('coordonnees_agence','option') ?>
							</p>
							<a href="mailto:contact@nexair.fr">contact[at]nexair.fr</a>
						</div>
    				<?php endwhile; ?>
				</div>
				<hr class="ligne" />
				<div class="d-f">
					<div><a href="#">Mentions légales</a></div>
					<div>
						<a href="#"> <i class="fa-brands fa-linkedin"></i></a>
					</div>
					<div><p>2022 - NEXAIR - Site réalisé par SLV</p></div>
				</div>
				div
			</div>

			<!--- bouton retour haut de page -->

			<div>
				<button class="scroll-top">
					<i></i>
				</button>
			</div>

		</footer>
<?php wp_footer(); ?>

</body>
</html>
