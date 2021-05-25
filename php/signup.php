<?php
  session_start();
  
  require_once('connection.php');
  
  $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
  $email = mysqli_real_escape_string($conn, $_POST["semail"]);
  $password = mysqli_real_escape_string($conn, $_POST["spwd"]);
  
  if (strlen($fname) < 4) {
    echo('short_name');
  }
  elseif (strlen($email) < 4) {
    echo('short_email');
  }
  elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo('eformat');
  }
  elseif (strlen($password) < 4) {
    echo('short_pass');
  }
  else {
    
    $spassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
    
    $sql1 = "SELECT * FROM members WHERE email = '$email'";
    $sql7 = "SELECT * FROM subscribers WHERE email = '$email'";
    $result = $conn->query($sql1);
    $result2 = $conn->query($sql7);
    $num_row = mysqli_num_rows($result);
    $num_row2 = mysqli_num_rows($result2);
    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);
    
    if($num_row < 1){
      $sql2 = "INSERT INTO members(fname, email, password) VALUES ('$fname', '$email', '$spassword')";
      $insert_row = $conn->query($sql2);
      
      if($num_row2 < 1){
        $sql4 = "INSERT INTO subscribers(email) VALUES ('$email')";
        $insert_email = $conn->query($sql4);  
      }
      
      if($insert_row){
        $_SESSION['login'] = $conn->insert_id;
        $_SESSION['fname'] = $fname;
        $_SESSION['email'] = $email;
        echo('true');
      }
    }
    else{
      echo('false');
    }
  }
  $conn->close();
?>
