<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logo/VRL favicon.png" type="image/x-icon">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="css/magnific.min.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="css/venobox.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    

    <div id="preloader"></div>
    <header class="header-one">
        <!-- Start top bar -->
        <div class="topbar-area fix hidden-xs">
            <div class="container">
                <div class="row">
                    <div class=" col-md-10 col-sm-9">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="mailto:transworldrelocationspackers@gmail.com"><i class="fa fa-envelope"></i>transworldrelocationspackers@gmail.com</a></li>
                                <li><a href="tel:+919067580888"><i class="fa fa-phone"></i> 9067580888</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <div class="quote-button">
                            <a href="contact.html" class="quote-btn" title="Quick view" data-toggle="modal" data-target="#quoteModal">Get a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End top bar -->
        <!-- header-area start -->
        <div id="sticker" class="header-area hidden-xs">
            <div class="container">
                <div class="row">
                    <!-- logo start -->
                    <div class="col-md-3 col-sm-3 logo-bg">
                        <div class="logo">
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                                <img src="img/logo/logo3.jpeg" alt="logo" height="100px" width="350px">
                               
                            </a>
                            
                        </div>
                    </div>
                    <!-- logo end -->
                    <div class="col-md-9 col-sm-9">
                        <div class="header-left-link">
                        <!-- <h1>VRL Freight Cargo</h1> -->
                        </div>
                        <!-- mainmenu start -->
                        <nav class="navbar navbar-default">
                            <div class="collapse navbar-collapse" id="navbar-example">
                                <div class="main-menu">
                                    <ul class="nav navbar-nav navbar-right">
                                    
                                        <li><a class="pagess" href="index.php">Home</a>

                                        </li>
                                        <li><a class="pagess" href="about.php">About us</a>

                                        </li>
                                        <li><a class="pagess" href="services.php">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="home_relocation.php">Home Relocation</a></li>
                                                <li><a href="Door_to_Door.php">Door to Door moving</a></li>
                                                <li><a href="office_shifting.php">Office Shifting</a></li>
                                                <li><a href="transportation.php">Transportation Services</a></li>
                                                <li><a href="parcel.php">Parcel Services</a></li>
                                                <li><a href="Car_Loading.php">Car Loading</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- mainmenu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo/mobile.jpeg" alt="" style="height: 47px;"></a>
                            </div>
                            <nav id="dropdown">
                                <ul>
                                    <li><a class="pagess" href="index.php">Home</a>
                                    </li>
                                    <li><a class="pagess" href="about.php">About us</a>
                                    </li>
                                    <li><a class="pagess" href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="home_relocation.php">Home Relocation</a></li>
                                            <li><a href="Door_to_Door.php">Door to Door moving</a></li>
                                                <li><a href="office_shifting.php">Office Shifting</a></li>
                                                <li><a href="transportation.php">Transportation Services</a></li>
                                                <li><a href="parcel.php">Parcel Services</a></li>
                                                <li><a href="Car_Loading.php">Car Loading</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->

    </header>
    <style>
        marquee {
            color: #000;
        }

        .icons-container{
            display: none;
        }
        @media (max-width: 768px) { 
    .icons-container {
        display: flex;
        justify-content: center; 
        padding: 10px;
  
    position: fixed;
    bottom: 0px;
    left: 0;
    right: 0;
    background: white;
    padding: 5px 0px;
    z-index: 9;
  
    }
    
    .icons-container a {
        text-decoration: none;
        margin: 0 10px; 
    }
    
    .icons-container img {
        width: 40px; 
        height: 40px; 
    }}
    </style>


<div class="icons-container" style="gap:30px;  background-color: #ed1b34;">
        <a href="tel:+919067580888" style="color: #ffffff;"><b>Call Now</b></a>
      
        <span class="separator">|</span>
                
        <a href="https://wa.me/+919067580888" target="_blank" style="color: #ffffff;"><b>Enquire Now</b></a>
      
        <!-- <a href="https://thefundecor.com/about.html"><img src="https://thedryclean.in/wp-content/uploads/2023/08/form.png" alt="Form Icon"></a> -->
      </div>


    <body class="instructor-home">
        <marquee onmouseover="this.stop()" onmouseout="this.start()">Services: Household Shifting
            ,Office Relocation
            ,Local Shifting
            , Warehouse
            ,Car Shifting
            ,Bike Shifting
            , International Moving
            ,Bulk Shipment
            City : Bhubaneswar
            Delhi
            Bangloare
            Kolkata
            Pune
            Hyderabad</marquee>


    
        <!-- header end -->