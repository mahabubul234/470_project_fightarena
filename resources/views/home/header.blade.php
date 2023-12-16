<!-- <header class="header-section"> -->
<header class="header-section header">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <!-- <img src="img/logo.png" alt=""> -->
                    <h2 style="color: ;">Fight <span style="color: #f34e3a;">Arena</span></h2>
                    
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="active"><a href="./">Home</a></li>
                        <li><a href="./aboutus">About</a></li>
                        <li><a href="./product1">Product</a></li>
                        <li><a href="./scheduletab">Schedule</a></li>
                        <!-- <li><a href="./gallery.html">Portfolio</a></li>
                        <li><a href="./blog.html">Blog</a>

                        
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> -->
                        <li><a href="./contacts">Contacts</a></li>

                        @if (Route::has('login'))


                        @auth

                        <li>
                            <!-- <a class="btn btn-primary" href="{{ route('login') }}">Logout</a>
                             -->

                             <x-app-layout>
    
                             </x-app-layout>

                        </li>
                        


                        @else

                        <li><a class="btn btn-primary" style="color: #f34e3a;" href="{{ route('login') }}">Login</a></li>

                        @endauth

                        @endif

                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="ti-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
</header>