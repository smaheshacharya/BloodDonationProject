<?php 
require_once 'includes/init.php';

?>
<?php include_once 'includes/login_header.php'; ?>

<body>

  
<div class="container">
  <div class="info">
    <h1> Register your Info</h1><span>Touch with us </span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="login-form" action="registration_save.php" method="post">
    <label for="first_name">FirstName</label>
    <input type="text" name="first_name" id="first_name"  required />
    <label for="last_name">LastName</label>
    <input type="text" name="last_name" id="last_name" required />
    <label for="email">Username</label>
    <input type="text" name="username" id="email" required />
    <label for="error-mgs"></label><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" id="password" />
    <label for="confirm_password:">ConfirmPassword</label>
     <input type="password" name="confirm_password" id="c_password" id="confirm_password" />
     <label for="BloodGroup">BloodGroup</label>
    <select name="status" id="BloodGroup" required>
            <option value="">SELECT YOUR BLOOD GROUP</option>
            <option value="APOS">A+</option>
            <option value="BPOS">B+</option>
            <option value="ABPOS">AB+</option>
            <option value="OPOS">O+</option>
            <option value="ANEG">A-</option>
            <option value="BNEG">B-</option>
            <option value="ONEG">O-</option>
            <option value="ABNEG">AB-</option>
          </select>
          <label for="status">BloodGroup</label>
           <select name="status" id="BloodGroup" required>
            <option value="">SELECT YOUR STATUS</option>
            <option value="online">Online</option>
            <option value="offline">Offline</option>
           
          </select>
        <label for="address">Address</label>  
    <input type="text" name="address" id="phone"  required />
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone"  required />
  
    <button type="submit">Register</button>
    <p class="message">Not registered? <a href="#">Create an account</a> &nbsp&nbsp&nbsp<a href="index.php"><i class="fa fa-backward" style="color: #000"> &nbsp <bold> Back </bold></i></a></p>
  </form>
</div>
<?php   include_once 'includes/login_footer.php'; ?>