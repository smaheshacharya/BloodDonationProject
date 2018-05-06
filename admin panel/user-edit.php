<?php 
require_once 'includes/init.php';
require_once 'includes/user_check.php';
require_once 'includes/db_con.php';

$title = 'user_edit';
require_once 'includes/header.php';
 ?>
<?php 
$id=$_GET['id'];
$sql="SELECT * from user where id='{$id}'";
$result =query($con,$sql);
if ($row=num_rows($result)>0):



 ?>
<div class="container-fluid">
	<div class="row">
	 
	<div class="col-12 content-body my-3">
		<div class="row">
			
			
			
		
		<div class="col-6 mx-auto">
			<?php $row=fetch($result);//only single data arrive so needn't the loop  ?>
			<form action="<?php echo url ('admin/user-save.php'); ?>" method="post">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<div class="form-group">
					<label for="fname">Firstname</label>
					<input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" id="fname" class="form-control" required>
				</div>
                <div class="form-group">
					<label for="mname">middle name (optional)</label>
					<input type="text" name="middle_name" value="<?php echo $row['middle_name']; ?>" id="mname" class="form-control" >
				</div>
								<div class="form-group">
					<label for="lname">Lastname</label>
					<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" middle_name id="lname" class="form-control" required>
				</div>
				
								<div class="form-group">
					<label for="username">username</label>
					<input type="text" name="username" value="<?php echo $row['username']; ?>" id="uesrname" class="form-control" required>
				</div>
							<div class="form-group">
					<label for="lname">old Password</label>
					<input type="password" name="o_password" id="o_password" class="form-control" >
				</div>
								<div class="form-group">
					<label for="lname">Password</label>
					<input type="password" name="password" id="password" class="form-control" >
				</div>

                 				<div class="form-group">
					<label for="c-password">confirm Password</label>
					<input type="password" name="c-password" id="c_password" class="form-control" >
				</div>
				  	
								<div class="form-group">
					<label for="contact">created_at</label>
					<input type="text" name="created_at" id="created_at" value="<?php echo $row['created_at']; ?>"  class="form-control" required>
				</div>
					
					
								<div class="form-group">
					
				<button class="btn btn-outline-primary"><i class="zmdi zmdi-floppy"></i> save</button>
				</div>

			</form>
		</div>
						
					</div>	
				</div>
			</div>
	</div>
</div>

<?php endif; ?>
<?php require_once 'includes/footer.php'; ?>
