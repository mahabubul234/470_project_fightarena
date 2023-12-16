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

    <style type="text/css">
        .centre{
            margin:auto;
            width:50%;
            border:2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size{
            
            text-align:center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size
        {
            width: 250px;
            height: 250px;
        }

        .th_color
        {
            background: #f34e3a;
        }

        .th_deg
        {
            padding:30px;
        }
     </style>
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
            <div class="main-panel">
             <div class="content-wrapper">
             <h2 class="font_size">Fight Arena Team</h2>

                <table class="centre">
                    <tr class="th_color">
                        <th class="th_deg">Name</th>
                        <th class="th_deg">Age</th>
                        <th class="th_deg">Weight Category</th>
                        <th class="th_deg">Fight Record</th>
                        <th class="th_deg">Speciality</th>
                        <th class="th_deg">Fighter Image</th>
                       
                    </tr>

                    @foreach($fighter as $fighter)

                    <tr>
                        <td>{{$fighter->name}}</td>
                        <td>{{$fighter->age}}</td>
                        <td>{{$fighter->weight_category}}</td>
                        <td>{{$fighter->fight_record}}</td>
                        <td>{{$fighter->speciality}}</td>
                        <td>
                            <img class="img_size" src="/fighter/{{$fighter->image}}">
                        </td>
                      
                    </tr>

                    @endforeach
                </table>
               </div>
            </div>

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