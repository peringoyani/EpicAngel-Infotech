<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'epic_angle';
$success = false;
$error = false;

$conn = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`, `date`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    $success = true;
  }
  else {
    $error = true;
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EpicAngle Infotech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content= "width=device-width, user-scalable=no">

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/favlogo.png" type="image/x-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="scas.sass">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet/less" type="text/css" href="styles.less" />
  <script src="less.js" type="text/javascript"></script>

  <!-- =======================================================
  * Template Name: MyResume - v4.7.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body onscroll="scrolling()">

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">
    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Services</span></a></li>
        <li><a href="#work" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Work</span></a>
        </li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Portfolio</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </header><!-- End Header -->

  <div id="myNavbar" class="container-fluid fixed-top" style="z-index: 100000000; background-color: white;">
    <header class="d-flex flex-wrap justify-content-center align-items-center py-3">
      <a href="#hero" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <!-- <span class="fs-4" style="font-weight: bold; font-size: 30px !important;">EpicAngle <span style="font-size: 17px">Infotech</span></span> -->
        <img src="assets/img/logo.png" alt="" srcset="" width="174px" height="75px">
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item hover"><a href="#" class="nav-link text-black fw-bold">Home</a></li>
        <li class="nav-item hover"><a href="#about" class="nav-link text-black fw-bold">About</a></li>
        <li class="nav-item hover"><a href="#services" class="nav-link text-black fw-bold">Services</a></li>
        <li class="nav-item hover"><a href="#work" class="nav-link text-black fw-bold">Work</a></li>
        <li class="nav-item hover"><a href="#portfolio" class="nav-link text-black fw-bold">Portfolio</a></li>
        <li class="nav-item hover"><a href="#contact" class="nav-link text-black fw-bold">Contact</a></li>
      </ul>
    </header>
  </div>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
          <br>
      <br>
    <div class="container" data-aos="zoom-in" data-aos-delay="100">

      <h1 style="color:black; font-weight: normal;">EpicAngle Infotech</h1>
      <p>We're <span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></p>
      <div class="social-links">
        <a href="#" class="facebook" style="color:green"><i class="bx bxl-whatsapp"></i></a>
        <a href="#" class="facebook" style="color:blue;"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram" style="color:red;"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin" style="color:rgb(95, 95, 255);"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
    <div class="container" id="headImage" data-aos="zoom-in" data-aos-delay="100" style="z-index: 1000000">
      <img src="assets/img/svg/undraw_programming_re_kg9v.svg" width="500px" height="400px" alt="" srcset="">
    </div>

  </section><!-- End Hero -->

  <main id="main">
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container d-flex justify-content-center align-items-center" id="mqabout" data-aos="fade-up">
        <div class="col-md-6">
          <br> <br> <br> 
          <img src="assets/img/svg/ui-ux-design-services.svg" class="img-fluid" alt="">
        </div>
          <div class="about-content col-md-6">
            <div style="text-align: left;">
              <h5 style="color:blueviolet; text-align: left; font-weight: bold;">
                / WHO WE ARE </h5>
            </div>
            <br>
            <h1> Why EpicAngle For Web Development? </h1>

            <p style="text-align: left; font-size: 18px;"><strong>EpicAngle Infotech</strong> is a leading custom mobile development company, providing
              world-class mobile development services to clients at affordable prices. We are specialized in Android,
              iOS, Flutter, PHP, UI/UX design, and Quality Assurance. We, at Appworld Infotech, hold a team of dedicated
              mobile developers, expert designers, and marketing specialists who always strive to deliver best-in-class
              mobile development solutions that help clients to achieve their business goals.
              We put our clients on top priority and help them to grow their business worldwide to move forward in the
              digital world. At Appworld Infotech, we not only build amazing mobile development but also help you to
              take your business to new heights of success. With many years of experience, we have helped thousands of
              brands to achieve their business goals by delivering hundreds of projects on time with 100% customer
              satisfaction.</p>
          </div>

        </div>

      </div>
      </section>
      <br>
      <br>

      <section id="services" style="padding-bottom: 20px; background-color:#f5f5f5"> 

      <div class="about-main-content" data-aos="fade-up">
        <br> 
        <div style="text-align: left;" class="mt-4 mb-2">
          <h5 style="color:blueviolet; text-align: center; font-weight: bold;">
            / WHAT WE DO </h5>
        </div>

        <div style="text-align: center; font-weight: bold;" class="mb-4">
          <h1 class="head1">We are a creative leaders that combines <br> creativity, technology & design</h1>
        </div>

<div class="container mt-4">
  <div class="d-flex justify-content-center mqwork">
    <div class="partone d-flex justify-content-center align-items-center">
        <div class="card p-3 hover" style="margin-right: 25px; width: 18rem; border: none; height: 100%;" data-aos="zoom-in" data-aos-delay="100">
          <div class="card-title py-4">
            <h4 style="text-align: center; color: rgb(16, 94, 125);">Flutter Development</h4>
          </div>
          <img src="assets/img/svg/undraw_flutter_dev_wvqj.svg" class="card-img-top mb-4" style="height: 150px;" alt="wait">
          <div class="card-body">
            <p class="card-text" style="text-align: center;">We build unbeatable native iOS and Android apps faster
              and
              on budget using Flutter, the
              fastest growing cross-platform app development framework.</p>
          </div>
        </div>
        <div class="card p-3 hover" style="margin-right: 25px; width: 18rem; border: none; height: 100%;" data-aos="zoom-in" data-aos-delay="100">
          <div class="card-title py-4">
            <h4 style="text-align: center; color: blueviolet;">Android Development</h4>
          </div>
          <img src="assets/img/svg/undraw_android_jr64.svg" class="card-img-top mb-4" style="height: 150px;" alt="wait">
          <div class="card-body">
            <p class="card-text" style="text-align: center;">We offer superior work, fully customized, and
              top-rated Android App Development Services to our clients with the help of our developers.</p>
          </div>
        </div>
    </div>

    <div class="parttwo d-flex justify-content-center align-items-center">
        <div class="card p-3 hover" style="margin-right: 25px; width: 18rem; border: none; height: 100%;" data-aos="zoom-in" data-aos-delay="100">
          <div class="card-title py-4">
            <h4 style="text-align: center; color: deeppink;">UI/UX Design</h4>
          </div>
          <img src="undraw_design_tools_-42-tf.svg" style="height: 150px;" class="card-img-top mb-4" alt="wait">
          <div class="card-body">
            <p class="card-text" style="text-align: center;">We are a creative studio that combines creativity,
              technology & design. We provide the best UI/UX mobile designs for every type of business.</p>
          </div>
      </div>

        <div class="card p-3 hover" style="width: 18rem; border: none; height: 100%;" data-aos="zoom-in" data-aos-delay="100">
          <div class="card-title py-4">
            <h4 style="text-align: center; color: orangered;">Web Development</h4>
          </div>
          <img src="assets/img/svg/undraw_static_website_re_x70h.svg" style="height: 150px;" class="card-img-top mb-4" alt="wait">
          <div class="card-body">
            <p class="card-text" style="text-align: center;">We are a creative studio that combines creativity,
              technology & design. We provide the best UI/UX mobile designs for every type of business.</p>
          </div>
        </div>
    </div>

  </div>

</div>

        <div class="card-content d-flex justify-content-evenly flex-wrap" style="margin-top:60px ;">


        </div>
      </div>
    </section><!-- End About Section -->

       <!-- ======= Services Section ======= -->
       <section class="services">
        <div class="container" data-aos="fade-up">
  
          <div class="service-content d-flex flex-wrap p-5 justify-content-center align-items-center">
  
            <h5 style="color:blueviolet; font-weight: bold;" class="section-title"> / BEST DIGITAL <br>
              MARKETING SERVICES!</h5>
  
            <p class="firstP" style="margin-left:20px; text-align: center; margin-top: -20px; color: black;">Start working with an company that can provide
              everything you need to generate <br> awareness, drive traffic, connect with customers, and increase sales
              montes,<br>
              nascetur ridiculus mus.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <img src="assets/img/socialmediaş.png" alt="">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                  </path>
                  </svg>
                  <i class="bx bxl-dribbble"></i>
                </div>
                <h4><a href="" style="color:black ;">Socail Marketing</a></h4>
                <p style="color:rgb(21, 128, 170) ;font-size: 15px;">Start working with an company that provide everything
                  you need to any create awareness drive</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
              data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  <img src="assets/img/seo optimizations.png" alt="">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                  </path>
                  </svg>
                  <i class="bx bx-file"></i>
                </div>
                <h4><a href="" style="color:black ;">SEO Optimization</a></h4>
                <p style="color:orange ; font-size: 15px; ">Start working with an company that provide everything you need
                  to any create awareness drive</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
              data-aos-delay="300">
              <div class="icon-box iconbox-pink">
                <div class="icon">
                  <img src="assets/img/seo management.png" alt="">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                  </path>
                  </svg>
                  <i class="bx bx-tachometer"></i>
                </div>
                <h4><a href="" style="color:black ;">SEO Management</a></h4>
                <p style="color:deeppink;  font-size: 15px;">Start working with an company that provide everything you
                  need to any create awareness drive</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section -->
      
    <!-- ======= Facts Section ======= -->
    <section id="work" class="facts mt-4">
      <div class="container" data-aos="fade-up">
        <br> <br> <br> 
        <div style="text-align: center;">
          <h5 style="color:blueviolet; text-align: center; font-weight: bold;">
            / OUR WORK</h5>
        </div>
        <div class="section-title">
          <h2 style="color:black;">Technologies we work with</h2>
        </div>

        <nav>
          <ul class="nav nav-tabs d-flex justify-content-center align-items-center flex-wrap">
            <li class="nav-item" style="padding: 38px; cursor: pointer;" onclick="clickMobile()">
              <a class="nav-link active" id="mobileActive" aria-current="page" style="color: black;">Mobile</a>
            </li>
            <li class="nav-item" style="padding: 38px; cursor: pointer;" onclick="clickFrontend()">
              <a class="nav-link" id="frontendActive" style="color: black;">Frontend</a>
            </li>
            <li class="nav-item" style="padding: 38px; cursor: pointer;" onclick="clickBackend()">
              <a class="nav-link" id="backendActive" style="color: black;">Backend</a>
            </li>
            <li class="nav-item" style="padding: 38px; cursor: pointer;" onclick="clickDatabase()">
              <a class="nav-link" id="databaseActive" style="color: black;">Databas</a>
            </li>
          </ul>
        </nav>

        <!-- app -->
        <div class="logo-work-content mt-4 d-flex justify-content-evenly align-items-center flex-wrap" id="mobile">
          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/ios.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5 class="mt-2">iOS</h5>
          </div>

          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/android.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5>Android</h5>
          </div>

          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/flutter.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5>Flutter</h5>
          </div>
        </div>

        <!-- front end -->
        <div class="logo-work-content mt-4 d-flex justify-content-evenly align-items-center d-none flex-wrap" id="frontend">
          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/jquery.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5 class="mt-2">jquery</h5>
          </div>

          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/javascript.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5>javascript</h5>
          </div>

          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/HTML5.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5>HTML5</h5>
          </div>

          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/reactjs.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5>React Js</h5>
          </div>

          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/bootstrap.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5>Bootstrap</h5>
          </div>
        </div>

        <!-- Backend -->
        <div class="logo-work-content mt-4 d-flex justify-content-evenly align-items-center d-none flex-wrap" id="backend">
          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/php.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5 class="mt-2">PHP</h5>
          </div>

          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/python.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5>Python</h5>
          </div>

          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/laravel.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5>Laravel</h5>
          </div>
        </div>

        <!-- Database -->
        <div class="logo-work-content mt-4 d-flex justify-content-evenly align-items-center d-none flex-wrap"  id="database">
          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 50px 70px">
            <img src="assets/img/svg/mysql.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5 class="mt-2">My Sql</h5>
          </div>

          <div class="mqTechnology d-flex flex-column justify-content-center align-items-center hover" style="padding: 40px 70px">
            <img src="assets/img/svg/firebase.svg" alt="wait" width="55px" height="auto">
            <br>
            <h5>Firebase</h5>
          </div>
        </div>


      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->


    <!-- End Skills Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
        <br> <br> <br> 
        <div style="text-align: center;">
          <h5 style="color:blueviolet; text-align: center; font-weight: bold;">
            / OUR PORTFOLIO</h5>
        </div>
        <div class="section-title">
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

 

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <br> <br> <br> 
        <div style="text-align: center;">
          <h5 style="color:blueviolet; text-align: center; font-weight: bold;">
            / CONTACT US</h5>
        </div>
        <br>
        <br>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>304 - Blue Point, Shyamdham Road, Jakatnaka, Surat - 395006</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@epicangleinfotech.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 7016350490</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="EpicAngle_Infotech.php#contact" method="POST">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <?php 
                if ($success) {
                  echo '<div class="my-3">
                  <div class="sent-message" style="background-color: green; color:white; padding:15px;">We will be get back to you soon!</div>
                </div>';
                }
                if($error) {
                  echo '<div class="my-3">
                  <div class="sent-message" style="background-color: red; color:white; padding:15px;">Some technical issue!</div>
                </div>';
                }
              ?>
              <div class="text-center">
                <button class="btn btn-primary mt-4" style="background-color:blueviolet; border:none" type="submit">Send Message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <div class="map">

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.995263868929!2d72.90324369999999!3d21.232036399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be045f4ea922181%3A0x5b7c69198ada4029!2sJawa%20Surat%20-%20Seema%20Bikes%20Varachha!5e0!3m2!1sen!2sin!4v1653478736640!5m2!1sen!2sin"
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="section-title">
        <h2 class="mb-4" style="color: white;">EpicAngle Infotech</h2>
      </div>
          <div class="mt-4 d-flex justify-content-center align-items-center">
                <a href="#" class="mqfooter" style="color: white;">Home</a>
                <a href="#about" class="mqfooter"style="color: white;">About</a>
                <a href="#services" class="mqfooter" style="color:white;">Services</a>
                <a href="#work" class="mqfooter" style="color:white;">Work</a>
                <a href="#portfolio" class="mqfooter" style="color: white;">Portfolio</a>
                <a href="#contact" class="mqfooter" style="color:white;">Contact</a>
          </div>
      <div class="social-links mt-4">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        <span>@2022</span></strong> All Rights Reserved by <a href="">www.epicangleinfotech.com</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>
</html>