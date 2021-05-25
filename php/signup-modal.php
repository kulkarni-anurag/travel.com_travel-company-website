<div class="modal fade" id="signup-modal">
  <div class="modal-dialog">
    <!--Modal Content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title ml-auto"><font color="black">Sign Up</font></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <br>
      <div id="add_err2" class="form-group col-sm-12"></div>
      <div class="modal-body">
        <form role="form">
          <label for="fname"><h4><font color="black"><span class="icofont-user-alt-4"></span> Name:</font></h4></label>
          <input type="text" id="fname" name="fname" maxlength="25" class="form-control" placeholder="Enter Name"> 
          <br>
          <label for="email"><h4><font color="black"><span class="icofont-email"></span> Email:</font></h4></label>
          <input type="email" name="semail" id="semail" class="form-control" placeholder="Enter Email">
          <br>
          <label for="pwd"><h4><font color="black"><span class="icofont-lock"></span> Password:</h4></font></label>
          <input type="password" name="spwd" id="spwd" class="form-control" placeholder="Enter Password">
          <br>
          <center>
            <button type="submit" id="signupbutton" class="btn btn-success btn-lg">Sign Up</button>
          </center>
        </form>
      </div>
      <div class="modal-footer mx-auto">
        <center>
          <p>Already have an account? <a href="#" data-target="#login-modal" data-dismiss="modal" data-toggle="modal">Log In</a></p>
        </center>
      </div>
    </div>
  </div>
</div>

