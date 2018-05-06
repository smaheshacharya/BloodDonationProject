<!-- /.content-wrapper-->
		<footer class="sticky-footer">
			<div class="container">
				<div class="text-center">
					<small>Copyright © All right reserved Website 2018</small>
				</div>
			</div>
		</footer>
		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fa fa-angle-up"></i>
		</a>
		
		<!-- Bootstrap core JavaScript-->
		<script src="<?php echo url('vendor/jquery/jquery.min.js'); ?>"></script>
		<script src=" <?php echo url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
		<!-- Core plugin JavaScript-->
		<script src="<?php echo url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
		<!-- Page level plugin JavaScript-->
		<script src="<?php echo url('vendor/chart.js/Chart.min.js') ?>"></script>
		<script src="<?php echo url('vendor/datatables/jquery.dataTables.js') ?>"></script>
		<script src="<?php echo url('vendor/datatables/dataTables.bootstrap4.js') ?>"></script>
		<!-- Custom scripts for all pages-->
		<script src="<?php echo url('js/sb-admin.min.js'); ?>"></script>
		<!-- Custom scripts for this page-->
		<script src="<?php echo url('js/sb-admin-datatables.min.js') ?>"></script>
		<script src="<?php echo url('js/sb-admin-charts.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo url('js/alertify.min.js'); ?>"></script>
<?php if(isset($_GET['mgs'])&&!empty($_GET['mgs'])): ?>
	<script>
		alertify.success('<?php echo $_GET['mgs']; ?>');
		
		
</script>
<?php endif; ?>
<?php if(isset($_GET['error'])&&!empty($_GET['error'])): ?>
<script>
		alertify.error('<?php echo $_GET['error']; ?>');
		
	</script>
	<?php endif; ?>
	</div>
</body>
</html>