<footer class="mh-footer" id="mh-contact">
    <div class="map-image image-bg">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h3>Contact Me</h3>
                </div>
                <div class="col-sm-12 mh-footer-address">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <div class="each-icon">
                                    <i class="fa fa-location-arrow"></i>
                                </div>
                                <div class="each-info">
                                    <h4>Address</h4>
                                    <address>
                                        <?=$about['location']?>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <div class="each-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="each-info">
                                    <h4>Email</h4>
                                    <a href="<?= $users['mail']?>"><?= $users['mail']?></a>  
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <div class="each-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="each-info">
                                    <h4>Phone</h4>
                                    <a href="<?= $about['phone']?>"><?= $about['phone']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <input name="name" class="contact-name form-control" id="name" type="text" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input name="name" class="contact-email form-control" id="L_name" type="text" placeholder="Last Name" required>
                            </div>
                            <div class="col-sm-12">
                                <input name="name" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                            </div>
                            <!-- Subject Button -->
                            <div class="btn-form col-sm-12">
                                <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                    <div class="mh-map">

                    </div>
                </div>
                <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-left text-xs-center">
                                <p>Yusuf Can YILDIRIM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="assets/plugins/js/jquery.min.js"></script>
<script src="assets/plugins/js/popper.min.js"></script>
<script src="assets/plugins/js/bootstrap.min.js"></script>
<script src="assets/plugins/js/owl.carousel.js"></script>
<script src="assets/plugins/js/validator.min.js"></script>
<script src="assets/plugins/js/wow.min.js"></script>
<script src="assets/plugins/js/jquery.mixitup.min.js"></script>
<script src="assets/plugins/js/circle-progress.js"></script>
<script src="assets/plugins/js/jquery.nav.js"></script>
<script src="assets/plugins/js/jquery.fancybox.min.js"></script>
<script src="assets/plugins/js/isotope.pkgd.js"></script>
<script src="assets/plugins/js/packery-mode.pkgd.js"></script>
<script src="assets/js/custom-scripts.js"></script>
</body>

</html>