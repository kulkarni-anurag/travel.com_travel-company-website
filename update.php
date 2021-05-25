<?php
  require_once("php/connection.php");
  
  $id = $_GET['id'];
  $status = $_GET['status'];
  
  echo($status);
  
  if($status == 'UNPAID'){
    $sql = "UPDATE bookings SET status = 'PAID' WHERE bid = '$id'";
  } elseif($status == 'PAID'){
    $sql = "UPDATE bookings SET status = 'UNPAID' WHERE bid = '$id'";
  } elseif($status == 'UNSOLVED'){
    $sql = "UPDATE contact SET status = 'SOLVED' WHERE cid = '$id'";
  } elseif($status == 'SOLVED'){
    $sql = "UPDATE contact SET status = 'UNSOLVED' WHERE cid = '$id'";
  } elseif($status == 'UNRESOLVED'){
    $sql = "UPDATE custom SET status = 'RESOLVED' WHERE eid = '1'";
  } elseif($status == 'RESOLVED'){
    $sql = "UPDATE custom SET status = 'UNRESOLVED' WHERE eid = '$id'";
  }
  
  if($conn->query($sql) === TRUE){
    if($status == 'PAID' || $status == 'UNPAID'){
      header("location:admin_bookings.php?message=updated");  
    } else if($status == 'SOLVED' || $status == 'UNSOLVED'){
      header("location:admin_contact.php");
    } else if($status == 'RESOLVED' || $status == 'UNRESOLVED'){
      header("location:admin_enquiry.php");
    } 
  }
?>