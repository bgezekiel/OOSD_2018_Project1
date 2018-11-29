
<?php
//the page gets input from welcome.php if session is set then provide the logoff option to the customer
session_start();
if(session_destroy())
{
header("Location:index.php");
}
session_destroy();


?>