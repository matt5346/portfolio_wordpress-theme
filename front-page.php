<?php /* Template Name: front-page */ ?>
<?php get_header(); ?>

<section class="section s-about bg_light" id="about">

    <div class="section_header">
        <h2>About me</h2>
        <div class="description_wrapper">
            <span>First of all</span>
            <div class="ball">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container">
            <div class="row">

                <?php if ( have_posts() ) : query_posts('p=6');
                    while (have_posts()) : the_post(); ?>

                <div class="col-md-4 about col-md-push-4 animation_center slow">
                    <h3><?php the_title(); ?></h3>
                    <div class="profile_image">
                        <?php if ( has_post_thumbnail()) { ?>
                            <a class="popup" href="<?php
                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                            echo $large_image_url[0];
                            ?>" title="<?php the_title_attribute(); ?>" >
                                <?php the_post_thumbnail(array(220, 220)); ?>
                            </a>
                        <?php } ?>

                    </div>
                </div>
                    <?php endwhile; endif; wp_reset_query(); ?>

                <div class="col-md-4 about col-md-pull-4 animation_left">
                    <?php if ( have_posts() ) : query_posts('p=95');
                        while (have_posts()) : the_post(); ?>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>

                        <?php endwhile; endif; wp_reset_query(); ?>

                </div>

                <div class="col-md-4 about animation_right">
                    <?php if ( have_posts() ) : query_posts('p=9');
                        while (have_posts()) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>

                    <?php endwhile; endif; wp_reset_query(); ?>
                    <div class="tools_wrap">

                        <ul>
                            <li><a href="#" title="html" target="_blank"><i class="fab fa-html5"></i></a></li>
                            <li><a href="#" title="css" target="_blank"><i class="fab fa-css3"></i></a></li>
                            <li><a href="#" title="sass" target="_blank"><i class="fab fa-sass"></i></a></li>
                            <li><a href="#" title="js" target="_blank"><i class="fab fa-js"></i></a></li>
                            <li><a href="#" title="php" target="_blank"><i class="fab fa-php"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section s-portfolio bg_dark" id="portfolio">

    <div class="section_header">

        <h2>Portfolio</h2>
        <div class="description_wrapper">
            <span>Last works</span>
            <div class="ball">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>

    </div>


    <div class="content">
        <div class="container">
            <div class="row">
                <div class="filter_div controls">
                    <ul>
                        <li class="filter active" data-filter="all">All</li>
                        <li class="filter" data-filter=".site">Web sites</li>
                        <li class="filter" data-filter=".landing">Landings</li>
                        <li class="filter" data-filter=".app">Apps</li>
                    </ul>
                </div>

                <div id="portfolio_grid">
                    <!--vr-traveling-->
                    <div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item landing" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/vr/main.png" alt="">
                        <div class="item_overlay">
                            <h3>VR-traveling</h3>
                            <p>Check work here</p>
                            <a href="#" class="popup_content">Click here</a>
                        </div>

                        <div class="hidden">
                            <div class="work_description" id="">

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/vr/1.png" alt="">
                                    <div class="slide_text">
                                        <h1>VR-traveling</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                            <a class="vr_site" href="https://vr-traveling.com/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'vr-traveling'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/vr/2.png" alt="">
                                    <div class="slide_text">
                                        <h1>VR-traveling</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                            <a class="vr_site" href="https://vr-traveling.com/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'vr-traveling'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/vr/3.png" alt="">
                                    <div class="slide_text">
                                        <h1>VR-traveling</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                            <a class="vr_site" href="https://vr-traveling.com/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'vr-traveling'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/vr/4.png" alt="">
                                    <div class="slide_text">
                                        <h1>VR-traveling</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                            <a class="vr_site" href="https://vr-traveling.com/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'vr-traveling'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/vr/5.png" alt="">
                                    <div class="slide_text">
                                        <h1>VR-traveling</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                            <a class="vr_site" href="https://vr-traveling.com/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'vr-traveling'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/vr/6.png" alt="">
                                    <div class="slide_text">
                                        <h1>VR-traveling</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                            <a class="vr_site" href="https://vr-traveling.com/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Popup form of 'vr-traveling'</p>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!--When hungry-->
                    <div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item site" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/hp_fg.png" alt="">
                        <div class="item_overlay">
                            <h3>When Hungry</h3>
                            <p>Check work here</p>
                            <a href="#" class="popup_content">Click here</a>
                        </div>

                        <div class="hidden">
                            <div class="work_description" id="">

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/7.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                            <span>Already released</span>
                                        </div>
                                        <p>Presenting fully responsive website, which were made according to Figma design, and was provided by customer</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/1_1.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'When Hungry'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/2.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'When Hungry'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/2_2.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'When Hungry'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/3.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'When Hungry'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/3_3.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Main page of 'When Hungry'</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/4.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Order part of this website</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/4_4.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Order part of this website</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/5.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Order part of this website</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/5_5.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>Order part of this website</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/6.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>About 'When Hungry' page</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp/6_6.png" alt="">
                                    <div class="slide_text">
                                        <h1>Hungry</h1>
                                        <div>
                                            <h3>Website</h3>
                                            <a class="hp_site" href="https://www.хочу-поесть.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                        <p>About 'Hungry' page</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--When hungry APP-->
                    <div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item app" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp_app/hp_app_1.png" alt="">
                        <div class="item_overlay">
                            <h3>When Hungry APP</h3>
                            <p>Check work here</p>
                            <a href="#" class="popup_content">Click here</a>
                        </div>

                        <div class="hidden">
                            <div class="work_description" id="">

                                <div class="slide">
                                    <video width="80%" height="auto" autoplay muted loop>
                                        <source src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp_app/app.mp4" type="video/mp4">
                                    </video>
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>App</h3>
                                            <span>This one project is new, release gonna be soon</span>
                                        </div>
                                        <p>When Hungry delifery food app, for pads and phones</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp_app/hp_app_2.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>App</h3>
                                            <span>This one project is new, release gonna be soon</span>
                                        </div>
                                        <p>When Hungry delifery food app, for pads and phones</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp_app/hp_app_3.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>App</h3>
                                            <span>This one project is new, release gonna be soon</span>
                                        </div>
                                        <p>When Hungry delifery food app, for pads and phones</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/hp_app/hp_app_1.png" alt="">
                                    <div class="slide_text">
                                        <h1>When Hungry</h1>
                                        <div>
                                            <h3>App</h3>
                                            <span>This one project is new, release gonna be soon</span>
                                        </div>
                                        <p>When Hungry delifery food app, for pads and phones</p>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!--Fitness-->
                    <div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item site" >
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/fitness/fitness.png" alt="">
                            <div class="item_overlay">
                                <h3>Fitness website</h3>
                                <p>Check work here</p>
                                <a href="#" class="popup_content">Click here</a>
                            </div>

                            <div class="hidden">
                                <div class="work_description" id="">
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/fitness/fitness_1.png" alt="">
                                        <div class="slide_text">
                                            <h1>Fitness</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <span>This is new project, not released yet</span>
                                            </div>
                                            <p>Another website, main theme is Fitness,fully responsive and crossbrowsing</p>
                                        </div>

                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/fitness/fitness_2.png" alt="">
                                        <div class="slide_text">
                                            <h1>Fitness</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <span>This is new project, not released yet</span>
                                            </div>
                                            <p>Another website, main theme is Fitness,fully responsive and crossbrowsing</p>
                                        </div>

                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/fitness/fitness_3.png" alt="">
                                        <div class="slide_text">
                                            <h1>Fitness</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <span>This is new project, not released yet</span>
                                            </div>
                                            <p>Another website, main theme is Fitness,fully responsive and crossbrowsing</p>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/fitness/fitness_4.png" alt="">
                                        <div class="slide_text">
                                            <h1>Fitness</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <span>This is new project, not released yet</span>
                                            </div>
                                            <p>Another website, main theme is Fitness,fully responsive and crossbrowsing</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>

                    <!--Beatyscope-->
                    <div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item site" >
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/beatyscope/beatyscope.png" alt="">
                            <div class="item_overlay">
                                <h3>Beatyscope website</h3>
                                <p>Check work here</p>
                                <a href="#" class="popup_content">Click here</a>
                            </div>

                            <div class="hidden">
                                <div class="work_description" id="">
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/beatyscope/beatyscope_1.png" alt="">
                                        <div class="slide_text">
                                            <h1>Beatyscope</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="beaty_site" href="https://www.бьютископ.рф/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span>Already realeased, follow link to check it</span>
                                            </div>
                                            <p>Website for beaty salon services, again full adaptive website, and crossbrowsing</p>
                                        </div>

                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/beatyscope/beatyscope_2.png" alt="">
                                        <div class="slide_text">
                                            <h1>Beatyscope</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="beaty_site" href="https://www.бьютископ.рф/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span>Already realeased, follow link to check it</span>
                                            </div>
                                            <p>Website for beaty salon services, again full adaptive website, and crossbrowsing</p>
                                        </div>

                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/beatyscope/beatyscope_3.png" alt="">
                                        <div class="slide_text">
                                            <h1>Beatyscope</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="beaty_site" href="https://www.бьютископ.рф/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span>Already realeased, follow link to check it</span>
                                            </div>
                                            <p>Website for beaty salon services, again full adaptive website, and crossbrowsing</p>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/beatyscope/beatyscope_4.png" alt="">
                                        <div class="slide_text">
                                            <h1>Beatyscope</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="beaty_site" href="https://www.бьютископ.рф/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span>Already realeased, follow link to check it</span>
                                            </div>
                                            <p>Website for beaty salon services, again full adaptive website, and crossbrowsing</p>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/beatyscope/beatyscope_5.png" alt="">
                                        <div class="slide_text">
                                            <h1>Beatyscope</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="beaty_site" href="https://www.бьютископ.рф/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span>Already realeased, follow link to check it</span>
                                            </div>
                                            <p>Website for beaty salon services, again full adaptive website, and crossbrowsing</p>
                                        </div>

                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/beatyscope/beatyscope_6.png" alt="">
                                        <div class="slide_text">
                                            <h1>Beatyscope</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="beaty_site" href="https://www.бьютископ.рф/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span>Already realeased, follow link to check it</span>
                                            </div>
                                            <p>Website for beaty salon services, again full adaptive website, and crossbrowsing</p>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/beatyscope/beatyscope_7.png" alt="">
                                        <div class="slide_text">
                                            <h1>Beatyscope</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="beaty_site" href="https://www.бьютископ.рф/" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span>Already realeased, follow link to check it</span>
                                            </div>
                                            <p>Website for beaty salon services, again full adaptive website, and crossbrowsing</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>

                    <!--Car lawyer-->
                    <div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item site" >
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/car/car_fg.png" alt="">
                            <div class="item_overlay">
                                <h3>Drivers lawyer</h3>
                                <p>Check work here</p>
                                <a href="#" class="popup_content">Click here</a>
                            </div>

                            <div class="hidden">
                                <div class="work_description" id="">
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/car/car_1.png" alt="">
                                        <div class="slide_text">
                                            <h1>Drivers lawyer website</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="car_site" href="https://www.онлайн-автоюрист.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span> it's already working</span>
                                            </div>
                                            <p>Fully responsive website, which were made according to Figma design, and was provided by customer</p>
                                        </div>

                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/car/car_2.png" alt="">
                                        <div class="slide_text">
                                            <h1>Drivers lawyer website</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="car_site" href="https://www.онлайн-автоюрист.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span> it's already working</span>
                                            </div>
                                            <p>Fully responsive website, which were made according to Figma design, and was provided by customer</p>
                                        </div>

                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/car/car_3.png" alt="">
                                        <div class="slide_text">
                                            <h1>Drivers lawyer website</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="car_site" href="https://www.онлайн-автоюрист.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span> it's already working</span>
                                            </div>
                                            <p>Fully responsive website, which were made according to Figma design, and was provided by customer</p>
                                        </div>

                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/car/car_4.png" alt="">
                                        <div class="slide_text">
                                            <h1>Drivers lawyer website</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="car_site" href="https://www.онлайн-автоюрист.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span> it's already working</span>
                                            </div>
                                            <p>Fully responsive website, which were made according to Figma design, and was provided by customer</p>
                                        </div>

                                    </div>
                                    <div class="slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/car/car_5.png" alt="">
                                        <div class="slide_text">
                                            <h1>Drivers lawyer website</h1>
                                            <div>
                                                <h3>Website</h3>
                                                <a class="car_site" href="https://www.онлайн-автоюрист.рф" target="_blank">check here <i class="fa fa-arrow-left"></i></a>
                                                <span> it's already working</span>
                                            </div>
                                            <p>Fully responsive website, which were made according to Figma design, and was provided by customer</p>
                                        </div>

                                    </div>




                                </div>
                            </div>

                    </div>

                    <!--ICO 'When Hungry'-->
                    <div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item landing" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/ico_fg.png" alt="">
                        <div class="item_overlay">
                            <h3>ICO 'When Hungry'</h3>
                            <p>Check work here</p>
                            <a href="#" class="popup_content">Click here</a>
                        </div>

                        <div class="hidden">
                            <div class="work_description" id="">

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/6.png" alt="">
                                    <div class="slide_text">
                                        <h1>ICO 'When Hungry'</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                        </div>
                                        <p>So here is another landing page I made</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/1_1.png" alt="">
                                    <div class="slide_text">
                                        <h1>ICO 'When Hungry'</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                        </div>
                                        <p>So here is another landing page I made</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/3.png" alt="">
                                    <div class="slide_text">
                                        <h1>ICO 'When Hungry'</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                        </div>
                                        <p>So here is another landing page I made</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/3_3.png" alt="">
                                    <div class="slide_text">
                                        <h1>ICO 'When Hungry'</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                        </div>
                                        <p>So here is another landing page I made</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/4.png" alt="">
                                    <div class="slide_text">
                                        <h1>ICO 'When Hungry'</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                        </div>
                                        <p>So here is another landing page I made</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/4_4.png" alt="">
                                    <div class="slide_text">
                                        <h1>ICO 'When Hungry'</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                        </div>
                                        <p>So here is another landing page I made</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/5.png" alt="">
                                    <div class="slide_text">
                                        <h1>ICO 'When Hungry'</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                        </div>
                                        <p>So here is another landing page I made</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/5_5.png" alt="">
                                    <div class="slide_text">
                                        <h1>ICO 'When Hungry'</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                        </div>
                                        <p>So here is another landing page I made</p>
                                    </div>

                                </div>

                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/ico/6.png" alt="">
                                    <div class="slide_text">
                                        <h1>ICO 'When Hungry'</h1>
                                        <div>
                                            <h3>Landing page</h3>
                                        </div>
                                        <p>So here is another landing page I made</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--SurferCo-->
                    <div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item landing" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/surfer/surfer_fg.png" alt="">
                        <div class="item_overlay">
                            <h3>SurferCo</h3>
                            <p>Check work here</p>
                            <a href="#" class="popup_content">Click here</a>
                        </div>

                        <div class="hidden">
                            <div class="work_description" id="">
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/surfer/boards_1.png" alt="">
                                    <div class="slide_text">
                                        <h1>SurferCo</h1>
                                        <h3>Landing page</h3>
                                        <p>This one from my practice projects</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/surfer/boards_2.png" alt="">
                                    <div class="slide_text">
                                        <h1>SurferCo</h1>
                                        <h3>Landing page</h3>
                                        <p>This one from my practice projects</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/surfer/boards_3.png" alt="">
                                    <div class="slide_text">
                                        <h1>SurferCo</h1>
                                        <h3>Landing page</h3>
                                        <p>This one from my practice projects</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/surfer/boards_4.png" alt="">
                                    <div class="slide_text">
                                        <h1>SurferCo</h1>
                                        <h3>Landing page</h3>
                                        <p>This one from my practice projects</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/surfer/boards_5.png" alt="">
                                    <div class="slide_text">
                                        <h1>SurferCo</h1>
                                        <h3>Landing page</h3>
                                        <p>This one from my practice projects</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/surfer/boards_6.png" alt="">
                                    <div class="slide_text">
                                        <h1>SurferCo</h1>
                                        <h3>Landing page</h3>
                                        <p>This one from my practice projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--Mogo-->
                    <div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item landing">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/mogo/mogo_fg.png" alt="">
                        <div class="item_overlay">
                            <h3>Mogo</h3>
                            <p>Check work here</p>
                            <a href="#" class="popup_content">Click here</a>
                        </div>

                        <div class="hidden">
                            <div class="work_description" id="">
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/mogo/mogo_1.png" alt="">
                                    <div class="slide_text">
                                        <h1>Mogo</h1>
                                        <h3>Landing page</h3>
                                        <p>This one from my practice projects, here I turn PSD to full landing page</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/mogo/mogo_2.png" alt="">
                                    <div class="slide_text">
                                        <h1>Mogo</h1>
                                        <h3>Landing page</h3>
                                        <p>This one from my practice projects, here I turn PSD to full landing page</p>
                                    </div>

                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/mogo/mogo_3.png" alt="">
                                    <div class="slide_text">
                                        <h1>Mogo</h1>
                                        <h3>Landing page</h3>
                                        <p>This one from my practice projects, here I turn PSD to full landing page</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</section>


<section class="section s-contact bg_light" id="contacts">

    <div class="section_header">
        <h2>Contact</h2>
        <div class="description_wrapper">
            <span>Write me</span>
            <div class="ball">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 left">
                    <div class="contact_box">
                            <a href="#">
                                <i class="fa fa-paper-plane"></i>
                                <span class="socials" >E-mail: matvey20.18@bk.ru</span>
                            </a>
                    </div>
                    <div class="contact_box">
                            <a href="https://www.instagram.com/just.codeit" target="_blank">
                                <i class="fab fa-instagram"></i>
                                <span class="socials" >instagram: (publish my works)</span>
                            </a>
                    </div>
                    <div class="contact_box">
                            <a href="https://github.com/matt5346" target="_blank">
                                <i class="fab fa-github"></i>
                                <span class="socials" >Github (code of my works)</span>
                            </a>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8 right">

                    <!--

                    <form action="http://formspree.io/matvey5346@bk..ru" class="main_form" novalidate target="_blank" method="post">
                        <label class="form-group">
                            <span class="color_element">*</span> Your name:
                            <input type="text" name="name" placeholder="Write your name..." data-validation-required-message="Вы не ввели имя" required />
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span> Your E-mail:
                            <input type="email" name="email" placeholder="Write your E-mail..." data-validation-required-message="Не корректно введен E-mail" required />
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span> Your message:
                            <textarea name="message" placeholder="And type something here!" data-validation-required-message="Вы не ввели сообщение" required></textarea>
                            <span class="help-block text-danger"></span>
                        </label>
                        <button>Send</button>
                    </form>

                    -->

                    <?php echo do_shortcode('[contact-form-7 id="74" title="Contact form 1"]'); ?>


                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
