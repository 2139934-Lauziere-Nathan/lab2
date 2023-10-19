<!DOCTYPE html>
<html lang="fr-CA">

<head>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css"/>

    <script>
        window.dataLayer = window.dataLayer || [];

       
    </script>



    
<body id="messtyles">

<div class="aucunepubauto">
    <div class="logo fix-menu" id="zoneentete">
        <div class="container">
            <div class="avant"></div>
            <div class="apres">
                <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47" data-horizontaloffset="0">
                    <a href="https://apical.xyz"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg"
                                                      alt="Accueil" title="Accueil"/></a>


                    <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche" data-target="#popuprecherche"><img
                                src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche"
                                title="Rechercher"/></a>
                    <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification"
                       data-target="#popupauthentification"><img
                                src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification"
                                title=""/></a>
                </div>
            </div>
            <div class="centre">
                <a href="https://apical.xyz"><img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg"
                                                  alt="Apical, ma plateforme d'apprentissage"/></a>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light py-lg-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Apical</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Basculer">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav mx-auto">
           
                <?php
    wp_list_pages(array(
        
        'title_li' => '', // Removes the title of the list
        'link_before' => '<li class="nav-item px-lg-4"><a href="./?page_id='.get_the_ID().'" class=" nav-link text-uppercase text-expanded active">',
        'link_after' => '</a></li>',
    ));
    ?>


<!--
                    <li class="nav-item px-lg-4 ">
                        <a href="https://apical.xyz/formations"
                           class=" nav-link text-uppercase text-expanded active">Formations <span class="sr-only">(actuel)</span></a>


                    </li>


                    <li class="nav-item px-lg-4">

                        <a href="https://apical.xyz/articles"
                           class="nav-link text-uppercase text-expanded ">Blogue </a>
                           
                    </li>


                    <li class="nav-item px-lg-4 dropdown">
                        <a href="https://apical.xyz/pages/formulairebcrypt" class="dropdown-toggle nav-link text-uppercase text-expanded" data-toggle="dropdown" data-target="#" aria-haspopup="true" aria-expanded="false">Outils </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item "
                               href="https://apical.xyz/pages/formulairebcrypt">Hachage bcrypt </a>
                            <a class="dropdown-item "
                               href="https://apical.xyz/pages/aleatoire">Générateur aléatoire </a>
                            <a class="dropdown-item "
                               href="https://apical.xyz/pages/fontAwesome">Icônes Font Awesome </a>
                        </div>
                    </li>


                    <li class="nav-item px-lg-4 dropdown">
                        <a href="https://apical.xyz/contact"
                           class="dropdown-toggle nav-link text-uppercase text-expanded "
                           data-toggle="dropdown" data-target="#" aria-haspopup="true" aria-expanded="false">Aide </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item "
                               href="https://apical.xyz/contact">Contact </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item "
                               href="https://apical.xyz/apropos">À
                                propos </a>
                        </div>
                    </li>
    -->
                </ul>


                <div class="iconespourmobile">
                    <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47"
                         data-horizontaloffset="0">
                        <a href="https://apical.xyz"><img
                                    src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil"
                                    title="Accueil"/></a>


                        <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche"
                           data-target="#popuprecherche"><img
                                    src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche"
                                    title="Rechercher"/></a>
                        <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification"
                           data-target="#popupauthentification"><img
                                    src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg"
                                    alt="Authentification" title=""/></a>
                    </div>
                </div>

            </div>
        </div>
    </nav>


</div>

<div class="tout_sauf_footer">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Contenu de la formation  PUB020&amp;nbsp;: WordPress sur Apical."/>
<meta name="author" content="Christiane Lagacé : https://christianelagace.com">

<meta name="csrf-token" id="csrf-token" content="NVJkPRReFQtRa7N6cOiDilViUAtIsMhvovDNl5Nh">

<title>Apical | Formation PUB020 : WordPress</title>


<link rel="apple-touch-icon" sizes="180x180" href="https://apical.xyz/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://apical.xyz/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://apical.xyz/favicon-16x16.png">
<link rel="manifest" href="https://apical.xyz/site.webmanifest">
<link rel="mask-icon" href="https://apical.xyz/safari-pinned-tab.svg" color="#3543a0">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">

<meta name="robots" content="noodp"/>

<script data-ad-client="ca-pub-0968524214519104" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

<link rel="stylesheet" href="/css/all.css?id=cdb8941a931052d6bcec75701a413040">

<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">


</head>