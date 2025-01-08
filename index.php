<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

if (isset($_GET['id'])) {
  $news_id = $_GET['id'];

  $query = "SELECT * FROM news WHERE id = $news_id";
  $result = mysqli_query($con, $query);

  if ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="news-detail-container">
      <h1><?php echo htmlspecialchars($row['title']); ?></h1>
      <p><strong>Category:</strong> <?php echo htmlspecialchars($row['article_name']); ?></p>
      <p><strong>Source:</strong> <?php echo htmlspecialchars($row['source']); ?></p>
      <p><strong>Published on:</strong> <?php echo date("d M. Y", strtotime($row['date'])); ?></p>
      <img src="news/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>"
        class="img-fluid" />
      <p><?php echo nl2br(htmlspecialchars($row['full_article'])); ?></p>
    </div>
    <?php
  } else {
    echo "<p>News article not found.</p>";
  }
} else {
  echo "<p>Invalid request.</p>";
}
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
  <link rel="stylesheet" type="text/css" href="css/style2.css">

  <title>2DAY'S KEY REALTY Bootstrap</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon" />
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="path_to_owl_carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="path_to_owl_carousel/owl.theme.default.min.css">

  <!-- jQuery (needed for Owl Carousel) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Owl Carousel JS -->
  <script src="path_to_owl_carousel/owl.carousel.min.js"></script>

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet" />
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
      <form class="form-a" action="search.php" method="GET">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="keyword">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" name="keyword"
                placeholder="Keyword" />
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="type">Type</label>
              <select class="form-control form-control-lg form-control-a" name="type">
                <option value="">All Types</option>
                <option value="Apartment">Apartment</option>
                <option value="Villa">Villa</option>
                <option value="House">House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="stype">Sell Type</label>
              <select class="form-control form-control-lg form-control-a" name="stype">
                <option value="">All Types</option>
                <option value="For Rent">For Rent</option>
                <option value="For Sale">For Sale</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" name="city">
                <option value="">All Cities</option>
                <option value="Alabama">Alabama</option>
                <option value="Arizona">Arizona</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedroom">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" name="bedroom">
                <option value="">Any</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathroom">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" name="bathroom">
                <option value="">Any</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="min_price">Min Price</label>
              <input type="number" class="form-control form-control-lg form-control-a" name="min_price"
                placeholder="Min Price" />
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="max_price">Max Price</label>
              <input type="number" class="form-control form-control-lg form-control-a" name="max_price"
                placeholder="Max Price" />
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
          <!-- <li class="nav-item">
            <a class="nav-link" href=" login.php">Login/Register</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href=" about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.html">Blog</a>
          </li>
          <!-- <li class="nav-item dropdown">
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
          </li> -->
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

  <!-- Offer start -->
  <?php $query = mysqli_query($con, "SELECT * FROM `offers`");
  while ($row = mysqli_fetch_array($query)) {
  ?>
  <!-- Offer end -->

    <!--/ Carousel Star /-->
    <div class="intro intro-carousel">
      <div id="carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-a intro-item bg-image"
          style="background-image: url(admin/upload/<?php echo $row['6'] ?>)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top mt-5">
                        <?php echo $row['1'] ?>,<?php echo $row['2'] ?>
                        <br />
                      </p>
                      <h1 class="intro-title mb-4">
                        <?php echo $row['3'] ?>
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="#"><span class="price-a"><?php echo $row['4'] ?> | Rs <?php echo $row['5'] ?></span></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a intro-item bg-image"
          style="background-image: url(admin/upload/<?php echo $row['12'] ?>)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top mt-5">
                        <?php echo $row['7'] ?>,<?php echo $row['8'] ?> <br />
                      </p>
                      <h1 class="intro-title mb-4">
                        <?php echo $row['9'] ?>
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="#"><span class="price-a"><?php echo $row['10'] ?> | Rs
                            <?php echo $row['11'] ?></span></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a intro-item bg-image"
          style="background-image: url(admin/upload/<?php echo $row['18'] ?>)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top mt-5">
                        <?php echo $row['13'] ?>,<?php echo $row['14'] ?>
                      </p>
                      <h1 class="intro-title mb-4">
                        <?php echo $row['15'] ?>
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="#"><span class="price-a"><?php echo $row['16'] ?> | Rs
                            <?php echo $row['17'] ?></span></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Carousel end /-->
  <?php } ?>
  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Lifestyle</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Sed porttitor lectus nibh. Cras ultricies ligula sed magna
                dictum porta. Praesent sapien massa, convallis a pellentesque
                nec, egestas non nisi.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Loans</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id
                dui posuere blandit. Mauris blandit aliquet elit, eget
                tincidunt nibh pulvinar a.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Sell</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Sed porttitor lectus nibh. Cras ultricies ligula sed magna
                dictum porta. Praesent sapien massa, convallis a pellentesque
                nec, egestas non nisi.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->

  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest Properties</h2>
            </div>
            <div class="title-link">
              <a href="property-grid.html">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div id="property-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-6.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">206 Mount
                      <br /> Olive Road Two</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | Rs 50,000</span>
                  </div>
                  <a href="#" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-3.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">157 West
                      <br /> Central Park</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | Rs 50,000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-7.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">245 Azabu
                      <br /> Nishi Park let</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | Rs 50,000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-10.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">204 Montal
                      <br /> South Bela Two</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | Rs 50,000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="full-row">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
            </div>
            <div class="col-md-12">
              <div class="tab-content mt-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                  <div class="row">

                    <?php $query = mysqli_query($con, "SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
                    while ($row = mysqli_fetch_array($query)) {
                      ?>

                      <div class="col-md-6 col-lg-4">
                        <div class="featured-thumb hover-zoomer mb-4 shadow">
                          <div class="overlay-black overflow-hidden position-relative"> <img style="aspect-ratio: 3/2;"
                              class="img-fluid" src="admin/property/<?php echo $row['18']; ?>" alt="pimage">
                            <div class="featured bg-danger text-white">New</div>
                            <div class="sale bg-warning text-white text-capitalize">For <?php echo $row['5']; ?></div>
                            <div class="price text-primary"><b>$<?php echo $row['13']; ?> </b><span
                                class="text-white"><?php echo $row['12']; ?> Sqft</span></div>
                          </div>
                          <div class="featured-thumb-data shadow-one">
                            <div class="p-3">
                              <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a
                                  href="property-single.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a>
                              </h5>
                              <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i>
                                <?php echo $row['14']; ?></span>
                            </div>
                            <div class="bg-gray quantity px-4 pt-4">
                              <ul>
                                <li><span><?php echo $row['12']; ?></span> Sqft</li>
                                <li><span><?php echo $row['6']; ?></span> Beds</li>
                                <li><span><?php echo $row['7']; ?></span> Baths</li>
                                <li><span><?php echo $row['9']; ?></span> Kitchen</li>
                                <li><span><?php echo $row['8']; ?></span> Balcony</li>

                              </ul>
                            </div>
                            <div class="p-4 d-inline-block w-100">
                              <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>By :
                                <?php echo $row['uname']; ?>
                              </div><br>
                              <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i>
                                <?php echo date('d-m-Y', strtotime($row['date'])); ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>

                  </div>
                </div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property End /-->


  <!--/ Agents Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Best Agents</h2>
            </div>
            <div class="title-link">
              <a href="agents-grid.html">All Agents
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php
        $query = mysqli_query($con, "SELECT * FROM user WHERE utype='agent'");
        while ($row = mysqli_fetch_array($query)) {
          ?>

          <!-- <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/<?php echo $row['6']; ?>" alt="" class="img-d img-fluid" />
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two"><?php echo $row['1']; ?> <br />
                    </a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Sed porttitor lectus nibh, Cras ultricies ligula sed magna
                  dictum porta two.
                </p>
                <div class="info-agents color-a">
                  <p><strong>Phone: </strong> 93200 88865</p>
                  <p><strong>Email: </strong> agentsanuj.gaikwad@gmail.com</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> -->

          <div class="full-row">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h2 class="text-secondary double-down-line text-center mb-5">Agent</h2>
                </div>
              </div>
              <div class="row">

                <?php
                $query = mysqli_query($con, "SELECT * FROM user WHERE utype='agent'");
                while ($row = mysqli_fetch_array($query)) {
                  ?>

                  <div class="col-md-6 col-lg-4">
                    <div class="hover-zoomer bg-white shadow-one mb-4 card-box-d">
                      <div class="overflow-hidden card-img-d">
                        <img src="admin/user/<?php echo $row['6']; ?>" alt="aimage">
                      </div>
                      <div class="py-3 text-center">
                        <h5 class="text-secondary hover-text-success"><a href="#"><?php echo $row['1']; ?></a></h5>
                        <span>Real Estate - Agent</span>
                        <p><?php echo $row['3']; ?></p>
                      </div>
                    </div>
                  </div>

                <?php } ?>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!--/ Agents End /-->

  <!--/ News Star /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest News</h2>
            </div>
            <div class="title-link">
              <a href="newslist.php">All News
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
        <!-- News items looped here (same as before) -->
        <?php
        // Include database connection
        require("config.php");

        // Query to fetch news data from the database
        $query = "SELECT id, title, short_content, full_article, image, source, article_name, date FROM news";
        $result = mysqli_query($con, $query);

        // Check if data exists
        if ($result && mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $image_path = "admin/news/" . htmlspecialchars($row['image']); // Construct the image path
            ?>
            <div class="carousel-item-c">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="<?php echo $image_path; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>"
                    class="img-fluid w-100 h-75" style="object-fit: cover;" />
                </div>
                <div class="card-overlay p-3 text-white">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b"><?php echo htmlspecialchars($row['article_name']); ?></a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                      <a href="news-single.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['title']); ?></a>

                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"><?php echo date("d M. Y", strtotime($row['date'])); ?></span>
                    </div>
                  </div>
                  <div class="card-description-b">
                    <p><?php echo htmlspecialchars($row['short_content']); ?></p>
                  </div>
                  <div class="card-source-b">
                    <span>Source: <?php echo htmlspecialchars($row['source']); ?></span>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
        } else {
          echo "<p>No news found.</p>";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Initialize Owl Carousel with Autoplay and Responsive Settings -->
  <script>
    $(document).ready(function () {
      $("#new-carousel").owlCarousel({
        loop: true,            // Enable looping of items
        margin: 10,            // Margin between items
        nav: true,             // Enable next/prev buttons
        dots: false,           // Disable dots (pagination)
        center: true,
        items: 3,              // Display 3 items per slide
        responsive: {
          0: {
            items: 1       // Show 1 item on small screens
          },
          600: {
            items: 2       // Show 2 items on medium screens
          },
          1000: {
            items: 3       // Show 3 items on large screens
          }
        }
      });
    });
  </script>






  <!--/ News End /-->

  <!--/ Testimonials Star /-->
  <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-1.jpg" alt="" class="img-fluid" />
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    2DAY'S KEY REALTY offers seamless navigation, expert
                    guidance, and a commitment to excellence, making them the
                    go-to choice for anyone seeking top-notch real estate
                    services.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar" />
                  <h5 class="testimonial-author">Albert & Family</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-2.jpg" alt="" class="img-fluid" />
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    2DAY'S KEY REALTY delivers unparalleled professionalism
                    and expertise in the real estate sector, offering seamless
                    navigation through their comprehensive listings and
                    ensuring a smooth, stress-free experience for all clients.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar" />
                  <h5 class="testimonial-author">Pablo & Family</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonials End /-->

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
                Shop No.8,Shelter Complex, Plot No.12-B,Sector-8,Kharghar,
                Navi Mumbai, Maharashtra 410210
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span>
                  anuj.gaikwad@gmail.com
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
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">International sites</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">China</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i>
                  <a href="#">Philippines</a>
                </li>
              </ul>
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
            Designed by <a href="https://ShubhamSathe.com/">ShubhamSathe</a>
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
    window.onload = function () {
      (function () {
        emailjs.init("YOUR_USER_ID"); // Replace with your user ID
      })();

      // Function to display the pop-up after a certain delay
      function displayPopup(delay) {
        setTimeout(function () {
          // Create a modal or pop-up element
          var popup = document.createElement("div");
          popup.classList.add("modal");
          popup.innerHTML = `
      <div class="modal-dialog p-5">
        <div class="modal-content p-2">
          <div class="modal-header">
            <h5 class="modal-title">Property Enquiry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-3">
            <form id="enquiryForm">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" required>
              </div>
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    `;
          // Append the pop-up to the body
          document.body.appendChild(popup);
          // Initialize the modal
          $(popup).modal("show");

          // Handle form submission
          document.getElementById("enquiryForm").onsubmit = function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form values
            var from_name = document.getElementById("name").value;
            var from_email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var message = document.getElementById("message").value;

            // Send email using EmailJS
            emailjs
              .send("service_u6lbhut", "template_gxy2aob", {
                from_name: name,
                from_email: email,
                phone: phone,
                message: message,
              })
              .then(
                function (response) {
                  console.log("SUCCESS!", response.status, response.text);
                  alert("Your enquiry has been sent successfully!");

                  // WhatsApp functionality
                  var whatsappPhone = "7038105437"; // Replace with your WhatsApp phone number in international format
                  var whatsappMessage = `Name: ${from_name}\nEmail: ${from_email}\nPhone: ${phone}\n Enquiery: ${message}`;
                  var whatsappUrl = `https://api.whatsapp.com/send?phone=${whatsappPhone}&text=${encodeURIComponent(
                    whatsappMessage
                  )}`;
                  window.open(whatsappUrl); // Open WhatsApp with the message

                  $(popup).modal("hide"); // Close the modal
                },
                function (error) {
                  console.log("FAILED...", error);
                  alert(
                    "There was an error sending your enquiry. Please try again."
                  );
                }
              );
          };
        }, delay);
      }

      // Call the displayPopup function after 1 seconds
      displayPopup(10000); // 1 second delay
    };
  </script>

  <!-- Initialize Owl Carousel with Autoplay -->



  <script src="js/jquery.min.js"></script>
  <!--jQuery Layer Slider -->
  <script src="js/greensock.js"></script>
  <script src="js/layerslider.transitions.js"></script>
  <script src="js/layerslider.kreaturamedia.jquery.js"></script>
  <!--jQuery Layer Slider -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/tmpl.js"></script>
  <script src="js/jquery.dependClass-0.1.js"></script>
  <script src="js/draggable-0.1.js"></script>
  <script src="js/jquery.slider.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/YouTubePopUp.jquery.js"></script>
  <script src="js/validate.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>