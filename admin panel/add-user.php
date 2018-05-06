<?php require_once 'includes/user_check.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/navbar.php' ?>

<?php require_once 'includes/nav.php' ?>
<div class="col-4 mx-auto">
<form action="<?php echo url ('admin/user-save.php'); ?>" method="post">
				<div class="form-group">
					<label for="fname">Firstname</label>
					<input type="text" name="first_name" id="fname" class="form-control" required>
				</div>
                <div class="form-group">
					<label for="mname">middle name (optional)</label>
					<input type="text" name="middle_name" id="mname" class="form-control" >
				</div>
								<div class="form-group">
					<label for="lname">Lastname</label>
					<input type="text" name="last_name" id="lname" class="form-control" required>
				</div>
								<div class="form-group">
					<label for="username">uername</label>
					<input type="text" name="username" id="username" class="form-control" required>
				</div>
								
					
								<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" >
				</div>

                 				<div class="form-group">
					<label for="c_password">confirm Password</label>
					<input type="password" name="password" id="c_password" class="form-control" >
				</div>
								<div class="form-group">
					<label for="c-password">created_at</label>
					<input type="text" name="created_at" id="created_at" class="form-control" >
				</div>
				  			
				
								<div class="form-group">
					
				<button class="btn btn-outline-primary"><i class="zmdi zmdi-floppy" type="submit"></i> save</button>
				</div>

			</form>
			</div>
			   <?php require_once 'includes/footer.php' ?>