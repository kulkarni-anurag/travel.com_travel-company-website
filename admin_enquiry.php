<?php
  require_once("php/connection.php");
  
  $sql12 = "SELECT * FROM custom WHERE status = 'UNRESOLVED'";
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
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>E_ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Enquiry</th>
            <th>Date</th>
            <th>Status</th>
            <th>Update</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if($result12->num_rows>0){
              while($row = $result12->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo($row['eid']); ?></td>
                  <td><?php echo($row['name']); ?></td>
                  <td><?php echo($row['email']); ?></td>
                  <td><?php echo($row['enquiry']); ?></td>
                  <td><?php echo($row['edate']); ?></td>
                  <td><?php echo($row['status']); ?></td>
                  <td><a href="update.php?id=<?php echo($row['cid']); ?>&status=<?php echo($row['status']); ?>" class="btn btn-warning">UPDATE</a></td>
                </tr>
                <?php
              }
            } else {
              ?>
              <tr>
                <td>No Data</td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
    <br><br>
    <?php require_once('php/footer.php'); ?>
  </body>
</html>