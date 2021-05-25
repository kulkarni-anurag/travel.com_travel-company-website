<?php
  require_once("connection.php");
  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $msgemail = mysqli_real_escape_string($conn, $_POST['msgemail']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  
  
  if(strlen($name) < 4){
    echo('n_short');
  }
  elseif (strlen($msgemail) < 4) {
    echo('e_short');
  }
  elseif(filter_var($msgemail, FILTER_VALIDATE_EMAIL) === false){
    echo('e_format');
  }
  elseif(strlen($subject) <4){
    echo('s_short');
  }
  elseif(strlen($message) < 4){
    echo('m_short');
  }
  elseif(strlen($message) > 100){
    echo('m_long');
  }
  else{
    $sql = "INSERT INTO contact(name,email,subject,message) VALUES ('$name','$msgemail','$subject','$message')";
    $result = $conn->query($sql);
    
    if($result){
      echo('true');
    }
  }
  $conn->close();
?>