<?php 
require_once 'includes/init.php';

?>
<?php include_once 'includes/login_header.php'; ?>

<body>

  
<div class="container">
  <div class="info">
    <h1> Login</h1><span>To Donate  <i class="fa fa-heart"></i> Life </span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  
  <form class="login-form" action="login-exe.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required />
    <label for="username">Password</label>
    <input type="password" name="password" id="password" required />
    <button>login</button>
    <p class="message">Not registered? <a href="register.php">Create an account</a> &nbsp&nbsp&nbsp<a href="index.php"><i class="fa fa-backward" style="color: #000"> &nbsp <bold> Back </bold></i></a></p>
  </form>
</div>
<?php   include_once 'includes/login_footer.php'; ?>