<?php
//a php class populate all agents 
class dataAccess{
//function to Connect to database
	public function getdata($query){

		$mysqli = new mysqli("localhost", "root","","travelexperts");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
							}

//$query = "select AgtFirstName,AgtLastName from Agents LIMIT 4";

print("<table border=1 bordercolor=blue>");

if ($result = $mysqli->query($query)) {

    /* fetch associative array */

$firstrow=true;


    while ($row = $result->fetch_assoc()) {

if($firstrow){

	$keys=array_keys($row);
	
	print("<tr>");


foreach ($keys as $key) {
	
	print("<td>".$key."</td>");
	
	}
}
print("</tr>");
$firstrow=false;




$values=array_values($row);

print("<tr>");
foreach($values as $value){
	
	print("<td>".$value."</td>");


}

print("</tr>");

        //printf ("%s (%s)\n", $row["AgtFirstName"], $row["AgtLastName"]);
    }

    print("</table>");

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
	}
}
print("<a href=index.php>Click here to Home Page</a>");
//instantiate object
$myobj=new dataAccess();
$query = "SELECT AgtFirstName,AgtMiddleInitial,AgtLastName,AgtBusPhone,AgtEmail,AgtPosition,agncycity from agents,agencies where agents.AgencyId=agencies.AgencyId";
//$myobj->getdata($query);

//instantiat function to get data

$myobj->getdata("$query");


?>