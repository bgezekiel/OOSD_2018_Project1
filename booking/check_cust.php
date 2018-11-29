<?php
//gets input from loginform, if the customer is valied gives him access otherwise shows Invalied message

session_start();

$mysqli = new mysqli("localhost","root","","travelexperts");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
							}
$loginid=$_REQUEST['custid'];
$pass=$_REQUEST['custpass'];
//echo $loginid.$pass;

$query = "SELECT customerId,CustFirstName,customer_login_id,cust_pass FROM customers where customer_login_id='$loginid' and cust_pass='$pass'";

if ($stmt = $mysqli->prepare($query)) {

    /* execute statement */
    $stmt->execute();

    /* bind result variables */
    $stmt->bind_result($custid,$custfname,$name,$code);

    /* fetch values */
    while ($stmt->fetch()) {
       // printf ("%s (%s)\n", $name, $code);
		//echo $name;
		$_SESSION['name']=$name;
		$_SESSION['customerid']=$custid;
		$_SESSION['cfname']=$custfname;
//header('Location:welcome.php');
header('Location:booking.php');

							}

	if(!$stmt->fetch()){
		
		//header("Location:loginform.php");
		echo"Invalied user Name or Password";
		print("<br>. <a href=index.php>.Go to Home.</a>");
	}


    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();
?>