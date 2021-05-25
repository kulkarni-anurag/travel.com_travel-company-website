<?php
  require_once("php/connection.php");
  
  if(isset($_GET['message'])){
    if($_GET['message'] == 'updated'){
      ?>
      <script>
        window.alert("Record Updated");
      </script>
      <?php
    }
  }
  
  $sql12 = "SELECT * FROM tour_type";
  $result12 = $conn->query($sql12);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel.com - Admin Panel</title>
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
    <?php require_once("navbar/navbar3.php"); ?>
    <!-- Navigation Bar End -->
    
    <!--Banner Start -->
      <div class="container-fluid bg-image image-fluid">
       <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <h1 class="text-white">Admin Panel</h1>
            </div>
          </div>
        </div>
      </div>
    <!--Banner End-->
    <br><br>
    <h2 class="text-center">Check the Bookings</h2>
    <div class="container">
      <div class="row col-lg-12">
        <form role="form" class="form-row mt-5 w-100">
          <div class="form-group col-lg-12">
            <select class="form-control" name="type1" id="type1">
              <option value="">--- Select Tour Type ---</option>
              <?php
                if($result12->num_rows > 0){
	                while($row = $result12->fetch_assoc()){
	                ?>
	                <option value="<?php echo($row['tid']);?>" <?php if($_GET['type'] == $row['tid']){ echo("selected"); }?>><?php echo($row['type']); ?></option>
	                <?php
	                }
	              }
              ?>
            </select>
          </div>
          <div class="form-group col-lg-12">
            <select class="form-control" name="tour" id="tour">
              <option value="">--- Select Tour Package ---</option>
            </select>
          </div>
          <div class="form-group col-lg-12">
            <select class="form-control" name="stat" id="stat">
              <option value="1">All</option>
              <option value="2">PAID</option>
              <option value="3">UNPAID</option>
            </select>
          </div>
        </form>
        <div class="form-group mx-auto">
          <button type="button" class="btn btn-lg btn-success" id="fetchbook" name="fetchbook">Fetch</button>
        </div>
      </div>
      <div id="table1"></div>
    </div>
    <br><br>
    <?php require_once('php/footer.php'); ?>
  </body>
</html>