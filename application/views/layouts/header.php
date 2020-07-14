<!DOCTYPE html>
<html>
<head>
	<title><?= !empty($title) ? $title:"Dashboard" ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<?php include('assets/css.php') ?>
	<!-- ENDCSS -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<!-- wrapper -->
	<div class="wrapper">
		<?php $this->view("layouts/components/_navbar"); ?>
		<?php $this->view("layouts/components/_sidebar"); ?>

		<!-- content-wrapper -->
		<div class="content-wrapper">
