<?php 
require_once 'admin panel/includes/init.php';
//require_once 'admin panel/includes/user_check.php';
require_once 'admin panel/includes/db_con.php';
if (isset($_POST)&&!empty($_POST)) {

$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$username=$_POST['username'];
$status=$_POST['status'];
$status1=$_POST['status1'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$now=now();

 $sql="SET first_name='{$first_name}', "
             ."last_name='{$last_name}', "
             ."username='{$username}', "
             ."blood_group='{$blood_group}', "
             ."status='{$status}', "
             ."phone='{$phone}'";
             
            

             if(isset($_POST['id'])&&!empty($_POST['id']))
             {
             $id=$_POST['id'];
             $sql="UPDATE users ".$sql.", created_at='{$now}' where id='{$id}'";
             $msg="users updated";
                
             }
       

         
             
             else
             {
                  // $sql="SELECT username from user";
                  // $rel=query($con,$sql);
                  // if(num_rows($rel)>0)
                  // {
                  //      header('location:update-reg.php?error="Username already exist ');   
                  // }
                //  else{
                      $sql="INSERT INTO users ".$sql.", created_at='{$now}'";
                  
                   $msg="user added";  
                 // }
             	
             }
             if(query($con,$sql))
             {
             	header('location:index-reg.php?mgs='.$msg);
             }
             else{
                  if(isset($_POST['id'])&&!empty($_POST['id']))
                  {
                        $url=$_SERVER['HTTP_REFERER'];//for backward in same page
                        header('location:'.$url.'&error=error during update data'); 
                  }
                   else{
                         header('location:update-reg.php?error="problem while saving data ');

                  }
                 

             }

       
}






else
{

	header('location:categories-add.php?error="problem while saving data from form');
}

 ?>
