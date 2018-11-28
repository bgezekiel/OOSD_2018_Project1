
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Calgary</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">

<?php
class dataAccess{

	public function getdata($query){

		$mysqli = new mysqli("localhost", "root","","travelexperts");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
?>
    <div class="col-4">
        <div class="card" style="width: 25rem;">
            <img class="card-img-top" src="images/cap.jpg" alt="Card image cap">
            <div class="card-body">
            <p class="card-text">
                <?php print("First Name: ".$row['AgtFirstName'] . "<br>" . "Last Name: ". $row['AgtLastName'] 
                        . "<br>" . "Business Phone: ". $row['AgtBusPhone'] . "<br>" . "Email: ". $row['AgtEmail']
                        . "<br>" . "Position: ". $row['AgtPosition'] . "<br>" . "<button type='button'>"."Send Email" . "</button>");
                    ?>
            </p>
            </div>
        </div>
    </div>
<?php
	//$keys=array_keys($row);
		
//foreach ($keys as $key) {
	
	
	//print($key." ");
	//}

//print("<br>");

//$values=array_values($row);

//foreach($values as $value){
	//print($value."&nbsp;&nbsp; ");

//}
//print("<br>");
//print("First Name :".$row['AgtFirstName']."Last Name :".$row['AgtLastName']."Business Phone :".$row['AgtBusPhone']."Email :".$row['AgtEmail']."Position :".$row['AgtPosition']."<br>");
        //printf ("%s (%s)\n", $row["AgtFirstName"], $row["AgtLastName"]);
    }
	

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
	}
}

$myobj=new dataAccess();
//$query = "SELECT AgtFirstName,AgtMiddleInitial,AgtLastName,AgtBusPhone,AgtEmail,AgtPosition,agncycity from agents,agencies where agents.AgencyId=agencies.AgencyId";
//$myobj->getdata($query);

$myobj->getdata("select AgtFirstName, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition from agents where AgencyId = 1");


?>
</div>
</div>

</body>
</html>
