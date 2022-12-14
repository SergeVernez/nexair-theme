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
    <!----- début de section accueil ----->
    <section class="bg-home">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home.png" alt="Nexair, Ingénierie traitement de l'air">
        <div class="bg-black">
            <div class="container">
                <!----- début TXT+CTA ----->
                <div class="w50">
                    <h1><?php bloginfo( 'description' ); ?></h1>
                    <h2><?php the_field('accroche') ?></h2>
                    <?php the_field('description') ?>
                    <a href="#realisations" class="btn">Voir nos réalisations</a>
                    <h2><?php the_field('bandeau') ?></h2>
                </div>
            </div>
        </div>
    </section>

    <!----- début section secteur ----->
    <section>
        <div class="container" id="activites">
            <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
                <h2>secteurs d'activités</h2>
            <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                <h2>line of business</h2>
            <?php endif; ?>
        </div>
    </section>

    <section class="container activites">
        <?php
            // WP_Query arguments
            $args = array(
                'post_type' => array( 'secteur_activite' ),
            );

            // The Query
            $query = new WP_Query( $args );

            // The Loop
                while ( $query->have_posts() ) :
                    $query->the_post(); ?>

                    <div class="bloc-secteur" style="background-image:url('<?php the_post_thumbnail_url('medium') ?>')">
                        <h3 class="btn"><?php the_title () ?> </h3>
                        <div class="bloc-contenu">
                            <p><?php the_field("titre_bandeau") ?></p>
                            <a href="<?php the_permalink () ?>" class="btn">En savoir +</a>
                        </div>
                    </div>

                <?php endwhile;
            // Restore original Post Data
            wp_reset_postdata();
        ?>
    </section>

    <!----- début section Atex ----->
    <section class="atex" id="atex">
        <div class="container">
            <div>
                <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
                <h2>spécification Atex</h2>
            <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                <h2>Atex specification</h2>
            <?php endif; ?>
                <?php the_field('description_atex') ?>
                <a class="btn btnContact" href="#">Nous contacter</a>
                <a class="btn" target="_blank" href="https://www.inrs.fr/risques/explosion/zonage-marquage-materiel-atex.html">en savoir plus</a>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img atex copie.png" alt="spécifications atex" />
            </div>
        </div>
    </section>

    <!----- début section produits ----->
    <section class="produits">
        <div class="container">
             <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
                <h2>Nos produits</h2>
            <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                <h2>Our products</h2>
            <?php endif; ?>
            <?php 
            // WP_Query arguments
            $args = array(
                'post_type' => array( 'produit' ),
            );

            // The Query
            $query = new WP_Query( $args );

            // The Loop
            while ( $query->have_posts() ) :
                $query->the_post(); ?>
                    <div>
                        <img src="<?php the_post_thumbnail_url ('medium') ?>" alt="">
                        <div>
                            <h3> <?php the_title () ?></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p> 
                            <a href="<?php the_permalink () ?>" class="btn">voir plus</a>                           
                        </div>
                            
                    </div>
            <?php endwhile;

            // Restore original Post Data
            wp_reset_postdata();
             ?> 
            <a href="<?php echo home_url() ?>/produit/" class="btn">voir tous nos produits</a>
        </div>
    </section>

    <!----- début section réalisation/galerie ----->
    <section class="realisation" id="realisations">
        <div class="container">
             <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
                <h2>Nos réalisations</h2>
            <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                <h2>Our realisations</h2>
            <?php endif; ?>
            <?php 
            // WP_Query arguments
            $args = array(
                'post_type' => array( 'realisations' ),
            );

            // The Query
            $query = new WP_Query( $args );

            // The Loop
            while ( $query->have_posts() ) :
                $query->the_post(); ?>
                    <div class="bloc-realisation" style="background-image:url('<?php the_post_thumbnail_url('medium') ?>')">
                            <h3 class="btn"><?php the_title () ?> </h3>
                            <div class="bloc-contenu">
                                <p><?php the_field("titre_bandeau") ?></p>
                                <a href="<?php the_permalink () ?>" class="btn">En savoir +</a>
                            </div>
                        </div>
            <?php endwhile;

            // Restore original Post Data
            wp_reset_postdata();
             ?> 
            <div>
                <a href="#" class="btn btnContact">Nous contacter</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();