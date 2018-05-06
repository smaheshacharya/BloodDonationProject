<?php  
require_once 'admin panel/includes/init.php';
require_once 'admin panel/includes/user_check.php';
require_once 'admin panel/includes/db_con.php';
$id=$_SESSION['user']['id'];

$sql="DELETE FROM users WHERE id='{$id}'";
query($con,$sql);


if(mysqli_affected_rows($con)>0)//if row affected than delete row
{
	header('location:index.php?mgs=Registration cancel');
}
else
{
	header('location:index-reg.php?error= error while cancel registration');
}