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
    <title>Travel.com - Custom Tours</title>
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
              <h1 class="text-white">Customize Tours</h1>
            </div>
          </div>
        </div>
      </div>
    <!--Banner End-->
    <br>
    <!--Form Start-->
    <div class="container">
      <h2 class="text-center">Enquire Here & We will get back to you!</h2>
      <div class="row col-lg-12 bg-gray justify-content-center">
        <form name="contact" role="form" class="form-row mt-5 mb-4 pl-5 pr-5" method="POST">
          <div id="add_err7" class="form-group col-lg-12"></div>
          <div class="form-group col-lg-6">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
          </div>
          <div class="form-group col-lg-6">
            <input type="email" class="form-control" name="enquireemail" id="enquireemail" placeholder="Enter Email">
          </div>
          <div class="form-group col-lg-12">
            <textarea class="form-control" name="enquiry" id="enquiry" placeholder="Enter Your Tour Choice"></textarea>
          </div>
          <div class="form-group mx-auto">
            <button type="button" class="btn btn-success" id="enquire" name="enquire">Enquire</button>
          </div>
        </form>
      </div>
    </div>
    <!--Form End-->
    <br>
    <?php require_once('php/footer.php'); ?>
  </body>
</html>