<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Cake Template" />
    <meta name="keywords" content="Cake, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Check Out PDF</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /*---------------------
        Checkout
        -----------------------*/
        .coupon__code {
        color: #444444;
        font-size: 14px;
        border-top: 2px solid #111111;
        background: #f5f5f5;
        padding: 23px 30px 18px;
        margin-bottom: 50px;
        }
        .coupon__code span {
        color: #f08632;
        }
        .coupon__code a {
        color: #444444;
        }

        .checkout__title {
        color: #111111;
        font-weight: 600;
        text-transform: uppercase;
        border-bottom: 1px solid #e1e1e1;
        padding-bottom: 25px;
        margin-bottom: 30px;
        }

        .checkout__pdf {
        justify-content: center;
        align-items: center;
        }

        .checkout__input {
        margin-bottom: 6px;
        }
        .checkout__input p {
        color: #444444;
        font-weight: 500;
        margin-bottom: 12px;
        }
        .checkout__input p span {
        color: #f08632;
        }
        .checkout__input input {
        height: 50px;
        width: 100%;
        border: 1px solid #e1e1e1;
        font-size: 14px;
        color: #666666;
        padding-left: 20px;
        margin-bottom: 20px;
        }
        .checkout__input input::-webkit-input-placeholder {
        color: #666666;
        }
        .checkout__input input::-moz-placeholder {
        color: #666666;
        }
        .checkout__input input:-ms-input-placeholder {
        color: #666666;
        }
        .checkout__input input::-ms-input-placeholder {
        color: #666666;
        }
        .checkout__input input::placeholder {
        color: #666666;
        }

        .checkout__input__checkbox label {
        font-size: 14px;
        color: #444444;
        position: relative;
        padding-left: 30px;
        font-weight: 500;
        cursor: pointer;
        margin-bottom: 16px;
        display: block;
        }
        .checkout__input__checkbox label input {
        position: absolute;
        visibility: hidden;
        }
        .checkout__input__checkbox label input:checked ~ .checkmark {
        border-color: #f08632;
        }
        .checkout__input__checkbox label input:checked ~ .checkmark:after {
        opacity: 1;
        }
        .checkout__input__checkbox label .checkmark {
        position: absolute;
        left: 0;
        top: 3px;
        height: 14px;
        width: 14px;
        border: 1.5px solid #888888;
        content: "";
        border-radius: 2px;
        }
        .checkout__input__checkbox label .checkmark:after {
        position: absolute;
        left: 1px;
        top: -3px;
        width: 14px;
        height: 7px;
        border: solid #f08632;
        border-width: 1.5px 1.5px 0px 0px;
        -webkit-transform: rotate(127deg);
        -ms-transform: rotate(127deg);
        transform: rotate(127deg);
        content: "";
        opacity: 0;
        }
        .checkout__input__checkbox p {
        color: #666666;
        font-size: 14px;
        line-height: 24px;
        margin-bottom: 22px;
        }

        .checkout__order {
        background: #fdf3ea;
        padding: 30px;
        }
        .checkout__order .order__title {
        color: #111111;
        font-weight: 600;
        text-transform: uppercase;
        border-bottom: 1px solid #d7d7d7;
        padding-bottom: 25px;
        margin-bottom: 30px;
        }
        .checkout__order p {
        color: #444444;
        font-size: 16px;
        }
        .checkout__order .site-btn {
        width: 100%;
        margin-top: 8px;
        letter-spacing: 0;
        }

        .checkout__order__products {
        font-size: 16px;
        color: #111111;
        overflow: hidden;
        margin-bottom: 18px;
        font-weight: 600;
        }
        .checkout__order__products span {
        float: right;
        }

        .checkout__total__products {
        margin-bottom: 20px;
        }
        .checkout__total__products li {
        font-size: 16px;
        color: #444444;
        list-style: none;
        line-height: 26px;
        overflow: hidden;
        margin-bottom: 15px;
        font-weight: 500;
        }
        .checkout__total__products li:last-child {
        margin-bottom: 0;
        }
        .checkout__total__products li samp {
        font-family: "Montserrat", sans-serif;
        font-size: 16px;
        font-weight: 600;
        }
        .checkout__total__products li span {
        color: #111111;
        float: right;
        font-weight: 600;
        }

        .checkout__total__info {
        border-bottom: 1px solid #d7d7d7;
        padding: 4px 0;
        margin-bottom: 26px;
        }

        .checkout__total__note {
        border-bottom: 1px solid #d7d7d7;
        padding: 4px 0;
        margin-bottom: 26px;
        }

        .checkout__total__note p {
        color: #111111;
        font-size: 12px;
        font-weight: 300;
        word-break: break-all;
        overflow: hidden;
        }

        .checkout__total__all {
        border-top: 1px solid #d7d7d7;
        border-bottom: 1px solid #d7d7d7;
        padding: 15px 0;
        margin-bottom: 26px;
        }
        .checkout__total__all li, .checkout__total__info li {
        list-style: none;
        font-size: 16px;
        color: #111111;
        line-height: 40px;
        font-weight: 600;
        overflow: hidden;
        }
        .checkout__total__all li span {
        color: #f08632;
        float: right;
        }
    </style>
  </head>

  <body>
    <!-- Checkout Section Begin -->
    <section class="checkout">
      <div class="container">
        <div class="checkout__form">
          <div class="row checkout__pdf">
            <div class="col-lg-4 col-md-6">
              <div class="checkout__order">
                <h6 class="order__title">Your order</h6>
                <ul class="checkout__total__info">
                  <div class="checkout__order__products">Information</div>
                  <li><samp>Full Name:</samp> {{strtolower($fist_name)}} {{ strtolower($last_name) }}</li>
                  <li><samp>Address:</samp> {{ strtolower($address) }},{{ strtolower($city) }}</li>
                  <li><samp>Phone:</samp> {{ $phone }}</li>
                  <li><samp>Email:</samp> {{$email}}</li>
                </ul>
                <div class="checkout__order__products">
                  Product <span>Total</span>
                </div>
                <ul class="checkout__total__products">
                    @foreach ($items as $key => $value )
                        <li><samp>{{$key + 1 }}.</samp> {{ $value['name'] }} <span>$ {{$value['price']}}</span></li>
                    @endforeach 
                  <!-- <li>
                    <samp>01.</samp> Vanilla salted caramel <span>$ 300.0</span>
                  </li>
                  <li>
                    <samp>02.</samp> German chocolate <span>$ 170.0</span>
                  </li>
                  <li><samp>03.</samp> Sweet autumn <span>$ 170.0</span></li>
                  <li>
                    <samp>04.</samp> Cluten free mini dozen <span>$ 110.0</span>
                  </li> -->
                </ul>
                <ul class="checkout__total__all">
                    <li>Total <span>${{ $total }}</span></li>
                </ul>
                <div class="checkout__total__note">
                    <div class="checkout__order__products">Note</div>
                    <p>{{ strtolower($oder_note) }}</p>
                </div>
                <div class="checkout__input__checkbox">
                  <label for="payment">
                    Check Payment
                    <input type="checkbox" id="payment" />
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="checkout__input__checkbox">
                  <label for="paypal">
                    Paypal
                    <input type="checkbox" id="paypal" />
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Checkout Section End -->

  </body>
</html>
