<?php 
  session_start();
  if(isset($_SESSION['login'])){
    $fname = $_SESSION['fname'];
    $email = $_SESSION['email'];
    
    require_once('php/connection.php');
    
    $sql12 = "SELECT * FROM tour_type";
    $result12 = $conn->query($sql12);
    
    $sql13 = "SELECT * FROM source";
    $result13 = $conn->query($sql13);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel.com - Reservation</title>
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
  <?php
    if($_GET['id'] && $_GET['type']){
      $type = $_GET['type'];
      $id = $_GET['id'];
      ?>
      <script>
        var type = <?php echo($type); ?>;
        var id = <?php echo($id); ?>;
        type = type.toString();
        id = id.toString();
      
        $.ajax({
          type: "POST",
          url: "php/fetchtours.php",
          data: "type=" + type + "&id=" + id,
          success: function(data){
            $('#tours').empty();
            $('#tours').html(data);
          }
        });
      </script>
      <?php
    }
  ?>
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
              <h1 class="text-white">Reservation</h1>
            </div>
          </div>
        </div>
      </div>
    <!--Banner End-->
    <br><br>
    <p class="text-center text-head">Book Your <font color="dodgerBlue">Tickets</font></p>
    <hr />
    <div class="container">
      <div class="row col-lg-12 bg-gray justify-content-center">
        <form name="contact" role="form" class="form-row mt-5 mb-4 pl-5 pr-5" method="POST">
          <div id="add_err6" class="form-group col-lg-12"></div>
          <div class="form-group col-lg-12">
            <input type="hidden" name="mid" id="mid" value="<?php echo($_SESSION['login']); ?>">
          </div>
          <div class="form-group col-lg-6">
            <input type="text" class="form-control" name="name" id="name" value="<?php echo($fname); ?>" placeholder="Enter Name">
          </div>
          <div class="form-group col-lg-6">
            <input type="email" class="form-control" name="bookemail" id="bookemail" value="<?php echo($email); ?>" placeholder="Enter Email">
          </div>
          <div class="form-group col-lg-6">
            <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact Number">
          </div>
          <div class="form-group col-lg-6">
            <input type="text" class="form-control" name="idproof" id="idproof" placeholder="Enter Identity Proof Number">
          </div>
          <div class="form-group col-lg-12">
            <select class="form-control" name="ttype" id="ttype">
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
            <select class="form-control" name="tours" id="tours">
              <option value="">--- Select Tour Package ---</option>
            </select>
          </div>
          <div class="form-group col-lg-12">
            <select class="form-control" name="source" id="source">
              <option value="">--- Select Source Station ---</option>
              <?php
                if($result13->num_rows > 0){
	                while($row = $result13->fetch_assoc()){
	                ?>
	                <option value="<?php echo($row['sid']);?>"><?php echo($row['station']); ?></option>
	                <?php
	                }
	              }
              ?>
            </select>
          </div>
          <div class="form-group col-lg-6">
            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter number of People">
          </div>
          <div class="form-group col-lg-6">
            <input type="text" class="form-control" name="tamount" id="tamount" disabled="true" placeholder="Total Amount">
          </div>
          <div class="form-group col-lg-12" name="people" id="people"></div>
        </form>
        <div class="form-group mx-auto">
          <button type="button" class="btn btn-success" id="book" name="book">Book Tickets</button>
        </div>
      </div>
    </div>
    <br>
    <?php require_once('php/footer.php'); ?>
  </body>
</html>
<?php
    $conn->close();
  } else{
    header("location:index.php?login=required");
  }
?>