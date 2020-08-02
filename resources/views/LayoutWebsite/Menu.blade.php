<!-- Begin Header Bottom Area -->
<div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu">
                    <nav>
                        <ul>
                            <li class="dropdown-holder"><a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="megamenu-holder"><a href="{{route('viewShop')}}">Shop</a>
                                <ul class="megamenu hb-megamenu">
                                    <li><a href="#">Hãng Sản Xuất</a>
                                        <ul>
                                            @foreach ($arrayHangSanXuat as $hangSanXuat)
                                            <li>
                                                <a href="{{route('viewSanPhamFromHangSanXuat',['id'=>$hangSanXuat->ma_hang_san_xuat])}}">
                                                    {{$hangSanXuat->ten_hang_san_xuat}}
                                                </a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="#">Loại Máy</a>
                                        <ul>
                                        @foreach ($arrayLoaiMay as $loaiMay)
                                            <li>
                                                <a href="{{route('viewSanPhamFromLoaiMay',['id'=>$loaiMay->ma_loai_may])}}">
                                                    {{$loaiMay->ten_loai_may}}
                                                </a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            @if (\Illuminate\Support\Facades\Session::has('maKhachHang'))
                                <li><a href="{{route('historyHoaDon')}}">Lịch Sử Đặt Hàng</a></li>
                            @endif
{{--                            <li class="dropdown-holder"><a href="blog-left-sidebar.html">Blog</a>--}}
{{--                                <ul class="hb-dropdown">--}}
{{--                                    <li class="sub-dropdown-holder"><a href="blog-left-sidebar.html">Blog Grid View</a>--}}
{{--                                        <ul class="hb-dropdown hb-sub-dropdown">--}}
{{--                                            <li><a href="blog-2-column.html">Blog 2 Column</a></li>--}}
{{--                                            <li><a href="blog-3-column.html">Blog 3 Column</a></li>--}}
{{--                                            <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>--}}
{{--                                            <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub-dropdown-holder"><a href="blog-list-left-sidebar.html">Blog List View</a>--}}
{{--                                        <ul class="hb-dropdown hb-sub-dropdown">--}}
{{--                                            <li><a href="blog-list.html">Blog List</a></li>--}}
{{--                                            <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>--}}
{{--                                            <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub-dropdown-holder"><a href="blog-details-left-sidebar.html">Blog Details</a>--}}
{{--                                        <ul class="hb-dropdown hb-sub-dropdown">--}}
{{--                                            <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>--}}
{{--                                            <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub-dropdown-holder"><a href="blog-gallery-format.html">Blog Format</a>--}}
{{--                                        <ul class="hb-dropdown hb-sub-dropdown">--}}
{{--                                            <li><a href="blog-audio-format.html">Blog Audio Format</a></li>--}}
{{--                                            <li><a href="blog-video-format.html">Blog Video Format</a></li>--}}
{{--                                            <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="megamenu-static-holder"><a href="index.html">Pages</a>--}}
{{--                                <ul class="megamenu hb-megamenu">--}}
{{--                                    <li><a href="blog-left-sidebar.html">Blog Layouts</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="blog-2-column.html">Blog 2 Column</a></li>--}}
{{--                                            <li><a href="blog-3-column.html">Blog 3 Column</a></li>--}}
{{--                                            <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>--}}
{{--                                            <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>--}}
{{--                                            <li><a href="blog-list.html">Blog List</a></li>--}}
{{--                                            <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>--}}
{{--                                            <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="blog-details-left-sidebar.html">Blog Details Pages</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>--}}
{{--                                            <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>--}}
{{--                                            <li><a href="blog-audio-format.html">Blog Audio Format</a></li>--}}
{{--                                            <li><a href="blog-video-format.html">Blog Video Format</a></li>--}}
{{--                                            <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="index.html">Other Pages</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="login-register.html">My Account</a></li>--}}
{{--                                            <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                            <li><a href="compare.html">Compare</a></li>--}}
{{--                                            <li><a href="wishlist.html">Wishlist</a></li>--}}
{{--                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="index.html">Other Pages 2</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="contact.html">Contact</a></li>--}}
{{--                                            <li><a href="about-us.html">About Us</a></li>--}}
{{--                                            <li><a href="faq.html">FAQ</a></li>--}}
{{--                                            <li><a href="404.html">404 Error</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="about-us.html">About Us</a></li>--}}
{{--                            <li><a href="contact.html">Contact</a></li>--}}
{{--                            <li><a href="shop-left-sidebar.html">Smartwatch</a></li>--}}
{{--                            <li><a href="shop-left-sidebar.html">Accessories</a></li>--}}
                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Header Bottom Area End Here -->
