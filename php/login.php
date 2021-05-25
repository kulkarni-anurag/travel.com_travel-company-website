<?php
  session_start();
  
  require_once('connection.php');
  
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  
  if(strlen($email) < 4){
    echo('short_email');
  }
  elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo('eformat');
  }
  elseif(strlen($password) < 4){
    echo('short_pass');
  }
  else{
    $sql3 = "SELECT * FROM members WHERE email = '$email'";
    $result = $conn->query($sql3);
    $num_rows = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
  
    if($num_rows >= 1){
      if(password_verify($password, $row['password'])){
        $_SESSION['login'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['email'] = $row['email'];
        echo('true');
      }
      else {
        echo('false');
      }
    }
    else{
      echo('false');
    }
  }
  $conn->close();
?>