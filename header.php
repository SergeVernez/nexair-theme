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
            <a href="#">
                <img src="img/Logo.svg" alt="logo Nexair" />
            </a>
        </div>

        <!----- menu desktop ------>
        <nav class="menu">
            <ul>
                <li><a href="#">secteur</a></li>
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
                    Email
                    <input type="text" name="" id="" /> </label><label class="w100">
                    Variable
                    <input type="text" name="" id="" />
                </label>
                <label class="w50">
                    Champ 1
                    <input type="text" name="" id="" />
                </label>
                <label class="w50">
                    Champ 2
                    <input type="text" name="" id="" />
                </label>
                <label class="w50">
                    Champ 3
                    <input type="text" name="" id="" />
                </label>
                <label class="w50">
                    Champ 4
                    <input type="text" name="" id="" />
                </label>
                <input type="submit" value="Envoyer" class="btn" />
            </form>
        </div>
    </header>