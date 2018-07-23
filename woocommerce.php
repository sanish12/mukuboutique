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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/shop.css">
    <title><?php bloginfo('name'); ?></title>
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
                <!-- <li class="nav-item active">
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
                    <a class="nav-link" href="#" id="contact-open">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link--active" href="faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                </li> -->
                <?php wp_list_pages(array(
                    'title_li' => ''
                    )); ?>
            </ul>
        </div>
    </nav>
    <!-- end of navigation -->

<!-- end of navigation -->
<div class="shop-heading-section text-center">

<h4>
<?php woocommerce_page_title(); ?>
</h4>
<p>Home/ All Products</p>
</div>

<!-- start of shop section -->
<div class="shop-section">
<div class="container">
    <div class="row">
        <div class="col-md-3 pr-0">
            <div class="shop-section-aside">
                <div class="row">
                    <div class="col-md-12 pr-0">
                        <div class="shop-section-aside__dress-type">
                            <h4>Dress Type</h4>
                            <div class="shop-section-aside__dress-type--options pl-2">
                                <p>
                                    <a href="#">Lehanga</a>
                                </p>
                                <p>
                                    <a href="#">Sari</a>
                                </p>
                                <p>
                                    <a href="#">Gown</a>
                                </p>
                                <p>
                                    <a href="#">Dhaka</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="shop-section-aside__dress-type">
                            <h4>Filter By</h4>

                            <div class="shop-section-aside__filter--price pl-2">
                                <p>Price</p>
                            </div>
                            <div class="shop-section-aside__filter--colors pl-2">
                                <p>Colors</p>
                            </div>
                            <div class="shop-section-aside__filter--size pl-2">
                                <p>Size</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 pl-0">
            <div class="container">
            <div class="row">
                <div class="col">
                    <hr style="border: 1px solid black;">
                    <div class="sort-products float-right">
                        <label for="sort">Sort By:</label>
                        <?php woocommerce_catalog_ordering(); ?>
                    </div>
                    <div class="clearfix"></div>
                    <hr style="border: 1px solid black;">
                </div>
            </div>
            <div class="products-showcase">
                <div class="row py-3">
                    <!-- <div class="col-md-4 pb-2">
                        <img src="img/IMG_8909.jpg" class="img-fluid" alt="">

                        <h4 class="text-center">
                            <a href="single_product.html">Product Name</a>
                        </h4>
                        <a href="#" class="muku-btn--main text-center mx-4">Details</a>

                    </div>
                    <div class="col-md-4 pb-2">
                        <img src="img/IMG_9583.jpg" class="img-fluid" alt="">
                        <h4 class="text-center">
                            <a href="">Product Name</a>
                        </h4>
                        <a href="#" class="muku-btn--main text-center mx-4">Details</a>
                    </div>
                    <div class="col-md-4">
                        <img src="img/IMG_7631.jpg" class="img-fluid" alt="">
                        <h4 class="text-center">
                            <a href="">Product Name</a>
                        </h4>
                        <a href="#" class="muku-btn--main text-center mx-4">Details</a>
                    </div> -->
                    <?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
                </div>
            </div>
            
        </div>
        </div>
    </div>
</div>
</div>
<!-- end of shop section -->
<?php
    get_footer();
?>