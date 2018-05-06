

    <script type="text/javascript" src="<?php  echo url('js/jquery.min.js'); ?>"></script>

    <script  src="<?php 	echo url('js/index.js') ?> "></script>

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


</body>

</html>
