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
    <title>Book Store</title>
    <link rel="stylesheet" type="text/css" href="<?= public_path('user/css/bootstrap.css') ?>" />
    <link href="<?= public_path('user/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= public_path('user/css/style.css') ?>" rel="stylesheet" />
    <link href="<?= public_path('user/css/responsive.css') ?>" rel="stylesheet" />
</head>

<body>

<div class="hero_area">
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="#">
            <span>
              Book Store
            </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link pl-lg-0" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html"> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categories.html">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-danger mr-1" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-danger" href="register.html">Registration</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h5>
                                        Bookstore
                                    </h5>
                                    <h1>
                                        For All Your <br>
                                        Reading Needs
                                    </h1>
                                    <p>
                                        about your book store
                                    </p>
                                    <a href="">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="images/slider-img.png" alt="">
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
                                        Bookstore
                                    </h5>
                                    <h1>
                                        For All Your <br>
                                        Reading Needs
                                    </h1>
                                    <p>
                                        About your book store
                                    </p>
                                    <a href="">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="images/slider-img.png" alt="">
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
                                        Bostorek Bookstore
                                    </h5>
                                    <h1>
                                        For All Your <br>
                                        Reading Needs
                                    </h1>
                                    <p>
                                        About book store
                                    </p>
                                    <a href="">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="images/slider-img.png" alt="">
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
    <!-- end slider section -->
</div>


<!-- catagory section -->

<section class="catagory_section layout_padding">
    <div class="catagory_container">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Books Categories
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 ">
                    <a href="">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/cat1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Textbooks
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <a href="">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/cat2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Science
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <a href="">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/cat3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    History
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <a href="">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/cat4.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Biography
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <a href="">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/cat5.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Adventure
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <a href="">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/cat6.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Fantasy
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end catagory section -->

<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="heading_container ">
                    <h2 class="">
                        Contact Us
                    </h2>
                </div>
                <form action="#">
                    <div>
                        <input type="text" placeholder="Name" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div>
                        <input type="text" placeholder="Pone Number" />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="btn-box">
                        <button>
                            SEND
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="images/contact-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

<!-- info section -->

<section class="info_section layout_padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 info-col">
                <div class="info_detail">
                    <h4>
                        About Us
                    </h4>
                    <p>
                        Vitae aut explicabo fugit facere alias distinctio, exem commodi mollitia minusem dignissimos atque asperiores incidunt vel voluptate iste
                    </p>
                    <div class="info_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 info-col">
                <div class="info_contact">
                    <h4>
                        Address
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                  Location
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                  Call +01 1234567890
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                  demo@gmail.com
                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 info-col">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end info section -->

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved
            <a href="#">Book Store</a>
        </p>
    </div>
</footer>
<!-- footer section -->

<!-- jQery -->
<script src="<?= public_path('user/js/jquery-3.4.1.min.js') ?>"></script>
<script src="<?= public_path('user/js/bootstrap.js') ?>"></script>
<script src="<?= public_path('user/js/custom.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>

</body>

</html>