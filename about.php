<?php 
    /* Template Name: about */
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
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
                    <a class="nav-link" href="index.html">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link--active" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="contact-open">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end of navigation -->

    <!-- start of about muku section -->
    <div class="about-section">
        <!-- <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class='pb-2'>About Muku</h2>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-7">
                <div class="about-section__founder-image-container px-5"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/founder.jpg" class='img-fluid' alt="">
            </div>
            <div class="col-md-4">
                <div class="about-brand-text">
                    <h3>
                        Behind the Brand
                    </h3>
                    <p class='pt-3 pl-3'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos illum qui recusandae accusamus
                        possimus veniam reiciendis obcaecati ducimus praesentium repudiandae?</p>
                </div>
            </div>
        </div>
    </div>

    <!-- end of about section -->

    <!-- start of features section -->
    <div class="features-section py-4">
        <div class="features-section__heading pl-4">
            <h2>The Promise of Muku</h2>
        </div>
        <div class="features-section__features py-5">
            <div class="container">

                <div class="row py-4">

                    <div class="col-md-6" style="content: '';">
                        <div class="features-section__features-single" style="background: url(<?php echo get_template_directory_uri(); ?>/img/dhaka_feature.jpg) no-repeat center; background-size:cover;">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="features-section__features-single-text">
                            <h4>Hand-woven Dhaka Products</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, maiores odio, aut, non fugit
                                explicabo nisi iste quos ipsam mollitia facere laborum quasi eius at!</p>
                        </div>
                    </div>
                </div>
                <!-- end of feature 1 -->
                <div class="row py-4">
                    <div class="col-md-6 d-block d-sm-block d-md-none d-lg-none d-xl-none" style="content: '';">
                        <div class="features-section__features-single" style="background: url(<?php echo get_template_directory_uri(); ?>/img/custom_design.jpg) no-repeat center; background-size:cover;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="features-section__features-single-text">
                            <h4>Custom Design Services</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, maiores odio, aut, non fugit
                                explicabo nisi iste quos ipsam mollitia facere laborum quasi eius at!</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-sm-none d-md-block d-xl-block d-lg-block" style="content: '';">
                        <div class="features-section__features-single" style="background: url(<?php echo get_template_directory_uri(); ?>/img/custom_design.jpg) no-repeat center; background-size:cover;">
                        </div>
                    </div>

                </div>
                <!-- end of feature 2 -->
                <div class="row py-4">

                    <div class="col-md-6" style="content: '';">
                        <div class="features-section__features-single" style="background: url(<?php echo get_template_directory_uri(); ?>/img/dhaka_feature.jpg) no-repeat center; background-size:cover;">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="features-section__features-single-text">
                            <h4>Ready Made Formal and Casual Ware</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, maiores odio, aut, non fugit
                                explicabo nisi iste quos ipsam mollitia facere laborum quasi eius at!</p>
                        </div>
                    </div>
                </div>
                <!-- end of feature 3 -->
            </div>
        </div>
    </div>
    <!-- end of features section -->

    <!-- start of store section -->
    <div class="store-section py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class='text-center pb-2'>Our Store</h2>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-9">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/map.png" class='img-fluid' alt="">
                </div>
                <div class="col-md-3">
                    <div class="row mt-5">
                        <div class="col-md-12 py-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-map-marker fa-3x"></i>
                                </div>
                                <div class="col-md-9 py-2 px-3">Kupondol, Lalitpur</div>
                            </div>
                        </div>
                        <div class="col-md-12 py-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-3x fa-phone"></i>
                                </div>
                                <div class="col-md-9 py-2 px-3">
                                    <span>+01-512322</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 py-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-clock-o fa-3x"></i>
                                </div>
                                <div class="col-md-9 py-2 px-3">10:30 - 6:30</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of our store section -->


    <?php
     get_footer();
?>