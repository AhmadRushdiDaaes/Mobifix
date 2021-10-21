<?php
include 'includes/connection.php';
if(isset($_POST['submit'])){
	$contact_name    = $_POST['name'];
	$contact_email   = $_POST['email'];
	$contact_subject = $_POST['subject'];
	$contact_message = $_POST['message'];



$query ="insert into contact_us(contact_name,contact_email,contact_subject,contact_message)
	    values('$contact_name','$contact_email','$contact_subject','$contact_message')";

	    mysqli_query($con,$query);
	    
}
?>



<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>MOBIFIX </title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
    <link rel="shortcut icon" href="ashod_logo.png" type="image/x-icon">
    <link rel="icon" href="logo_mobifix" type="image/x-icon">

    <!-- ==== Google Font ==== -->
    <!-- ==== Google Font ==== -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700%7CSource+Sans+Pro:300,400,600" rel="stylesheet">

    <!-- ==== Font Awesome ==== -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    <!-- ==== jQuery UI ==== -->
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    
    <!-- ==== Bootstrap ==== -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ==== Owl Carousel Plugin ==== -->
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    
    <!-- ==== jQuery FakeLoader Plugin ==== -->
    <link href="css/fakeLoader.min.css" rel="stylesheet">
    
    <!-- ==== jQuery Timepicker Plugin ==== -->
    <link href="css/jquery.timepicker.min.css" rel="stylesheet">
    
    <!-- ==== jQuery Magnific Popup Plugin ==== -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    
    <!-- ==== Main Stylesheet ==== -->
    <link href="style.css" rel="stylesheet">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link href="css/responsive-style.css" rel="stylesheet">
    
    <!-- ==== Theme Color Stylesheet ==== -->
    <link href="css/colors/color-1.css" rel="stylesheet" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    
    <!-- Preloader Start -->
    <div class="preloader bg--color-theme"></div>
    <!-- Preloader End -->
    
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section">
            <!-- Header Topbar Start -->
            
            <!-- Header Topbar End -->

            <!-- Header Navbar Top Start -->
            <div class="header--navbar-top">
                <div class="container">
                    <!-- Logo Start -->
                    <div class="logo float--left">
                        <div class="vc--parent">
                            <div class="vc--child">
                                <a href="index.php"><img src="img/ashod_logo_HH3_icon.ico" alt="Quick Fix Logo" data-rjs="2"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Logo End -->

                    <div class="float--right">
                        <!-- Header Navbar Top Info Start -->
                        <div class="header--navbar-top-info float--left">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <ul class="nav">
                                        <li>
                                            <div class="icon text--primary">
                                                <i class="fa fa-vcard-o"></i>
                                            </div>
                                            <div class="content">
                                                <p><a href="tel:+788344472">+962788344472</a></p>
                                                <p><a href="mailto:example@example.com">mobifixcompany14@gmail.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon text--primary">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="content">
                                                <p>We will arrive you at</p>
                                                <p> your home</p>
                                                
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon text--primary">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="content">
                                                <p>You can choose any good date </p>
                                                <p class="text--primary">for you</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Header Navbar Top Info End -->

                        <!-- Header Navbar Top Button Start -->
                        <div class="header--navbar-top-btn float--left">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <a href="index.php#appointment" class="btn btn-default">Make An Appoinment</a>
                                </div>
                            </div>
                        </div>
                        <!-- Header Navbar Top Button End -->
                    </div>
                </div>
            </div>
            <!-- Header Navbar Top End -->

            <!-- Header Navbar Start -->
            <nav class="header--navbar navbar" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--left">
                        <!-- Header Nav Links Start -->
                        <ul class="header--nav-links nav navbar-nav font--secondary">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="services.php">Our Services</a></li>
                            
                            <li class="dropdown megamenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<i class="fa fa-angle-down"></i></a>

                                <div class="dropdown-menu font--primary clearfix">
                                    <div class="row reset--gutter">
                                        <ul class="nav col-md-3 col-sm-6">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="pricing.php">Pricing</a></li>
                                            <li><a href="services.php">Our Services</a></li>
                                            <li><a href="experts.php">Experts</a></li>
                                            <li><a href="rate_now.php">Rate Us</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                        </ul>
                                        <ul class="nav col-md-3 col-sm-6">
                                            <li><a href="register_fixer.php">Be in Our Team</a></li>
                                            <li><a href="fixer_dashboard/login_fixer.php">sign in Technician</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            
                                            
                                            
                                        </ul>


                                        <div class="megamenu-img col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 hidden-xs">
                                            <img src="ashod_logo.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li><a href="rate_now.php">Rate Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <!-- Header Nav Links End -->
                    </div>

                    <!-- Header Navbar Search Start -->
                    <div class="header--nav-search dropdown float--right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>

                        <div class="dropdown-menu" data-form-validation="true">
                            <form action="#" method="get">
                                <input type="search" name="search" placeholder="I’m Looking For..." class="form-control" required>
                            </form>
                        </div>
                    </div>
                    <!-- Header Navbar Search End -->
                </div>
            </nav>
            <!-- Header Navbar End -->
        </header>        <!-- Header Section End -->

        <!-- Page Header Section Start -->
        <div class="page-header--section text-center">
            <!-- Page Title Start -->
            <div class="page--title pd--130-0" data-bg-img="admin/images/bg-title-01.jpg">
                <div class="container">
                                    </div>
            </div>
            <!-- Page Title End -->

            <!-- Page Breadcrumb Start -->
            <div class="page--breadcrumb font--secondary">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Mobifix</a></li>
                        <li class="active"><span>Contact</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
        <!-- Page Header Section End -->

        <!-- Contact Section Start -->
        <div class="contact--section pd--100-0-40">
            <div class="container">
                <div class="row">
                    <!-- Contact Content Start -->
                    <div class="contact--content col-md-8 pb--60">
                        <h2 class="contact--title h4">Contact Information</h2>

                        <div class="row">
                            <div class="col-sm-7">
                                <p>Mobifix will offer to you service that you need at time you need ,we will present all category for most popular mobiles in jordan,
                                    we have best service.<br>#big_or_small_we_fix_all<br>#mobifix_all_brands</p>

                                <p>we have best techniction in jordan .every one of them have huge experience at laste three years ago,and they can dealing with all brands and with all problems . our technician can communicate with all customers at amman and jordan</p>
                                <p>We in mobifix alwayse hope to make customer happy by provide best services and best fixers and accurincy in date and time.in addition providing best ways to make yor feed back from us more improved</p>
                                <p>you can contact us any time , but if your contact about consulatation please make free consultation feature and if was about rate fixer please go to Rate us Page .</p>
                                <p>We alwayas hope to better in maintainance shops in jordan so please give us any information can help us. </p>
                            </div>
                             
                            <div class="col-sm-5">
                                <ul>
                                    <li class="fa-home">
                                        <p>MobiFix fix your mobile at your home , we arrive all jordan's areas.</p>
                                    </li>
                                    <li class="fa-envelope">
                                        <p> <a href="Mobifixcompany14@gmail.com">Mobifixcompany14@gmail.com</a></p>
                                    </li>
                                    <li class="fa-phone-square">
                                        <p><a href="tel:+788344472">+962788344472</a></p>
                                    </li>
                                    <li class="fa-clock-o">
                                        <p>Mobifix All time<span>(Any time)</span></p>
                                    </li>
                                </ul>
                                 <br>
                                <p>Mobifix interest in our customer , and we hope to contact us to help you in any information you need or any feedback for us</p>
                            </div>
                        </div>

                    </div>
                    <!-- Contact Content End -->

                    <!-- Contact Form Start -->
                    <div class="contact--form col-md-4 pb--60" >
                        <h2 class="contact--title h4">Drop Us A line</h2>

                        <form action="" method="post">
                            <div class="status"></div>

                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail Address" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>

                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Write Message" required></textarea>
                            </div>

                            <input class="btn btn-default" type="submit" name="submit" value="Send Message">

                            
                        </form>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Call To Action Section Start -->
        <div class="cta--section bg--color-darkgray">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <!-- Call To Action Content Start -->
                        <div class="cta--content">
                            <h2 class="h3">Looking For A Job &amp; Be one of our team</h2>

                            <p>There are many opportunities to increase your monthly income with us.</p>
                        </div>
                        <!-- Call To Action Content Start -->
                    </div>

                    <div class="col-md-3">
                        <!-- Call To Action Button Start -->
                        <div class="cta--btn">
                            <a href="register_fixer.php" class="btn btn-default">Register Now </a>
                        </div>
                        <!-- Call To Action Button Start -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action Section End -->

        <!-- Footer Section Start -->
         <div class="footer--section bg--color-dark">
            <div class="footer--copyright-border"></div>

            <div class="container bg--overlay">
                <div class="row reset--gutter">
                    <div class="col-md-3 bg--color-theme bg--overlay">
                        <!-- Footer About Start -->
                        <div class="footer--about">
                           

                                <div class="widget--title">
                                    <h2 class="h4">About Us</h2>
                                </div>

                            <div class="content">
                                <p>Mobifix company is best choice for you to repair your mobile .High quality and lowst price in Jordan.
                                #Mobifix_All_Brands_Mobile_Phones.</p>
                            </div>

                            <div class="link">
                                <a href="about.html">Read More<i class="fa flm fa-angle-double-right"></i></a>
                            </div>

                            <div class="info">
                                <ul class="nav">
                                    <li class="fa-home">We arrive you at home any where in jordan </li>

                                    <li class="fa-envelope"> <a href="">MobifixCompany14@gmail.com</a></li>

                                    <li class="fa-phone-square"><a href="mailto:+788344472">+788344472</a> </li>

                                    <li class="fa-clock-o">We arrive you at your home <span>(Any time)</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer About End -->
                    </div>

                    <div class="col-md-9">
                        <!-- Footer Widgets Start -->
                        <div class="footer--widgets row">
                            <!-- Footer Widget Start -->
                            <div class="footer--widget col-md-4">
                                <div class="widget--title">
                                    <h2 class="h4">Our Services</h2>
                                </div>

                                <!-- Links Wdiget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Screen Repair</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Camera Repair</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>charging problem repair</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Software Repair</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Navigation problem Repair</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Microphone and speacer problem</a></li>
                                    </ul>
                                </div>
                                <!-- Links Wdiget End -->
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer--widget col-md-4">
                                <div class="widget--title">
                                    <h2 class="h4">Why choose us</h2>
                                </div>

                                <!-- Recent Posts Widget Start -->
                                <div class="recent-posts--widget">
                                    <ul class="nav">
                                        <li class="clearfix">
                                            

                                            <div class="content">
                                                <h3 class="h6"><a href=""> Best maintainance</a></h3>
                                                
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            

                                            <div class="content">
                                                <h3 class="h6"><a href=""> Best price</a></h3>
                                               
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            

                                            <div class="content">
                                                <h3 class="h6"><a href="">High quality</a></h3>
                                                
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            

                                            <div class="content">
                                                <h3 class="h6"><a href="">Best warranty</a></h3>
                                                
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Recent Posts Widget End -->
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer--widget col-md-4">
                                <div class="widget--title">
                                    <h2 class="h4">Sign Up to know offers</h2>
                                </div>

                                <!-- Subscribe Widget Start -->
                                <div class="subscribe--widget" data-form-validation="true">
                                    <p>Sign Up to Get Notification Our Special Offers and New Services</p>

                                    <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank">
                                        <div class="input-group">
                                            <input type="email" name="EMAIL" class="form-control" placeholder="E-mail Address" required>
                                            
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default active"><i class="fa fa-send"></i></button>
                                            </span>
                                        </div>
                                    </form>

                                    <div class="social">
                                        <h3 class="h6">Find Us On</h3>

                                        <ul class="nav">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Subscribe Widget End -->
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                        <!-- Footer Widgets End -->

                        <!-- Footer Copyright Start -->
                        <div class="footer--copyright font--secondary clearfix">
                            <p class="float--left">&copy; Copyright 2020 | All Rights Reserved</p>
                            <p class="float--right"><a href="#">Mobifix.com</a> </p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->

        <!-- Back To Top Button Start -->
        <div class="back-to-top-btn">
            <a href="#" class="btn btn-default active"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Back To Top Button End -->
    </div>
    <!-- Wrapper End -->

    <!-- ==== jQuery Library ==== -->
    <script src="js/jquery.min.js"></script>

    <!-- ==== Bootstrap ==== -->
    <script src="js/bootstrap.min.js"></script>

    <!-- ==== Owl Carousel Plugin ==== -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="js/isotope.min.js"></script>

    <!-- ==== jQuery FakeLoader Plugin ==== -->
    <script src="js/fakeLoader.min.js"></script>

    <!-- ==== jQuery Sticky Plugin ==== -->
    <script src="js/jquery.sticky.min.js"></script>

    <!-- ==== jQuery Magnific Popup Plugin ==== -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- ==== jQuery Directional Hover Plugin ==== -->
    <script src="js/jquery.directional-hover.min.js"></script>

    <!-- ==== jQuery Validation Plugin ==== -->
    <script src="js/jquery.validate.min.js"></script>

    <!-- ==== jQuery Form Plugin ==== -->
    <script src="js/jquery.form.min.js"></script>

    <!-- ==== jQuery Waypoints Plugin ==== -->
    <script src="js/jquery.waypoints.min.js"></script>

    <!-- ==== jQuery CounterUp Plugin ==== -->
    <script src="js/jquery.counterup.min.js"></script>

    <!-- ==== Google Map API ==== -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="js/retina.min.js"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="js/main.js"></script>
</body>
</html>
