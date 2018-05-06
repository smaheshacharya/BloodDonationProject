<?php 
require_once 'includes/init.php';
require_once 'includes/db_con.php';

if(isset($_POST) && !empty($_POST)){
$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM admin_user WHERE password = '{$password}'  AND
username = '{$username}' ";

$result = query($con, $sql);
if($result && num_rows($result) > 0){
    $user = fetch($result);
    session_start();
    $_SESSION['user'] = $user;
//     $ip=ip();
//     $now=now();
// $sql="INSERT INTO admin_logs SET user_id='{$user['id']}',ip_address='{$ip}',updated_at='{$now}' ";

//query($con,$sql);


    header('location:index.php');



	}
	else{
		header('location:login.php?error=Incorrect username/email and password combination');
	}
}

else{

	header('location:login.php?error=Access Denied');
}
