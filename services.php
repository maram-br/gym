<?php
session_start();
$test = false;
if (isset($_SESSION['user'])) {
  $test = true;
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Gym Template" />
  <meta name="keywords" content="Gym, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Gym | Template</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet" />

  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/flaticon.css" type="text/css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="css/barfiller.css" type="text/css" />
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Offcanvas Menu Section Begin -->
  <div class="offcanvas-menu-overlay"></div>
  <div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
      <i class="fa fa-close"></i>
    </div>

    <nav class="canvas-menu mobile-menu">
      <ul>
        <li><a href="./index.html">Home</a></li>
        <li><a href="./services.html">Services</a></li>
        <li><a href="./team.html">Our Team</a></li>
        <li><a href="./class-timetable.html">our timetable</a></li>
      </ul>
    </nav>
  </div>
  <!-- Offcanvas Menu Section End -->

  <!-- Header Section Begin -->
  <header class="header-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="logo">
            <a href="./index.html">
              <img src="img/logo.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="nav-menu">
            <ul>
              <?php if ($test === true): ?>
                <li><a href="./user.php">Home</a></li>
              <?php else: ?>
                <li><a href="./index.html">Home</a></li>
              <?php endif; ?>
              <li class="active"><a href="./services.php">Services</a></li>
              <li><a href="./team.php">Our Team</a></li>
              <li><a href="./class-timetable.php">our timetable</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="canvas-open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcrumb-text">
            <h2>Services</h2>
            <div class="bt-option">
              <a href="./index.html">Home</a>
              <span>Services</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Services Section Begin -->
  <section class="services-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <span>What we do?</span>
            <h2>PUSH YOUR LIMITS FORWARD</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 order-lg-1 col-md-6 p-0">
          <div class="ss-pic">
            <img src="img/services/services-1.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-3 order-lg-2 col-md-6 p-0">
          <div class="ss-text">
            <h4>Personal training</h4>
            <p>
              Achieve your fitness goals with personalized training. Our
              certified trainers create custom plans for your success. Start
              today!
            </p>
          </div>
        </div>
        <div class="col-lg-3 order-lg-3 col-md-6 p-0">
          <div class="ss-pic">
            <img src="img/services/services-2.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-3 order-lg-4 col-md-6 p-0">
          <div class="ss-text">
            <h4>Group fitness classes</h4>
            <p>
              Join our dynamic group fitness classes for a fun workout with
              others!
            </p>
          </div>
        </div>
        <div class="col-lg-3 order-lg-8 col-md-6 p-0">
          <div class="ss-pic">
            <img src="img/services/services-4.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-3 order-lg-7 col-md-6 p-0">
          <div class="ss-text second-row">
            <h4>Body building</h4>
            <p>Transform your physique with our bodybuilding program!</p>
          </div>
        </div>
        <div class="col-lg-3 order-lg-6 col-md-6 p-0">
          <div class="ss-pic">
            <img src="img/services/services-3.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-3 order-lg-5 col-md-6 p-0">
          <div class="ss-text second-row">
            <h4>Strength training</h4>
            <p>
              Build strength and redefine your limits with our strength
              training programs!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section End -->

  <!-- Banner Section Begin -->
  <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="bs-text service-banner">
            <h2>Exercise until the body obeys.</h2>
            <div class="bt-tips">Where health, beauty and fitness meet.</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->

  <!-- Pricing Section Begin -->
  <section class="pricing-section service-pricing spad">
    <div class="container">
      <!-- plan section -->
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <span>Our Plan</span>
            <h2>Choose your pricing plan</h2>
          </div>
        </div>
      </div>


      <div class="row justify-content-center">
        <?php

        include_once 'utilities/autoloader.php';
        $offre_class = new Offre();
        $offre_rows = ($offre_class->findAll())->getData();
        foreach ($offre_rows as $offre_row) {
          ?>

          <div class="col-lg-4 col-md-8">
            <div class="ps-item">
              <h3>
                <?php print ($offre_row->NAME) ?>
              </h3>
              <div class="pi-price">
                <h2>TND
                  <?php print ($offre_row->PRICE) ?>.0
                </h2>

              </div>
              <ul>
                <li>Free riding</li>

                <li>Personal trainer</li>
                <li>Weight losing classes</li>
                <li>No time restriction</li>
                <li>Indoor cycling</li>
                <li>Cardio kickboxing</li>
              </ul>

              <form action="payment.php" method="post">
                <input type="hidden" name="offreDuration" value='<?php echo $offre_row->DURATION ?>'>
                <input type="hidden" name="offreID" value='<?php echo $offre_row->ID; ?>'>
                <input type="hidden" name="offre" value='<?php echo $offre_row->NAME; ?>'>
                <input type="hidden" name="price" value='<?php echo $offre_row->PRICE * 100; ?>'>
                <input class="btn btn-warning" type="submit" value="Enroll now" name="submit">
              </form>

            </div>
          </div>
          <?php
        }
        ?>

      </div>

  </section>
  <!-- Pricing Section End -->

  <!-- Get In Touch Section Begin -->
  <div class="gettouch-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="gt-text">
            <i class="fa fa-map-marker"></i>
            <p>Centre Urbain Nord ,Tunisie <br />index 1082</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gt-text">
            <i class="fa fa-mobile"></i>
            <ul>
              <li>28 435 459</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gt-text email">
            <i class="fa fa-envelope"></i>
            <p>Support.gymcenter@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Get In Touch Section End -->

  <section class="footer-section">
    <div class="container">
      <div class="row">
        <div class="fs-about">
          <div class="fa-logo">
            <a><img src="img/logo.png" alt="" /></a>
          </div>
          <p>
            Welcome to our gym website! Discover a supportive community,
            state-of-the-art equipment, and expert trainers ready to help you
            reach your fitness goals. Whether you're a beginner or a seasoned
            athlete, our gym offers everything you need to stay motivated and
            achieve results. Join us and start your fitness journey today!
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="copyright-text">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              <i class="fa fa-heart" aria-hidden="true"></i>
              <a href="https://colorlib.com" target="_blank"></a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer Section End -->

  <!-- Js Plugins -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/jquery.barfiller.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
