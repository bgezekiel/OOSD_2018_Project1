<?php
session_start();

if(isset($_REQUEST['1'])){
$_SESSION['mypkgid']=1;
$_SESSION['regionid']="AFR";
include("loginform.php");
}


if(isset($_REQUEST['2'])){
$_SESSION['mypkgid']=2;
$_SESSION['regionid']="OTHR";
include("loginform.php");
}

if(isset($_REQUEST['3'])){
$_SESSION['mypkgid']=3;
$_SESSION['regionid']="ASIA";
include("loginform.php");
}

if(isset($_REQUEST['4'])){
$_SESSION['mypkgid']=4;
$_SESSION['regionid']="EU";
include("loginform.php");
}
//echo $_SESSION['mypkgid'];

?>

<html>
<body>


</body>
</html>