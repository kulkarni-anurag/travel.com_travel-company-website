<?php
  
  require_once('connection.php');
  
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  
  if (strlen($email) < 4) {
    echo('short_email');
  }
  elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo('eformat');
  }
  else {
    
    $sql5 = "SELECT * FROM subscribers WHERE email = '$email'";
    $result = $conn->query($sql5);
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    
    if($num_row < 1){
      $sql6 = "INSERT INTO subscribers(email) VALUES ('$email')";
      $insert_email = $conn->query($sql6);
      
      if($insert_email){
        echo('true');
      }
    }
    else{
      echo('false');
    }
  }
  $conn->close();
?>