<?php
session_start();
require("config.php");

if (!isset($_SESSION['auser'])) {
	header("location:index.php");
}

$error = "";
$msg = "";

if (isset($_POST['addoffers'])) {
	$aocity1 = $_POST['city1'];
	$aostate1 = $_POST['state1'];
	$aotitle1 = $_POST['title1'];
	$aostype1 = $_POST['stype1'];
	$aoprice1 = $_POST['price1'];
	$aoffer1 = $_FILES['aoffer1']['name'];

	$aocity2 = $_POST['city2'];
	$aostate2 = $_POST['state2'];
	$aotitle2 = $_POST['title2'];
	$aostype2 = $_POST['stype2'];
	$aoprice2 = $_POST['price2'];
	$aoffer2 = $_FILES['aoffer2']['name'];

	$aocity3 = $_POST['city3'];
	$aostate3 = $_POST['state3'];
	$aotitle3 = $_POST['title3'];
	$aostype3 = $_POST['stype3'];
	$aoprice3 = $_POST['price3'];
	$aoffer3 = $_FILES['aoffer3']['name'];

	$temp_name1 = $_FILES['aoffer1']['tmp_name'];
	$temp_name2 = $_FILES['aoffer2']['tmp_name'];
	$temp_name3 = $_FILES['aoffer3']['tmp_name'];

	// Move uploaded files to the upload directory
	move_uploaded_file($temp_name1, "upload/$aoffer1");
	move_uploaded_file($temp_name2, "upload/$aoffer2");
	move_uploaded_file($temp_name3, "upload/$aoffer3");

	// Insert the file names into the database with distinct column names
	$sql = "INSERT INTO offers (city1,state1,title1,stype1,price1,offer1,city2,state2,title2,stype2,price2,offer2,city3,state3,title3,stype3,price3,offer3) VALUES ('$aocity1', '$aostate1', '$aotitle1','$aostype1','$aoprice1','$aoffer1','$aocity2', '$aostate2', '$aotitle2','$aostype2','$aoprice2', '$aoffer2','$aocity3', '$aostate3', '$aotitle3','$aostype3','$aoprice3', '$aoffer3')";
	$result = mysqli_query($con, $sql);

	if ($result) {
		$msg = "<p class='alert alert-success'>Inserted Successfully</p>";
	} else {
		$error = "<p class='alert alert-warning'>* Not Inserted Some Error</p>";
	}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>LM HOMES | About</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feathericon.min.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

	<!-- Main Wrapper -->

	<!-- Header -->
	<?php include("header.php"); ?>
	<!-- /Sidebar -->

	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<div class="content container-fluid">

			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col">
						<h3 class="page-title">Add New Offers</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item active">Offers</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h2 class="card-title">Add here</h2>
						</div>
						<form method="post" enctype="multipart/form-data">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-12">
										<h5 class="card-title">About Us </h5>
										<?php echo $error; ?>
										<?php echo $msg; ?>

										<div class="form-group row">
											<label class="col-lg-2 col-form-label">City</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="city1" required
													placeholder="Enter City">
											</div>
											<label class="col-lg-2 col-form-label">State</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="state1" required
													placeholder="Enter State">
											</div>
											<label class="col-lg-2 col-form-label">Title</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="title1" required
													placeholder="Enter Title">
											</div>
											<label class="col-lg-2 col-form-label">Type</label>
											<div class="col-lg-9">
												<select class="form-control" required name="stype1">
													<option value="">Select Type</option>
													<option value="rent">Rent</option>
													<option value="sale">Sale</option>
												</select>
											</div>
											<label class="col-lg-2 col-form-label">Price</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="price1" required
													placeholder="Enter Price">
											</div>
											<label class="col-lg-2 col-form-label">Offer-1 Image</label>
											<div class="col-lg-9">
												<input class="form-control" name="aoffer1" type="file" required="">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-2 col-form-label">City</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="city2" required
													placeholder="Enter City">
											</div>
											<label class="col-lg-2 col-form-label">State</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="state2" required
													placeholder="Enter State">
											</div>
											<label class="col-lg-2 col-form-label">Title</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="title2" required
													placeholder="Enter Title">
											</div>
											<label class="col-lg-2 col-form-label">Type</label>
											<div class="col-lg-9">
												<select class="form-control" required name="stype2">
													<option value="">Select Type</option>
													<option value="rent">Rent</option>
													<option value="sale">Sale</option>
												</select>
											</div>
											<label class="col-lg-2 col-form-label">Price</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="price2" required
													placeholder="Enter Price">
											</div>
											<label class="col-lg-2 col-form-label">Offer-2 Image</label>
											<div class="col-lg-9">
												<input class="form-control" name="aoffer2" type="file" required="">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-2 col-form-label">City</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="city3" required
													placeholder="Enter City">
											</div>
											<label class="col-lg-2 col-form-label">State</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="state3" required
													placeholder="Enter State">
											</div>
											<label class="col-lg-2 col-form-label">Title</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="title3" required
													placeholder="Enter Title">
											</div>
											<label class="col-lg-2 col-form-label">Type</label>
											<div class="col-lg-9">
												<select class="form-control" required name="stype3">
													<option value="">Select Type</option>
													<option value="rent">Rent</option>
													<option value="sale">Sale</option>
												</select>
											</div>
											<label class="col-lg-2 col-form-label">Price</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="price3" required
													placeholder="Enter Price">
											</div>
											<label class="col-lg-2 col-form-label">Offer-3 Image</label>
											<div class="col-lg-9">
												<input class="form-control" name="aoffer3" type="file" required="">
											</div>
										</div>

									</div>
								</div>
								<div class="text-left">
									<input type="submit" class="btn btn-primary" value="Submit" name="addoffers"
										style="margin-left:200px;">
								</div>
						</form>
					</div>

				</div>
			</div>
		</div>


	</div>
	</div>
	<!-- /Page Wrapper -->
	<!-- /Main Wrapper -->
	<script src="assets/plugins/tinymce/tinymce.min.js"></script>
	<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/js/select2.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
</body>

</html>