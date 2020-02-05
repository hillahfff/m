<?php
include('assets/include/directory.php');
    $current_page = basename($_SERVER['PHP_SELF']);
    $pageTitle = 'Anin Sofa | Home';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('assets/include/head-tags.php') ?>
  </head>
  <body>

	  <?php include('assets/include/global-nav.php') ?>
    <!-- END nav -->

    <!-- inner page header -->
    <div class="inner-banner">
        <div class="w3l-header inner-w3l-header" id="home">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark pl-0 pr-0">
                    <a class="navbar-brand m-0 text-primary" href="index.php"><span class="fa fa-gamepad"></span>
                        Eccentric
                    </a>
                    <!-- <span class="logo">portfolio</span>-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mr-lg-4">
                                <a class="nav-link pl-0 pr-0 font-weighht-bold" href="index.php">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-lg-4 active">
                                <a class="nav-link pl-0 pr-0 font-weight-bold" href="about.php">About</a>
                            </li>
                            <li class="nav-item mr-lg-4">
                                <a class="nav-link pl-0 pr-0 font-weight-bold" href="services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0 pr-0 font-weight-bold" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- //inner page header -->

    <!-- about me -->
    <div class="w3l-about py-5">
        <div class="container py-lg-3">
            <div class="row about-content mb-lg-5">
                <div class="col-lg-6 pr-md-5">
                    <div class="image-block">
                        <img src="assets/images/me.png" class="img-fluid myphoto" alt="my photo" />
                        <img src="assets/images/cross.png" class="img-fluid pos" alt="dots" />
                    </div>
                </div>
                <div class="col-lg-6 info pl-lg-5 mt-lg-0 mt-5 pt-lg-0 pt-3 align-center">
                    <h4 class="">I’m Alexander Lihiliho</h4>
                    <p class="mt-md-4 mt-3 mb-0"> A Web Developer based in London.
                        I specialize in Branding and Strategy, and am passionate about creating Awesome Portfolio work.
                    </p>
                    <img src="assets/images/signature.png" class="img-fluid signature" width="300px" alt="my photo" />
                    <p class="m-0 mb-2">Alexander Lihiliho</p>
                    <h6>20/10/2000.</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- //about me -->

    <!-- stats -->
    <section class="w3l-stats py-lg-5 py-4" id="stats">
        <div class="gallery-inner container py-md-5 py-4">
            <div class="row stats-con text-white">
                <div class="col-sm-3 col-6 stats_info counter_grid">
                    <span class="fa fa-lightbulb-o"></span>
                    <p class="counter">645</p>
                    <h4>Projects Done</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid1">
                    <span class="fa fa-heart"></span>
                    <p class="counter">563</p>
                    <h4>Satisfied Clients</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid mt-sm-0 mt-5">
                    <span class="fa fa-magic"></span>
                    <p class="counter">1145</p>
                    <h4>Awards</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid2 mt-sm-0 mt-5">
                    <span class="fa fa-smile-o"></span>
                    <p class="counter">1045</p>
                    <h4>Happy Clients</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- about my profile -->
    <section class="w3l-about-bottom py-5" id="about">
        <div class="container py-lg-5 py-md-3">
            <div class="row middle-grids">
                <div class="col-lg-7 advantage-grid-info">
                    <div class="advantage_left">
                        <h4>About my profile </h4>
                        <p class="">Accomplished web designer & front-end developer with extensive experience
                            building WordPress driven websites, HTML5, CSS3 and various web scripting technologies,
                            web standards and project management. Provide a diverse range of services including custom
                            theme/application/plugin development, SEO/SEM, and branding to an array of clients from a
                            variety of industries. Enthusiastic web professional motivated by challenging projects and
                            deadlines.</p>
                        <p class="mb-0">Nulla pellentesque mi non laoreet eleifend. Integer sed porttitor mollisar
                            lorem, at molestie arcust pulvinar ut. Proina fermentum est. Cras mist ipsum, consectetur
                            ipsum in, egestas tellus ipsu vestibulum tellus accumsan nec tristique justo.
                        </p>
                        <a href="#resume" class="primary-btn-style btn-primary btn mt-lg-5 mt-4">Download CV</a>
                        <a href="#contact" class="secondary-btn-style btn-secondary btn mt-lg-5 mt-4 ml-1">Hire
                            Me</a>
                    </div>
                </div>
                <div class="col-lg-5 advantage-grid-info1">
                    <div class="advantage_left1 mt-lg-0 mt-5">
                        <img src="assets/images/about.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about my profile -->

    <!-- skills and hobbies -->
    <div class="w3l-skills py-5" id="skills">
        <div class="container py-lg-5 py-md-3">
            <div class="modal-spa">
                <div class="row skills">
                    <div class="col-lg-6 bar-grids bargrids-left">
                        <h4> My Skills </h4>
                        <h6>web design <span> 80% </span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active bg-primary" style="width: 80%">
                            </div>
                        </div>
                        <h6>ui design & developer <span> 70% </span></h6>
                        <div class="progress  w3-bar-grids">
                            <div class="progress-bar progress-bar-striped active" style="width: 70%">
                            </div>
                        </div>
                        <h6>Javascript<span>90% </span></h6>
                        <div class="progress  w3-bar-grids">
                            <div class="progress-bar progress-bar-striped active" style="width: 90%">
                            </div>
                        </div>
                        <h6>Photoshop <span> 75% </span></h6>
                        <div class="progress  w3-bar-grids prgs-w3-last">
                            <div class="progress-bar progress-bar-striped active" style="width: 75%">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bar-grids w3-bar-grids mt-lg-0 mt-5">
                        <h4> My Hobbies </h4>
                        <div class="row pl-lg-5 pr-lg-5">
                            <div class="col-4 hobbies-grid1 grid1">
                                <span class="fa fa-codepen bg-secondary"></span>
                                <h5>Coding</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid2">
                                <span class="fa fa-hourglass bg-secondary"></span>
                                <h5>Research</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid3">
                                <span class="fa fa-camera bg-secondary"></span>
                                <h5>Photography</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid4">
                                <span class="fa fa-plane bg-secondary"></span>
                                <h5>Travelling</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid5">
                                <span class="fa fa-headphones bg-secondary"></span>
                                <h5>Music</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid6">
                                <span class="fa fa-tint bg-secondary"></span>
                                <h5>Thinking</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //skills and hobbies -->

    <!-- my featured projects -->
    <section class="w3l-block py-5">
        <div class="container py-lg-3">
            <h3 class="title mb-md-5 mb-4">Featured projects </h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 content" data-id="id-1" data-type="cat-item-1">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="assets/images/alexandra.jpg" class="img-fluid w3layouts agileits"
                                alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 content mt-sm-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="assets/images/bench.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 content mt-md-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="assets/images/alexandra.jpg" class="img-fluid w3layouts agileits"
                                alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="content text-center mt-sm-5 mt-4">
                    <a href="#portfolio" class="btn btn-primary primary-btn-style">View more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //my featured projects -->

    <!-- Footer -->
    <section class="w3l-footers-1">
        <div class="footer bg-secondary">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-lg-8 footer-left">
                            <p class="m-0">© Copyright 2020 Eccentric Portfolio. Design by <a
                                    href="https://w3layouts.com">W3layouts</a></p>
                        </div>
                        <div class="col-lg-4 footer-right text-lg-right text-center mt-lg-0 mt-3">
                            <ul class="social m-0 p-0">
                                <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#instagram"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Footer -->

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

    <!-- common jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->

    <!--  bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--  //bootstrap js -->

</body>

<?php include('assets/include/global-footer.php') ?>
<?php include('assets/include/global-scripts.php') ?>

</html>
