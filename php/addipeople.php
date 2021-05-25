<?php
  session_start();
  
  require_once("connection.php");
  
  $bid = $_SESSION["bid"];
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
  $age = mysqli_real_escape_string($conn, $_POST["age"]);
  $passport = mysqli_real_escape_string($conn, $_POST["passport"]);
  $visa = mysqli_real_escape_string($conn, $_POST["visa"]);
  
  $sql6 = "INSERT INTO ipeople (bid, name, gender, age, passport, visa) VALUES ('$bid', '$name', '$gender', '$age', '$passport', '$visa')";
  
  $result6 = $conn->query($sql6);
  
  if($result6){
    echo('true');
  }
?>