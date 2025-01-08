<?php
include("config.php");
$error = "";
$msg = "";
if (isset($_REQUEST['reg'])) {
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $pass = $_REQUEST['pass'];
  $utype = $_REQUEST['utype'];

  $uimage = $_FILES['uimage']['name'];
  $temp_name1 = $_FILES['uimage']['tmp_name'];
  $pass = sha1($pass);

  $query = "SELECT * FROM user where uemail='$email'";
  $res = mysqli_query($con, $query);
  $num = mysqli_num_rows($res);

  if ($num == 1) {
    $error = "<p class='alert alert-warning'>Email Id already Exist</p> ";
  } else {

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($uimage)) {

      $sql = "INSERT INTO user (uname,uemail,uphone,upass,utype,uimage) VALUES ('$name','$email','$phone','$pass','$utype','$uimage')";
      $result = mysqli_query($con, $sql);
      move_uploaded_file($temp_name1, "user/$uimage");
      if ($result) {
        $msg = "<p class='alert alert-success'>Register Successfully</p> ";
      } else {
        $error = "<p class='alert alert-warning'>Register Not Successfully</p> ";
      }
    } else {
      $error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
    }
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>LM Homes | Admin</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!-- Feathericon CSS -->
  <link rel="stylesheet" href="assets/css/feathericon.min.css">

  <!-- Datatables CSS -->
  <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">

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
      <div class="page-header mt-5">
        <div class="row">
          <div class="col">
            <h3 class="page-title">Users</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /Page Header -->

      <section class="section-login">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 border-4 text-white">
              <div class="login-block shadow p-4 rounded">
                <h2 class="text-center mb-4 text-dark fw-bold">Register</h2>
                <form method="post" class="text-dark" enctype="multipart/form-data" action="useradd.php">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name*">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email*">
                  </div>
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Your Phone*" maxlength="10">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Your Password*">
                  </div>

                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="utype" value="user" checked>User
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="utype" value="agent">Agent
                    </label>
                  </div>
                  <div class="form-check-inline disabled">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="utype" value="builder">Builder
                    </label>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label"><b>User Image</b></label>
                    <input class="form-control" name="uimage" type="file">
                  </div>


                  <button type="submit" name="reg" value="Register"
                    class="btn btn-block w-50 mx-auto border-0 btn-dark">Register</button>

                </form>
                <!-- <div class="text-center mt-3">
                  <p>Already have an account? <br><a href=" login.php">Login here</a></p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>

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

  <!-- Datatables JS -->
  <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
  <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

  <script src="assets/plugins/datatables/dataTables.select.min.js"></script>

  <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
  <script src="assets/plugins/datatables/buttons.flash.min.js"></script>
  <script src="assets/plugins/datatables/buttons.print.min.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>

</body>

</html>