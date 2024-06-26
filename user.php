<?php
session_start();

$test = false;
if (isset($_SESSION['user'])) {
  $test = true;
}elseif(!isset($_SESSION['user'])){
  header('location:../index.html');
  exit;
}
?>
<!doctype html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Gym Template" />
    <meta name="keywords" content="Gym, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />

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
          <li><a href="./user.html">Home</a></li>
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
              <a href="./user.html">
                <img src="img/logo.png" alt="" />
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="nav-menu">
              <ul>
              <?php if ($test===true) : ?>
                                <li><a href="./user.php">Home</a></li>
                            <?php else :?>
                                <li><a href="./index.html">Home</a></li>
                            <?php endif; ?> 
                
                <li><a href="./services.php">Services</a></li>
                <li><a href="./team.php">Our Team</a></li>
                <li><a href="./class-timetable.php">our timetable</a></li>
              </ul>
            </nav>
          </div>
          <div class="button-container">
            <a href="./dashboard/index.php" class="primary-btn">Profile </a>
            <a href="./login/user/accesscard.php" class="primary-btn">Access Card </a>
            <a href="./logout/index.php" class="primary-btn">sign out </a>
          </div>
        </div>
        <div class="canvas-open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
      <div class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-6">
                <div class="hi-text">
                  <span>Welcome Back</span>
                  <h1>
                    <strong>Warrior </strong><br />
                    Keep Going
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-6">
                <div class="hi-text">
                  <span>Welcome Back</span>
                  <h1>
                    <strong>Warrior</strong><br />
                    Keep Going
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <span>Why chose us?</span>
              <h2>PUSH YOUR LIMITS FORWARD</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="cs-item">
              <span class="flaticon-034-stationary-bike"></span>
              <h4>Modern equipment</h4>
              <p>
                Discover modern fitness! Our gym's high-tech equipment makes
                workouts effective and engaging. Join us for the future of
                fitness!
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="cs-item">
              <span class="flaticon-033-juice"></span>
              <h4>Healthy nutrition plan</h4>
              <p>
                Revamp your diet with our balanced nutrition plan, featuring a
                variety of nutrient-rich foods for optimal health and energy.
                Experience the benefits of healthy eating with us!
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="cs-item">
              <span class="flaticon-002-dumbell"></span>
              <h4>Profesional training plan</h4>
              <p>
                Achieve your fitness goals with our personalized professional
                training plan, tailored to your needs and guided by expert
                trainers.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="cs-item">
              <span class="flaticon-014-heart-beat"></span>
              <h4>Unique to your needs</h4>
              <p>
                Achieve your fitness goals with our personalized training plan,
                designed uniquely for you.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <span>Our Classes</span>
              <h2>WHAT WE CAN OFFER</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="class-item">
              <div class="ci-pic">
                <img src="img/classes/class-1.jpg" alt="" />
              </div>
              <div class="ci-text">
                <span>STRENGTH</span>
                <h5>Weightlifting</h5>
                <a><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="class-item">
              <div class="ci-pic">
                <img src="img/classes/class-2.jpg" alt="" />
              </div>
              <div class="ci-text">
                <span>Cardio</span>
                <h5>Indoor cycling</h5>
                <a><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="class-item">
              <div class="ci-pic">
                <img src="img/classes/class-3.jpg" alt="" />
              </div>
              <div class="ci-text">
                <span>STRENGTH</span>
                <h5>Kettlebell power</h5>
                <a><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="class-item">
              <div class="ci-pic">
                <img src="img/classes/class-4.jpg" alt="" />
              </div>
              <div class="ci-text">
                <span>Cardio</span>
                <h4>Indoor cycling</h4>
                <a><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="class-item">
              <div class="ci-pic">
                <img src="img/classes/class-5.jpg" alt="" />
              </div>
              <div class="ci-text">
                <span>Training</span>
                <h4>Boxing</h4>
                <a><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section Begin -->
    <section class="team-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="team-title">
              <div class="section-title">
                <span>Our Team</span>
                <h2>TRAIN WITH EXPERTS</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="ts-slider owl-carousel">
            <div class="col-lg-4">
              <div class="ts-item set-bg" data-setbg="img/team/team-1.jpg">
                <div class="ts_text">
                  <h4>Refka Mahjoub</h4>
                  <span>Gym Trainer</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
                <div class="ts_text">
                  <h4>Oussama Grami</h4>
                  <span>Gym Trainer</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="ts-item set-bg" data-setbg="img/team/team-3.jpg">
                <div class="ts_text">
                  <h4>Aziz Dhouibi</h4>
                  <span>Gym Trainer</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="ts-item set-bg" data-setbg="img/team/team-4.jpg">
                <div class="ts_text">
                  <h4>Youcef Afli</h4>
                  <span>Gym Trainer</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="ts-item set-bg" data-setbg="img/team/team-5.jpg">
                <div class="ts_text">
                  <h4>Maram benrhouma</h4>
                  <span>Gym Trainer</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="ts-item set-bg" data-setbg="img/team/team-6.jpg">
                <div class="ts_text">
                  <h4>Lina saoud</h4>
                  <span>Gym Trainer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team Section End -->
    <!-- Gallery Section Begin -->
    <div class="gallery-section">
      <div class="gallery">
        <div class="grid-sizer"></div>
        <div
          class="gs-item grid-wide set-bg"
          data-setbg="img/gallery/gallery-1.jpg"
        >
          <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"
            ><i class="fa fa-picture-o"></i
          ></a>
        </div>
        <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
          <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"
            ><i class="fa fa-picture-o"></i
          ></a>
        </div>
        <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
          <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"
            ><i class="fa fa-picture-o"></i
          ></a>
        </div>
        <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
          <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"
            ><i class="fa fa-picture-o"></i
          ></a>
        </div>
        <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
          <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"
            ><i class="fa fa-picture-o"></i
          ></a>
        </div>
        <div
          class="gs-item grid-wide set-bg"
          data-setbg="img/gallery/gallery-6.jpg"
        >
          <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"
            ><i class="fa fa-picture-o"></i
          ></a>
        </div>
      </div>
    </div>
    <!-- Gallery Section End -->
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

    <!-- Footer Section Begin -->
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
