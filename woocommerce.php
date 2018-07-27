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
                    <div class="col-md-12 pl-0">
                        <div class="shop-section-aside">
                            <div class="woocommerce px-3">
                            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 pl-0">
            <div class="container">
            <?php if(is_product()){
                        //dont show sort by bar
                    } 
                    else{
                    ?>
                    
            <div class="row">
                <div class="col">
                    <hr style="border: 1px solid black;">
                    <div class="sort-products float-right">
                        <?php woocommerce_catalog_ordering(); ?>
                    </div>
                    <div class="clearfix"></div>
                    <hr style="border: 1px solid black;">
                </div>
            </div>
                    <?php  }//show filter by in products section only  ?>
            <div class="products-showcase">
                <!-- <div class="row py-3"> -->
                <div class="woocommerce">    
                    <?php woocommerce_content(); ?>
                    </div>
                <!-- </div> -->
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