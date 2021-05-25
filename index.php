<?php 
  session_start();
  if(isset($_SESSION['login'])){
    $fname = $_SESSION['fname'];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel.com - Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <link rel="stylesheet" href="plugins/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/swiper/swiper.min.css">
		<script src="plugins/jQuery/jquery.min.js"></script>
		<script src="plugins/bootstrap/bootstrap.min.js"></script>
		<script src="plugins/aos/aos.js"></script>
		<script src="plugins/owl/owl.carousel.min.js"></script>
    <script src="JavaScript/main.js"></script>
    <script src="plugins/swiper/swiper.min.js"></script>
    <!--Favicon-->
    <link rel="shortcut icon" href="images/fav.jpeg" type="image/x-icon">
    <link rel="icon" href="images/fav.jpeg" type="image/x-icon">
  </head>
  <body>
    <!-- Preloader Start -->
    <div class="preloader">
      <img src="images/bus.gif" alt="preloader" class="img-fluid">
    </div>
    <!-- Preloader End-->
    
    <!-- Navigation Bar Start -->
    <?php 
      if(isset($_SESSION['login'])){
        require_once('navbar/navbar2.php');  
      }else{
        require_once('navbar/navbar1.php');
      }
    ?>
    <!-- Navigation Bar End -->
    
    <!--Logout Modal Start-->
    <?php
      if($_GET["logout"]){
        if($_GET["logout"] == true){
    ?>
    <script type="text/javascript">
      $(document).ready(function(){        
        $('#logout-modal').modal('show');
      }); 
    </script>
    <?php
        }
      }
    ?>
    <?php require_once('php/logout-modal.php');?>
    <!--Logout Modal End-->
    
    <!--Login Modal Call Start-->
    <?php
      if($_GET["login"]){
        if($_GET["login"] == 'required'){
    ?>
    <script type="text/javascript">
      $(document).ready(function(){        
        $('#login-modal').modal('show');
      }); 
    </script>
    <?php
        }
      }
    ?>
    <?php require_once('php/login-modal.php');?>
    <!--Login Modal Call End-->
    
    <!-- Banner Start -->
      <div class="swiper-container container-fluid">
      <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="images/swit.jpeg" class="img-fluid w-100">
            <div class="carousel-caption">
              <h2>Switzerland</h2>
              <p>Description</p>
              <p><a role="button" class="btn btn-danger">Book Now</a></p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/manas.jpg" class="img-fluid w-100">
            <div class="carousel-caption">
              <h2>Manasarovar</h2>
              <p>Description</p>
              <p><a role="button" class="btn btn-danger">Book Now</a></p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/australia.jpeg" class="img-fluid w-100">
            <div class="carousel-caption">
              <h2>Australia</h2>
              <p>Description</p>
              <p><a href="#" role="button" class="btn btn-danger">Book Now</a></p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/Darjeeling.jpg" class="img-fluid w-100">
            <div class="carousel-caption">
              <h2>Darjeeling</h2>
              <p>Description</p>
              <p><a role="button" class="btn btn-danger">Book Now</a></p>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <script>
        var mySwiper = new Swiper('.swiper-container', {
          // Optional parameters
          direction: 'horizontal',
          loop: true,
          centeredSlides: true,
          autoplay: {
            delay: 3000,
            disableOnInteraction: false,
          },
        
          // If we need pagination
          pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
            clickable: true,
          },
        
          // Navigation arrows
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>
    <!-- Banner End -->
    <br><br>  
    <!-- Intro Start -->
      <center><p class="text-head">Why Choose Travel<font color="dodgerBlue">.com</font> ?</p></center>
      <br>
      <div class="container">
        <section class="intro">
          <div class="intro-wrap bg-white w-100">
            <div class="row no-gutters">
              <div class="col-lg-4 col-md-4" data-aos="fade-up">
                <div class="intro-item">
                  <i class="icofont-bus"></i>
                  <h3 class="mt-3">Transport Service</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="intro-item bg-gray">
                  <i class="icofont-hotel"></i>
                  <h3 class="mt-3">Good Hotels</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="intro-item">
                  <i class="icofont-island"></i>
                  <h3 class="mt-3">Great Places</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <script type="text/javascript">
        AOS.init();
      </script>
    <!--Intro End-->
    <br>
    <!-- Owl Carousel 1 Start-->
    <center><p class="text-head">Domestic <font color="dodgerBlue">Tours</font></p></center>
    <hr />
    <br>
    <?php require_once('php/owl1.php');?>
    <!--Owl Carousel 1 End-->
    <br>
    <!-- Owl Carousel 2 Start-->
    <center><p class="text-head">International <font color="dodgerBlue">Tours</font></p></center>
    <hr /><br>
    <?php require_once('php/owl2.php'); ?>
    <!-- Owl Carousel 2 End-->
    <hr /><br>
    <center><p class="text-head">Customer <font color="dodgerBlue">Reviews</font></p></center>
    <div class="container">
      <div class="row col-md-12">
        <div class="col-md-4 bg-gray mt-3" data-aos="fade-up">
          <blockquote class="blockquote">
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
            <footer class="blockquote-footer">Virat Kohli</footer>
          </blockquote>
        </div>
        <div class="col-md-4 mt-3" data-aos="fade-up" data-aos-delay="200">
          <blockquote class="blockquote">
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
            <footer class="blockquote-footer">Rohit Sharma</footer>
          </blockquote>
        </div>
        <div class="col-md-4 bg-gray mt-3" data-aos="fade-up" data-aos-delay="400">
          <blockquote class="blockquote">
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
            <footer class="blockquote-footer">MS Dhoni</footer>
          </blockquote>
        </div>
      </div>
    </div>
    <br>
    <br>
    <?php require_once('php/footer.php');?>
  </body>
</html>
