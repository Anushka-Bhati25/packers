<?php include('header.php'); ?>

<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>Contact us</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->



<!-- ------contact-cards------- -->

                    <div class="row" style="display: flex;
                        justify-content: center;">
                        <div class="e-card playing">
                            <div class="image"></div>
                            <div class="wave"></div>
                            <div class="wave"></div>
                            <div class="wave"></div>
                            <div class="infotop">
                                <img src="img/icons/location.png" alt="">
                                <br><br>
                                ADDRESS
                                <br>
                                <div class="name">5/9 DRR Nagar Senneerkuppam,<br> Near Sobha Apartment, Poonamallee, Chennai, Tamilnadu - 600056</div>
                            </div>
                        </div>

                        <div class="e-card playing">
                            <div class="image"></div>
                            <div class="wave"></div>
                            <div class="wave"></div>
                            <div class="wave"></div>
                            <div class="infotop">
                            <img src="img/icons/telephone.png" alt="">
                                <br>
                                <br>
                                PHONE NUMBER
                                <br>
                                <div class="name">9067580888</div>
                            </div>
                        </div>

                        <div class="e-card playing">
                            <div class="image"></div>
                            <div class="wave"></div>
                            <div class="wave"></div>
                            <div class="wave"></div>
                            <div class="infotop">
                            <img src="img/icons/email.png" alt="">
                                <br>
                                <br>
                                EMAIL
                                <br>
                                <div class="name">info@vrlpackersandmovers.com</div>
                            </div>
                        </div>
                    </div>


<!-- ------contact-cards-end------- -->



<!-- Start contact Area -->
<div class="map-area">
    <div class="container">
        <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Start Map -->
                <div class="contact-head">
                        <h3>Request a Contact us</h3>
                        <p>Water The universal acceptance of website has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.</p>
                        <div class="contact-icon">
                            <div class="contact-inner">
                                <h5>Location :</h5>
                                <a href="#"><i class="fa fa-map"></i><span>5/9 DRR Nagar Senneerkuppam,
Near Sobha Apartment, Poonamallee, Chennai, Tamilnadu - 600056</span></a>
                                <a href="tel:+919067580888"><i class="fa fa-phone"></i><span>9067580888</span></a>
                                <a href="#"><i class="fa fa-envelope"></i><span>info@vrlfreightandcargo.com</span></a>
                            </div>
                        </div>
                    </div>
                

                    <!-- End Map -->
                </div>
            </div>
        </div>
    </div>
    <!-- Start contact Area -->
    <div class="contact-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="map-main" style="margin-bottom: 20px;">
                    <div id="googleMap" style="width:100%; height:450px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7034.431220313826!2d80.11413943949715!3d13.057951100510685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5261c022a22c41%3A0x74c56201c0544591!2sSobha%20Serene!5e1!3m2!1sen!2sin!4v1714554277686!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form" style="padding-left: 30px;">
                <form id="contactForm" method="POST" action="submit.php" class="contact-form">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="email" name="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <textarea name="message" id="message" rows="7" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <button type="submit" id="submit" class="contact-btn">Submit</button>
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>



    <?php include('footer.php'); ?>