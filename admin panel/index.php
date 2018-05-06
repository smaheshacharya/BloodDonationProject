<?php
require_once 'includes/init.php';
require_once 'includes/user_check.php';
require_once 'includes/db_con.php';
 ?>
<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/nav.php' ?>
	
		<div class="content-wrapper">
			<div class="container-fluid">
				<!-- Breadcrumbs-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Dashboard</a>
					</li>
					<li class="breadcrumb-item active">My Dashboard</li>
				</ol>
				<!-- Icon Cards-->
				
				
				
				
			</div>
			<!-- Area Chart Example-->
			<div class="card mb-3">
				<div class="card-header">
				<i class="fa fa-area-chart"></i> Area Chart Example</div>
				<div class="card-body">
					<canvas id="myAreaChart" width="100%" height="30"></canvas>
				</div>
				<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
			</div>
			<!-- Example DataTables Card-->
			<div class="card mb-3">
				<div class="card-header">
				<i class="fa fa-table"></i> Data Table Example</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
			</div>
		</div>
		<!-- /.container-fluid-->
		<?php include_once 'includes/footer.php'; ?>