

<?php 
require_once 'admin panel/includes/user_check.php';
require_once 'admin panel/includes/init.php';
require_once 'admin panel/includes/db_con.php';

if(isset($_POST) && !empty($_POST)){
$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM users WHERE password = '{$password}' AND
username = '{$username}' ";

$result = query($con, $sql);
if($result && num_rows($result) > 0){
    $user = fetch($result);
    session_start();
    $_SESSION['user'] = $user;
query($con,$sql);


    header('location:index-reg.php');



	}
	else{
		header('location:login.php?error=Incorrect username/email and password combination');
	}
}

else{

	header('location:login.php?error=Access Denied');
}
