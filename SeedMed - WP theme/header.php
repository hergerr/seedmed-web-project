<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <title><?php wp_title(); ?></title>

    <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Font Awesome Icons
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="http://seedmed.pl/wp-content/uploads/2018/07/favicon-1.png">

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <section class="top-bar">
            <div class="container">
                <div class="u-pull-right">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="top-bar-contact-location">62-010 Pobiedziska, ul. Lewandowskiego 1</span>
                    <i class="fas fa-phone"></i>
                    <span class="top-bar-contact-phone">tel: +48 669 250 118</span>
                </div>
            </div>
        </section>
        <div class="container">
            <nav>
                <div class="header-logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="SeedMed - Health, Life, Love"/></a>
                </div>
                <div class="header-nav">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><a href="http://seedmed.pl/o-firmie/">O&nbsp;firmie</a></li>
                        <div class="dropdown">
                            <li><a href="#">Kategorie</a></li>
                            <div class="dropdown-content">
                                <a href="http://seedmed.pl/medycyna/">Medycyna</a>
                                <a href="http://seedmed.pl/diagnostyka/">Diagnostyka</a>
                                <a href="http://seedmed.pl/Weterynaria/">Weterynaria</a>
                            </div>
                        </div>
                        <li><a href="http://seedmed.pl/wspolpraca/">Współpraca</a></li>
                        <li><a href="http://seedmed.pl/kontakt/">Kontakt</a></li>

                    </ul>
                </div>

                <div class="header-nav-hamburger" id="hamburger">
                    <div id="menuToggle">
                        <input type="checkbox" />

                        <div class="hamburger-circle"></div>
                        <span></span>
                        <span></span>
                        <span></span>

                        <ul id="menu">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li><a href="http://seedmed.pl/o-firmie/">O&nbsp;firmie</a></li>
                            <li><a href="http://seedmed.pl/medycyna/">Medycyna</a></li>
                            <li><a href="http://seedmed.pl/diagnostyka/">Diagnostyka</a></li>
                            <li><a href="http://seedmed.pl/weterynaria/">Weterynaria</a></li>
                            <li><a href="http://seedmed.pl/wspolpraca/">Współpraca</a></li>
                            <li><a href="http://seedmed.pl/kontakt/">Kontakt</a></li>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>
    </header>
