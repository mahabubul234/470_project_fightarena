<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PONIGYM Template">
    <meta name="keywords" content="PONIGYM, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fight Arena</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <!-- <img src="img/logo-normal.png" alt=""> -->
                    <h2 style="color: black;">Fight <span style="color: #f34e3a;">Arena</span></h2>
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li><a href="./aboutus">About</a></li>
                        <li><a href="./product">Product</a></li>
                        <li><a href="./scheduletab">Schedule</a></li>
                        <!-- <li><a href="./gallery.html">Portfolio</a></li>
                        <li><a href="./blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> -->
                        <li class="active"><a href="./contacts">Contacts</a></li>
                         @if (Route::has('login'))


                        @auth

                        <li>
                            <!-- <a class="btn btn-primary" href="{{ route('login') }}">Logout</a>
                             -->

                             <x-app-layout>
    
                             </x-app-layout>

                        </li>
                        


                        @else

                        <li><a class="btn btn-primary" color: #f34e3a href="{{ route('login') }}">Login</a></li>

                        @endauth

                        @endif
                    </ul>
                </nav>
                <div class="nav-right">
                    <i class="ti-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Map Section Begin -->
    <!-- <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33245.297803635964!2d-73.76987401620775!3d40.704774398815005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1575866843291!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe>
        <i class="fa fa-map-marker"></i>
    </div> -->
    <!-- Map Section End -->
    <section class="breadcrumb-section set-bg" data-setbg="img/about-breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-text">
                        <h2>Contact Us</h2>
                        <div class="site-breadcrumb">
                            <a href="./home.html" class="sb-item">Home</a>
                            <span class="sb-item">Contacts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <i class="ti-location-pin"></i>
                        <p>Iris Watson. 10, P.O. Box 283 Newyork</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <i class="ti-email"></i>
                        <ul>
                            <li><span>Phone:</span> 12-456-791</li>
                            <li><span>Mail:</span> colorlib@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <i class="ti-timer"></i>
                        <ul>
                            <li><span>Week Days:</span> 10:00 – 22:00</li>
                            <li><span>Sunday:</span> Close</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="section-title">
                    <h2>Leave message</h2>
                    <p>Our staff will call back later and answer your questions.</p>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Your name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Your Email">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="Your message"></textarea>
                            <button type="button">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="register normal-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="footer-widget">
                            <ul>
                                <li class="active">Privacy Policy</li>
                                <li>Terms Of Service</li>
                                <li>Careers</li>
                            </ul>
                        </div>
                        <div class="footer-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
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
    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.magnific-popup.min.js"></script>
    <script src="home/js/mixitup.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/main.js"></script>
</body>

</html>