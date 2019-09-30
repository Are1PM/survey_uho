<!DOCTYPE html>
<html>

<head>
	<title>
		<?php echo $title ?>
	</title>

<body>
	<link href='<?php echo base_url("assets/upload/images/$favicon"); ?>' rel='shortcut icon' />
	<!-- meta -->
	<?php require_once('_meta.php'); ?>

	<!-- css -->
	<?php require_once('_css.php'); ?>

	<!-- header -->
	<?php require_once('_header.php'); ?>

	<!-- footer -->
	<?= $contents ?>
	<?php require_once('_footer.php');
	?>


	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- jQuery 2.2.3 -->
	<?php require_once('_js.php'); ?>

</body>
</head>

</html>