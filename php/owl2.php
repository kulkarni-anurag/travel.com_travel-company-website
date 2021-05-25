<?php 
  
  require_once('connection.php');
  
  $sql1 = "SELECT * FROM tours WHERE type = '2'";
  $result1 = $conn->query($sql1);
?>
  <div class="container">
    <div class="row">
      <div class="owl-carousel owl-theme">
        <?php 
          if($result1->num_rows>0){
            while($row = $result1->fetch_assoc()){
        ?>
	      <div class="item container-fluid">
	        <center><h4><?php echo($row['destination']); ?></h4></center>
		      <img src="<?php echo($row['image']); ?>" class="image-fluid">
		      <br>
		      <p><?php echo($row['description']); ?></p>
		      <p><strong>Start Date: </strong><?php echo($row['start_date']); ?></p>
		      <p><strong>End Date: </strong><?php echo($row['end_date']); ?></p>
		      <p><strong>Max Capacity: </strong><?php echo($row['max_cap']); ?></p>
		      <p><strong>Price: </strong><i class="icofont-rupee"></i><?php echo($row['price']); ?> per person.</p>
		      <center><a href="itours.php" class="btn btn-info">Book Now!</a></center>
		    </div>
		    <?php 
            }
          }
        ?>
		  </div>
    </div>
  </div>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		autoplayTimeout:3500,
		autoplayHoverPause:true,
		navText:['<i class="icofont-circled-left"></i>', '<i class="icofont-circled-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});
</script>