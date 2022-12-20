<?php 
  include 'includes/config.php';
  session_start();

  if(isset($_SESSION["user_username"])) {
    header("Location: dashboard.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Bootstrap's css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Bootstrap's js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
    <!-- Title -->
    <link rel="icon" type="image/x-icon" href="./images/favicon.png"/>
    <title>Beyond Reality</title>
  </head>
  <body>
    <!-- navbar -->
    <header>
      <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container-fluid">
          <a class="navbar-brand ps-5" href="#">Beyond Reality</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navitem">
              <li class="nav-item">
                <a class="nav-link px-4" href="#intro">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#creations">Creations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#footer">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#login">Connect</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- navbar -->

    <!-- intro section -->
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 my-auto">
            <div class="text-content">
              <h1>More than just a regular <span>Virtual Reality</span></h1>
              <h3>We are here to give you a VR experience like never before. Built with the latest technology, you can feel reality in the palm of your hand</h3>
            </div>
            <button>Learn More</button>
          </div>
          <div class="col-md-6">
            <img src="./images/illustration1.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- intro section -->

    <!-- login section -->
    <section id="login" class="connect">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="./images/illustration-stay-productive.png" alt="" />
          </div>
          <div class="col-md-6 my-auto">
            <div class="text-content text-center ps-5">
              <h1 class="fw-bold">Let's Connected <span>Together</span></h1>
              <form action="login.php" method="post">
                <div class="form-element">
                  <input type="text" name="username" id="username" placeholder="username" required />
                </div>
                <div class="form-element">
                  <input type="password" name="password" id="password" placeholder="password" required />
                </div>
                <p>Forgot Your Password?</p>
                <button name="submit" class="login-btn">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- login section -->

    <!-- our creations section -->
    <section id="creations">
      <h1 class="text-center">Our <span>Creations</span></h1>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="my-card">
              <img src="./images/image-deep-earth.jpg">
              <div class="card-info">
                <p>DEEP</p>
                <p>EARTH</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/image-night-arcade.jpg" alt="">
              <div class="card-info">
                <p>NIGHT</p>
                <p>ARCADE</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/image-soccer-team.jpg" alt="">
              <div class="card-info">
                <p>SOCCER</p>
                <p>TEAM VR</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/image-grid.jpg" alt="">
              <div class="card-info">
                <p>THE</p>
                <p>GRID</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="my-card">
              <img src="./images/image-from-above.jpg" alt="">
              <div class="card-info">
                <p>FROM UP</p>
                <p>ABOVE VR</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/image-pocket-borealis.jpg" alt="">
              <div class="card-info">
                <p>POCKET</p>
                <p>BOREALIS</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/image-curiosity.jpg" alt="">
              <div class="card-info">
                <p>THE</p>
                <p>CURIOSITY</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/image-fisheye.jpg" alt="">
              <div class="card-info">
                <p>MAKE IT</p>
                <p>FISHEYE</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- our creation section -->

    <!-- footer section -->
    <footer id="footer" class="footer-area">
      <div class="footer-big">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-12">
              <div class="footer-widget">
                <div class="widget-about">
                  <h3>Beyond <span>Reality</span></h3>
                  <p>Beyond reality is a VR platform that strives to bring the most up-to-date and up-to-date technology so that users can experience a fun, immersive and stunning VR experience so they can explore real adventures.</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="footer-widget">
                <div class="footer-menu footer-menu--1">
                  <h3 class="footer-widget-title">Popular Category</h3>
                  <ul>
                    <li>
                      <a href="#">Virtual Reality</a>
                    </li>
                    <li>
                      <a href="#">Augmented Reality</a>
                    </li>
                    <li>
                      <a href="#">Metaverse</a>
                    </li>
                    <li>
                      <a href="#">NFT</a>
                    </li>
                    <li>
                      <a href="#">VR Concepts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="footer-widget">
                <div class="footer-menu">
                  <h3 class="footer-widget-title">Our Company</h3>
                  <ul>
                    <li>
                      <a href="#">About Us</a>
                    </li>
                    <li>
                      <a href="#">How It Works</a>
                    </li>
                    <li>
                      <a href="#">Affiliates</a>
                    </li>
                    <li>
                      <a href="#">Testimonials</a>
                    </li>
                    <li>
                      <a href="#">Contact Us</a>
                    </li>
                    <li>
                      <a href="#">Plan &amp; Pricing</a>
                    </li>
                    <li>
                      <a href="#">Blog</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="footer-widget">
                <div class="footer-menu no-padding">
                  <h3 class="footer-widget-title">Help Support</h3>
                  <ul>
                    <li>
                      <a href="#">Support Forum</a>
                    </li>
                    <li>
                      <a href="#">Terms &amp; Conditions</a>
                    </li>
                    <li>
                      <a href="#">Support Policy</a>
                    </li>
                    <li>
                      <a href="#">Refund Policy</a>
                    </li>
                    <li>
                      <a href="#">FAQs</a>
                    </li>
                    <li>
                      <a href="#">Buyers Faq</a>
                    </li>
                    <li>
                      <a href="#">Sellers Faq</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mini-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-text">
                <p>
                  © 2022 <a href="#">Beyond Reality</a>. All rights reserved. Created by
                  <a href="#">Lorenzo-Gilang</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section -->
  </body>
</html>