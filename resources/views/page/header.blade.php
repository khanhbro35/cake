<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__cart">
        <div class="offcanvas__cart__links">
            <a href="#" class="search-switch"><img src=" {{ asset('img/icon/search.png')}}" alt=""></a>
            <a href="#"><img src=" {{asset('img/icon/heart.png')}}" alt=""></a>
        </div>
        <div class="offcanvas__cart__item">
            <a href="#"><img src="{{ asset('img/icon/cart.png')}}" alt=""> <span>0</span></a>
            <div class="cart__price">Cart: <span>$0.00</span></div>
        </div>
    </div>
    <div class="offcanvas__logo">
        <a href="./index.html"><img src=" {{ asset('img/logo.png')}}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__option">
        <ul>
            <li>USD <span class="arrow_carrot-down"></span>
                <ul>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </li>
            <li>ENG <span class="arrow_carrot-down"></span>
                <ul>
                    <li>Spanish</li>
                    <li>ENG</li>
                </ul>
            </li>
            <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
        </ul>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__top__inner">
                        <div class="header__logo">
                            <a href="{{route('home')}}"><img src="{{ asset('img/logo.png')}}" alt=""></a>
                        </div>
                        <div class="header__top__right">
                            <div class="header__top__right__links">
                                <a href="#" class="search-switch"><img src="{{asset('img/icon/search.png')}}" alt=""></a>
                                <a href="#"><img src=" {{ asset('img/icon/heart.png')}}" alt=""></a>
                            </div>
                            <div class="header__top__right__cart">
                                <a href="{{route('shop_cart')}}"><img src=" {{ asset('img/icon/cart.png')}}" alt=""> <span>0</span></a>
                                <div class="cart__price">Cart: <span>${{$total}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="{{isset($active) && $active == 'home' ? 'active': ''}}"><a href="/">Home</a></li>
                        <li class="{{isset($active) && $active == 'about' ? 'active' : ''}}"><a href="{{route('about')}}">About</a></li>
                        <li class="{{isset($active) && $active == 'shop' ? 'active' : ''}}"><a href="{{route('shop')}}">Shop</a></li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li class="{{isset($active) && $active == 'contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->
