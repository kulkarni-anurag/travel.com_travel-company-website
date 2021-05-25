<?php
  session_start();
  unset($_SESSION['login']);
  unset($_SESSION['fname']);
  unset($_SESSION['email']);
  unset($_SESSION['bid']);
  
  header("location:index.php?logout=true");
?>
