<?php
  session_start();

  require_once("connection.php");
  
  $mid = mysqli_real_escape_string($conn, $_POST["mid"]);
  $mco = mysqli_real_escape_string($conn, $_POST["mco"]);
  $midp = mysqli_real_escape_string($conn, $_POST["midp"]);
  $ttype = mysqli_real_escape_string($conn, $_POST["ttype"]);
  $tid = mysqli_real_escape_string($conn, $_POST["tid"]);
  $sid = mysqli_real_escape_string($conn, $_POST["sid"]);
  $npo = mysqli_real_escape_string($conn, $_POST["npo"]);
  
  if(strlen($mco) != 10){
    echo('short_mco');
  } elseif(strlen($midp) <= 4){
    echo('short_midp');
  } elseif(strlen($ttype) <= 0 || $ttype == ''){
    echo('short_ttype');
  } elseif(strlen($tid) <= 0 || $tid == ''){
    echo('short_tid');
  } elseif(strlen($sid) <= 0 || $sid == '0'){
    echo('short_sid');
  } elseif(strlen($npo) <= 0 || $npo == '0'){
    echo('short_npo');
  } else {
    $sql3 = "INSERT INTO bookings (m_id, m_con, m_idp, ttype, tid, s_id, nop) VALUES ('$mid', '$mco', '$midp', '$ttype', '$tid', '$sid', '$npo')";
    
    $result3 = $conn->query($sql3);
    if($result3){
      $_SESSION['bid'] = $conn->insert_id;
      echo('true');
    }
  }
?>