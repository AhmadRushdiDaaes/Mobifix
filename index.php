<?php
include 'includes/connection.php';
if (isset($_POST['submit'])) {
	$message = "your consultation send";
    $path = "uploades/";
    $tmp_name = $_FILES['cons_image']['tmp_name'];
    $file_name = $_FILES['cons_image']['name'];
    move_uploaded_file($tmp_name, $path . $file_name);

    // get data from webform 
    $cons_name    = $_POST['cons_name'];
    $cons_phone   = $_POST['cons_phone'];
    $cons_email   = $_POST['cons_email'];
    $cons_subject = $_POST['cons_subject'];
    $cons_problem = $_POST['cons_problem'];

    $query = "insert into free_consultation(consultation_name,consultation_phone,consultation_email,consultation_subject,consultation_image,consultation_problem)
              values('$cons_name','$cons_phone','$cons_email','$cons_subject','$file_name','$cons_problem')";
    // perform query 
    mysqli_query($con, $query);
    header("location:thanksPage.php");
}
?>

<?php 
include 'includes/connection.php';
if (isset($_POST['send'])) {
$customer_name = $_POST['cus_name'];
$customer_phone = $_POST['cus_phone'];
$customer_email = $_POST['cus_email'];
$customer_address = $_POST['cus_address'];
$customer_date = $_POST['cus_date'];
$customer_time = $_POST['cus_time'];
$customer_category = $_POST['cus_category'];
$customer_mobile = $_POST['cus_mobile'];
$customer_service = $_POST['cus_service'];
$customer_problem = $_POST['cus_problem'];




$query2 = "select price_id  from pricing where mobile_id = $customer_mobile and service_id = $customer_service and category_id = $customer_category ";
$result = mysqli_query($con, $query2);
$row = mysqli_fetch_assoc($result);
    $price_id = $row['price_id'];


   $query =
    "insert into customer(customer_name,customer_email,customer_phone,customer_address,service_id,mobile_id,category_id,customer_problem,customer_date,customer_time,price_id) 
     values('$customer_name','$customer_email','$customer_phone','$customer_address',$customer_service,$customer_mobile,$customer_category,'$customer_problem','$customer_date','$customer_time',$price_id)";


    mysqli_query($con, $query);

header("location:thanksPage.php");
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
                                                <p><a href="tel:+962788344472">+962788344472</a></p>
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
                            <li class="active"><a href="index.html">Home</a></li>
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
        </header>
        <!-- Header Section End -->

        <!-- Banner Section Start -->
        <div id="banner" class="banner--section pd--80-0">
            <!-- Banner Slider Start -->
            <div class="banner--slider " data-owl-dots="true">
                <!-- Banner Item Start -->
                <div class="banner--item"  data-bg-img="img/mobifix_background/mobifix-5.png">
                    
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item"  data-bg-img="img/mobifix_background/mobifix-6.jpg">
                    
                </div>
               

              
                <div class="banner--item"  data-bg-img="img/mobifix_background/mobifix-11.png">
                    
                </div>
                <!-- Banner Item End -->
            </div>
            <!-- Banner Slider End -->

            <!-- Banner From Start -->
            <div class="banner--form" data-form="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                            <form action="" method="post" enctype="multipart/form-data">
                                <h2 class="h4 text-center">Free consultation</h2>
                                
                                <div class="status"></div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="cons_name" placeholder="Your Name" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="tel" name="cons_phone" placeholder="Telephone" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="cons_email" placeholder="E-mail Address" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="cons_subject" placeholder="Subject" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="quoteFile">
                                        <span>Atach Photo</span>
                                        <input type="file" name="cons_image" class="form-control" id="quoteFile">
                                        <span><i class="fa fa-paperclip"></i>Choose File</span>
                                        <span class="file-status">File Name</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <textarea name="cons_problem" placeholder="Problem In Details" class="form-control" required></textarea>
                                </div>
                            
                                <input type="hidden" name="submit" value="ajax">

                                <button type="submit" class="btn btn-default">Send Request</button>
                                <?php if(isset($message))
                                {
                                	echo "<center><p style='color:#FF8C00'>$message</p></center>";
                                } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner From End -->
        </div>
        <!-- Banner Section End -->

        <!-- Appointment Section Start -->
        <div id="appointment" class="appointment--section pd--100-0-40">
            <div class="container">
                <div class="row row--vc">
                    <!-- Appointment Form Start -->
                    <div class="appointment--form col-md-4" data-form="">
                        <form action="" method="post">
                                                        
                            <h2 class="h4 text--primary text-center">Make An Appoinment</h2>

                            <div class="status"></div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="cus_name" placeholder="Your Name" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required type="tel" name="cus_phone" placeholder="Telephone" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="cus_email" placeholder="E-mail Address" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="cus_address" placeholder="Address In Details" class="form-control" required>
                                    </div>
                                </div>




                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="cus_date" placeholder="Date" class="form-control" data-trigger="date" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="cus_time" placeholder="Time " class="form-control" data-trigger="time" required>
                                    </div>
                                </div>
                            </div>
                               <div class="row">
                                    <div class="form-group">
                                         <label style="color: #f69323;" for="cc-name" class="control-label mb-1">Please select Service that you need ,your category and mobile</label><br>
                                    <select id="service_name" name="cus_service" class="col-sm-12" style="color: #D2691E" id="service" >
                                    <option value disabled selected> Select Service</option>
                                    <?php
                                        $query = "select * from service";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='{$row['service_id']}'>{$row['service_name']}</option>";
                                        }
                                        ?>

                                    </select>
                                   </div>
                                   </div>
                                 <br>
                              <div class="row">
                                    <div class="form-group">
                                     
                                       <select id="mobile_category" name="cus_category" class="col-sm-12" style="color: #D2691E" id="Category" ">
                                    <option value disabled selected> Select Category </option>
                                    <?php
                                        $query = "select * from category";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                     </div>
                                     </div>
                                <br>
                                     <div class="row">                                
                                     <div class="form-group">
                                    <select id="mobile_name" name="cus_mobile" class="col-sm-12" style="color: #D2691E" id="mobiles" >
                                    <option value disabled selected>  Select Mobile</option>
                                    </select></div>
                                    </div>
                                    
                                    
                                




                            <div class="form-group">
                                <textarea name="cus_problem" placeholder="Problem In Details" class="form-control" required></textarea>
                            </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                       <label style="color: #f69323;" for="cc-name" class="control-label mb-1">Service price</label><br>
                                   <output id="service_price" name="service_price"></output>
                                    </div>
                                </div>
                            <input type="submit" name="send" value="Send Request" class="btn btn-default">
                          

                        </form>
                    </div>
                    <!-- Appointment Form End -->

                    <!-- Appointment Items Start -->
                    <div class="appointment--items col-md-8">
                        <div class="row AdjustRow">
                            <div class="col-xs-6 col-xxs-12">
                                <!-- Appointment Item Start -->
                                <div class="appointment--item">
                                    <span class="step font--secondary">Step - 01</span>

                                    <div class="icon text--primary">
                                        <img src="img/appointment-img/icon-01.png" alt="" data-rjs="2">
                                    </div>

                                    <div class="title">
                                        <h2 class="h4">Tell us about the problem</h2>
                                    </div>

                                    <div class="content">
                                        <p>If your mobile have any problem such as screen problem,voice problem ,battery problem ,
                                        ,camera problem, software problem etc.. .</p>
                                    </div>
                                </div>
                                <!-- Appointment Item End -->
                            </div>

                            <div class="col-xs-6 col-xxs-12">
                                <!-- Appointment Item Start -->
                                <div class="appointment--item">
                                    <span class="step font--secondary">Step - 02</span>

                                    <div class="icon text--primary">
                                        <img src="img/appointment-img/icon-02.png" alt="" data-rjs="2">
                                    </div>

                                    <div class="title">
                                        <h2 class="h4">Get A Price</h2>
                                    </div>

                                    <div class="content">
                                        <p>You should define service you need and define your mobile category and price after that price will appeare to you .</p>
                                    </div>
                                </div>
                                <!-- Appointment Item End -->
                            </div>

                            <div class="col-xs-6 col-xxs-12">
                                <!-- Appointment Item Start -->
                                <div class="appointment--item">
                                    <span class="step font--secondary">Step - 03</span>

                                    <div class="icon text--primary">
                                        <img src="img/appointment-img/icon-03.png" alt="" data-rjs="2">
                                    </div>

                                    <div class="title">
                                        <h2 class="h4">Make An Appoinment</h2>
                                    </div>

                                    <div class="content">
                                        <p>Choose day and time to come Maintenance technician for you to fix your mobile.</p>
                                    </div>
                                </div>
                                <!-- Appointment Item End -->
                            </div>

                            <div class="col-xs-6 col-xxs-12">
                                <!-- Appointment Item Start -->
                                <div class="appointment--item">
                                    <span class="step font--secondary">Step - 04</span>

                                    <div class="icon text--primary">
                                        <img src="img/appointment-img/icon-04.png" alt="" data-rjs="2">
                                    </div>

                                    <div class="title">
                                        <h2 class="h4">Delivery</h2>
                                    </div>

                                    <div class="content">
                                        <p>We will arrive you at your specific time 
                                        and fix problem at your home .</p>
                                    </div>
                                </div>
                                <!-- Appointment Item End -->
                            </div>
                        </div>
                    </div>
                    <!-- Appointment Items End -->
                </div>
            </div>
        </div>
        <!-- Appointment Section End -->

        <!-- Services Section Start -->
        <div class="services--section pd--100-0 bg--color-lightgray">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2 class="h2">Our Services</h2>

                    <p>What We Do</p>
                </div>
                <!-- Section Title End -->

                <div class="row text-center">
                    <!-- Service Image Start -->
                    <div class="service--img col-md-4 col-sm-8">
                        <div class="service--img-inner" data-bg-img="img/services-img/service-img-bg.png">
                            <!-- Tab Content Start -->
                            <div class="tab-content">
                                <!-- Tab Pane Start -->
                                <div class="tab-pane active" id="serviceImg01">
                                    <img src="img/service_image/mobifix-7.png" alt="">
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane" id="serviceImg02">
                                    <img src="img/service_image/mobifix-8.png" alt="">
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane" id="serviceImg03">
                                    <img src="img/service_image/mobifix-9.png" alt="">
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane" id="serviceImg04">
                                    <img src="img/service_image/mobifix-11.png" alt="">
                                </div>
                                <!-- Tab Pane End -->
                            </div>
                            <!-- Tab Content End -->
                        </div>
                    </div>
                    <!-- Service Image End -->

                    <!-- Service Items Start -->
                    <div class="service--items col-md-4 col-sm-6 text-right">
                        <!-- Service Item Start -->
                        <div class="service--item active">
                            <div class="dot" data-position-top="16px" data-position-right="-129px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg01">Camera Repair</a>
                            </h3>

                            <p>Camera problems, including the camera, have failed, do not open, or become pixelated</p>

                            <a href="services.php" class="btn btn-default">View Details</a>
                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service--item">
                            <div class="dot" data-position-top="13px" data-position-right="-54px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg02">Screen Repair</a>
                            </h3>

                            <p>Mobile Phone Display Not Working or Touch Screen Not Working or Screen is Black / Blank but Phone is ON – No Problem.</p>

                            <a href="services.php" class="btn btn-default">View Details</a>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    <!-- Service Items End -->

                    <!-- Service Items Start -->
                    <div class="service--items col-md-4 col-sm-6 float--right">
                        <!-- Service Item Start -->
                        <div class="service--item">
                            <div class="dot" data-position-top="16px" data-position-left="-129px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg03">charging Repair</a>
                            </h3>

                            <p>One of the most common causes of charging problems is if the charging port is clogged with dirt, dust or debris. Dirt or lint can build up inside the charging port and prevent the charging cable from engaging properly with the charging contacts inside the port.</p>

                            <a href="services.php" class="btn btn-default">View Details</a>
                        </div>
                        <!-- Service Item End -->
                        
                        <!-- Service Item Start -->
                        <div class="service--item">
                            <div class="dot" data-position-top="13px" data-position-left="-54px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg04">Software Repair</a>
                            </h3>

                            <p>Basic software glitches(like 45% of common software problems) can be solved by simply restarting your phone
                             Another 30% of  software issues can be solved doing a within-the-phone factory reset(also known as a soft reset)</p>

                            <a href="services.php" class="btn btn-default">View Details</a>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    <!-- Service Items End -->
                </div>

                <!-- Section Footer Start -->
                <div class="section--footer text-center">
                    <a href="services.php" class="btn btn-default">View All Services</a>
                </div>
                <!-- Section Footer End -->
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Features Section Start -->
        <div class="features--section pd--100-0-40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2 class="h2">Why Choose Us</h2>

                    <p>Some of  Our Features</p>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">
                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/features-img/icon-01.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">We Are Professional</h3>
                        </div>

                        
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/features-img/icon-02.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Friendly Service</h3>
                        </div>

                        
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/features-img/icon-03.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">No Fix No Fees</h3>
                        </div>

                        
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/features-img/icon-04.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Well Reputation</h3>
                        </div>

                        
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/features-img/icon-05.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Free Consultation</h3>
                        </div>

                        
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/features-img/icon-06.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Low Price Guarantee</h3>
                        </div>

                        
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/features-img/icon-07.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Quick Repair Process</h3>
                        </div>

                        
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="img/features-img/icon-08.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">48 hours Warantee</h3>
                        </div>

                        
                    </div>
                    <!-- Feature Item End -->
                </div>
            </div>
        </div>
        <!-- Features Section End -->

        <!-- Counter Section Start -->
        

        <!-- Gallery Section Start -->
        


        <!-- ahmad -->
           <div class="pricing--section pd--100-0-40 bg--color-lightgray">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2 class="h2">Our Pricing Package</h2>

                    <p>Here Is Our Pricing Plan</p>
                </div>
                <!-- Section Title End -->

          <div class="row AdjustRow">
<!-- ahmad php start-->                    
<?php
$query = "select * from special_offers";
$result = mysqli_query($con,$query);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col-md-3 col-xs-6 col-xxs-12">';
    echo '<div class="pricing--item">';
    echo '<div class="pricing--icon">';
    echo ' <img src="img/pricing-img/icon-04.png" alt="" data-rjs="2">';
    echo '</div>';
    echo '<div class="pricing--title">';
    echo "<h3 class='h4'>{$row['offer_name']}</h3>";
    echo '</div>';
    echo '<div class="pricing--price">';
    echo ' <p>Satarting at ...</p>';
    echo "<h4 class='h2'>{$row['offer_price']}</h4>";
    echo '</div>';
    echo ' <div class="pricing--features">';
    echo '<ul class="nav">';
    echo "<li>{$row['offer_description1']}</li>";
    echo "<li>{$row['offer_description2']}</li>";
    echo "<li>{$row['offer_description3']}</li>";
    echo "<li>{$row['offer_description4']}</li>";
    echo '</ul>';
    echo '</div>';
    echo '<div class="pricing--footer">';
    echo '<a href="index.php#appointment" class="btn btn-default">Get Started</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}



?>
<!-- ahmad  php end -->
<!-- ahmad  -->
                
                        <!-- Pricing Item Start -->
                        
                    <!-- ahmad End -->


</div>
</div>
</div>
</div>                  





        <!-- Pricing Section End -->






        <!-- here end -->
        <div class="experts--section pd--100-0">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2 class="h2">Our Experts</h2>

                    <p>Introduce Our Professional</p>
                </div>
                <!-- Section Title End -->

                <!-- Expert Members Start -->
                <div class="expert--members owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-responsive='{"0": {"items": "1"}, "551": {"items": "2"}, "992": {"items": "3"}, "1200": {"items": "4"}}'>
                    <!-- ahmad Start -->

                    <?php
                    include'includes/connection.php';
                    $query = "select * from our_experts";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<div class="expert--member">';
                        echo '<div class="expert--member-img">';
                        echo "<img src='uploades/{$row['expert_photo']}' alt='' data-rjs='2'>";
                        echo '<div class="expert--member-info bg--overlay">';
                        echo '<div class="vc--parent">';
                        echo '<div class="vc--child">';
                        echo '<div class="name">';
                        echo "<h3 class='h5'>{$row['expert_name']}</h3>";
                        echo '</div>';
                        echo '<div class="role">';
                        echo "<p>{$row['expert_position']}</p>";
                        echo "</div>";
                        echo '<div class="content">';
                        echo "<p>{$row['expert_description']}</p>";
                        echo "</div>";
                        echo '<div class="social">';
                        echo '<ul class="nav">';
                        echo '<li><a href="#"><i class="fa fa-facebook"></i></a></li>';
                        echo '<li><a href="#"><i class="fa fa-twitter"></i></a></li>';
                        echo '<li><a href="#"><i class="fa fa-linkedin"></i></a></li>';
                        echo '<li><a href="#"><i class="fa fa-google-plus"></i></a></li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?> 
                    <!-- ahmad end -->                
                    </div>
                    <!-- Expert Member Start -->
                    
                    <!-- Expert Member End -->

                </div>
                <!-- Expert Members End -->

                <!-- Expert Members Nav Start -->
                <div class="expert--members-nav text-center">
                    <div class="btn-groups">
                        <button type="button" data-trigger="prev.owl.carousel"><i class="fa fm fa-long-arrow-left"></i>Previous</button>

                        <a href="experts.html" title="View All Experts" data-toggle="tooltip" data-placement="top"><i class="fa fa-th-large"></i></a>

                        <button type="button" data-trigger="next.owl.carousel">Next<i class="fa flm fa-long-arrow-right"></i></button>
                    </div>
                </div>
                <!-- Expert Members Nav End -->
            </div>
        </div>
        <!-- Experts Section Start -->

        <!-- Testimonial Section Start -->
        <div class="testimonial--section pd--100-0" data-bg-img="img/mobifix_background/mobifix-11.png">
            <!-- Testimonial Slider Wrapper Start -->
            <div class="testimonial--slider-wrapper bg--overlay">
                <div class="container">
                    <!-- Section Title Start -->
                    <div class="section--title left">
                        <h2 class="h2">Satisfied Client’s</h2>

                        <p>What Our Client’s Say</p>
                    </div>
                    <!-- Section Title End -->

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Testimonial Slider Start -->
                            <div class="testimonial--slider owl-carousel" >
                                <!-- Testimonial Item Start -->
                                <div class="testimonial--item">
                                    <div class="testimonial--content">
                                        <blockquote>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage rassing hidden.</p>
                                        </blockquote>
                                    </div>

                                    <div class="testimonial--rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>

                                    
                                </div>
                                <!-- Testimonial Item End -->

                                <!-- Testimonial Item Start -->
                                <div class="testimonial--item">
                                    <div class="testimonial--content">
                                        <blockquote>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage rassing hidden.</p>
                                        </blockquote>
                                    </div>

                                    <div class="testimonial--rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>

                                    
                                </div>
                                <!-- Testimonial Item End -->

                                <!-- Testimonial Item Start -->
                                <div class="testimonial--item">
                                    <div class="testimonial--content">
                                        <blockquote>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage rassing hidden.</p>
                                        </blockquote>
                                    </div>

                                    <div class="testimonial--rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>

                                    
                                </div>
                                <!-- Testimonial Item End -->
                            </div>
                            <!-- Testimonial Slider End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Slider Wrapper End -->

            <!-- Testimonial Video Start -->
            <div class="testimonial--video bg--overlay">
                <div class="vc--parent">
                    <div class="vc--child">
                        <div class="container-fluid">
                            <div class="col-md-6 col-md-offset-6">
                                <!-- Testimonial Video Content Start -->
                                <div class="testimonial--video-content text-center">
                                    <a href="video/mobifix.mp4" class="play-btn" data-popup="video"><i class="fa fa-play"></i></a>

                                    <h3 class="h3">Watch Video Tour</h3>
                                </div>
                                <!-- Testimonial Video Content End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Video End -->
        </div>
        <!-- Testimonial Section End -->

        <!-- Blog Section Start -->
        

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
    <!-- ==== jQuery Library ==== -->
    <script src="js/jquery.min.js"></script>

    <!-- ==== jQuery UI Library ==== -->
    <script src="js/jquery-ui.min.js"></script>

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

    <!-- ==== jQuery Timepicker Plugin ==== -->
    <script src="js/jquery.timepicker.min.js"></script>

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

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="js/retina.min.js"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="js/main.js"></script>



<script src="selectElement.js" type="text/javascript"></script>
<script type="text/javascript">

$(function(){
           $("#mobile_category").on("change",function(){
            var CID =$(this).val();
           $.ajax({
              method:"POST",
              url:"ajaxpro.php",//default current url
              data:{category:CID},
              success:function(data){
                  $("#mobile_name").html(data);
                  
              },
              error:function(){
   
                  $('#mobile_name').html('<option>select category first </option>');
              }
           });
                
           }) ;
        });
        

</script>


<script src="selectElement.js" type="text/javascript"></script>
<script type="text/javascript">

$(function(){
        $("#service_name").on("change",function(){
           var SID =$(this).val(); 
        $("#mobile_category").on("change",function(){
            var CID =$(this).val();
        $("#mobile_name").on("change",function(){
           var MID =$(this).val();
              
           $.ajax({
              method:"POST",
              url:"ajaxViewPrice.php",//default current url
              data:{category:CID,mobile:MID,service:SID},
              success:function(data){
                  $("#service_price").html(data);
                  
              },
              error:function(){
   
                  $('#service_price').html('<output id="service_price" name="service_price" > select service and category first</output>');
              }
           });
                
           }) ;
        });
   });
 });
        

</script>






<script>
   var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("banner--item");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++ ;
    if (slideIndex > x.length) {
        slideIndex = 1;
    } 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>



</body>
</html>
