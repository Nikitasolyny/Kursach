<!DOCTYPE html>
<html lang="zxx">

<?php

require_once'server.php';

?>

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
                            <li class="active"><a href="./about.php">About</a></li>
                            <li><a href="./services.php">Services</a></li>
                            <li><a href="./pricing.php">Pricing</a></li>
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
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="about-pic set-bg" data-setbg="img/about/about-pic.jpg">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>Capturing the moments that captivate your heart <br><h4>@Никита Солёный<h4> <br></h2>
                            <p>
                            </p>
                        </div>
                        <div class="at-list">
                            <div class="al-item">
                                <div class="al-pic">
                                    <img src="img/about/list-1.png" alt="">
                                </div>
                                <div class="al-text">
                                    <h5>Профессионализм</h5>
                                    <p>Наши сотрудники лучшие в своем роде. Мировые награды, фотографии с знаменитостями и другие достижения - самый настоящий показатель и гарант качества!</p>
                                </div>
                            </div>
                            <div class="al-item">
                                <div class="al-pic">
                                    <img src="img/about/list-2.png" alt="">
                                </div>
                                <div class="al-text">
                                    <h5>Индивидуальный подход</h5>
                                    <p>Мы ценим каждого из наших клиентов, именно поэтому наши мастера многогранны и с легкостью реализуют любую вашу задумку.</p>
                                </div>
                            </div>
                            <div class="al-item">
                                <div class="al-pic">
                                    <img src="img/about/list-3.png" alt="">
                                </div>
                                <div class="al-text">
                                    <h5>Гибкий график</h5>
                                    <p>Планируйте фотосет тогда, когда вам удобно, мы ценим ваше время и комфорт.</p>
                                </div>
                            </div>
                            <div class="al-item">
                                <div class="al-pic">
                                    <img src="img/about/list-4.png" alt="">
                                </div>
                                <div class="al-text">
                                    <h5>Опыт</h5>
                                    <p>Какой бы сложной не была ваша идея - мы в первую очередь профессионалы, поэтому сложность лишь дополнительный интерес, а не повод сдаться!.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Team Section Begin -->


    <!-- Добавить бд -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <h2>Our team</h2>
                    </div>
                </div>
            </div>  
            <div class="row">
                <?php foreach ($team as $data) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item" >
                            <img src="https://cdn-icons-png.flaticon.com/512/3031/3031674.png" alt="" >   
                            <div class="ti-text">
                                    <h5> <?= $data['Worker_info']; ?> </h5>
                                    <span> <?= $data['Worker_role']; ?> </span>
                            </div>
                    </div>
                </div>
                <?php  } ?>

                <?php foreach ($team1 as $data) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item" >
                            <img src="https://cdn-icons-png.flaticon.com/512/3031/3031674.png" alt="">   
                            <div class="ti-text">
                                    <h5> <?= $data['Worker_info']; ?> </h5>
                                    <span> <?= $data['Worker_role']; ?> </span>
                            </div>
                    </div>
                </div>
                <?php  } ?>

                <?php foreach ($team2 as $data) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item" >
                            <img src="https://cdn-icons-png.flaticon.com/512/3031/3031674.png" alt="">   
                            <div class="ti-text">
                                    <h5> <?= $data['Worker_info']; ?> </h5>
                                    <span> <?= $data['Worker_role']; ?> </span>
                            </div>
                    </div>
                </div>
                <?php  } ?>

                <?php foreach ($team3 as $data) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item" >
                            <img src="https://cdn-icons-png.flaticon.com/512/3031/3031674.png" alt="">   
                            <div class="ti-text">
                                    <h5> <?= $data['Worker_info']; ?> </h5>
                                    <span> <?= $data['Worker_role']; ?> </span>
                            </div>
                    </div>
                </div>
                <?php  } ?>
                
            </div>
        </div>
    </section>


    <!-- Team Section End -->

    <!-- Cta Section Begin -->
    <section class="cta-section spad set-bg" data-setbg="img/cta-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h2>Хотите продвинуть свой бренд?</h2>
                        <p>Предметная съемка или реклама вашего бизнеса?<br> Не имеет смысла! Многолетний опыт съемки таких брендов как "Nike","Adidas","Puma" заставит вас обратиться к нам! </p>
                        <a href="pricing.php" class="primary-btn">МЕЧТАЮ!!!!!!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->

    <!-- Testimoial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Отзывы</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="testimonial-item">
                        <div class="ti-author">
                            <div class="ta-pic">
                                <img src="img/testimonial/ta-1.jpg" alt="">
                            </div>
                            <div class="ta-text">
                                <h5>Иван Иванов</h5>
                                <span>@slavyanin_family</span>
                            </div>
                        </div>
                        <p>Лучшие в своем деле! Благодоря этой студии у меня стало целых 53 подспичика!!!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="testimonial-item">
                        <div class="ti-author">
                            <div class="ta-pic">
                                <img src="img/testimonial/ta-2.jpg" alt="">
                            </div>
                            <div class="ta-text">
                                <h5>Гарик Харламов</h5>
                                <span>@Buldog337</span>
                            </div>
                        </div>
                        <p>Я так и не понял что за предмет у меня у глаза, но фотографии довольно качественные.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="testimonial-item">
                        <div class="ti-author">
                            <div class="ta-pic">
                                <img src="img/testimonial/ta-3.jpg" alt="">
                            </div>
                            <div class="ta-text">
                                <h5>Екатерина Белорусая</h5>
                                <span>@Katyuha96</span>
                            </div>
                        </div>
                        <p>Данные снимки полностью раскрыли мою женственность, я и поверить не могла, что могу выглядеть так.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="testimonial-item">
                        <div class="ti-author">
                            <div class="ta-pic">
                                <img src="img/testimonial/ta-4.jpg" alt="">
                            </div>
                            <div class="ta-text">
                                <h5>Ума Турман</h5>
                                <span>@popstar</span>
                            </div>
                        </div>
                        <p>ЭТО.БЫЛО.ШИКАРНО.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

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