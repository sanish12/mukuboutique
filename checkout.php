<?php
/* Template Name: checkout */
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/checkout.css">
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
<div class="shop-heading-section text-center">
<h4>
 Check-Out
</h4>
<p>Home/ Checkout</p>
</div>
<div class="checkout-muku" style="background-color: #fff;">
<div class="container py-4 mt-2">
<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();         
        the_content();
      endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>