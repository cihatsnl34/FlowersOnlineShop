<header class="fl-header">

 <!-- Header Top Start -->
 @auth('user')
 <div class="header-top-area ">
    <div class="container container-topheader">
        <div class="row">
            <p style="text-align:center;">Hoş Geldiniz {{ session('username') }}</p>
            </div>
        </div>
    </div>
</div>
@endauth
<!-- Header Top End -->
<!-- haeader bottom Start -->
<div class="haeader-bottom-area nav-bg" id="Head">
    <div class="container w-100">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-4 col-5">
                <div class="logo-area">
                    <a href="index.html"><img class="main-logo" src="../Content/assets/images/logo/logo.svg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <div class="main-menu-area text-center">

                    <nav class="main-navigation">
                        <ul>
                            <li class="">
                                <a href="{{route('index')}}">ANASAYFA</a>

                            </li>
                            <li class="">
                                <a href="{{route('flower')}}">CICEKLER</a>

                                
                            </li>
                            <li class="">
                                <a href="{{route('iletisim')}}">ILETISIM</a>

                            </li>
                            @auth('user')
                            <li style="">
                                <a href="{{route('user.logout')}}">Çıkış</a>

                            </li>
                            @endauth
                        </ul>
                    </nav>



                </div>
            </div>

            <div class="col-lg-2 col-md-8 col-7">
                <div class="right-blok-box d-flex">
                    <div class="search-wrap">
                        <a href="index.html#" class="trigger-search"><i class="ion-ios-search-strong"></i></a>
                    </div>

                    <div class="user-wrap">

                        <a href="../product/wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                    </div>

                    <div class="shopping-cart-wrap">
                        
                        @auth('user')
                        
                        <a href="{{route('user.sepetim')}}">
                            
                            <img src="{{ asset('Front/images/shopping-cart.png')}}" width="23px" /> <span id="cart-total">{{session('sepet')}}</span>
                        </a>
                        
                        @else
                        <a href="{{route('user.login')}}">Giriş Yap</a>
                        @endauth
                        
                    </div>
                    <div class="login-icon ">

                        <a href="../account/Login_Register@id=1.html"><i class="ion-ios-contact"></i></a>

                    </div>
                    <div class="mobile-menu-btn d-block d-lg-none">
                        <div class="off-canvas-btn">
                            <i class="ion-android-menu">
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- haeader bottom End -->
<!-- main-search start -->
<div class="main-search-active">
    <div class="sidebar-search-icon">
        <button class="search-close"><span class="ion-android-close"></span></button>
    </div>
    <div class="sidebar-search-input">
        <form>
            <div class="form-search">
                <input id="search" class="input-text" value="" placeholder="Search by flower name..." type="search">
                <button id="search-btn" onclick="Search(); return false;" class="search-btn" type="button">
                    <i class="ion-ios-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- main-search start -->
<!-- off-canvas menu start -->
<aside class="off-canvas-wrapper">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner-content">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="index.html#menu">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="index.html#other">Other</a>
            </li>
        </ul>
        <div class="btn-close-off-canvas">
            <i class="ion-android-close"></i>
        </div>
        <div class="tab-content">
            <div id="menu" class="tab-pane active">
                <div class="off-canvas-inner">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->

                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="../shop/shop@CategoryIDs=1&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">All flowers</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="../shop/shop@CategoryIDs=2&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">All Occasion</a>

                                    <ul class="dropdown">
                                        <li><a href="../shop/shop@SubCategoryIDs=5&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Get well soon</a></li>
                                        <li><a href="../shop/shop@SubCategoryIDs=12&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Anniversary</a></li>
                                        <li><a href="../shop/shop@SubCategoryIDs=13&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Congratulations</a></li>
                                        <li><a href="../shop/shop@SubCategoryIDs=4&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Mother&#39;s Day</a></li>
                                        <li><a href="../shop/shop@SubCategoryIDs=3&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Valentine&#39;s day</a></li>
                                        <li><a href="../shop/shop@SubCategoryIDs=15&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">New Year</a></li>
                                        <li><a href="../shop/shop@SubCategoryIDs=7&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Father&#39;s Day</a></li>
                                        <li><a href="../shop/shop@SubCategoryIDs=19&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Hand Tied Bouquet</a></li>
                                        <li><a href="../shop/shop@SubCategoryIDs=27&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Box Of Love</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="../shop/shop@CategoryIDs=3&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Basket&#39;s</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="../shop/shop@CategoryIDs=4&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Cake&#39;s</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="../shop/shop@CategoryIDs=10&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Birthday&#39;s</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="../shop/shop@CategoryIDs=18&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Deals </a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="../shop/shop@CategoryIDs=19&amp;MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Jewelry </a>

                                </li>
                            </ul>
                        </nav>

                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area pt-55">
                        <div class="off-canvas-contact-widget">
                            <ul>
                                <li>
                                    <a href="index.html#">03002920640 </a>
                                </li>
                                <li>
                                    <a href="index.html#">krachiflora@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="off-canvas-social-widget">
                            <a href="index.html#"><i class="ion-social-facebook"></i></a>
                            <a href="index.html#"><i class="ion-social-instagram-outline"></i></a>
                        </div>

                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
            <div id="other" class="tab-pane">
                <div class="off-canvas-inner">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="about.html">About Us</a></li>

                                <li><a href="../shop/shop@MinPrice=RS0&amp;MaxPrice=RS50000&amp;SortID=0.html">Shop</a></li>
                                <li><a href="../account/login_register@id=1.html">Login</a></li>
                                <li><a href="Policy.html">Policy</a></li>
                                <li><i class="fa fa-icon-globe"></i><a onclick="_lang(); return false;" id="_lang">عربى</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->

                </div>
            </div>
        </div>
    </div>
</aside>
<!-- off-canvas menu end -->
</header>