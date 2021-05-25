<?php 
  
  require_once('connection.php');
  
  $sql1 = "SELECT * FROM tours WHERE type = 2";
  $result1 = $conn->query($sql1);
?>
  <div class="tab-pane" id="1a">
    <div class="tm-recommended-place-wrap">
        <?php 
          if($result1->num_rows>0){
            while($row = $result1->fetch_assoc()){
        ?>
          		<div class="tm-recommended-place">
          		  <img src="<?php echo($row['image']); ?>" alt="Image" class="img-fluid tm-recommended-img">
          		  <div class="tm-recommended-description-box">
          			  <h3 class="tm-recommended-title"><?php echo($row['destination']); ?></h3>
          			  <p class="tm-text-highlight"><strong>Start Date:</strong> <?php echo($row['start_date']); ?></p>
          			  <p class="tm-text-highlight"><strong>End Date:</strong> <?php echo($row['end_date']); ?></p>
          			  <p class="tm-text-highlight"><strong>Max Capacity:</strong> <?php echo($row['max_cap']); ?></p>
          			  <p class="tm-text-gray"><?php echo($row['description']); ?></p>   
          		  </div>
          		  <a href="reservation.php?type=2&id=<?php echo($row['t_id']) ?>" class="tm-recommended-price-box">
          			<p class="tm-recommended-price"><i class="icofont-rupee"></i><?php echo($row['price']); ?></p>
          			<p class="tm-recommended-price-link">Book Now</p>
          		  </a>                        
          		</div>
		    <?php 
            }
          }
        ?>
    </div>
  </div>