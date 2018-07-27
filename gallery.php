<?php
/* Template Name: gallery */
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- import all of the necessary files -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <!-- when the gulp file is run, the scss/style.scss get compiled to style.css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gallery.css">
        <title>
            <?php bloginfo('name'); ?>
        </title>
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/muku_logo.png" height="150" width="150" alt="Muku Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars fa-2x"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mr-5 mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link--active" href="<?php echo get_template_directory_uri(); ?>/gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/#" id="contact-open">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/faq.html">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/shop.html">Shop</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end of navigation -->

        <!-- gallery landing section -->

        <div class="gallery-landing-section">

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-4">
                            <div class="muku-logo-container">

                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Gallery</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 offset-md-3">
                            <p class="pt-4">
                                &nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem at placeat exercitationem quod, dolor provident non
                                inventore doloremque eveniet fuga?
                            </p>
                        </div>
                    </div>
                    <div class="row d-block d-sm-block d-md-none d-lg-none d-xl-none">
                        <div class="col-md-12 px-0" style="height: 35vh; background: url(img/gallery_landing.jpg) no-repeat center; background-size: cover;">

                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                </div>
            </div>

        </div>

        <!-- end of gallery landing section -->

        <!-- gallery sections -->
        <div class="container">
            <div class="gallery-section-links py-5">
                <div class="row py-3">
                <?php
                         $the_query = new WP_Query(array(
                            'category_name' => 'gallery',
                            'post_status' => 'publish',
                            'posts_per_page' => 9
                        )); 
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();?>
                    <div class="col-md-4 gallery-section-links__single">
                        <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                        </a>
                        <h4 class="text-center pt-2">
                            <a href="#"> Event Name </a>
                        </h4>
                        <p class="text-center event-date">21 July, 2018</p>
                    </div>
                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                        <p><?php __('No News'); ?></p>
                        <?php endif; ?>
                </div>
                
            </div>
        </div>
        <!-- end of gallery sections -->

        <?php
                get_footer();
            ?>