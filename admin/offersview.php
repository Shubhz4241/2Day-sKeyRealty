<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM Homes | About</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
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
								<h3 class="page-title">View Offers</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">All Offers</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">List Of Offers</h4>
									<?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];
											
									?>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table class="table table-stripped table-bordered table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>Offer1</th>
													<th>Offer2</th>
													<th>Offer3</th>
													<th>Actions</th>
												</tr>
											</thead>
											<?php
													
													$query=mysqli_query($con,"select * from offers");
													$cnt=1;
													while($row=mysqli_fetch_row($query))
														{
											?>
											<tbody>
												<tr>
													<td><?php echo $cnt; ?></td>
													<td>
														<p>City: <?php echo $row['1']; ?></p>
														<p>State: <?php echo $row['2']; ?></p>
														<p>Title: <?php echo $row['3']; ?></p>
														<p>Type: <?php echo $row['4']; ?></p>
														<p>Price: <?php echo $row['5']; ?></p>
														<img src="upload/<?php echo $row['6']; ?>" height="200px" width="200px">
													</td>
													<td>
														<p>City: <?php echo $row['7']; ?></p>
														<p>State: <?php echo $row['8']; ?></p>
														<p>Title: <?php echo $row['9']; ?></p>
														<p>Type: <?php echo $row['10']; ?></p>
														<p>Price: <?php echo $row['11']; ?></p>
														<img src="upload/<?php echo $row['12']; ?>" height="200px" width="200px">
													</td>
                                                    <td>
														<p>City: <?php echo $row['13']; ?></p>
														<p>State: <?php echo $row['14']; ?></p>
														<p>Title: <?php echo $row['15']; ?></p>
														<p>Type: <?php echo $row['16']; ?></p>
														<p>Price: <?php echo $row['17']; ?></p>
														<img src="upload/<?php echo $row['18']; ?>" height="200px" width="200px">
													</td>
													<td><a href="offersdelete.php?id=<?php echo $row['0']; ?>">
													<button class="btn btn-danger">Delete</button></a></td>
												</tr>
											</tbody>
												<?php
												$cnt=$cnt+1;
												} 
												?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
