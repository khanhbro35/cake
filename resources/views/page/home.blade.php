@extends('master_page')

@section('title')
Home
@endsection

@section('content')
<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <h2>Making your life sweeter one bite at a time!</h2>
                            <a href="#" class="primary-btn">Our cakes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <h2>Making your life sweeter one bite at a time!</h2>
                            <a href="#" class="primary-btn">Our cakes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>About Cake shop</span>
                        <h2>Cakes and bakes from the house of Queens!</h2>
                    </div>
                    <p>The "Cake Shop" is a Jordanian Brand that started as a small family business. The owners are
                        Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a staff of 80 employees.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about__bar">
                    <div class="about__bar__item">
                        <p>Cake design</p>
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="95"></span>
                        </div>
                    </div>
                    <div class="about__bar__item">
                        <p>Cake Class</p>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                    <div class="about__bar__item">
                        <p>Cake Recipes</p>
                        <div id="bar3" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="90"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Categories Section Begin -->
<div class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="categories__item ạctived" data-for="1">
                    <div class="categories__item__icon">
                        <span class="flaticon-029-cupcake-3 icon ic_actived"></span>
                        <h5 class="ic_name ic_actived">Cupcake</h5>
                    </div>
                </div>
                <div class="categories__item" data-for="2">
                    <div class="categories__item__icon">
                        <span class="flaticon-034-chocolate-roll icon"></span>
                        <h5 class="ic_name ">Butter</h5>
                    </div>
                </div>
                <div class="categories__item" data-for="3">
                    <div class="categories__item__icon">
                        <span class="flaticon-005-pancake icon"></span>
                        <h5 class="ic_name">Red Velvet</h5>
                    </div>
                </div>
                <div class="categories__item" data-for="4">
                    <div class="categories__item__icon">
                        <span class="flaticon-030-cupcake-2 icon"></span>
                        <h5 class="ic_name">Biscuit</h5>
                    </div>
                </div>
                <div class="categories__item" data-for="5">
                    <div class="categories__item__icon">
                        <span class="flaticon-006-macarons icon"></span>
                        <h5 class="ic_name ">Donut</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad tab_actived" data-tab="1">
    <div class="container">
        <div class="row">
            @foreach ($cupcake as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{asset('img/shop/'.$item->img)}}">
                        <div class="product__label">
                            <span>{{ucfirst($item->type_name)}}</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <div class="product__item__price">${{$item->price}}</div>
                        <div class="cart_add">
                            <a href="{{asset('/shopcart/addcart/'.$item->code_cake)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- ---------- --}}
<section class="product spad" data-tab="2">
    <div class="container">
        <div class="row">
            @foreach ($butter as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{asset('img/shop/'.$item->img)}}">
                        <div class="product__label">
                            <span>{{ucfirst($item->type_name)}}</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <div class="product__item__price">${{$item->price}}</div>
                        <div class="cart_add">
                            <a href="{{asset('/shopcart/addcart/'.$item->code_cake)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- ---------- --}}
<section class="product spad" data-tab="3">
    <div class="container">
        <div class="row">
            @foreach ($redvelet as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{asset('img/shop/'.$item->img)}}">
                        <div class="product__label">
                            <span>{{ucfirst($item->type_name)}}</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <div class="product__item__price">${{$item->price}}</div>
                        <div class="cart_add">
                            <a href="{{asset('/shopcart/addcart/'.$item->code_cake)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- ---------- --}}
<section class="product spad" data-tab="4">
    <div class="container">
        <div class="row">
            @foreach ($biscuit as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{asset('img/shop/'.$item->img)}}">
                        <div class="product__label">
                            <span>{{ucfirst($item->type_name)}}</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <div class="product__item__price">${{$item->price}}</div>
                        <div class="cart_add">
                            <a href="{{asset('/shopcart/addcart/'.$item->code_cake)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- ---------- --}}
<section class="product spad" data-tab="5">
    <div class="container">
        <div class="row">
            @foreach ($donut as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{asset('img/shop/'.$item->img)}}">
                        <div class="product__label">
                            <span>{{ucfirst($item->type_name)}}</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <div class="product__item__price">${{$item->price}}</div>
                        <div class="cart_add">
                            <a href="{{asset('/shopcart/addcart/'.$item->code_cake)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->
@endsection
