<?php
  require_once("connection.php");
  
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $enquiry = mysqli_real_escape_string($conn, $_POST["enquiry"]);
  
  $sql = "INSERT INTO custom(name,email,enquiry) VALUES('$name','$email','$enquiry')";
  $result = $conn->query($sql);
  
  if($result){
    echo('true');
  }
?>