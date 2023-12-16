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
                        <li><a href="./combatshop">Store</a></li>
                        
                        <li><a href="./scheduletab">Schedule</a></li>
                        <li><a href="./fighter">Fighters</a></li>
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

    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.magnific-popup.min.js"></script>
    <script src="home/js/mixitup.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/main.js"></script>

</body>

</html>