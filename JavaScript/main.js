$(window).on('load', function () {
    
    $('.preloader').fadeOut(700);
   
});
$(document).ready(function(){
  
  $('[data-toggle = "popover"]').popover();
  
  $("#signupbutton").click(function(){
    
    fname = $("#fname").val();
    semail = $("#semail").val();
    spwd = $("#spwd").val();
    
    $.ajax({
      type: "POST",
      url: "php/signup.php",
      data: "fname=" + fname + "&semail=" + semail + "&spwd=" + spwd,
      success: function (html){
        if(html == 'true'){
          $("#add_err2").html('<div class="alert alert-success"><strong>Account </strong>processed.</div>');
          window.location.href = "index.php";
        }
        else if(html == 'false'){
          $("#add_err2").html('<div class="alert alert-danger"><strong>Email Address</strong> already in system.</div>');
          $("#spwd").val('');
        }
        else if(html == 'short_name'){
          $("#add_err2").html('<div class="alert alert-danger"><strong>Name</strong> is required.</div>');
          $("#spwd").val('');
        }
        else if(html == 'short_email'){
          $("#add_err2").html('<div class="alert alert-danger"><strong>Email Address</strong> is required.</div>');
          $("#spwd").val('');
        }
        else if(html == 'eformat'){
          $("#add_err2").html('<div class="alert alert-danger"><strong>Email Address</strong> format is not valid.</div>');
          $("#spwd").val('');
        }
        else if(html == 'short_pass'){
          $("#add_err2").html('<div class="alert alert-danger"><strong>Password</strong> is required.</div>');
          $("#spwd").val('');
        }
        else{
          $("#add_err2").html('<div class="alert alert-danger"><strong>Error</strong> processing request. Try again.</div>');
          $("#spwd").val('');
        }
      },
      beforeSend: function(){
        $("#add_err2").html('<div class="alert alert-warning"><strong>Processing Request.</strong></div>');
      }
    });
    return false;
  });
  
  $("#subscribe-button").click(function(){
    
    email = $("#subscribe").val();
    
    $.ajax({
      type: "POST",
      url: "php/subscribe.php",
      data: "email=" + email,
      success: function(html) {
        if(html == 'true'){
          $("#add_err4").html('<div class="alert alert-success"><strong>Subscription</strong> successful.</div>');
          window.location.href = "index.php";
        }
        else if(html == 'false'){
          $("#add_err4").html('<div class="alert alert-danger"><a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a>You have already subscribed.</div>');
          $("#subscribe").val('');
        }
        else if(html == 'short_email'){
          $("#add_err4").html('<div class="alert alert-danger"><a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a><strong>Email Address</strong> is required.</div>');
          $("#subscribe").val('');
        }
        else if(html == 'eformat'){
          $("#add_err4").html('<div class="alert alert-danger"><a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a><strong>Email Address</strong> format not valid.</div>');
          $("#subscribe").val('');
        }
        else{
          $("#add_err4").html('<div class="alert alert-danger"><a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a><strong>Error.</strong> Please try again.</div>');
          $("#subscribe").val('');
        }
      },
      beforeSend: function(){
        $("#add_err4").html('<div class="alert alert-warning"><strong>Processing Request.</strong></div>')
      }
    });
    return false;
  });
  
  $("#login-button").click(function(){
    
    email = $("#email").val();
    password = $("#password").val();

    $.ajax({
      type: "POST",
      url: "php/login.php",
      data: "email=" + email + "&password=" + password,
      success: function (html) {
        if (html == 'true') {

          $("#add_err3").html('<div class="alert alert-success"> \
                               <strong>Authenticated.</strong> \ \
                               </div>');

          window.location.href = "index.php";

        } else if (html == 'false') {
          $("#add_err3").html('<div class="alert alert-danger"> \
                               <strong>Authentication</strong> failure. \ \
                               </div>');                    
        } else if(html == 'short_email'){
          $("#add_err3").html('<div class="alert alert-danger"><strong>Email Address</strong> is required.</div>');
        } 
        else if(html == 'eformat'){
          $("#add_err3").html('<div class="alert alert-danger"><strong>Email Address</strong> format not valid.</div>');
        }
        else if(html == 'short_pass'){
          $("#add_err3").html('<div class="alert alert-danger"><strong>Password</strong> is required.</div>');
        }
        else {
          $("#add_err3").html('<div class="alert alert-danger"> \
                               <strong>Error</strong> processing request. Please try again. \ \
                               </div>');
        }
      },
      beforeSend: function () {
        $("#add_err3").html('<div class="alert alert-warning">Authenticating...</div>');
      }
    });
    return false;
  });
  
  $("#sendmsg").click(function(){
    
    name = $("#name").val();
    msgemail = $("#msgemail").val();
    subject = $("#subject").val();
    message = $("#message").val();
    
    $.ajax({
      type: "POST",
      url: "php/sendmsg.php",
      data: "name=" + name + "&msgemail=" + msgemail + "&subject=" + subject + "&message=" + message,
      success: function(html){
        if(html == 'true'){
          $("#add_err5").html('<div class="alert alert-success"><strong>Message</strong> sent !</div>');
        }
        else if(html == 'false'){
          $("#add_err5").html('<div class="alert alert-danger"><strong>Message</strong> not sent !</div>');
        }
        else if(html == 'n_short'){
          $("#add_err5").html('<div class="alert alert-danger"><strong>Name</strong> is required.</div>');
        }
        else if(html == 'e_short'){
          $("#add_err5").html('<div class="alert alert-danger"><strong>Email</strong> is required.</div>');
        }
        else if(html == 'e_format'){
          $("#add_err5").html('<div class="alert alert-danger"><strong>Email</strong> format is wrong.</div>');
        }
        else if(html == 's_short'){
          $("#add_err5").html('<div class="alert alert-danger"><strong>Subject</strong> is required.</div>');
        }
        else if(html == 'm_short'){
          $("#add_err5").html('<div class="alert alert-danger"><strong>Message</strong> is required.</div>');
        }
        else if(html == 'm_long'){
          $("#add_err5").html('<div class="alert alert-danger"><strong>Message</strong> is too long.</div>');
        }
        else{
          $("#add_err5").html('<div class="alert alert-danger"><strong>Error</strong> processing request. Please try again.</div>');
        }
      },
      beforeSend: function(){
        $("#add_err5").html('<div class="alert alert-warning"><strong>Sending Message.</strong></div>');
      }
    });
    return false;
  });
  
  $('#ttype').change(function(){
    
    type = $(this).val();
  
    $("#people").empty();
    $("#quantity").val('');
    
    if(type) {
      $.ajax({
        type: "POST",
        url: "php/fetchtours.php",
        data: "type=" + type,
        success: function(data) {
          $('#tours').empty();
          $('#tours').html(data);
        }
      });
      return false;
      
    } else {
      $('#tours').empty();
    }
    
  });
  
  $('#quantity').keyup(function(){
    
    $("#people").empty();
    type = $("#ttype").val();
    tid = $("#tours").val();
    
    quant = $(this).val();
    
    if(quant > 0 ){
      $.ajax({
        type: "POST",
        url: "php/fetchprice.php",
        data: "quantity=" + quant + "&tid=" + tid,
        success: function(data){
          $("#tamount").val("Total Amount is: "+data);
        }
      }); 
    } else {
      $("#tamount").val("Total Amount");
    }
    
    if(quant > 0 && quant <= 10 && type==1){
      for(i = 1; i <= quant; i++){
        $("#people").append('<label for="person'+ i +'">Person '+i+':</label>');
        $("#people").append('<div class="form-group col-lg-12"><input type="text" id="name'+i+'" name="name'+i+'" class="form-control" placeholder="Enter Name"></div>');
        $("#people").append('<div class="form-group col-lg-12"><select id="gender'+i+'" name="gender'+i+'" class="form-control"><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select></div>');
        $("#people").append('<div class="form-group col-lg-12"><input type="number" id="age'+i+'" name="age'+i+'" class="form-control" placeholder="Enter Age"></div>');
      }
    } else if(quant > 0 && quant <= 10 && type==2){
      for(i = 1; i <= quant; i++){
        $("#people").append('<label for="person'+ i +'">Person '+i+':</label>');
        $("#people").append('<div class="form-group col-lg-12"><input type="text" class="form-control" id="name'+i+'" name="name'+i+'" placeholder="Enter Name"></div>');
        $("#people").append('<div class="form-group col-lg-12"><select class="form-control" id="gender'+i+'" name="gender'+i+'"><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select></div>');
        $("#people").append('<div class="form-group col-lg-12"><input type="number" id="age'+i+'" name="age'+i+'" class="form-control" placeholder="Enter Age"></div>');
        $("#people").append('<div class="form-group col-lg-12"><input type="text" id="passport'+i+'" name="passport'+i+'" class="form-control" placeholder="Enter Passport Number"></div>');
        $("#people").append('<div class="form-group col-lg-12"><select class="form-control" id="visa'+i+'" name="visa'+i+'"><option value="">--- Apply For Visa or Not ---</option><option value="y">Yes</option><option value="n">No</option></select></div>');
      }
    } else if(type==''){
      $("#add_err6").html('<div class="alert alert-danger"><a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a><strong>Please Select Tour Type</strong></div>');
      $("#ttype").focus();
      $("#quantity").val('');
    }
    else{
      $("#add_err6").html('<div class="alert alert-danger"><a href="#" data-dismiss="alert" class="close" aria-label="close">&times;</a><strong>People can be between 1 to 10</strong></div>');
    }
  });
  
  $("#book").click(function(){
    mid = $("#mid").val();
    mco = $("#contact").val();
    midp = $("#idproof").val();
    ttype = $("#ttype").val();
    ttype = ttype.toString();
    tid = $("#tours").val();
    tid = tid.toString();
    sid = $("#source").val();
    sid = sid.toString();
    npo = $("#quantity").val();
    
    $.ajax({
      type: "POST",
      url: 'php/booking.php',
      data: "mid=" + mid + "&mco=" + mco + "&midp=" + midp + "&ttype=" + ttype + "&tid=" + tid + "&sid=" + sid + "&npo=" + npo,
      success: function(html){
        if(html == 'true'){
          $("#add_err6").html('<div class="alert alert-success"><strong>Booking Confirmed.</strong></div>');
          
          if(ttype == 1){
            for(i = 1; i <= npo; i++){
              name = $('#name'+i).val();
              gender = $('#gender'+i).val();
              age = $('#age'+i).val();
          
              $.ajax({
                type: "POST",
                url: "php/adddpeople.php",
                data: "name="+ name + "&gender=" + gender + "&age=" + age,
                success: function(html){
                  if(html == 'true'){
                    $("#add_err6").html('<div class="alert alert-success"><strong>People Added.</strong></div>');
                    window.location.href = "confirm.php";
                  } else {
                    $("#add_err6").html('<div class="alert alert-danger"><strong>Error. </strong>Please try again.</div>');
                  }
                }
              });
            }
          } else if(ttype == 2){
            for(i = 1; i <= npo; i++){
              name = $('#name'+i).val();
              gender = $('#gender'+i).val();
              age = $('#age'+i).val();
              passport = $('#passport'+i).val();
              visa = $('#visa'+i).val();
          
              $.ajax({
                type: "POST",
                url: "php/addipeople.php",
                data: "name="+ name + "&gender=" + gender + "&age=" + age + "&passport=" + passport + "&visa=" + visa,
                success: function(html){
                  if(html == 'true'){
                    $("#add_err6").html('<div class="alert alert-success"><strong>People Added.</strong></div>');
                  } else {
                    $("#add_err6").html('<div class="alert alert-danger"><strong>Error. </strong>Please try again.</div>');
                  }
                }
              });
            }
          }   
          
        } else if(html == 'short_mco'){
          $("#add_err6").html('<div class="alert alert-danger"><strong>Contact No.</strong> is required.</div>');
        } else if(html == 'short_midp'){
          $("#add_err6").html('<div class="alert alert-danger"><strong>Identity Proof</strong> is required.</div>');
        } else if(html == 'short_ttype'){
          $("#add_err6").html('<div class="alert alert-danger"><strong>Travel Type</strong> is required.</div>');
        } else if(html == 'short_tid'){
          $("#add_err6").html('<div class="alert alert-danger"><strong>Tour ID</strong> is required.</div>');
        } else if(html == 'short_sid'){
          $("#add_err6").html('<div class="alert alert-danger"><strong>Source Station</strong> is required.</div>');
        } else if(html == 'short_npo'){
          $("#add_err6").html('<div class="alert alert-danger"><strong>No. of People</strong> is required.</div>');
        } else {
          $("#add_err6").html('<div class="alert alert-danger"><strong>Error. </strong>Please try again.</div>');
        }
      },
      beforeSend: function(){
        $("#add_err6").html('<div class="alert alert-warning"><strong>Booking...</strong></div>');
      }
    });
  });
  
  $("#enquire").click(function(){
    name = $("#name").val();
    email = $("#enquireemail").val();
    enquiry = $("#enquiry").val();
    
    $.ajax({
      type: "POST",
      url: "php/enquiry.php",
      data: "name=" + name + "&email=" + email + "&enquiry=" + enquiry,
      success: function(html){
        if(html == 'true'){
          $("#add_err7").html('<div class="alert alert-success"><strong>Enquiry Placed.</strong></div>');
          $("#name").val('');
          $("#enquireemail").val('');
          $("#enquiry").val('');
          
        } else {
          $("#add_err7").html('<div class="alert alert-success"><strong>Error.</strong> Try agian.</div>');
        }
      },
      beforeSend: function(){
        $("#add_err7").html('<div class="alert alert-warning"><strong>Placing Enquiry ...</strong></div>');
      }
    });
  });
  
  $("#fetchbook").click(function(){
    id = $("#tour").val();
    stat = $("#stat").val();
    $.ajax({
      type: "POST",
      url: "php/fetchbookings.php",
      data: "id=" + id + "&stat=" + stat,
      success: function(data){
        $("#table1").html(data);        
      }
    });
  });
  
  $('#type1').change(function(){
    
    type = $(this).val();
    
    if(type) {
      $.ajax({
        type: "POST",
        url: "php/fetchtours.php",
        data: "type=" + type,
        success: function(data) {
          $('#tour').empty();
          $('#tour').html(data);
        }
      });
      return false;
      
    } else {
      $('#tour').empty();
    }
    
  });
});