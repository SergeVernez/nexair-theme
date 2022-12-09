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
                    <a href="#" class="btn">Voir nos réalisations</a>
                    <h2>Audit - étude - conseil</h2>
                </div>
            </div>
        </div>
    </section>

    <!----- début section secteur ----->
    <section>
        <div class="container">
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
    <section class="atex">
        <div class="container">
            <div>
                <h2>spécification atex</h2>
                <?php the_field('description_atex') ?>
                <a class="btn" href="#">contactez-moi</a>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img atex copie.png" alt="" />
            </div>
        </div>
    </section>

    <!----- début section produits ----->
    <section class="produits">
        <div class="container">
            <h2>Nos produits</h2>
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
            <a href="#" class="btn">voir tous nos produits</a>
        </div>
    </section>

    <!----- début section réalisation/galerie ----->
    <section class="realisation">
        <div class="container">
            <h2>Nos réalisations</h2>
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
                    <a href="<?php the_permalink() ?>">
                        <div style="background-image:url('<?php the_post_thumbnail_url('medium') ?>')">
                            <h3 class="btn"><?php the_title() ?></h3>
                        </div>
                    </a>
            <?php endwhile;

            // Restore original Post Data
            wp_reset_postdata();
             ?> 
            <div>
                <a href="#" class="btn">voir nos réalisations</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();