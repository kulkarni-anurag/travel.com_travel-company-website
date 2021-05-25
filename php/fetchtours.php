<?php
  require_once('connection.php');
  
  $type = mysqli_real_escape_string($conn, $_POST["type"]);
  $id = mysqli_real_escape_string($conn, $_POST["id"]);
  
  $sql2 = "SELECT * FROM tours WHERE type = '$type'"; 
  
  $result = $conn->query($sql2);

  while($row = $result->fetch_assoc()){
    ?>
    <option value="<?php echo($row['t_id']); ?>" <?php if($id == $row['t_id']){ echo("selected"); }?>><?php echo($row['destination']); ?></option>
    <?php
  }
  
  $conn->close();
?>