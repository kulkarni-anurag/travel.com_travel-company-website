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
    <title>Travel.com - About</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <link rel="stylesheet" href="plugins/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/swiper/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
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
    
    <!--Banner Start -->
      <div class="container-fluid bg-image image-fluid">
       <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <h1 class="text-white">About Us</h1>
            </div>
          </div>
        </div>
      </div>
    <!--Banner End-->
    <br><br>
    <div class="container bg-gray box">
      <div class="row">
        <div class="col-lg-6 mb-5">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/VElW8XrBz84' frameborder='0' allowfullscreen></iframe></div>
        </div>
        <div class="col-lg-5 ml-5">
          <h1 class="text-head">About <font color="dodgerBlue">Us</font></h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p> 
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
          <ul type="circle">
            <strong><li>Best in-class</li>
            <li>World Famous</li>
            <li>Exiciting Offers</li></strong>
          </ul>
          <a href="#" class="btn btn-danger">
            <strong>Book Now!</strong>
          </a>
        </div>
      </div>
    </div>
    <br><br>
    <hr />
    <br>
    <h1 class="text-center text-head">Our <font color="dodgerBlue">Team</font></h1>
    <br>
    <div class="row container mx-auto">
      <div class="col-md-4 bg-gray mb-5 team ft-gray" data-aos="fade-right" data-aos-delay="100">
        <center><img src="images/images.jpg" alt="rahul" height="300px" width="300px" class="pt-5 img-fluid blur"></center>
        <br>
        <h3 class="ft-black">KL Rahul</h3>
        <p><strong>CEO</strong></p>
        <p class="justify-content-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
        <p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><span class="icofont-facebook ft-gray"></span></a></li>
            <li class="list-inline-item"><a href="#"><span class="icofont-instagram ft-gray"></span></a></li>
            <li class="list-inline-item"><a href="#"><span class="icofont-twitter ft-gray"></span></a></li>
          </ul>
        </p>
      </div>
      <div class="col-md-4 bg-gray mb-5 team ft-gray" data-aos="fade-up" data-aos-delay="300">
        <center><img src="images/images (1).jpeg" alt="ravi" height="300px" width="300px" class="pt-5 img-fluid blur"></center>
        <br>
        <h3 class="ft-black">Ravindra Jadeja</h3>
        <p><strong>CEO</strong></p>
        <p class="justify-content-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
        <p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><span class="icofont-facebook ft-gray"></span></a></li>
            <li class="list-inline-item"><a href="#"><span class="icofont-instagram ft-gray"></span></a></li>
            <li class="list-inline-item"><a href="#"><span class="icofont-twitter ft-gray"></span></a></li>
          </ul>
        </p>
      </div>
      <div class="col-md-4 bg-gray mb-5 team ft-gray" data-aos="fade-left" data-aos-delay="500">
        <center><img src="images/images (2).jpeg" alt="virat" height="300px" width="300px" class="pt-5 img-fluid blur"></center>
        <br>
        <h3 class="ft-black">Virat Kohli</h3>
        <p><strong>CEO</strong></p>
        <p class="justify-content-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
        <p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><span class="icofont-facebook ft-gray"></span></a></li>
            <li class="list-inline-item"><a href="#"><span class="icofont-instagram ft-gray"></span></a></li>
            <li class="list-inline-item"><a href="#"><span class="icofont-twitter ft-gray"></span></a></li>
          </ul>
        </p>
      </div>
    </div>
    <script type="text/javascript">
      AOS.init();
    </script>
    <br><hr /><br>
    <section class="section cta">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-lg-8 pt-5">
    				<center><h2 class="mt-3 text-white mb-4 font-lg">Where Do You Want To Go?</h2>
    				<a href="#" class="btn btn-danger">Book now</a></center
    			</div>
    		</div>
    	</div>
    </section>
    <br><hr /><br>
    <h1 class="text-head text-center">Our <font color="dodgerBlue">Services</font></h1>
    <div class="container">
      <div class="row col-md-12 no-gutters">
        <div class="col-lg-4 bg-gray" data-aos="fade-up">
          <div class="intro-item">
            <i class="icofont-hill-side"></i>
            <h3 class="mt-3">Beautiful Spots</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="intro-item">
            <i class="icofont-live-support"></i>
            <h3 class="mt-3">24-Hour Support</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
          </div>
        </div>
        <div class="col-lg-4 bg-gray" data-aos="fade-up" data-aos-delay="400">
          <div class="intro-item">
            <i class="icofont-culinary"></i>
            <h3 class="mt-3">Quality Food</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up">
          <div class="intro-item">
            <i class="icofont-hotel"></i>
            <h3 class="mt-3">Quality Hotels</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
          </div>
        </div>
        <div class="col-lg-4 bg-gray" data-aos="fade-up" data-aos-delay="200">
          <div class="intro-item">
            <i class="icofont-toy-train"></i>
            <h3 class="mt-3">Kids Special</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="intro-item">
            <i class="icofont-bus"></i>
            <h3 class="mt-3">Transport Service</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <?php require_once('php/footer.php'); ?>
  </body>
</html>
