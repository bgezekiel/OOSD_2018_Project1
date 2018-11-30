<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="images/world.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>Book Successful!</title>
  <style>
    .center_img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
  </style>
</head>
<body>
<?php
include ("nav_logout.php");
print("<br><br>");
session_start();
$mypkgid=$_SESSION['mypkgid'];
$mycustid=$_SESSION['customerid'];
$regionid=$_SESSION['regionid'];
$feeId="NC";

$travlercount;
$tripid;
$classid;
$supplierid;
$bookingid;
$packagId;
$PkgName;
$PkgStartDate;
$PkgEndDate;
$PkgDesc;
$PkgBasePrice;
$PkgAgencyCommission;
$bookingno="BDN";
if(isset($_REQUEST['cbooking'])){
//echo $_REQUEST['supplier'];
$travlercount=$_REQUEST['ntravelers'];
$tripid=$_REQUEST['triptype'];
$classid=$_REQUEST['classtype'];
$supplierid=$_REQUEST['supplier'];
//echo $travlercount."<br> ".$tripid."<br> ".$classid."<br> ".$supplierid;
}

if($classid==="Business Class"){
  $classid="BSN";
}
if($classid==="Delux"){
  $classid="DLX";
}

if($classid==="Economy"){
  $classid="ECN";
}
if($classid==="First Class"){
  $classid="FST";
}



$date = date('Y-m-d H:i:s');
//$date=date("d/m/y");

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



$packagId=$row["PackageId"];
$PkgName=$row["PkgName"];
$PkgStartDate=$row["PkgStartDate"];
$PkgEndDate=$row["PkgEndDate"];
$PkgDesc=$row["PkgDesc"];
$PkgBasePrice=$row["PkgBasePrice"];
$PkgAgencyCommission=$row["PkgAgencyCommission"];



}
}
$result->free();


$mysqli=new mysqli("localhost","root","","travelexperts");
if($mysqli->connect_error)
{
  echo("Connect failed: ".mysqli_connect_error()); 
  exit();

}
//$datetime = date("Y-m-d H:i:s", mktime(10, 30, 0, 6, 10, 2015));

 
  $query="INSERT INTO bookings(BookingDate,BookingNo,TravelerCount,CustomerId,TripTypeId,PackageId)
VALUES('$date','$bookingno','$travlercount','$mycustid','$tripid','$mypkgid')";
if ($mysqli->query($query) === TRUE) 
  {    
      print("<center>Booking Record Created and updated Successfully!<br></center>");
  } 
  else 
  {   
      echo "Error: " . "<br>" . $mysqli->error;
  }
  
  $mysqli->close();


  $mysqli=new mysqli("localhost","root","","travelexperts");
if($mysqli->connect_error)
{
  echo("Connect failed: ".mysqli_connect_error()); 
  exit();

}
  $bquery="SELECT BookingId FROM bookings where CustomerId='$mycustid'";

if ($result = $mysqli->query($bquery)) {
    while ($row = $result->fetch_assoc()) {
  $bookingid=$row["BookingId"];

  }
  
  }
   $mysqli->close(); 
  //echo "<br><br>".$bookingid;



  
  $mysqli=new mysqli("localhost","root","","travelexperts");
if($mysqli->connect_error)
{
  echo("Connect failed: ".mysqli_connect_error()); 
  exit();

}

  
  $Itinaryno=139;

  $query1="INSERT INTO bookingdetails(ItineraryNo,TripStart,TripEnd,Description,Destination,BasePrice,AgencyCommission,BookingId,RegionId,ClassId,FeeId,ProductSupplierId)
VALUES('$Itinaryno','$PkgStartDate','$PkgEndDate','$PkgDesc','$PkgDesc','$PkgBasePrice','$PkgAgencyCommission','$bookingid','$regionid','$classid','$feeId','$supplierid')";
if ($mysqli->query($query1) === TRUE) 
  {    
      print("<center>You will receive a Confirmation Email Shortly</center><br/>");
  } 
  else 
  {   
      echo "Error: " . "<br>" . $mysqli->error;
  }

  $mysqli->close();  
  print("<center><a href=logout.php> Click Here to Logout</a></center><br>");
  echo "<img src='images/img5.jpg' class='center_img' alt='Happy City'><br><br>";
include("footer.php");
?>
</body>
</html>
