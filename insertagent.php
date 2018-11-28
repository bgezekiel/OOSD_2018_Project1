
<?php
//php class gets agent data from form agentform.php and saves it to databaase
class insertagent{
// instance variables
private $AgtFirstName;
private $AgtMiddleInitial;
private $AgtLastName;
private $AgtBusPhone;
private $AgtEmail;
private $AgtPosition;
private $AgencyId;


//getter function gets data from form and initialize the instance variables
public function agtGetter()
{
if(isset($_REQUEST)){

$AgtFirstName=$_REQUEST['AgtFirstName'];
$AgtMiddleInitial=$_REQUEST['AgtMiddleInitial'];
$AgtLastName=$_REQUEST['AgtLastName'];
$AgtBusPhone=$_REQUEST['AgtBusPhone'];
$AgtEmail=$_REQUEST['AgtEmail'];
$AgtPosition=$_REQUEST['AgtPosition'];

if($_REQUEST['AgencyId']==="Calgary"){
$AgencyId="1";


                                    }
if($_REQUEST['AgencyId']==="Okotoks"){
$AgencyId="2";


                                    }

                      }
//connect to database and insert data into agents table
$mysqli=new mysqli("localhost","root","","travelexperts");
if($mysqli->connect_error)
{
  echo("Connect failed: ".mysqli_connect_error()); 
  exit();

}

$stmt = $mysqli->prepare("INSERT INTO agents(AgtFirstName,AgtMiddleInitial,AgtLastName,AgtBusPhone,AgtEmail,AgtPosition,AgencyId) 
		VALUES (?, ?, ?,?,?,?,?)");
 $stmt->bind_param('sssssss',$AgtFirstName, $AgtMiddleInitial, $AgtLastName,$AgtBusPhone,$AgtEmail,$AgtBusPhone,$AgencyId);
if($stmt->execute()){
echo "Agent Created Successfully";
print("<br><a href=index.php>Home</a>");
					}
$stmt->close();



} 

		}

//instantiate the object
$agentobj=new insertagent();

$agentobj->agtGetter();




?>