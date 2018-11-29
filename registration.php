<!DOCTYPE html>
<!--
Registration form and jquery validations, including regular expressions for emai, phone No and
postal Code
-->
<html>
    <head>
        <title>Register Now</title>
		<!--Defined charset, responsiveness, called stylesheets and javascript libraries -->
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/world.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="popper/popper.min.js"></script>
        <script src="jquery/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
         <script>
		 /* 
		 Defined regular expressions for email, phone and postal code and function checks the
		 fields values if is empty shows the message in a specif div
		 */		 			  
              var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
               var phoneNumberPattern = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
                var postalCodeRegex = /^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/;
            $(document).ready(function(){
   $('#sbutton').click(function(){
        if ($('#firstName').val() == ""){
          $('#fnamemsg').slideDown("slow");
          $('#fnamemsg').html("Please Provide First Name");
          $('#firstName').focus();
         
            return false;
                  
										}
        
       else if($('#lastName').val()==""){
            $('#lnamemsg').slideDown("slow");
          $("#lnamemsg").html("Please Provide Last Name");
          $('#lastName').focus();
         
            return false;
										}
       
        else if($('#streetAddress').val()==""){
            $('#staddressmsg').slideDown("slow");
          $("#staddressmsg").html("Please Provide Street Address");
          $('#streetAddress').focus();
         
            return false;
											 }
       
         else if($('#city').val()==""){
            $('#citymsg').slideDown("slow");
          $("#citymsg").html("Please Provide City");
          $('#city').focus();
         
            return false;
									 }
       
        else if($('#province').val()==""){
            $('#provincemsg').slideDown("slow");
          $("#provincemsg").html("Please Provide Province");
          $('#province').focus();
         
            return false;
											}
             
       else if(!postalCodeRegex.test($('#postalCode').val())){
            $('#postalcodemsg').slideDown("slow");
          $("#postalcodemsg").html("Please Provide Postal Code");
          $('#postalCode').focus();
         
            return false;
															 }
 else if($('#country').val()=="Choose Country"){
            $('#countrymsg').slideDown("slow");
          $("#countrymsg").html("Please Select Country");
          $('#country').focus();
         
            return false;
												}


      
       
         else if(!phoneNumberPattern.test($('#homePhone').val())){
            $('#homephonemsg').slideDown("slow");
          $("#homephonemsg").html("Please Provide Home Phone");
          $('#homePhone').focus();
         
            return false;
																 }


    else if(!phoneNumberPattern.test($('#businessPhone').val())){
            $('#businessphonemsg').slideDown("slow");
          $("#businessphonemsg").html("Please Provide Business Phone");
          $('#businessPhone').focus();
         
            return false;
																 }




        else if(!expr.test($('#cEmail').val())){
            $('#cemailmsg').slideDown("slow");
          $("#cemailmsg").html("Email Address Invalied");
          $('#cEmail').focus();
         
            return false;
												 }
	   
	   
	   else if($('#agency').val()=="Choose Agent"){
            $('#agencymsg').slideDown("slow");
          $("#agencymsg").html("Please Select Country");
          $('#agency').focus();
         
            return false;
													}
	   
	   
       
          else if($('#userId').val()==""){
            $('#useridmsg').slideDown("slow");
          $("#useridmsg").html("Please Provide User Id");
          $('#userId').focus();
         
            return false;
											}
       
         else if($('#pass').val()==""){
            $('#passmsg').slideDown("slow");
          $("#passmsg").html("Please Provide Password");
          $('#pass').focus();
         
            return false;
										}
       
          else if((($('#confirmPass').val()=="")) || (($('#confirmPass').val()) != ($('#pass').val()))) {
            $('#confirmpassmsg').slideDown("slow");
          $("#confirmpassmsg").html("Confirm Password Empty or Missmatched");
          $('#confirmPass').focus();
         
            return false;
																									   }
       
        else{
          
         
              return true;
            }
    });
});
            
          
            </script>
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
	 <div class="card-header" style="background-color:dodgerblue;" >
    Registration Form
	</div>
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

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "select AgtFirstName from Agents";


if ($result = $mysqli->query($query)) {

    /* fetch associative array */




    while ($row = $result->fetch_assoc()) {
	

$values=array_values($row);


foreach($values as $value){
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
      
      
      

        
        
        
    </body>
</html>
