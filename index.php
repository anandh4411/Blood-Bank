<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blood Donation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blood Donation">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="images/favicon.png" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/style.css">

<body>

    <div id="preloader">
        <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
    </div>

    <!--  HEADER -->

    <header class="main-header clearfix" data-sticky_header="true">

        <div class="top-bar clearfix">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-sm-12">

                        <p>Welcome to blood donation center.</p>

                    </div>

                    <div class="col-md-4col-sm-12">
                        <div class="top-bar-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>

                </div>

            </div> <!--  end .container -->

        </div> <!--  end .top-bar  -->

        <section class="header-wrapper navgiation-wrapper">

            <div class="navbar navbar-default">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.html"><img alt="" src="images/logo.png"></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li style="margin-top: 1%;">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search Blood Group"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </li>
                            <li class="drop">
                                <a href="index.html" title="Home">Home</a>
                            </li>
                            <li><a href="pages/about.html" title="About Us">About Us</a></li>
                            <li>
                                <a href="pages/gallery.html">Gallery</a>
                            </li>
                            <?php

                            if (isset($_SESSION['username'])){
                                echo 
                                '<li>
                                    <div style="margin-top: 10%;" class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'
                                    .$_SESSION["username"].
                                    '<span style="margin-left: 10%;" class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="pages/profile.html">Profile</a></li>
                                    <li><a href="php/logout.php">Logout</a></li>
                                    </ul>
                                    </div>
                                </li>';
                            }
                            else{
                                echo '<li>
                                        <a href="pages/login.html">Login</a>
                                      </li>';
                            }
                            
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

    </header> <!-- end main-header  -->

    <!--  HOME SLIDER BLOCK  -->

    <div class="slider-wrap">

        <div id="slider_1" class="owl-carousel owl-theme">

            <div class="item">
                <img src="images/home_1_slider_1.jpg" alt="img">
                <div class="slider-content text-center">
                    <div class="container">

                        <div class="slider-contents-info">
                            <h3>Donate blood,save life !</h3>
                            <h2>
                                Your Donation Can bring
                                <br>
                                smile at others face
                            </h2>
                            <a href="#donate" class="btn btn-slider">Donate Now <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div> <!-- end .slider-contents-info  -->
                    </div><!-- /.slider-content -->
                </div>
            </div>

            <div class="item">
                <img src="images/home_1_slider_1.jpg" alt="img">
                <div class="slider-content text-center">
                    <div class="container">
                        <div class="slider-contents-info">
                            <h3>Donate blood,save life !</h3>
                            <h2>
                                Donate your blood and
                                <br>
                                Inspires to others
                            </h2>
                            <a href="#" class="btn btn-slider">Join With Us <i class="fa fa-long-arrow-right"></i></a>
                        </div><!-- /.slider-content -->
                    </div> <!-- end .slider-contents-info  -->
                </div>

            </div>
        </div>

    </div>

    <!-- HIGHLIGHT CTA  -->

    <section class="cta-section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>We are helping people from 40 years</h2>
                    <p>
                        You can give blood at any of our blood donation venues all over the world.
                        We have total sixty thousands donor centers and visit thousands of other venues on various
                        occasions.
                    </p>
                </div> <!--  end .col-md-8  -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a class="btn btn-cta-1" href="#">REQUEST APPOINTMENT</a>
                </div> <!--  end .col-md-4  -->
            </div> <!--  end .row  -->
        </div>
    </section>

    <!--  SECTION DONATION PROCESS -->

    <section class="section-content-block section-process">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading"><span>Donation</span> Process</h2>
                    <p class="section-subheading">The donation process from the time you arrive center until the time
                        you leave</p>
                </div> <!-- end .col-sm-10  -->

            </div> <!--  end .row  -->

            <div class="row wow fadeInUp">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="process-layout">

                        <figure class="process-img">

                            <img src="images/process_1.jpg" alt="process" />
                            <div class="step">
                                <h3>1</h3>
                            </div>
                        </figure> <!-- end .process-img  -->

                        <article class="process-info">
                            <h2>Registration</h2>
                            <p>You need to complete a very simple registration form. Which contains all required contact
                                information to enter in the donation process.</p>
                        </article>

                    </div> <!--  end .process-layout -->

                </div> <!--  end .col-lg-3 -->



                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="process-layout">

                        <figure class="process-img">
                            <img src="images/checkup.jpeg" alt="process" />
                            <div class="step">
                                <h3>2</h3>
                            </div>
                        </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->

                        <article class="process-info">
                            <h2>Screening</h2>
                            <p>A drop of blood from your finger will take for simple test to ensure that your blood iron
                                levels are proper enough for donation process.</p>
                        </article>

                    </div> <!--  end .process-layout -->

                </div> <!--  end .col-lg-3 -->


                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="process-layout">

                        <figure class="process-img">
                            <img src="images/blood_donation.jpeg" alt="process" />
                            <div class="step">
                                <h3>3</h3>
                            </div>
                        </figure> <!-- end .process-img  -->

                        <article class="process-info">
                            <h2>Donation</h2>
                            <p>After ensuring and passed screening test successfully you will be directed to a donor bed
                                for donation. It will take only 6-10 minutes.</p>
                        </article>

                    </div> <!--  end .process-layout -->

                </div> <!--  end .col-lg-3 -->



                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="process-layout">

                        <figure class="process-img">
                            <img src="images/refreshment.jpeg" alt="process" />
                            <div class="step">
                                <h3>4</h3>
                            </div>
                        </figure> <!-- end .process-img  -->

                        <article class="process-info">
                            <h2>Refreshment</h2>
                            <p>You can also stay in sitting room until you feel strong enough to leave our center. You
                                will receive awesome drink from us in donation zone. </p>
                        </article>

                    </div> <!--  end .process-layout -->

                </div> <!--  end .col-lg-3 -->

            </div> <!--  end .row -->

        </div> <!--  end .container  -->

    </section> <!--  end .section-process -->

    <!--  SECTION COUNTER   -->

    <section class="section-counter" data-stellar-background-ratio="0.3">

        <div class="container wow fadeInUp">

            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-center">

                        <i class="fa fa-heartbeat icon"></i>
                        <span class="counter">2578</span>
                        <h4>Success Smile</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-center">

                        <i class="fa fa-stethoscope icon"></i>
                        <span class="counter">3235</span>
                        <h4>Happy Donors</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-center">

                        <i class="fa fa-users icon"></i>
                        <span class="counter">3568</span>
                        <h4>Happy Recipient</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-center">

                        <i class="fa fa-building icon"></i>
                        <span class="counter">1364</span>
                        <h4>Total Awards</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->


            </div> <!-- end row  -->

        </div> <!--  end .container  -->

    </section> <!--  end .section-counter -->

    <!--  SECTION APPOINTMENT   -->

    <section id="donate" class="section-appointment">

        <div class="container wow fadeInUp">

            <div class="row">

                <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">

                    <figure class="appointment-img">
                        <img src="images/appointment.jpg" alt="appointment image">
                    </figure>
                </div> <!--  end col-lg-6  -->


                <div id="register" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="appointment-form-wrapper text-center clearfix">
                        <h3 class="join-heading">Register with us</h3>
                        <form action="php/donor-register.php" method="post" class="appoinment-form">
                            <div class="form-group col-md-6">
                                <input id="your_name" class="form-control" placeholder="Name" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_email" class="form-control" placeholder="Email" type="email">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_phone" class="form-control" placeholder="Phone" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_name" class="form-control" placeholder="Location" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <div class="select-style">
                                    <select class="form-control" name="blood_group">
                                        <option>Blood Group</option>
                                        <option>O+</option>
                                        <option>A+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_name" class="form-control" placeholder="Password" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_name" class="form-control" placeholder="Confirm Password" type="text">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button id="btn_submit" class="btn-submit" type="submit">Ready to donate</button>
                            </div>

                        </form>

                    </div> <!-- end .appointment-form-wrapper  -->

                </div> <!--  end .col-lg-6 -->

            </div> <!--  end .row  -->

        </div> <!--  end .container -->

    </section> <!--  end .appointment-section  -->

    <!-- SECTION CTA -->

    <section class="section-content-block cta-section-3">
        <div class="container wow fadeIn animated">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-content text-center">
                        <h2>Join with us and save life</h2>
                        <a class="btn-cta-3" href="#">Register Now</a>
                    </div>
                </div> <!-- end .col-md-12 -->
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!-- end cta-section  -->

    <!--  SECTION GALLERY  -->

    <section class="section-content-block no-bottom-padding section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Photo Gallery</h2>
                    <p class="section-subheading">Campaign photos of different parts of world and our prestigious
                        voluntary work</p>
                </div> <!-- end .col-sm-10  -->


            </div> <!-- end .row  -->

        </div> <!--  end .container -->

        <div class="container-fluid wow fadeInUp">

            <div class="row no-padding-gallery">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_1.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a>

                </div><!-- end .col-sm-3  -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_2.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_2.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a> <!-- end .gallery-light-box  -->

                </div><!-- end .col-sm-3  -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_3.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_3.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a>

                </div><!-- end .col-sm-3  -->

            </div> <!-- end .row  -->

            <div class="row no-padding-gallery">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_4.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_4.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a> <!-- end .gallery-light-box  -->

                </div><!-- end .col-sm-3  -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_5.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_5.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a>

                </div><!-- end .col-sm-3  -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_6.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_6.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a> <!-- end .gallery-light-box  -->

                </div><!-- end .col-sm-3  -->

            </div> <!-- end .row  -->

        </div><!-- end .container-fluid  -->

    </section> <!-- end .section-content-block  -->

    <!-- START FOOTER  -->

    <footer>

        <section class="footer-widget-area footer-widget-area-bg">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="about-footer">

                            <div class="row">

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <img src="images/logo-footer.png" alt="" />
                                </div> <!--  end col-lg-3-->

                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <p>
                                        We are world largest and trustful blood donation center. We have been working
                                        since 1973 with a prestigious vision to helping patient to provide blood.
                                        We are working all over the world, organizing blood donation campaign to grow
                                        awareness among the people to donate blood.
                                    </p>
                                </div> <!--  end .col-lg-9  -->

                            </div> <!--  end .row -->

                        </div> <!--  end .about-footer  -->

                    </div> <!--  end .col-md-12  -->

                </div> <!--  end .row  -->

            </div> <!-- end .container  -->

        </section> <!--  end .footer-widget-area  -->

        <!--FOOTER CONTENT  -->

        <section class="footer-contents">

            <div class="container">

                <div class="row clearfix">

                    <div class="col-md-6 col-sm-12">
                        <p class="copyright-text"> Copyright © 2021, All Right Reserved - Made with love by <a
                                style="color:#FE3C47;" target="_blank" href="https://anandh.xyz">Anandh</a> </p>

                    </div> <!-- end .col-sm-6  -->

                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li><a href="pages/about.html" title="About Us">About Us</a></li>
                                    <li>
                                        <a href="pages/gallery.html">Gallery</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> <!--  end .footer-nav  -->
                    </div> <!--  end .col-lg-6  -->

                </div> <!-- end .row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .footer-content  -->

    </footer>

    <!-- END FOOTER  -->

    <!-- Back To Top Button  -->

    <a id="backTop">Back To Top</a>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.backTop.min.js "></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/waypoints-sticky.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom-scripts.js"></script>
</body>

</html>