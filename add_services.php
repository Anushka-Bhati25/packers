<?php
session_start();

// Define username and password
$username = 'admin';
$password = 'secret2';

// Function to sanitize input
function sanitizeInput($data) {
    return strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', $data));
}

// Check if user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Services'])) {
        // Handle Services form submission
        $Services_name = sanitizeInput($_POST['Services']);
        $file_path = $Services_name . '.php';
        
        // Create the PHP file with the given Services name  
        $file_content = '<?php 
                            $pageTitle = "VRL Freight Cargo Services:  ' . ucfirst($Services_name) . ' @9067580888";
                            $pageDescription = "Looking for the Best VRL Freight Cargo  ' . ucfirst($Services_name) . '! Fast & Reliable Shipping solutions Worldwide. Contact us at 9560420670";
                            $pageKeywords = "VRL Freight Cargo services, international shipping with VRL Freight, VRL Freight express services, VRL Freight worldwide shipping, VRL Freight parcel delivery, VRL Freight logistics solutions, VRL Freight global courier, VRL Freight delivery services, VRL Freight freight forwarding, VRL Freight international delivery, VRL Freight cargo services, VRL Freight shipping rates, VRL Freight courier tracking, VRL Freight door-to-door delivery, VRL Freight courier company, VRL Freight package delivery, VRL Freight import/export services, VRL Freight express delivery, VRL Freight international logistics, VRL Freight shipping solutions, VRL Freight global shipping, VRL Freight worldwide express, VRL Freight courier tracking online, VRL Freight international freight, VRL Freight courier rates, VRL Freight express shipping, VRL Freight shipment tracking, VRL Freight parcel tracking, VRL Freight courier delivery, VRL Freight international parcel service, VRL Freight international courier rates, VRL Freight international shipping rates, VRL Freight international courier tracking,
                            VRL Freight international shipping services, VRL Freight express courier service, VRL Freight international package delivery, VRL Freight worldwide courier services, VRL Freight international cargo services, VRL Freight express logistics, VRL Freight shipping company, VRL Freight courier rates calculator, VRL Freight global delivery, VRL Freight courier near me, VRL Freight express rates, VRL Freight global tracking, VRL Freight international express, VRL Freight courier charges, VRL Freight express delivery time, VRL Freight worldwide delivery, VRL Freight express international, VRL Freight international shipping cost, VRL Freight international express shipping, VRL Freight courier service near me, VRL Freight express delivery rates, VRL Freight express worldwide, VRL Freight courier online tracking, VRL Freight courier contact number, VRL Freight international tracking, VRL Freight courier services rates, VRL Freight global express, VRL Freight courier quote, VRL Freight international courier charges, VRL Freight shipping calculator, VRL Freight express shipping rates, 
                            VRL Freight international express rates, VRL Freight courier delivery time, VRL Freight international shipping charges, VRL Freight international express delivery, VRL Freight courier parcel, VRL Freight worldwide express shipping, VRL Freight international courier services rates, VRL Freight international express delivery time, VRL Freight express international rates, VRL Freight express courier rates, VRL Freight international parcel delivery, VRL Freight global express tracking,
                             packing services, moving services, packers services, movers services, shifting services, relocation services, international movers, international relocation, logistics services, cargo services, parcel services, transport services, transportation services, car transport, bike transport, goods transport, luggage transport, luggage parcel, luggage courier, shipping services, air cargo services, freight cargo, international cargo, international relocation, international courier, international parcel, vehicle transport, luggage transfer, domestic cargo, local shifting, home shifting, House shifting, room shifting, pg shifting, student luggage transport, packers and movers, best packers and movers, packing companies, moving companies, best moving companies"; 
                            include \'header.php\';?>' . PHP_EOL
              
              . '<main id="main">' . PHP_EOL
              . '<div class="page-area">
              <div class="breadcumb-overlay"></div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="breadcrumb text-center">
                              <div class="section-headline white-headline text-center">
                                  <h3>Our Services</h3>
                              </div>
                              <ul>
                                  <li class="home-bread">Home</li>
                                  <li>Services</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div><br><br>' . PHP_EOL 
              . '<section id="about" class="about">' . PHP_EOL
              . '<div class="container" data-aos="fade-up">' . PHP_EOL
              . '<div class="row gx-0">' . PHP_EOL
              . '<div class="col-lg-6 order-lg-1 order-2 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">' . PHP_EOL
              . '<div class="content">' . PHP_EOL
              . '<h3><br>We Assure you the Best service.</h3>' . PHP_EOL
              . '<h2><span class="color">Our Service </span> - ' . ucfirst($Services_name) . '</h2>' . PHP_EOL
              . '<p style="margin-bottom:10px; padding-bottom:0;"> VRL Freight offers exceptional  ' . ucfirst($Services_name) . 'Service . Our team of dedicated professionals is devoted to providing top-quality solutions to make your moving experience seamless and stress-free. Whether you are moving your household or your business, we have got you covered with our reliable and efficient services. From careful packing to timely delivery, trust SK Packers and Movers to handle your reServices needs with precision and care, ensuring a smooth transition to your new destination."</p>' . PHP_EOL
              . '<ul class="finger-emojis" style="list-style-type: none;">' . PHP_EOL
              . '<br><li>👉 24/7 Support</li>' . PHP_EOL
              . '<li>👉 We assured a safe, reliable and affordable service to our customers.</li>' . PHP_EOL
              . '<li>👉 Experienced, innovative, and dynamic</li>' . PHP_EOL
              . '<li>👉 Cost-effective Services</li>' . PHP_EOL
              . '<li>👉 Promt and positive response </li>' . PHP_EOL
              . '<li>👉 On time delivery of goods </li>' . PHP_EOL
              . '</ul>' . PHP_EOL
              . '</div>' . PHP_EOL
              . '</div>' . PHP_EOL
              . '<div class="col-lg-6 order-lg-2 order-1 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">' . PHP_EOL
              . '<form id="contactForm" method="POST" action="send_email.php" class="contact-form" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; width: 100%; ">' . PHP_EOL
              . '<h3><span class="color">Contact Us</span></h3>' . PHP_EOL
              . '<h2>Make an Appointment</h2>' . PHP_EOL
              . '<div class="mb-3">' . PHP_EOL
              . '<input type="text" name="name" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">' . PHP_EOL
              . '</div>' . PHP_EOL
              . '<div class="mb-3">' . PHP_EOL
              . '<input type="email" name="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">' . PHP_EOL
              . '</div>' . PHP_EOL
              . '<div class="mb-3">' . PHP_EOL
              . '<input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" required data-error="Please enter your message subject">' . PHP_EOL
              . '</div>' . PHP_EOL
              . '<div class="mb-3">' . PHP_EOL
              . '<textarea name="message" id="message" rows="4" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>' . PHP_EOL
              . '</div>' . PHP_EOL
              . '<button type="submit" id="submit" class="contact-btn">Submit</button>' . PHP_EOL
              . '</form>' . PHP_EOL
              . '</div>' . PHP_EOL
              . '</div>' . PHP_EOL
              . '</div>' . PHP_EOL
              . '</section>' . PHP_EOL
              
               . '<section id="new-section">' . PHP_EOL
              . '<div class="container">' . PHP_EOL
              . '<div class="row">' . PHP_EOL
              . '<div class="col-lg-6">' . PHP_EOL
              . '<img src="/img/slider/animate-truck.gif" alt="Your Image Description" class="img-fluid">' . PHP_EOL
              . '</div>' . PHP_EOL
              . '<div class="col-lg-6">' . PHP_EOL
              . '<p style="margin-bottom: 20px; margin-top:40px;">VRL Freight Cargo is your trusted partner for seamless transportation solutions in ' . ucfirst($Services_name) . '. With a commitment to reliability and efficiency, we specialize in providing top-notch freight services tailored to meet your needs.</p>' . PHP_EOL
              . '<p>Whether you are shipping goods locally or internationally, our dedicated team ensures timely delivery and secure handling of your cargo. Backed by years of industry experience, we offer a comprehensive range of logistics solutions to streamline your supply chain operations.</p>' . PHP_EOL
              . ' <div class="about-details text-center">
              <div class="single-about">
                  <div class="icon-title">
                      <a href="#"><i class="icon icon-checkmark-circle"></i></a>
                      <h5>Certified company</h5>
                  </div>
                  
              </div>
              <div class="single-about">
                  <div class="icon-title">
                      <a href="#"><i class="icon icon-thumbs-up"></i></a>
                      <h5>Our experience</h5>
                  </div>
                
              </div>
          </div>' . PHP_EOL
              . '</div>' . PHP_EOL
              . '</div>' . PHP_EOL
              . '</div>' . PHP_EOL
              . '</section>' . PHP_EOL
             .' <div class="banner-area">
              <div class="container">
               <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="banner-content text-left">
                    <h4>Are you looking for professional Services for relocation?</h4>
                    <div class="banner-contact-btn">
                        <a class="banner-btn" href="contact.php">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>'.PHP_EOL
              . '<?php include \'footer.php\';?>' . PHP_EOL;

        
        // Write content to file
        file_put_contents($file_path, $file_content);

        // Display success message with link to view the page
        $success_message = "Page successfully created. <br><a href='$file_path' target='_blank'>Click here to view page</a>";
    }
} else {
    // Handle login form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
        // Perform authentication
        $entered_username = $_POST['username'];
        $entered_password = $_POST['password'];

        // Check if entered credentials match
        if ($entered_username === $username && $entered_password === $password) {
            $_SESSION['logged_in'] = true;
        } else {
            $error_message = "Invalid username or password";
        }
    }
}

// Log out functionality
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Services: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Create Page</title>
</head>
<body>

<style>
        .form-container {
            background-color: #a6a5ff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        .form-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .form-container input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container input[type="submit"],
        .form-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            background-color: #bbccff;

        }

        .form-container input[type="submit"]:hover,
        .form-container button:hover {
            background-color: #45a049;
        }

        .success-message {
            color: #4CAF50;
            margin-bottom: 20px;
        }
    </style>

<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
    <!-- Services form -->
    <div class="form-container">
        <h2>Enter Services</h2>
        <form class="Services-form" method="post" action="">
            <label for="Services">Services:</label><br><br>
            <input type="text" id="Services" name="Services" required><br><br>
            <input type="submit" value="Create Page" class="btn btn-primary"><br><br>
        </form>

        <form method="post" action="" class="logout-form">
            <button type="submit" name="logout" class="btn btn-outline-light">Log Out</button>
        </form>

        <?php if(isset($success_message)) echo "<p class='success-message'>$success_message</p>"; ?>
    </div>

    <?php else: ?>
        <!-- Login form -->
        <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        background-color: #abb3eb;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
    }

    h1 {
        text-align: center;
        color: white;
        margin-bottom: 20px;
    }

    label {
        color: #555;
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error-message {
        color: #d9534f;
        margin-bottom: 10px;
    }
</style>
        <div class="form-container">
            <h1>Member Login</h1>
            <?php if(isset($error_message)) echo "<p class='error-message'>$error_message</p>"; ?>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Login">
            </form>
        </div>
    <?php endif; ?>
</body>
</html>
