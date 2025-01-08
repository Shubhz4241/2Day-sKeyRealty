<?php
session_start();
require("config.php");

if (!isset($_SESSION['auser'])) {
	header("location:index.php");
}


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $short_content = $_POST['short_content'];
    $full_article = $_POST['full_article'];
    $source = $_POST['source'];
    $article_name = $_POST['article_name'];
    $image = $_FILES['image']['name'];
    $target = "news/" . basename("news/$image");

    if (!empty($title) && !empty($short_content) && !empty($full_article) && !empty($source) && !empty($article_name) && !empty($image)) {
        $query = "INSERT INTO news (title, short_content, full_article, image, source, article_name) 
                  VALUES ('$title', '$short_content', '$full_article', '$image', '$source', '$article_name')";
        if (mysqli_query($con, $query)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "News added successfully!";
            } else {
                $msg = "Image upload failed!";
            }
        } else {
            $msg = "Failed to add news!";
        }
    } else {
        $msg = "Please fill all the fields!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>LM Homes | Admin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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

    <?php include("header.php"); ?>

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Add News</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add News</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add News</h4>
                            <?php if (isset($msg))
                                echo "<p>$msg</p>"; ?>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Short Content</label>
                                    <textarea name="short_content" class="form-control" rows="2" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Full Article</label>
                                    <textarea name="full_article" class="form-control" rows="5" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Source</label>
                                    <input type="text" name="source" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Article Name</label>
                                    <input type="text" name="article_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-primary">Add News</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

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

</html>