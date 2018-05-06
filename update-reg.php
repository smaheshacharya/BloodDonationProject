<?php 
require_once 'admin panel/includes/user_check.php';
require_once 'admin panel/includes/init.php';
require_once 'admin panel/includes/db_con.php';
?>
<?php include_once 'includes/login_header.php'; ?>
<?php 
  $id=$_SESSION['user']['id']; 
$sql="SELECT * from users where id='{$id}'";
$result =query($con,$sql);
if ($row=num_rows($result)):

 


 ?>

<body>

  
<div class="container">
  <div class="info">
    <h1> Update your Info</h1><span>Touch with us </span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="login-form" action="registration_save.php" method="post">
    <?php $data=fetch($result);//only single data arrive so needn't the loop  ?>
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <label for="first_name">FirstName</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $data['first_name']; ?>" required />
    <label for="last_name">LastName</label>
    <input type="text" name="last_name" id="last_name" value="<?php echo $data['last_name']; ?>" required />
    <label for="email">Username</label>
    <input type="text" name="username" id="email" value="<?php echo $data['username']; ?>" required />
    <label for="error-mgs"></label><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" id="password" />
    <label for="confirm_password:">ConfirmPassword</label>
     <input type="password" name="confirm_password" id="c_password" id="confirm_password" />
     <label for="BloodGroup">BloodGroup</label>
    <select name="status" id="BloodGroup" required>
            <option value="">SELECT YOUR BLOOD GROUP</option>
            <option value="APOS"<?php echo $data['blood_group']=='APOS'?'selected':''; ?>>A+</option>
            <option value="BPOS" <?php echo $data['blood_group']=='BPOS'?'selected':''; ?>>B+</option>
            <option value="ABPOS" <?php echo $data['blood_group']=='ABPOS'?'selected':''; ?>>AB+</option>
            <option value="OPOS" <?php echo $data['blood_group']=='OPOS'?'selected':''; ?>>O+</option>
            <option value="ANEG" <?php echo $data['blood_group']=='ANEG'?'selected':''; ?>>A-</option>
            <option value="BNEG" <?php echo $data['blood_group']=='BNEG'?'selected':''; ?>>B-</option>
            <option value="ONEG" <?php echo $data['blood_group']=='ONEG'?'selected':''; ?>>O-</option>
            <option value="ABNEG" <?php echo $data['blood_group']=='ABNEG'?'selected':''; ?>>AB-</option>
          </select>
          <label for="status">BloodGroup</label>
           <select name="status" id="BloodGroup" required>
            <option value="">SELECT YOUR STATUS</option>
            <option value="online" <?php echo $data['status']=='online'?'selected':''; ?>>Online</option>
            <option value="offline" <?php echo $data['status']=='offline'?'selected':''; ?>>Offline</option>
           
          </select>
        <label for="address">Address</label>  
    <input type="text" name="address" id="phone" value="<?php echo $data['address']; ?>" required />
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="<?php echo $data['phone']; ?>" required />
  
    <button type="submit" >Update Data</button>
    <p class="message">Not registered? <a href="#">Create an account</a> &nbsp&nbsp&nbsp<a href="index.php"><i class="fa fa-backward" style="color: #000"> &nbsp <bold> Back </bold></i></a></p>
  </form>
</div>
<?php endif; ?>
<?php   include_once 'includes/login_footer.php'; ?>