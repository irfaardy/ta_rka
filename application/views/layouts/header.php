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
			<!-- Content Header (Page header) -->
	    <div class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1 class="m-0 text-dark"><?= !empty($title) ? $title:"Dashboard" ?></h1>
	          </div><!-- /.col -->
	        </div><!-- /.row -->
	      </div><!-- /.container-fluid -->
	    </div>
	    <!-- /.content-header -->

			<!-- content -->
			<section class="content">
			<div id="main-card" class="card card-primary card-outline">
            
                
             
				<div class="card-body">
					<?php $this->view("layouts/components/_messages.php") ?>
