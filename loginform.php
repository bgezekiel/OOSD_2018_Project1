<?php
/*Customer login form, checks if the session is set and customer is valied then redirected to welcome 
  page, otherwise shows customer to provide login to start the session*/
  session_start();

  if(isset($_SESSION['name']))
  {
    header('Location:welcome.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <link href="styles.css" rel="stylesheet">
    <title>Login</title>
    <link rel="shortcut icon" href="images/world.png" type="image/x-icon">
<script>
	//validation function to check the fields are filled In
	$(document).ready(function()
  {
    
    $('#sbutton').click(function()
    {
        
        if (($('#custid').val() == "") || ($('#custpass').val() == "")) 
        {
            alert('Please complete the fields');
            // $('#custidmsg').fade("slow");
            // $('#custidmsg').html("Please Provide First Name");
          $('#custid').focus();
         
            return false;         
        }
		});
  });
</script>
<style>
  .errormessage 
  {
      display:none;
      color:tomato;
      font-size: 20px;
      font-family: fantasy;
  }
  #loginback {
    background-image: url("images/log.jpg");
  }
</style>
</head>
<body id="loginback">
  <?php include("nav.php");?>
  <div class="containerlogin">
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 30rem; height:20rem;">
          <div class="card-header alert alert-primary"  >
          <div class="card-body">
            <h5 class="card-title">Login</h5>
            <h6 class="card-subtitle mb-2 text-muted">Please Enter Username and Password.</h6>

            <form name="custloginfrom" method="POST" action="check_cust.php">
              <div class="form-group">
                <label for="exampleInputEmail1">User Id</label>
                <input type="text" class="form-control" name="custid" id="custid" placeholder="User Id">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="custpass" name="custpass" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary" id="sbutton">Submit</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php");?>
</body>
</html>