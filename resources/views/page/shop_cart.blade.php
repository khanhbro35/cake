@extends('master_page')

@section('title')
Shop Cart
@endsection

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Shopping cart</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="./index.html">Home</a>
                    <span>Shopping cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="shop_main">
                            @foreach ($data as $d)
                            <tr data-rowid="{{$d['rowid']}}">
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="{{asset('img/shop/'.$d['img'])}}" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{$d['name']}}</h6>
                                        <h5>$ {{$d['price']}}</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="{{$d['qty']}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ {{$d['price'] * $d['qty']}}</td>
                                <td class="cart__close"><span class="icon_close"></span></td>
                            </tr>
                            @endforeach
                            <!-- <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/shop/cart/cart-2.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Diagonal Textured Cap</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 32.50</td>
                                <td class="cart__close"><span class="icon_close"></span></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/shop/cart/cart-3.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 47.00</td>
                                <td class="cart__close"><span class="icon_close"></span></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/shop/cart/cart-4.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 30.00</td>
                                <td class="cart__close"><span class="icon_close"></span></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{route('shop')}}">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a><i class="fa fa-spinner"></i> Update cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span>$ 0</span></li>
                        <li>Total <span>$ {{$total}}</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection

@section('script')
    <script src="{{ asset('js/app.js')}}"></script>
@endsection
