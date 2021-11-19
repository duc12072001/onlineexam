<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Hệ thống thi trực tuyến</title>

	    <!-- Custom styles for this page -->
	    <link href="vendor/bootstrap/bootstrap.min.css" rel="stylesheet">

	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	    <!-- Custom styles for this page -->
    	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	    <link rel="stylesheet" type="text/css" href="vendor/parsley/parsley.css"/>
	    <link rel="stylesheet" type="text/css" href="vendor/TimeCircle/TimeCircles.css"/>
	    <style>
	    	.border-top { border-top: 1px solid #e5e5e5; }
			.border-bottom { border-bottom: 1px solid #e5e5e5; }

			.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
	    </style>
	</head>
	<body>
		<?php
		if($object->is_student_login())
		{
		?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  	<a class="navbar-brand" href="#">Hệ thống thi trực tuyến</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarText">
		    	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item active">
		        		<a class="nav-link" href="student_dashboard.php">Trang chủ</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="exam.php">Bài thi</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="logout.php">Đăng xuất</a>
		      		</li>
		    	</ul>
		  	</div>
		</nav>
		<?php
		}
		else
		{
		?>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
		    <img src='images/pic.jpg' alt='itest' height="100">
		    
	    </div>

	    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	      	<h1 class="display-4">Hệ thống thi trực tuyến</h1>
	    </div>
	    <br />
	    <br />
	    <?php
		}
	    ?>
	    <div class="container-fluid">