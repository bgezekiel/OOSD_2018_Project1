<?php
class dataAccess{

	public function getdata($query){

		$mysqli = new mysqli("localhost", "muhammad","saitstudent","travelexperts");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {

	$keys=array_keys($row);
		
foreach ($keys as $key) {
	
	
	print($key." ");
	}

print("<br>");

$values=array_values($row);

foreach($values as $value){
	print($value."&nbsp;&nbsp; ");

}
print("<br>");

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

$myobj->getdata("select AgncyAddress,AgncyCity,AgncyProv,AgncyPostal,AgncyPhone from agencies where agncyCity='Calgary'");


?>