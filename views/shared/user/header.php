<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Online Library</title>
  <link rel="stylesheet" type="text/css" href="<?= public_path('user/css/bootstrap.css') ?>" />
  <link href="<?= public_path('user/css/font-awesome.min.css') ?>" rel="stylesheet" />
  <link href="<?= public_path('user/css/style.css') ?>" rel="stylesheet" />
  <link href="<?= public_path('user/css/responsive.css') ?>" rel="stylesheet" />
  <link href="<?= public_path('user/css/resCarousel.css') ?>" rel="stylesheet" />
  <link href="<?= public_path('user/css/caraosel.css') ?>" rel="stylesheet" />
</head>

<body class="<?= $_SERVER['REQUEST_URI'] == '/' ? '' : 'sub_page' ?>">

<div class="hero_area" <?php if ($_SERVER['REQUEST_URI'] == '/') {?> style="min-height: 50vh !important;" <?php } ?> >
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="<?= URI('/') ?>">
            <span>
              Online Library
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link pl-lg-0" href="<?= URI('/') ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= URI('/about') ?>"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= URI('/books') ?>">Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= URI('/contact') ?>">Contact Us</a>
            </li>
            <?php if(!auth_user()) { ?>
            <li class="nav-item">
              <a class="nav-link btn btn-sm btn-danger mr-1" href="<?= URI('/login') ?>">User Login</a>
            </li>
              <li class="nav-item">
                <a class="nav-link btn btn-sm btn-info mr-1" href="<?= URI('/admin-login') ?>">Admin Login</a>
              </li>
            <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link btn btn-sm btn-danger mr-1" href="<?= URI('/profile') ?>">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-sm btn-danger mr-1" href="<?= URI('/logout') ?>">Logout</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
  <!-- slider section -->
  <?php
    if ($_SERVER['REQUEST_URI'] == '/') {
  ?>
    <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <h5>
                    Book Library
                  </h5>
                  <h1>
                    For All Your <br>
                    Reading Needs
                  </h1>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img
                    src="<?= public_path('user/images/LF_Wide_Back_Stacks.jpg') ?>"
                    alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <h5>
                    Book Library
                  </h5>
                  <h1>
                    For All Your <br>
                    Reading Needs
                  </h1>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="<?= public_path('user/images/Reading_rm.jpg') ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <h5>
                    Book Library
                  </h5>
                  <h1>
                    For All Your <br>
                    Reading Needs
                  </h1>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="<?= public_path('user/images/EE4A4716-London_Library_.jpg') ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn_box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <?php } ?>
  <!-- end slider section -->
</div>
