<!DOCTYPE html>

<?php
require_once 'server.php';
?>

<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Курсач</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="img/f-logo1.png" alt="">
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li><a href="./services.php">Services</a></li>
                            <li class="active"><a href="./pricing.php">Pricing</a></li>
                            <li><a href="./portfolio.php">Portfolio</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Pricing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Pricing Section Begin -->

    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title pricing-title">
                        <h2>Качество высшего уровня</h2>
                        <p>Как и этого курсового проекта, честное слово.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <?php foreach ($service as $doto) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item" >
                            <img src="<?= $doto['photo_of_service']; ?>" alt="" >   
                            <div class="ti-text">
                                    <h5> <?= $doto['service_name']; ?> </h5>
                                    <span> <?= $doto['Price_of_secvice']; ?> $ </span>
                            </div>
                    </div>
                </div>
                <?php  } ?>

                <?php foreach ($service1 as $doto) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item" >
                            <img src="<?= $doto['photo_of_service']; ?>" alt="" >   
                            <div class="ti-text">
                                    <h5> <?= $doto['service_name']; ?> </h5>
                                    <span> <?= $doto['Price_of_secvice']; ?> $ </span>
                            </div>
                    </div>
                </div>
                <?php  } ?>

                <?php foreach ($service2 as $doto) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item" >
                            <img src="<?= $doto['photo_of_service']; ?>" alt="" >   
                            <div class="ti-text">
                                    <h5> <?= $doto['service_name']; ?> </h5>
                                    <span> <?= $doto['Price_of_secvice']; ?> $ </span>
                            </div>
                    </div>
                </div>
                <?php  } ?> 

                <?php foreach ($service3 as $doto) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item" >
                            <img src="<?= $doto['photo_of_service']; ?>" alt="" >   
                            <div class="ti-text">
                                    <h5> <?= $doto['service_name']; ?> </h5>
                                    <span> <?= $doto['Price_of_secvice']; ?> $ </span>
                            </div>
                    </div>
                </div>
                <?php  } ?>
                
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#">
                                <img src="img/f-logo.png" alt="">
                            </a>
                        </div>
                        <p>Наши соцсети:</p>
                        <div class="fa-social">
                            <a href="https://vk.com/id230136552"><i class="fa fa-vk"></i></a>
                            <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com/nikitasolyny/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Instagram</h5>
                        <div class="fw-instagram">
                            <img src="img/instagram/insta-1.jpg" alt="">
                            <img src="img/instagram/insta-2.jpg" alt="">
                            <img src="img/instagram/insta-3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <ul>
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="services.php">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Subscribe</h5>
                        <div class="fw-instagram">
                            <img src="https://png.pngtree.com/element_origin_min_pic/16/09/12/1657d6635f704d0.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://vk.com/id230136552" target="_blank">Nikita Saliony</a>
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>