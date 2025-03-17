<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="canonical" href="https://staging.screenroot.com/bluedart_aviation/" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/assets/images/header/favicon.ico">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <nav class="header-nav">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="header-wrap">
                            <div class="logo logo-desk" id="header">
                                <?php the_custom_logo(); ?>
                            </div>
                            <div class="navbar">
                                <?php wp_nav_menu(array(
                                'theme_location' => 'header'
                            )); ?>

                                <div class="hamburger">
                                    <img class="bar"
                                        src="<?php bloginfo('template_directory') ?>/assets/images/header/hamburger.svg"
                                        alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>