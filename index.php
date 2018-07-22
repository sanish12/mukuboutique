<?php
    get_header();
?>
    <div class="landing-elements pt-3">
        <div class="row d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="col-md-12 pr-0 pt-0">
                <div class="landing-elements__image--mobile" style="content: 's ';background: url(<?php echo get_template_directory_uri(); ?>/img/landing_image_mobile.jpg) no-repeat center; background-size: cover;">

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 pr-0">
                <div class="row" id="logoAndBrand">
                    <div class="col-md-3">
                        <div class="muku-logo-container">

                        </div>
                    </div>
                    <div class="col-md-9">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/muku_logo.png" alt="" class="muku-logo img-fluid">
                    </div>
                </div>

                <!-- for mobile landing layout  -->
                <div class="mobile-landing__left-layout d-block d-sm-block d-md-none d-lg-none d-xl-none">
                    <div class="row mt-3">
                        <div class="offset-md-5 col-md-4 pr-0">
                            <a href="#" id="main-landing-shop-btn" class="btn muku-btn--main">Shop</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="offset-md-3 col-md-6 landing-elements__introductory-text">
                            <p>
                                Muku Better when its on you !! Browse through our store to see some of our best products, happy shopping !
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end for mobile landing layout -->

                <!-- start of desktop landing layout -->
                <div class="desktop-landing__left-layout d-none d-sm-none d-md-block d-lg-block d-xl-block">
                    <div class="row mt-5">
                        <div class="offset-md-3 col-md-6 pt-3 landing-elements__introductory-text">
                            <p>
                                Muku Better when its on you !! Browse through our store to see some of our best products, happy shopping !
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="offset-md-5 col-md-4 mb-3">
                            <a href="#" id="main-landing-shop-btn" class="btn muku-btn--main">Shop</a>
                        </div>
                    </div>
                </div>
                <!-- end of left side for desktop landing -->
            </div>
            <!-- start of right side for desktop landing -->
            <div class="col-md-6 pr-5 d-none d-sm-none d-md-block d-lg-block">
                <div class="landing-elements__image" style="content: 's ';background: url(<?php echo get_template_directory_uri(); ?>/img/landing_image.jpg) no-repeat center; background-size: cover;">

                </div>
            </div>
            <!-- end of right side for desktop landing -->
        </div>
    </div>
    <!-- end of landing elements -->
    <!-- start of collection section -->
    <div class="collection-section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Our Collection</h2>
                </div>
                <div class="offset-md-4 col-md-4 text-center">
                    <p class='text-center'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quod vero iure ut eligendi, quae
                        doloribus minus sint quia corrupti! </p>
                </div>
            </div>
        </div>
        <div class="collection-section__products container mt-3 py-5">
            <div class="row justify-content-center" id='arrow-before'>
                <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block collection-showcase collection-showcase__left" style="background: url(<?php echo get_template_directory_uri(); ?>/img/showcase_left.jpg) no-repeat center; background-size: cover;"
                    id="showcase1">
                    <div class="col-md-4">
                    </div>
                </div>
                <div class="collection-showcase collection-showcase__center" style="background: url(<?php echo get_template_directory_uri(); ?>/img/showcase_center.jpg) no-repeat center; background-size: cover;"
                    id="showcase2">
                    <div class="col-md-4">
                    </div>
                </div>
                <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block collection-showcase collection-showcase__right" style="background: url(<?php echo get_template_directory_uri(); ?>/img/showcase_right.jpg) no-repeat center; background-size: cover;"
                    id="showcase3">
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="offset-md-5 col-md-2">
                    <a href="#" class="btn muku-btn--main">Shop</a>
                </div>
            </div>
        </div>
        <div class="collection-section__brand-ambassadors">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="collection-section__brand-ambassadors--left">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/celebrity_1.jpg" alt="" class='img-fluid' srcset="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="collection-section__brand-ambassadors-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni veniam esse quibusdam cum eius
                                obcaecati ab nesciunt quia quis inventore quas consectetur atque, consequatur velit, enim
                                nam error adipisci dolores!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="ambassador-right">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="collection-section__brand-ambassadors--right">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/celebrity_2.jpg" class='img-fluid' alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class='collection-section__brand-ambassadors-text'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae ex, rerum ab, ratione adipisci
                                iure hic quo est sequi quis minima eaque iusto maxime quibusdam id voluptatum reprehenderit?
                                Ratione, ipsa!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of collection section -->

    <!-- start of about muku section -->
    <div class="about-section">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class='pb-2'>About Muku</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about-section__founder-image-container"></div>
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
                                    <i class="fa fa-map-marker fa-3x" id="contact-close"></i>
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