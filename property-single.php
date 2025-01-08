<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta Tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Real Estate PHP">
  <meta name="keywords" content="">
  <meta name="author" content="Unicoder">
  <link rel="shortcut icon" href="images/favicon.ico">

  <!--	Fonts
  ========================================================-->
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

  <!--	Css Link
  ========================================================-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/layerslider.css">
  <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">

  <title>2DAY'S KEY REALTY Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
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
              <select class="form-control form-control-lg form-control-a" id="city">
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
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
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
              <select class="form-control form-control-lg form-control-a" id="garages">
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
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
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
              <select class="form-control form-control-lg form-control-a" id="price">
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
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- <a class="navbar-brand text-brand" href="index.php" style="word-spacing: 100px;">2DAY'SKEY<br><span class="color-b">REALTY</span></a> -->
      <a href="index.php">
        <img src="img/logo1.jpg" alt="2DAY'SKEY REALTY Logo" style="width: 200px; height: 150px" />
      </a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" login.php">Login/Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.html">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="property-single.html">Property Single</a>
              <a class="dropdown-item" href="blog-single.html">Blog Single</a>
              <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
              <a class="dropdown-item" href="agent-single.html">Agent Single</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" contact.php">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <?php
  $id = $_REQUEST['pid'];
  $query = mysqli_query($con, "SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
  while ($row = mysqli_fetch_array($query)) {
    ?>
    <!--/ Intro Single star /-->
    <section class="intro-single mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"><?php echo $row['1']; ?></h1>
              <span class="color-text-a"><?php echo $row['14']; ?></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="property-grid.html">Properties</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?php echo $row['1']; ?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->

    <div class="full-row">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-12">
                <div id="single-property" style=" margin:30px auto 50px;">
                  <!-- Slide 1 -->
                  <!-- <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                      <img src="admin/property/slide-2.jpg" class="ls-bg img-fluid" alt="" />
                    </div> -->

                  <!-- Slide 2-->
                  <!-- <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                      <img src="admin/property/<?php echo $row['20']; ?>" class="ls-bg img-fluid" alt="" />
                    </div> -->

                  <!-- Slide 3-->
                  <!-- <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                      <img src="admin/property/<?php echo $row['21']; ?>" class="ls-bg img-fluid" alt="" />
                    </div> -->

                  <!-- Slide 4-->
                  <!-- <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                      <img src="admin/property/<?php echo $row['22']; ?>" class="ls-bg img-fluid" alt="" />
                    </div> -->

                  <!-- Slide 5-->
                  <!-- <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                      <img src="admin/property/<?php echo $row['23']; ?>" class="ls-bg img-fluid" alt="" />
                    </div> -->

                  <!-- Carousel -->
                  <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img style="aspect-ratio: 2 / 1;" src="admin/property/<?php echo $row['19']; ?>" alt=""
                          class="d-block w-100 img-fluid">
                      </div>
                      <div class="carousel-item">
                        <img style="aspect-ratio: 2 / 1;" src="admin/property/<?php echo $row['20']; ?>" alt=""
                          class="d-block w-100 img-fluid">
                      </div>
                      <div class="carousel-item">
                        <img style="aspect-ratio: 2 / 1;" src="admin/property/<?php echo $row['21']; ?>" alt=""
                          class="d-block w-100 img-fluid">
                      </div>
                      <div class="carousel-item">
                        <img style="aspect-ratio: 2 / 1;" src="admin/property/<?php echo $row['22']; ?>" alt=""
                          class="d-block w-100 img-fluid">
                      </div>
                      <div class="carousel-item">
                        <img style="aspect-ratio: 2 / 1;" src="admin/property/<?php echo $row['23']; ?>" alt=""
                          class="d-block w-100 img-fluid">
                      </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-6">
                <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">For
                  <?php echo $row['5']; ?>
                </div>
                <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['1']; ?></h5>
                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i>
                  &nbsp;<?php echo $row['14']; ?></span>
              </div>
              <div class="col-md-6">
                <div class="text-success text-left h5 my-2 text-md-right">$<?php echo $row['13']; ?></div>
                <div class="text-left text-md-right">Price</div>
              </div>
            </div>
            <div class="property-details">
              <div class="bg-gray property-quantity px-4 pt-4 w-100">
                <ul>
                  <li><span class="text-secondary"><?php echo $row['12']; ?></span> Sqft</li>
                  <li><span class="text-secondary"><?php echo $row['6']; ?></span> Bedroom</li>
                  <li><span class="text-secondary"><?php echo $row['7']; ?></span> Bathroom</li>
                  <li><span class="text-secondary"><?php echo $row['8']; ?></span> Balcony</li>
                  <li><span class="text-secondary"><?php echo $row['10']; ?></span> Hall</li>
                  <li><span class="text-secondary"><?php echo $row['9']; ?></span> Kitchen</li>
                </ul>
              </div>
              <h4 class="text-secondary my-4">Description</h4>
              <p><?php echo $row['2']; ?></p>

              <h5 class="mt-5 mb-4 text-secondary">Property Summary</h5>
              <!-- <div class="table-striped font-14 pb-2">
                  <table class="w-100">
                    <tbody>
                      <tr>
                        <td>BHK :</td>
                        <td class="text-capitalize"><?php echo $row['4']; ?></td>
                        <td>Property Type :</td>
                        <td class="text-capitalize"><?php echo $row['3']; ?></td>
                      </tr>
                      <tr>
                        <td>Floor :</td>
                        <td class="text-capitalize"><?php echo $row['11']; ?></td>
                        <td>Total Floor :</td>
                        <td class="text-capitalize"><?php echo $row['28']; ?></td>
                      </tr>
                      <tr>
                        <td>City :</td>
                        <td class="text-capitalize"><?php echo $row['15']; ?></td>
                        <td>State :</td>
                        <td class="text-capitalize"><?php echo $row['16']; ?></td>
                      </tr>

                    </tbody>
                  </table>
                </div> -->
              <div style="overflow-x: auto;">
                <div class="table-striped font-14 pb-2">
                  <table style="width: 100%;">
                    <tbody>
                      <tr>
                        <td>BHK :</td>
                        <td class="text-capitalize"><?php echo $row['4']; ?></td>
                        <td>Property Type :</td>
                        <td class="text-capitalize"><?php echo $row['3']; ?></td>
                      </tr>
                      <tr>
                        <td>Floor :</td>
                        <td class="text-capitalize"><?php echo $row['11']; ?></td>
                        <td>Total Floor :</td>
                        <td class="text-capitalize"><?php echo $row['28']; ?></td>
                      </tr>
                      <tr>
                        <td>City :</td>
                        <td class="text-capitalize"><?php echo $row['15']; ?></td>
                        <td>State :</td>
                        <td class="text-capitalize"><?php echo $row['16']; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <h5 class="mt-5 mb-4 text-secondary">Features</h5>
              <div class="row">
                <?php echo $row['17']; ?>

              </div>

              <h5 class="mt-5 mb-4 text-secondary">Floor Plans</h5>
              <div class="accordion" id="accordionExample">
                <button
                  class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative"
                  type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne"> Floor Plans </button>
                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne"
                  data-parent="#accordionExample">
                  <img src="admin/property/<?php echo $row['25']; ?>" alt="Not Available">
                </div>
                <button
                  class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed"
                  type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">Basement Floor</button>
                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <img src="admin/property/<?php echo $row['26']; ?>" alt="Not Available">
                </div>
                <button
                  class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed"
                  type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">Ground Floor</button>
                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree"
                  data-parent="#accordionExample">
                  <img src="admin/property/<?php echo $row['27']; ?>" alt="Not Available">
                </div>
              </div>

              <?php
              $id = $_REQUEST['pid'];
              $query = mysqli_query($con, "SELECT user.* FROM `user` WHERE user.utype='agent'");
              while ($row = mysqli_fetch_array($query)) {
                ?>
                <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact Agent</h5>
                <div class="agent-contact pt-60">
                  <div class="row">
                    <div class="col-sm-4 col-lg-3"> <img src="admin/user/<?php echo $row['uimage']; ?>" alt="" height="200"
                        width="170"> </div>
                    <div class="col-sm-8 col-lg-9">
                      <div class="agent-data text-ordinary mt-sm-20">
                        <h6 class="text-success text-capitalize"><?php echo $row['uname']; ?></h6>
                        <ul class="mb-3">
                          <li><?php echo $row['uphone']; ?></li>
                          <li><?php echo $row['uemail']; ?></li>
                        </ul>

                        <div class="mt-3 text-secondary hover-text-success">
                          <ul>
                            <li class="float-left mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="float-left mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="float-left mr-3"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="float-left mr-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="float-left mr-3"><a href="#"><i class="fas fa-rss"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              <?php } ?>
            </div>
          </div>

        <?php } ?>

        <div class="col-lg-4">
          <div class="container mt-5">
            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4>
            <form id="instalmentForm" class="d-inline-block w-100">
              <label class="sr-only">Property Amount</label>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">$</div>
                </div>
                <input type="text" id="amount" class="form-control" placeholder="Property Price">
              </div>
              <label class="sr-only">Month</label>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                </div>
                <input type="text" id="month" class="form-control" placeholder="Duration Year">
              </div>
              <label class="sr-only">Interest Rate</label>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">%</div>
                </div>
                <input type="text" id="interest" class="form-control" placeholder="Interest Rate">
              </div>
              <button type="button" id="calcButton" class="btn btn-danger mt-4">Calculate Instalment</button>
            </form>

            <div id="result" className="mt-4"></div>
          </div>


          <!-- Featured Property -->
          <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Featured Property</h4>
          <ul class="property_list_widget row">

            <?php
            $query = mysqli_query($con, "SELECT * FROM `property` WHERE isFeatured = 1 ORDER BY date DESC LIMIT 3");
            while ($row = mysqli_fetch_array($query)) {
              ?>
              <li class="col-lg-12"> <img src="admin/property/<?php echo $row['18']; ?>" alt="pimage">
                <h6 class="text-secondary hover-text-success text-capitalize"><a
                    href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a></h6>
                <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i>
                  <?php echo $row['14']; ?></span>

              </li>
            <?php } ?>

          </ul>

          <div class="sidebar-widget mt-5">
            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently Added Property</h4>
            <ul class="property_list_widget row">

              <?php
              $query = mysqli_query($con, "SELECT * FROM `property` ORDER BY date DESC LIMIT 7");
              while ($row = mysqli_fetch_array($query)) {
                ?>
                <li class="col-lg-12">
                  <img src="admin/property/<?php echo $row['18']; ?>" alt="pimage">
                  <h6 class="text-secondary hover-text-success text-capitalize"><a
                      href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a></h6>
                  <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i>
                    <?php echo $row['14']; ?></span>
                </li>
              <?php } ?>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--/ Property Single End /-->

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
                  <span class="color-text-a">Phone .</span> anuj.gaikwad@gmail.com
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> 93200 88865
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
                    <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
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
              <span class="color-a">2DAY'S KEY REALTY</span> All Rights Reserved.
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

  <script>
    document.getElementById('calcButton').addEventListener('click', function () {
      // Get input values
      const amount = parseFloat(document.getElementById('amount').value);
      const years = parseFloat(document.getElementById('month').value);
      const interestRate = parseFloat(document.getElementById('interest').value);

      // Validate inputs
      if (isNaN(amount) || isNaN(years) || isNaN(interestRate) || amount <= 0 || years <= 0 || interestRate <= 0) {
        document.getElementById('result').innerHTML = '<h5 class="text-danger p-3">Please enter valid values for all fields.</h5>';
        return;
      }

      // Calculate monthly installment
      const months = years * 12; // Convert years to months
      const monthlyInterestRate = (interestRate / 100) / 12;
      const instalment = (amount * monthlyInterestRate) / (1 - Math.pow(1 + monthlyInterestRate, -months));

      // Display result
      document.getElementById('result').innerHTML = `<h5 class="text-danger fw-bold fs-3 p-3">Monthly Instalment: $${instalment.toFixed(2)}</h5>`;
    });
  </script>

</body>

</html>