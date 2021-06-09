@extends('master_page');

@section('title')
cake name
@endsection

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <a href="/shop">Shop</a>
                        <span>{{$cakeDetail[0]->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__img">
                        <div class="product__details__big__img">
                            <img class="big_img" src=" {{ asset('img/shop/'.$cakeDetail[0]->img)}}" alt="">
                        </div>
                        <div class="product__details__thumb">
                            <div class="pt__item active">
                                <img data-imgbigurl="{{ asset('img/shop/details/product-big-2.jpg')}}"
                                src="{{ asset('img/shop/details/product-big-2.jpg')}}" alt="">
                            </div>
                            <div class="pt__item">
                                <img data-imgbigurl="{{ asset('img/shop/'.$cakeDetail[0]->img)}}"
                                src=" {{ asset('img/shop/'.$cakeDetail[0]->img)}}" alt="">
                            </div>
                            <div class="pt__item">
                                <img data-imgbigurl="{{asset('img/shop/details/product-big-4.jpg')}}"
                                src=" {{ asset('img/shop/details/product-big-4.jpg')}}" alt="">
                            </div>
                            <div class="pt__item">
                                <img data-imgbigurl="{{ asset('img/shop/details/product-big-3.jpg')}}"
                                src=" {{ asset('img/shop/details/product-big-3.jpg')}}" alt="">
                            </div>
                            <div class="pt__item">
                                <img data-imgbigurl="{{ asset('img/shop/details/product-big-5.jpg')}}"
                                src=" {{ asset('img/shop/details/product-big-5.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text" data-id="{{$cakeDetail[0]->code_cake}}">
                        <div class="product__label">{{ucfirst($cakeDetail[0]->type_name)}}</div>
                        <h4>{{$cakeDetail[0]->name}}</h4>
                        <h5>$ {{$cakeDetail[0]->price}}</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                        <ul>
                            <li>Category: <span>{{ucfirst($cakeDetail[0]->type_name)}}</span></li>
                        </ul>
                        <div class="product__details__option">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" disabled>
                                </div>
                            </div>
                            <a class="primary-btn">Add to cart</a>
                            <a href="#" class="heart__btn"><span class="icon_heart_alt"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__details__tab">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Previews(1)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p>This delectable Strawberry Pie is an extraordinary treat filled with sweet and
                                        tasty chunks of delicious strawberries. Made with the freshest ingredients, one
                                        bite will send you to summertime. Each gift arrives in an elegant gift box and
                                    arrives with a greeting card of your choice that you can personalize online!</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p>This delectable Strawberry Pie is an extraordinary treat filled with sweet and
                                        tasty chunks of delicious strawberries. Made with the freshest ingredients, one
                                        bite will send you to summertime. Each gift arrives in an elegant gift box and
                                        arrives with a greeting card of your choice that you can personalize online!2
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p>This delectable Strawberry Pie is an extraordinary treat filled with sweet and
                                        tasty chunks of delicious strawberries. Made with the freshest ingredients, one
                                        bite will send you to summertime. Each gift arrives in an elegant gift box and
                                        arrives with a greeting card of your choice that you can personalize online!3
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

     <!-- Related Products Section Begin -->
     <section class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related__products__slider owl-carousel">
                    @foreach ($cakes as $item)
                        <div class="col-lg-3">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg=" {{asset('img/shop/'.$item->img)}}">
                                    <div class="product__label">
                                        <span>{{$item->type_name}}</span>
                                    </div>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="{{asset('/shop'.'/'.$item->code_cake)}}">{{$item->name}}</a></h6>
                                    <div class="product__item__price">${{$item->price}}</div>
                                    <div class="cart_add">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Related Products Section End -->
@endsection

@section('script')
    <script src="{{asset('js/details_app.js')}}"></script>
@endsection
