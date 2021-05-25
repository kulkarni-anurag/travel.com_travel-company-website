<?php
  require_once('connection.php');
  
  $id = mysqli_real_escape_string($conn, $_POST["id"]);
  $stat = mysqli_real_escape_string($conn, $_POST["stat"]);
  
  if($stat == '1'){
    $sql2 = "SELECT b.bid, m.fname, m.email, b.m_con, b.m_idp, s.station, b.nop, b.bdate, b.status FROM bookings b, source s, members m WHERE b.m_id = m.id AND b.s_id = s.sid AND b.tid = '$id'";  
  } else if($stat == '2'){
    $sql2 = "SELECT b.bid, m.fname, m.email, b.m_con, b.m_idp, s.station, b.nop, b.bdate, b.status FROM bookings b, source s, members m WHERE b.m_id = m.id AND b.s_id = s.sid AND b.tid = '$id' AND b.status = 'PAID'"; 
  } else {
    $sql2 = "SELECT b.bid, m.fname, m.email, b.m_con, b.m_idp, s.station, b.nop, b.bdate, b.status FROM bookings b, source s, members m WHERE b.m_id = m.id AND b.s_id = s.sid AND b.tid = '$id' AND b.status = 'UNPAID'"; 
  }
  
  $result = $conn->query($sql2);
  
  ?>
  <table class="table">
    <thead>
      <tr>
        <th>B_ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact No.</th>
        <th>Identity Proof</th>
        <th>Source</th>
        <th>People</th>
        <th>Booking Date</th>
        <th>Status</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
  <?php
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      ?>
      <tr>
        <td><?php echo($row['bid']); ?></td>
        <td><?php echo($row['fname']); ?></td>
        <td><?php echo($row['email']); ?></td>
        <td><?php echo($row['m_con']); ?></td>
        <td><?php echo($row['m_idp']); ?></td>
        <td><?php echo($row['station']); ?></td>
        <td><?php echo($row['nop']); ?></td>
        <td><?php echo($row['bdate']); ?></td>
        <td><?php echo($row['status']); ?></td>
        <td><a href="update.php?id=<?php echo($row['bid']); ?>&status=<?php echo($row['status']); ?>" class="btn btn-warning">UPDATE</a></td>
      </tr>
      <?php
    }
  } else {
    ?>
    <tr>
      <td>No Data</td>
    </tr>
    <?php
  }
  ?>
    </tbody>
  </table>
  <?php
  $conn->close();
?>