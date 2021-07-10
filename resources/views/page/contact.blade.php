@extends('master_page')

@section('title')
Contact
@endsection

@section('content')
<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="map">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="map__inner">
                            <h6>Trường Cao Đẳng Lý Tự Trọng</h6>
                            <ul>
                                <li>390 Hoàng Văn Thụ, Phường 4, Tân Bình, Thành phố Hồ Chí Minh</li>
                                <li>LTT@support.com</li>
                                <li>+1 800-786-1000</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map__iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1782370808596!2d106.65379741487709!3d10.79765706175386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529342889be43%3A0xeba6d712468c7105!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEzDvSBU4buxIFRy4buNbmcgVFAuIEjhu5MgQ2jDrSBNaW5o!5e0!3m2!1svi!2s!4v1625888328632!5m2!1svi!2s" height=" 300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="contact__address">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__address__item">
                        <h6>Trường Cao Đẳng Lý Tự Trọng</h6>
                        <ul>
                            <li>
                                <span class="icon_pin_alt"></span>
                                <p>390 Hoàng Văn Thụ, Phường 4, Tân Bình, Thành phố Hồ Chí Minh</p>
                            </li>
                            <li><span class="icon_headphones"></span>
                                <p>+1 800-786-1000</p>
                            </li>
                            <li><span class="icon_mail_alt"></span>
                                <p>LTT@support.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__address__item">
                        <h6>Trường Cao Đẳng Lý Tự Trọng</h6>
                        <ul>
                            <li>
                                <span class="icon_pin_alt"></span>
                                <p>390 Hoàng Văn Thụ, Phường 4, Tân Bình, Thành phố Hồ Chí Minh</p>
                            </li>
                            <li><span class="icon_headphones"></span>
                                <p>+1 213-612-3000</p>
                            </li>
                            <li><span class="icon_mail_alt"></span>
                                <p>LTT@support.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__address__item">
                        <h6>Trường Cao Đẳng Lý Tự Trọng</h6>
                        <ul>
                            <li>
                                <span class="icon_pin_alt"></span>
                                <p>390 Hoàng Văn Thụ, Phường 4, Tân Bình, Thành phố Hồ Chí Minh</p>
                            </li>
                            <li><span class="icon_headphones"></span>
                                <p>+1 800-786-1000</p>
                            </li>
                            <li><span class="icon_mail_alt"></span>
                                <p>LTT@support.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="contact__text">
                    <h3>Contact With us</h3>
                    <ul>
                        <li>Representatives or Advisors are available:</li>
                        <li>Mon-Fri: 5:00am to 9:00pm</li>
                        <li>Sat-Sun: 6:00am to 9:00pm</li>
                    </ul>
                    <img src="img/cake-piece.png" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact__form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Send Us</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
