    <!-- footer section -->
    <footer class='footer-section py-3'>
            <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/muku_logo.png" width="150" alt="">
                            <p>muku@gmail.com</p>
                            <p>Kupondol, Kathmandu</p>
                            <p>+5523070</p>
                        </div>
                        <div class="col-md-4 pt-5">
                            <a href="#" class="nav-link nav-item">CONTACT</a>
                            <a href="#" class="nav-link nav-item">ABOUT</a>
                            <a href="#" class="nav-link nav-item">archives</a>
                            <a href="#" class="nav-link nav-item">newsletter</a>
                        </div>
                        <div class="col-md-4 pt-5">
                            <h4>Social</h4>
                            <div class='pt-2'>
                                <i class="fa fa-facebook fa-2x"></i>
                                <i class="fa fa-instagram fa-2x pl-2"></i>
                                <i class="fa fa-pinterest fa-2x pl-2"></i>
                                <i class="fa fa-twitter fa-2x pl-2"></i>
                            </div>
                        </div>
                    </div>
            </div>

    </footer>
    <div class="contact-overlay" id="contactForm">
        <div class="offset-md-3 col-md-6">
            <div class="row">
                <div class="col-md-7 pr-0">
                    <div class="contact-form">
                        <h4>Send Us a
                            <br>Message </h4>
                        <form action="#">
                            <input type="text" name="email" placeholder="Enter email address">
                            <input type="text" name="subject" placeholder="Enter Subject">
                            <textarea name="message" id="" cols="40" rows="4" placeholder="Enter your message here"></textarea>
                            <input type="submit" name='submit' value="SEND" class='contact-btn'>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 pl-0">
                    <div class="contact-details">
                        <i class="fa fa-times float-right" id="contact-close-modal"></i>
                        <h4>Other Ways To
                            <br> Contact Us</h4>
                        <p class='pl-2'>Our store is located in the heart of the city at Kupondol, lalitpur</p>
                        <div class="contact-details__social-links mt-4 pt-4 pl-3">
                            <div class="mb-3">
                                <i class="fa fa-map-marker fa-2x"></i>
                                <span class='pl-3'>Kupondol, Lalitpur</span>
                            </div>
                            <div class="mb-3">
                                <i class="fa fa-phone fa-2x"></i>
                                <span class='pl-3'>01-551232</span>
                            </div>
                            <div class="mb-3">
                                <i class="fa fa-envelope fa-2x"></i>
                                <span class='pl-3'>muku@email.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>