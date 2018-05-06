<?php require_once 'includes/user_check.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/navbar.php' ?>
<?php require_once 'includes/nav.php' ?>
<?php 
require_once 'includes/init.php';

require_once 'includes/db_con.php';
 ?>
<div class="row">
	<h3 class="mx-auto">User Info</h3>

	<div class="col-md-12">
		<a href="<?php echo url('admin/add-user.php'); ?>">
			
		<div class="btn btn-primary "><i class="zmdi zmdi-plus">Add User</i></div>
		
		</a>
	<table class="table table-hover table-borderd">
		<thead>
			<tr>
				<th>#</th>
				<th>first_name</th>
				<th>middle_name</th>
				<th>last_name</th>
				<th>created_at</th>
				<th>Action</th>
			</tr>
		</thead>
<tbody>
	<?php 
	$sql="SELECT * FROM user";
	$result=query($con,$sql);
	
	 ?>
	 <?php if(num_rows($result)>0): ?>
	 	<?php while($row=fetch($result)): ?>
	 		<tr>
	 			<td><?php echo $row['id']; ?></td>
	 			<td><?php echo $row['first_name']; ?></td>
	 			<td><?php echo $row['middle_name']; ?></td>
	 			<td><?php echo $row['last_name']; ?></td>
	 			<td><?php echo $row['created_at']; ?></td>
	 			<td><a href="<?php echo url('admin/user-edit.php?id='.$row['id']); ?>" class="mr-3" ><i class="zmdi zmdi-edit"></i></a><a href="<?php echo url('admin/user-delete.php?id='.$row['id']); ?>"><i class="zmdi zmdi-delete"></i></a></td>
	 		</tr>
	 	<?php endwhile; ?>
	 <?php else: ?>
	 	<td colspan="6">Data not Found</td>
	 <?php endif; ?>
</tbody>
		
	</table>
	</div>
</div>
