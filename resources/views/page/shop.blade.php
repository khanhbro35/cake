@extends('master_page')

@section('title')
Shop
@endsection

@section('content')

<section class="shop spad">
    <div class="container">
        <div class="shop__option">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="shop__option__search">
                        <form action="#">
                            <select>
                                <option value="_">All</option>
                                @foreach($type as $t)
                                    <option value="{{$t['code_type']}}">{{ucfirst($t['type_name'])}}</option>
                                @endforeach
                                <!-- <option value="">Red Velvet</option>
                                <option value="">Cup Cake</option>
                                <option value="">Biscuit</option> -->
                            </select>
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="cake_product">
            @foreach ($cake as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{asset('img/shop/'.$item->img)}}">
                        <div class="product__label">
                            <span>{{ucfirst($item->type_name)}}</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{asset('/shop_detail'.'/'.$item->code_cake)}}">{{$item->name}}</a></h6>
                        <div class="product__item__price">${{$item->price}}</div>
                        <div class="cart_add">
                            <a href="{{asset('/shopcart/addcart/'.$item->code_cake)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$cake->links()}}
    </div>
</section>

@endsection


@section('script')
<script src="{{ asset('js/app.js')}}"></script>
@endsection
