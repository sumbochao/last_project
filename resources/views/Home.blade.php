@extends('LayoutWebsite.Master')
@section('content')
    <!-- Begin Slider With Banner Area -->
    <div class="slider-with-banner">
        <div class="container">
            <div class="row">
                <!-- Begin Slider Area -->
                <div class="col-lg-12 col-md-12">
                    <div class="slider-area pt-sm-30 pt-xs-30">
                        <div class="slider-active owl-carousel">
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-01 bg-10">
                                <div class="slider-progress"></div>
                                {{--                                <div class="slider-content">--}}
                                {{--                                    <h5>Sale Offer <span>-20% Off</span> This Week</h5>--}}
                                {{--                                    <h2>Chamcham Galaxy S9 | S9+</h2>--}}
                                {{--                                    <h3>Starting at <span>$1209.00</span></h3>--}}
                                {{--                                    <div class="default-btn slide-btn">--}}
                                {{--                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-02 bg-11">
                                <div class="slider-progress"></div>
                                {{--                                <div class="slider-content">--}}
                                {{--                                    <h5>Sale Offer <span>Black Friday</span> This Week</h5>--}}
                                {{--                                    <h2>Work Desk Surface Studio 2018</h2>--}}
                                {{--                                    <h3>Starting at <span>$824.00</span></h3>--}}
                                {{--                                    <div class="default-btn slide-btn">--}}
                                {{--                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide align-center-left animation-style-01 bg-12">
                                <div class="slider-progress"></div>
                                {{--                                <div class="slider-content">--}}
                                {{--                                    <h5>Sale Offer <span>-10% Off</span> This Week</h5>--}}
                                {{--                                    <h2>Phantom 4 Pro+ Obsidian</h2>--}}
                                {{--                                    <h3>Starting at <span>$1849.00</span></h3>--}}
                                {{--                                    <div class="default-btn slide-btn">--}}
                                {{--                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                            <!-- Single Slide Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider With Banner Area End Here -->
    <!-- Begin Static Top Area -->
    <div class="static-top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="static-top-content mt-sm-30">
                        Gift Special: Gift every single day on Weekends - New Coupon code "
                        <span>LimupaSaleoff</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Top Area End Here -->
    <!-- Begin Li's Static Banner Area -->
    <div class="li-static-banner li-static-banner-4 text-center pt-20">
        <div class="container">
            <div class="row">
                <!-- Begin Single Banner Area -->
            {{--                <div class="col-lg-6">--}}
            {{--                    <div class="single-banner pb-sm-30 pb-xs-30">--}}
            {{--                        <a href="#">--}}
            {{--                            <img src="{{asset('img/nguoi_dung/banner/2_3.jpg')}}" alt="Li's Static Banner">--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <!-- Single Banner Area End Here -->--}}
            {{--                <!-- Begin Single Banner Area -->--}}
            {{--                <div class="col-lg-6">--}}
            {{--                    <div class="single-banner">--}}
            {{--                        <a href="#">--}}
            {{--                            <img src="{{asset('img/nguoi_dung/banner/2_4.jpg')}}" alt="Li's Static Banner">--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <!-- Single Banner Area End Here -->
            </div>
        </div>
    </div>
    <!-- Li's Static Banner Area End Here -->
    <!-- Begin Li's Laptop Product Area -->
    <section class="product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Laptop</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            @foreach ($arraySanPham as $sanPham)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{route('viewChiTietSanPham', ['id' => $sanPham->ma_san_pham])}}">
                                                <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                                     alt="Li's Product Image">
                                            </a>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <h4>
                                                    <a class="product_name"
                                                       href="{{route('viewChiTietSanPham', ['id' => $sanPham->ma_san_pham])}}">
                                                        {{$sanPham->ten_san_pham}}
                                                    </a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="new-price">{{$sanPham->gia}}</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active">
                                                        <a href="{{route('viewChiTietSanPham', ['id' => $sanPham->ma_san_pham])}}">
                                                            Add to cart
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
    <!-- Li's Laptop Product Area End Here -->
    {{--    <!-- Begin Li's Static Home Area -->--}}
    {{--    <div class="li-static-home">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <!-- Begin Li's Static Home Image Area -->--}}
    {{--                    <div class="li-static-home-image"></div>--}}
    {{--                    <!-- Li's Static Home Image Area End Here -->--}}
    {{--                    <!-- Begin Li's Static Home Content Area -->--}}
    {{--                    <div class="li-static-home-content">--}}
    {{--                        <p>Sale Offer<span>-20% Off</span>This Week</p>--}}
    {{--                        <h2>Featured Product</h2>--}}
    {{--                        <h2>Sanai Accessories 2018</h2>--}}
    {{--                        <p class="schedule">--}}
    {{--                            Starting at--}}
    {{--                            <span> $1209.00</span>--}}
    {{--                        </p>--}}
    {{--                        <div class="default-btn">--}}
    {{--                            <a href="shop-left-sidebar.html" class="links">Shopping Now</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Li's Static Home Content Area End Here -->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- Li's Static Home Area End Here -->--}}
@stop
