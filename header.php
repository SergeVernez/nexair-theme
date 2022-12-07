<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nexair
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="container">
        <div class="logo">
            <?php the_custom_logo() ?>
        </div>

        <!----- menu desktop ------>
        <nav class="menu">
            <ul>
                <li><a href="#">secteurs</a></li>
                <li><a href="#">atex</a></li>
                <li><a href="#">produits</a></li>
                <li><a href="#">services</a></li>
                <li><a href="#">réalisations</a></li>
            </ul>
        </nav>

        <!------------------ menu formulaire de contact ---------------->
        <nav class="menucontact">
            <ul>
                <li><a href="#">demande de rappel</a></li>
                <li><a href="#">demander un devis</a></li>
            </ul>
        </nav>
        <div class="projet">
            <h4>Votre projet</h4>
            <?php echo do_shortcode('[contact-form-7 id="56" title="Contact"]' ) ?>
        </div>
        <div class="appel">
            <h4>Rappelez-moi</h4>
            <form action="">
                <label class="w100">
                    Nom
                    <input type="text" name="" id="" />
                </label>
                <label class="w100">
                    Prénom
                    <input type="text" name="" id="" />
                </label>
                <label class="w100">
                    Fonction
                    <input type="text" name="" id="" />
                </label>
                <label class="w100">
                    Numéro de téléphone
                    <input type="text" name="" id="" />
                </label>
                <label class="w100">
                    Email
                    <input type="text" name="" id="" /> </label><label class="w100">
                    Variable
                    <input type="text" name="" id="" />
                </label>
                <label class="w50">
                    société
                    <input type="text" name="" id="" />
                </label>
                <label class="w50">
                    Pays
                    <input type="text" name="" id="" />
                </label>
                <label class="w50">
                    Département
                    <input type="text" name="" id="" />
                </label>
                <label class="w50">
                    Question ou demande
                    <input type="text" name="" id="" />
                </label>
                <input type="submit" value="Envoyer" class="btn" />
            </form>
        </div>
    </header>