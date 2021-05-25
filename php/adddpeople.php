<?php
  session_start();
  
  require_once("connection.php");
  
  $bid = $_SESSION["bid"];
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
  $age = mysqli_real_escape_string($conn, $_POST["age"]);
  
  $sql5 = "INSERT INTO dpeople (bid, name, gender, age) VALUES ('$bid', '$name', '$gender', '$age')";
  
  $result5 = $conn->query($sql5);
  
  if($result5){
    echo('true');
  }
?>