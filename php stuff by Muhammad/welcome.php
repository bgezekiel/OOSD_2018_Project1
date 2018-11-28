<?php session_start(); ?>
<!-- document checks it the session name is set and the user name and
password are valied then page shows Login success and give the user access
-->

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
    <title>THE HORIZON TRAVEL AGENCY</title>
  </head>
  <body>
      
	  <?php

	  if(!isset($_SESSION['name']))
	  {
	  header("Location:loginform.php");

	  }
	  else{
	  echo "Hi ".$_SESSION['name'];
	  echo "<br>"."Login Success";
	  echo "<a href='logout.php'>Logout</a>";
	  }

	  ?>
	  


	  </body>
	  </html>