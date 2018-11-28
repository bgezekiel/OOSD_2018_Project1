<?php
/*
gets data from registraion.php validate data then insert into customer table, front validatins is
already set if the front end validation is unset then this validation will handle validation on server
side
*/

if(isset($_REQUEST['submit_customer'])){
unset($_REQUEST['submit_customer']);

print("<table border=1 bordercolor=blue>");

foreach($_REQUEST as $key=>$value){

	if($value===""){

		print("<tr><td>"." Please provid $key"."</tr></td>");
				}

									}
if($_REQUEST['country']==="Choose Country"){
		print("<tr><td>"."Please provide Country Name"."</td>");
											}
if($_REQUEST['pass']!=$_REQUEST['confirmPass']){

	print("<td>"."Confirm password missmatched"."</td></tr>");
												}
print("</table>");
print("<a href=registration.php> Go to Reigistration</a>");
print("<br>.<a href=index.php> Go to Home</a>");

$agent="";
if($_REQUEST['agency']=="Janet"){

$agent=1;
								}

if($_REQUEST['agency']=="Judy"){

$agent=2;
								}
if($_REQUEST['agency']=="Dennis"){

$agent=3;
								}
if($_REQUEST['agency']=="Jhon"){

$agent=4;
								}
if($_REQUEST['agency']=="Fred"){

$agent=5;
								}

if($_REQUEST['agency']=="Bruce"){

$agent=6;
								}
if($_REQUEST['agency']=="Beverly"){

$agent=7;
								}

if($_REQUEST['agency']=="Jane"){

$agent=8;

								}
if($_REQUEST['agency']=="Brain"){

$agent=9;
								}

//connect to database
 $mysqli = new mysqli("localhost","root","","travelexperts");
    	 
	 $query="INSERT INTO customers(CustFirstName,CustLastName,CustAddress,CustCity,CustProv,CustPostal,CustCountry,CustHomePhone,CustBusPhone,CustEmail,AgentId,customer_login_id,cust_pass,cust_confirm_pass) VALUES('$_REQUEST[firstName]','$_REQUEST[lastName]','$_REQUEST[streetAddress]','$_REQUEST[city]','$_REQUEST[province]','$_REQUEST[postalCode]','$_REQUEST[country]','$_REQUEST[homePhone]','$_REQUEST[businessPhone]','$_REQUEST[cEmail]',$agent,'$_REQUEST[userId]','$_REQUEST[pass]','$_REQUEST[confirmPass]')";
	 
	 //execute the insert query and return ture or false based on the result
if ($mysqli->query($query) === TRUE) 
  {    
      echo "<h3>Customer Registered successfully</h3>";
  } 
  else 
  {   
      echo "Error: " . "<br>" . $mysqli->error;
  }
  $mysqli->close();  



}


?>