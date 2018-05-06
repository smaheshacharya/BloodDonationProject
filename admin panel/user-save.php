<?php 
 require_once 'includes/user_check.php' ;
require_once 'includes/init.php';

require_once 'includes/db_con.php';
if (isset($_POST)&&!empty($_POST)) {


$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$username=$_POST['username'];
$password=sha1($_POST['password']);

$created_at=$_POST['created_at'];

 $sql="SET first_name='{$first_name}', "
             ."middle_name='{$middle_name}', "
             ."last_name='{$last_name}', "
             ."username='{$username}', "
             ."created_at='{$created_at}'";
            

             if(isset($_POST['id']) && !empty($_POST['id']))
             {
             $id=$_POST['id'];
             $sql="UPDATE user ".$sql;
            


             if (isset($_POST['password'])&& !empty($_POST['password'])) 
             {
                  $o_password=sha1($_POST['o_password']);
                  $query="SELECT username FROM user WHERE where id='{$id}' AND password={'$o_password'}";
                  $result=query($con,$query);
                  if($result&&db_num_rows($result))
                  {
                        $sql=$sql.", password='{$password}'";

                  }
                  else
                  {
                        $url=$_SERVER['HTTP_REFERER'];//for backward in same page
                        header('location:'.$url.'&error=username and old password is not match');
                        die();
                  }
             $sql=$sql." where id='{$id}'";
             $msg="user updated";
                
             }
       }

         
             
             else
             {
             	$sql="INSERT INTO user ".$sql.", password='{$password}'";
                  // echo $sql;
                  // die();
                  
            
             }

            
             if(query($con,$sql))
             {
             	header('location:user.php?mgs='.$msg);
             }
             else{
                  if(isset($_POST['id']) && !empty($_POST['id']))
                  {
                        $url=$_SERVER['HTTP_REFERER'];//for backward in same page
                        header('location:'.$url.'&error=error during update data'); 
                  }
                   else{
                         header('location:add-user.php?error="problem while saving data ');

                  }
                 

             }

       


}




else
{

	header('location:user-add.php?error="problem while saving data from form');
}

 ?>
