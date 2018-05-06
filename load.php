<?php 
$name=$_GET['value'];
require_once 'admin panel/includes/user_check.php';
require_once 'admin panel/includes/init.php';
require_once 'admin panel/includes/db_con.php';
$sql="SELECT * FROM users WHERE username LIKE '$name'";
$result=query($con,$sql);
if(num_rows($result)>0)
{
header('HTTP/1.2 400 Bad Request');	
echo "Already taken this username";
}
else{
	
	header('HTTP/1.2 200 Ok');
echo "valid username";

}

 ?>