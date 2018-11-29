<!DOCTYPE html>
<!--Registration form and jquery validations, including regular expressions for emai, phone No and postal Code-->
<html>
    <head>
      <title>Register Now</title>
	    <link rel="shortcut icon" href="images/world.png" type="image/x-icon">
<!--Defined charset, responsiveness, called stylesheets and javascript libraries -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="styles.css">
      <script src="popper/popper.min.js"></script>
      <script src="jquery/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="registerconfirm.js"></script>   
      <style>
          .errormessage{
              display:none;
              color:tomato;
              font-size: 20px;
              font-family: fantasy;
          }
      </style>    
    </head>
<body>
<!-- bootstrap form and all its fields -->
  <?php include("nav.php")?>
  <div class="card" style="width:100%;">
    <div class="card-header" style="background-color:dodgerblue;" >Registration Form</div>
    <form action="cust_register.php" method="=post">
      <div class="row">
        <div class="col">
          <b>First Name</b>
          <input type="text" class="form-control" placeholder="First name" name="firstName" id="firstName">
          <div  class="errormessage"  id="fnamemsg"></div>
        </div>
        <div class="col">
          <b>Last Name</b>
          <input type="text" class="form-control" placeholder="Last name" name="lastName" id="lastName">
          <div  class="errormessage"  id="lnamemsg"> </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <b>Street Address </b>
          <input type="text" class="form-control" placeholder="Streer Address" name="streetAddress" id="streetAddress">
          <div  class="errormessage"  id="staddressmsg"> </div>
        </div>
        <div class="col">
          <b> City </b>
          <input type="text" class="form-control" placeholder="City" name="city" id="city">
          <div  class="errormessage"  id="citymsg"> </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <b>Province</b>
          <input type="text" class="form-control" placeholder="Province" name="province" id="province">
          <div  class="errormessage"  id="provincemsg"> </div>
        </div>
        <div class="col">
          <b>Postal Code</b>
          <input type="text" class="form-control" placeholder="T3J 5L9" name="postalCode" id="postalCode">
          <div  class="errormessage"  id="postalcodemsg"> </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <b>Country</b>
          <select class="form-control" name="country" id="country">
          <option selected>Choose Country</option>
          <option value="Canada">Canada</option>
          <option value="USA">USA</option>
          </select>
          <div  class="errormessage"  id="countrymsg"> </div>
        </div>
        <div class="col">
          <b>Home Phone</b>
          <input type="text" class="form-control" placeholder="000-000 0000" name="homePhone" id="homePhone">
          <div  class="errormessage"  id="homephonemsg"> </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <b> Business Phone</b>
          <input type="text" class="form-control" placeholder="000-000 0000" name="businessPhone" id="businessPhone">
          <div  class="errormessage"  id="businessphonemsg"> </div>
        </div>
        <div class="col">
          <b>Email</b>
          <input type="email" class="form-control" placeholder="abc123xyz@xyz.com" name="cEmail" id="cEmail">
          <div  class="errormessage"  id="cemailmsg"> </div>
        </div>
      </div>
      <div class="row">
<!--php code to populate all agents into drop down list from agent table -->
      <div class="col">
        <b>Agency</b>
          <select class="form-control" name="agency" id="agency">
          <option selected>Choose Agent</option>
              <?php
                $mysqli = new mysqli("localhost", "root","","travelexperts");
                
                if ($mysqli->connect_errno) {/* check connection */
                  printf("Connect failed: %s\n", $mysqli->connect_error);
                  exit();
                }

                $query = "select AgtFirstName from Agents";
                if ($result = $mysqli->query($query)) /* fetch associative array */
                { 
                  while ($row = $result->fetch_assoc()) 
                  {
                    $values=array_values($row);
                    foreach($values as $value)
                    {
                ?>
                <option vlaue="<?php echo ($value); ?>"><?php echo $value; ?></option>
                <?php
                    }
                    //printf ("%s (%s)\n", $row["AgtFirstName"], $row["AgtLastName"]);
                  }
                  /* free result set */
                  $result->free();
                }
              ?>	
          </select>
        <div  class="errormessage"  id="agencymsg"> </div>
      </div>
        <div class="col">
          <b>Choose your Login Id </b>
          <input type="text" class="form-control" placeholder="Choose Your Login ID" name="userId" id="userId">
          <div  class="errormessage"  id="useridmsg"> </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <b>Choose your Password</b>
          <input type="password" class="form-control" placeholder="Enter Password" name="pass" id="pass">
          <div  class="errormessage"  id="passmsg"> </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <b>Confirm Password</b>
          <input type="Password" class="form-control" placeholder="Confirm Password" name="confirmPass" id="confirmPass">
          <div  class="errormessage"  id="confirmpassmsg"> </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button type="submit" id="sbutton" name="submit_customer" class="btn btn-primary" style="width:100%;"> Register Now </button>
        </div>
        <div class="col">
          <button type="reset" class="btn btn-primary" style="width:100%;" > Clear the Form</button>
        </div>   
      </div>
    </form>
  </div><br /><br />
  <?php include("footer.php");?>
</body>
</html>
