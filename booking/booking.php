<?php
session_start();
$packagId;
$PkgName;
$PkgStartDate;
$PkgEndDate;
$PkgDesc;
$PkgBasePrice;
$PkgAgencyCommission;


//if(isset($_REQUEST['csubmit'])){
//echo $_SESSION['mypkgid'];

//}
$pkgid=$_SESSION['mypkgid'];
$mysqli = new mysqli("localhost", "root","","travelexperts");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
							}
	$query="SELECT * FROM packages where PackageId=$pkgid";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {

//SELECT `PackageId`, `PkgName`, `PkgStartDate`, `PkgEndDate`, `PkgDesc`, `PkgBasePrice`,
//`PkgAgencyCommission` FROM `packages` WHERE 1

$packagId=$row["PackageId"];
$PkgName=$row["PkgName"];
$PkgStartDate=$row["PkgStartDate"];
$PkgEndDate=$row["PkgEndDate"];
$PkgDesc=$row["PkgDesc"];
$PkgBasePrice=$row["PkgBasePrice"];
$PkgAgencyCommission=$row["PkgAgencyCommission"];

//print($packagId."".$PkgAgencyCommission);

}
}
$result->free();
?>


<!doctype html>
<html lang="en">
  <head>
    
	<!-- Define the Charset and meta data for responsiveness -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!--Inlude style sheets, bootstrap and Java script librarries used in the project -->
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
    <title>Travel Experts</title>
	</head>

	<body>
	<div class="container">
	<div class="row">
	<div class="col-2"></div>
	<div class="col-8">
	<div class="jumbotron">
  <h1 class="display-4">Hello, <?php echo $_SESSION['cfname'];   ?></h1>
  <p class="lead"><?php echo "<b>Package :</b>".$PkgName."&nbsp;&nbsp;&nbsp;&nbsp;<b>Package Details: </b>".$PkgDesc."<br>".
  "<b>Starting : </b>".$PkgStartDate."<b> &nbsp;&nbsp; Einding : </b>".$PkgEndDate."<br>"
 ."<b> Package Baseprice :</b>".$PkgBasePrice."<b>&nbsp; Agency Commission : </b>". $PkgAgencyCommission;

  
  ?> </p>
  <hr class="my-4">
  <p>Please the following form to confirm your booking.</p>

  <form name="bookingform" action="confirmbooking.php" action="post">
  <div class="form-group">
    <label for="ntravelers">Number of Travelers</label>
    <input type="text" class="form-control" id="ntravelers" name="ntravelers" placeholder="Number of Travelers">
     </div>
	 <div class="form-group">
	  <label for="triptype">Trip Type</label>
    <SELECT name="triptype" id="triptype">
	<option value="B" selected>Business</option>
	<option vlaue="G">Grout</option>
	<option vlaue="L">Leisure</option>
	</SELECT>
	  <label for="classtype">Class Type</label>
    <SELECT name="classtype" id="classtype">
	<option value="BSN" selected>Business Class</option>
	<option vlaue="DLX">Delux</option>
	<option vlaue="ECN">Economy</option>
	<option vlaue="FST">First Class</option>
	</SELECT>
	     </div>

		 <div class="from-group">
		 <label for="Supplier">Suppliers</label>
		 <select name="supplier" id="supplier">
		 <option vlaue="69">New Concept Canad</option>
		 <option vlaue="80">Chat/Trival</option>
		 <option value="100">Avila Tours Inc.</option>
		 <option vlaue="317">Blyth & Company Travel </option>
		 </select>

		 </div>
		 <button type="submit" name="cbooking" class="btn btn-primary">Submit</button>
  </form>




</div>

</div>
<div class="col-2"></div>
</div>
</div>



	</body>
	</html>

