<!-- Begin Header Top Area -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- Begin Header Top Left Area -->
            <div class="col-lg-3 col-md-4">
                <div class="header-top-left">
                    <ul class="phone-wrap">
                        @foreach ($arrayAdmin as $admin)
                        <li><span>Telephone: </span><a href="#">{{$admin->sdt}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Header Top Left Area End Here -->
            <!-- Begin Header Top Right Area -->
            <div class="col-lg-9 col-md-8">
                <div class="header-top-right">
                    <ul class="ht-menu">
                        <!-- Begin Setting Area -->
                        <li>
                            <div class="ht-setting-trigger"><span>Setting</span></div>
                            <div class="setting ht-setting">
                                <ul class="ht-setting-list">
                                    <li><a href="{{route('khachHangSignInOrSignUp')}}">My Account</a></li>
                                    @if (Session::has('maKhachHang'))
                                        <li><a href="{{route('checkOut')}}">Checkout</a></li>
                                        <li><a href="{{route('khachHangSignOut')}}">Sign Out</a></li>
                                    @else
                                        <li><a href="{{route('khachHangSignInOrSignUp')}}">Sign In</a></li>
                                    @endif

                                </ul>
                            </div>
                        </li>
                        <!-- Setting Area End Here -->
                        <!-- Begin Currency Area -->
                        <li>
                            <span class="currency-selector-wrapper">Currency :</span>
                            <div><span>EUR $</span></div>
{{--                            <div class="currency ht-currency">--}}
{{--                                <ul class="ht-setting-list">--}}
{{--                                    <li><a href="#">EUR €</a></li>--}}
{{--                                    <li class="active"><a href="#">GBP £</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </li>
                        <!-- Currency Area End Here -->
                        <!-- Begin Language Area -->
                        <li>
                            <span class="language-selector-wrapper">Language :</span>
                            <div><span>English</span></div>
                        </li>
                        <!-- Language Area End Here -->
                    </ul>
                </div>
            </div>
            <!-- Header Top Right Area End Here -->
        </div>
    </div>
</div>
<!-- Header Top Area End Here -->
<!-- Begin Header Middle Area -->
<div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
    <div class="container">
        <div class="row">
            <!-- Begin Header Logo Area -->
            <div class="col-lg-2">
                <div class="logo pb-sm-30 pb-xs-30">
                    <a href="{{route('home')}}">
                        <img src="{{asset('img/nguoi_dung/menu/logo/logo1.jpg')}}" width="100px" alt="">
                    </a>
                </div>
            </div>
            <!-- Header Logo Area End Here -->
            <!-- Begin Header Middle Right Area -->
            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                <!-- Begin Header Middle Searchbox Area -->
                <form action="{{route('searchSanPham')}}" class="hm-searchbox">
                    <input type="text" name="keyWord" placeholder="Enter your search keyword ...">
                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <!-- Header Middle Searchbox Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="header-middle-right">
                    <ul class="hm-menu">
                        <!-- Begin Header Middle Wishlist Area -->
{{--                        <li class="hm-wishlist">--}}
{{--                            <a href="wishlist.html">--}}
{{--                                <span class="cart-item-count wishlist-item-count">0</span>--}}
{{--                                <i class="fa fa-heart-o"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <!-- Header Middle Wishlist Area End Here -->
                        <!-- Begin Header Mini Cart Area -->
                        <li class="hm-minicart">
                            <div class="hm-minicart-trigger">
                                <span class="item-icon"></span>
                                <span class="item-text">{{Cart::subtotal ()}}
                                    <span class="cart-item-count">{{count(Cart::content())}}</span>
                                </span>
                            </div>
                            <span></span>
                            <div class="minicart">
                                @foreach (Cart::content() as $contentValue)
                                <ul class="minicart-product-list">
                                    <li>
                                        <a href="single-product.html" class="minicart-product-image">
                                            <img src="{{asset('storage/'.$contentValue->options['image'])}}" alt="cart products">
                                        </a>
                                        <div class="minicart-product-details">
                                            <h6><a href="single-product.html">{{$contentValue->name}}</a></h6>
                                            <span>{{number_format($contentValue->price).' x'.$contentValue->qty}}</span>
                                        </div>
                                    </li>
                                </ul>
                                @endforeach
                                <p class="minicart-total">SUBTOTAL: <span>{{Cart::subtotal()}}</span></p>
                                <div class="minicart-button">
                                    <a href="{{route('viewGioHang')}}" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                        <span>Xem Giỏ Hàng</span>
                                    </a>
                                    @if (Session::has('maKhachHang'))
                                        <a href="{{route('checkOut')}}" class="li-button li-button-fullwidth li-button-sm">
                                            <span>Checkout</span>
                                        </a>
                                    @else
                                        <a href="{{route('khachHangSignInOrSignUp')}}" class="li-button li-button-fullwidth li-button-sm">
                                            <span>Đăng Nhập Or Đăng Ký</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <!-- Header Mini Cart Area End Here -->
                    </ul>
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
            <!-- Header Middle Right Area End Here -->
        </div>
    </div>
</div>
<!-- Header Middle Area End Here -->
