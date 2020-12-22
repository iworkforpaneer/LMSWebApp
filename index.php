<?php
if(isset($_POST['submit'])) {
    //Importing database connection file
    require('Account/Login/connect.php');

    //Extracting & filtering variables values
    $name = strip_tags(stripcslashes($_POST['name']));  
    $email = strip_tags(stripcslashes($_POST['email']));
    $subject = strip_tags(stripcslashes($_POST['subject']));
  	$message = $_POST['message'];

	//Inserting user data into the database
	$sql = "INSERT INTO `contacttable` VALUES (NULL, '$name', '$email', '$subject', '$message', current_timestamp())";
	if(mysqli_query($conn, $sql)) {
    echo "<script>alert('Message successfully sent!')</script>";
  }
    else {
        echo "<script>alert('Some Error Occured!')</script>";
      }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LMSWebApp | Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">LMSWebApp</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li class="drop-down"><a href="">Account</a>
            <ul>
              <li><a href="Account/Login/adminLogin.php">Admin</a></li>
              <li><a href="Account/Login/studentLogin.php">Student</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Elegant & Creative Platform For Modern Library</h1>
          <h2>A web app fully customized for daily tasks of a library</h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/bgmain.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-circuit"></i></div>
              <h4 class="title"><a href="">Fully Digitalized System</a></h4>
              <p class="description">From issuing a book to accessing the information about library control flow everything through one single web application.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Dynamic Information</a></h4>
              <p class="description">Smooth workflow of information about library database. You no longer have to think about the pending static data.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-book"></i></div>
              <h4 class="title"><a href="">Online Support For Books</a></h4>
              <p class="description">Books will be available online in the form of PDF. Issued book will be available in the student' s account.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/secondmain.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>A simple user friendly library management system in a form of web application</h3>
            <p class="font-italic">
              A system which is developed for overcoming problems faced by traditional library management system.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> User friendly</li>
              <li><i class="icofont-check-circled"></i> Interactive interface</li>
              <li><i class="icofont-check-circled"></i> Fast and convinient to use</li>
            </ul>
            <p>
              Fully developed by <a href="http://www.iworkforpaneer.epizy.com" target="_blank">Tahir Malik</a>
            </p>
            <div class="social-links">
              <a href="https://twitter.com/iworkforpaneer" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.instagram.com/iworkforpaneer/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://github.com/iworkforpaneer" class="google-plus"><i class="bx bxl-github"></i></a>
              <a href="https://www.linkedin.com/in/tahir-malik-852b34151/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">150</span>
            <p>Books</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">350</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">720</span>
            <p>Hours in development</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1</span>
            <p>Developers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>Services</h2>
          <p>Services provided by our Library Management System </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-circuit"></i></div>
              <h4><a href="">Fully Digitalized System</a></h4>
              <p>From issuing a book to accessing the information about library control flow everything through one single web application.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4><a href="">Dynamic Information</a></h4>
              <p>Smooth workflow of information about library database. You no longer have to think about the pending static data.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-book"></i></div>
              <h4><a href="">Online Support For Books</a></h4>
              <p>In Books will be available online in the form of PDF. Issued book will be available in the student' s account.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-time"></i></div>
              <h4><a href="">24 x 7 Availability</a></h4>
              <p>There is no time limit for accessing the application. 24 x 7 support will be available for students.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-lock"></i></div>
              <h4><a href="">Security</a></h4>
              <p>Hashing algorithms are used for storing the data into database for prevening data theft and breaching.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tree"></i></div>
              <h4><a href="">Environment Friendly</a></h4>
              <p>This system replaces the traditional methods which contributes in the harmony of nature.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>In case you want to talk, feel free to clearify your doubts</p>
        </div>

        <div class="row">

          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="post" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"  required />
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" required />
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject"  required />
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required ></textarea>
              </div>
              <div class="text-center"><button name="submit" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>LMSWebApp</h3>
            <p>Run to rescue with love and peace will follow</p>
          </div>
        </div>        

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="http://www.iworkforpaneer.epizy.com/">Tahir Malik</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>