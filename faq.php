<?php 
    /* Template Name: faq */
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/faq.css">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/muku_logo.png" height="130" width="130" alt="Muku Logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars fa-2x"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mr-5 mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link--active" href="faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end of navigation -->
    <div class="faq-heading-section d-flex justify-content-center">


        <h1 class='pl-2'>Some Frequently asked question
            <br> at Muku
            <hr>
        </h1>
    </div>
    <div class="faq-questions-section pt-5">
        <div class="container">
            <?php
            $args = array(
                            'category_name' => 'faq'
                            // 'posts_per_page' => 
                            ); 
                            $one_query = new WP_Query($args);
                        ?>
                <?php while ($one_query->have_posts()): $one_query->the_post();?>
                <div class="row py-4">
                    <div class="col-md-4">
                        <p class="faq-questions-section__question-head py-3">
                            <?php the_title(); ?>
                            <?php get_the_category(); ?>
                        </p>
                </div>
                <div class="col-md-8">
                <div class="right-faqs">
                        <?php the_content(); ?>
                    </div>
                </div>
                </div>
                <?php
                        endwhile;
                        wp_reset_postdata();
            ?>
        </div>
    </div>
    <!--  -->



    <?php
    get_footer();
?>