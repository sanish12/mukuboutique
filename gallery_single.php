<?php
/* Template Name: gallery_single */
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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gallery_single.css">
        <style>
            img {
                margin: 5px;
            }
        </style>
        <title>Muku Boutique</title>
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
                        <a class="nav-link nav-link--active" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.html">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end of navigation -->
        <div class="gallery-landing-section">
            <h4 class="text-center">Event Name</h4>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <hr>
                            </div>
                            <div class="col-4">
                                <p class='text-center'>July 20, 2018</p>
                            </div>
                            <div class="col-4">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-5 offset-md-2 pt-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_7619.jpg" height="750" class="d-none d-sm-none d-md-block d-lg-block d-xl-block" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_7619.jpg" class="img-fluid d-block d-sm-block d-md-none d-lg-none d-xl-none" alt="">
                </div>
                <div class="col-md-3 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2396.jpg" height="200" alt="">
                        </div>
                        <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2343.jpg" height="200" alt="">
                        </div>
                        <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_0123.jpg" alt="" height="200">
                        </div>
                        <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8860.jpg" height="200" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-block d-sm-block d-md-none d-lg-none d-xl-none">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2396.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2343.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri(); ?>//IMG_0123.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_8860.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- end of gallery_single sections -->
 <?php
     get_footer();
 ?>