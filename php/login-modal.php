<div class="modal fade" id="login-modal">
  <div class="modal-dialog">
    <!--Modal Content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title ml-auto"><font color="black">Log In</font></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <br>
      <div class="form-group col-sm-12" id="add_err3"></div>
      <div class="modal-body">
        <form role="form">
          <label for="email"><h4><font color="black"><span class="icofont-email"></span> Email:</font></h4></label>
          <input type="email" id="email" name="email" maxlength="25" class="form-control" placeholder="Enter Email">
          <br>
          <label for="password"><h4><font color="black"><span class="icofont-lock"></span> Password:</font></h4></label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
          <br>
          <center>
          <button type="submit" id="login-button" class="btn btn-success btn-lg">Log In</button>
          </center>
        </form>
      </div>
      <div class="modal-footer mx-auto">
        <center>
          <p>Don't have an account? <a href="#" data-target="#signup-modal" data-dismiss="modal" data-toggle="modal">Sign Up</a></p>
        </center>
      </div>
    </div>
  </div>
</div>
