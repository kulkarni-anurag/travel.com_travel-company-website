<?php
  require_once("connection.php");
  
  $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);
  $tid = mysqli_real_escape_string($conn, $_POST["tid"]);
  
  $sql3 = "SELECT price FROM tours WHERE t_id = '$tid'";
  
  $result = $conn->query($sql3);
  
  while($row = $result->fetch_assoc()){
    echo($row['price']*$quantity);
  }
  
  $conn->close();
?>