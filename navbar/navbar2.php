    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#" id="site-name">Travel<font color="dodgerBlue">.com</font></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav1">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse flex-column" id="nav1">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link" data-trigger="hover" data-toggle="popover" title="Need Help?" data-content="Sample Paragraph" data-placement="bottom">Help</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Log Out</a>
            </li>
          </ul>
          <div id="divider-line"><hr /></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Tours</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="dtours.php">Domestic</a>
                <a class="dropdown-item" href="itours.php">International</a>
                <a class="dropdown-item" href="ctours.php">Customize</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop2" data-toggle="dropdown">Bookings</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="reservation.php">Reservation</a>
                <a class="dropdown-item" href="cancellation.php">Cancellation</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="nav-item" id="break">
              <span class="navbar-text">
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              </span>
            </li>
            <li class="nav-item clearflix mr-auto">
              <span class="navbar-text">
                <font color="red">Welcome, <?php echo($fname);?></font>
              </span>
            </li>
          </ul>
        </div>
      </nav>
    </header>
