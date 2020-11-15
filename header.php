<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Portfolio landing</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/page_icon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php
    $options = get_option('sample_theme_options');
    echo $options['selectinput']; ?>.css" />

    <?php wp_head(); ?>
</head>
<body>


<div class="page">


<div class="container_preloader">
    <h1 class="loading">Content loading</h1>
    <div class="dash uno"></div>
    <div class="dash dos"></div>
    <div class="dash tres"></div>
    <div class="dash cuatro"></div>

    <div class="close_box">
        <h2>Sorry for waiting... loading content take time<br> but, you close if you want</h2>
        <button class="close_loader_btn" id="close_btn">CLOSE</button>
    </div>
</div>



<header class="header" style="background-image: <?php echo get_template_directory_uri(); ?>/img/bg_2.jpg">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="logo_box">
                    <?php the_field('logo', 54); ?>


                </div>




                <button class="toggle_mnu">
                    <span class="sandwich">
                        <span class="sw-topper"></span>
                        <span class="sw-bottom"></span>
                        <span class="sw-footer"></span>
                    </span>
                </button>
                <nav class="top_mnu">
                    <ul>
                        <li><a href="#" data-scroll="#about">About me</a></li>
                        <li><a href="#" data-scroll="#portfolio">Portfolio</a></li>
                        <li><a href="#" data-scroll="#contacts">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="top_wrapper">
                <div class="top_descr">
                    <div class="top_centered">
                        <div class="top_text">
                            <h1><?php echo get_bloginfo('name'); ?></h1>
                            <p><?php echo get_bloginfo('description'); ?></p>
                            <button data-scroll="#portfolio" class="portfolio_btn">
                                <span class="text">PORTFOLIO</span>
                                <span class="arrow_box">
                                    <span class="arrow">🡆</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</header>