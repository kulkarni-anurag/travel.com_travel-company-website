<?php
  $dbhost = 'localhost:3306';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'travel.com';
  
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  
  if($conn->connect_error){
    die('Connection failed'.$conn->connect_error);
  }
?>