<?php 
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['reg']))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$pass=$_REQUEST['pass'];
	$utype=$_REQUEST['utype'];
	
	$uimage=$_FILES['uimage']['name'];
	$temp_name1 = $_FILES['uimage']['tmp_name'];
	$pass= sha1($pass);
	
	$query = "SELECT * FROM user where uemail='$email'";
	$res=mysqli_query($con, $query);
	$num=mysqli_num_rows($res);
	
	if($num == 1)
	{
		$error = "<p class='alert alert-warning'>Email Id already Exist</p> ";
	}
	else
	{
		
		if(!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($uimage))
		{
			
			$sql="INSERT INTO user (uname,uemail,uphone,upass,utype,uimage) VALUES ('$name','$email','$phone','$pass','$utype','$uimage')";
			$result=mysqli_query($con, $sql);
			move_uploaded_file($temp_name1,"admin/user/$uimage");
			   if($result){
				   $msg = "<p class='alert alert-success'>Register Successfully</p> ";
			   }
			   else{
				   $error = "<p class='alert alert-warning'>Register Not Successfully</p> ";
			   }
		}else{
			$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
		}
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>2DAY'S KEY REALTY Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet" />

     

    <style>

      .login-block {
        background-color: #bd7a36;
        transition: transform 0.3s ease;
      }

      .login-block button {
        background-color: #ffffff;
        color: #bd7a36;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .login-block button:hover {
        background-color: #bd7a36;
        color: #ffffff;
      }

    </style>
  </head>

  <body>
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
      <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
      </div>
      <span class="close-box-collapse right-boxed ion-ios-close"></span>
      <div class="box-collapse-wrap form">
        <form class="form-a">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label for="Type">Keyword</label>
                <input
                  type="text"
                  class="form-control form-control-lg form-control-a"
                  placeholder="Keyword"
                />
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="Type">Type</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="Type"
                >
                  <option>All Type</option>
                  <option>For Rent</option>
                  <option>For Sale</option>
                  <option>Open House</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="city">City</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="city"
                >
                  <option>All City</option>
                  <option>Alabama</option>
                  <option>Arizona</option>
                  <option>California</option>
                  <option>Colorado</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="bedrooms">Bedrooms</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="bedrooms"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="garages">Garages</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="garages"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="bathrooms">Bathrooms</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="bathrooms"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="price">Min Price</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="price"
                >
                  <option>Unlimite</option>
                  <option>$50,000</option>
                  <option>$100,000</option>
                  <option>$150,000</option>
                  <option>$200,000</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-b">Search Property</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="container">
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-toggle="collapse"
          data-target="#navbarDefault"
          aria-controls="navbarDefault"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a href="index.php">
          <img
            src="img/logo1.jpg"
            alt="2DAY'SKEY REALTY Logo"
            style="width: 200px; height: 150px; margin-left: 50px"
          />
        </a>
        <button
          type="button"
          class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo01"
          aria-expanded="false"
        >
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div
          class="navbar-collapse collapse justify-content-center"
          id="navbarDefault"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="property-grid.html">Property</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="blog-grid.html">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="property-single.html"
                  >Property Single</a
                >
                <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
                <a class="dropdown-item" href="agent-single.html"
                  >Agent Single</a
                >
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" contact.php">Contact</a>
            </li>
          </ul>
        </div>
        <button
          type="button"
          class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo01"
          aria-expanded="false"
        >
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>
      </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Intro Single star /-->
    <section class="intro-single mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Register</h1>
              <span class="color-text-a"></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav
              aria-label="breadcrumb"
              class="breadcrumb-box d-flex justify-content-lg-end"
            >
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href=" login.php">Login</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ News Grid Star /-->
    <section class="section-login">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 border-4 text-white">
            <div class="login-block shadow p-4 rounded">
              <h2 class="text-center mb-4 text-white fw-bold">Register</h2>
              <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text"  name="name" class="form-control" placeholder="Your Name*">
                </div>
                <div class="form-group">
                  <input type="email"  name="email" class="form-control" placeholder="Your Email*">
                </div>
                <div class="form-group">
                  <input type="text"  name="phone" class="form-control" placeholder="Your Phone*" maxlength="10">
                </div>
                <div class="form-group">
                  <input type="password" name="pass"  class="form-control" placeholder="Your Password*">
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
                
                
                <button type="submit" name="reg" value="Register" class="btn btn-block w-50 mx-auto border-0 btn-outline-dark">Register</button>
              
              </form>
              <div class="text-center mt-3">
                <p>Already have an account? <br><a href=" login.php">Login here</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ News Grid End /-->

    <!--/ footer Star /-->
    <section class="section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">2DAY'S KEY REALTY</h3>
              </div>
              <div class="w-body-a">
                <p class="w-text-a color-text-a">
                  Shop No.8,Shelter Complex, Plot No.12-B,Sector-8,Kharghar, Navi Mumbai, Maharashtra 410210
                </p>
              </div>
              <div class="w-footer-a">
                <ul class="list-unstyled">
                  <li class="color-a">
                    <span class="color-text-a">Email .</span>
                    anuj.gaikwad@gmail.com
                  </li>
                  <li class="color-a">
                    <span class="color-text-a">Phone .</span> 93200 88865
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">The Company</h3>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i>
                      <a href="#">Agent Admin</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i>
                      <a href="#">Affiliate</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i>
                      <a href="#">Privacy Policy</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="nav-footer">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">Home</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">About</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Property</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Blog</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Contact</a>
                </li>
              </ul>
            </nav>
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="copyright-footer">
              <p class="copyright color-text-a">
                &copy; Copyright
                <span class="color-a">2DAY'S KEY REALTY</span> All Rights
                Reserved.
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://ShubhamSathe.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://ShubhamSathe.com/buy/?theme=2DAY'S KEY REALTY
            -->
              Designed by <a href="https://Shubhamsathe.com/">Shubham Sathe</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--/ Footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
