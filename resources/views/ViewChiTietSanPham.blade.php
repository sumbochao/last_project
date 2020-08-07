@extends('LayoutWebsite.Master')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Chi Tiết Sản Phẩm</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-wraper">
        <div class="container">
            <div class="row single-product-area">
                <div class="col-lg-5 col-md-6">
                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images slider-navigation-1 slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" role="listbox"
                                     style="opacity: 1; width: 3760px; transform: translate3d(-470px, 0px, 0px);">
                                    <div class="lg-image slick-slide slick-current slick-active" data-slick-index="0"
                                         aria-hidden="false" tabindex="-1" role="option"
                                         aria-describedby="slick-slide00" style="width: 470px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}" alt="product image">
                                    </div>
                                    <div class="lg-image slick-slide" data-slick-index="1" aria-hidden="true"
                                         tabindex="-1" role="option" aria-describedby="slick-slide01"
                                         style="width: 470px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}" alt="product image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-details-thumbs slider-thumbs-1 slick-initialized slick-slider"><span
                                class="slick-prev slick-arrow" style="display: block;"><i class="fa fa-angle-left"></i></span>
                            <div aria-live="polite" class="slick-list draggable" style="padding: 0px;">
                                <div class="slick-track" role="listbox"
                                     style="opacity: 1; width: 1888px; transform: translate3d(-354px, 0px, 0px);">
                                    <div class="sm-image slick-slide slick-cloned" data-slick-index="-5"
                                         aria-hidden="true" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-cloned" data-slick-index="-4"
                                         aria-hidden="true" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-cloned" data-slick-index="-3"
                                         aria-hidden="true" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-cloned slick-active" data-slick-index="-2"
                                         aria-hidden="false" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-cloned slick-active" data-slick-index="-1"
                                         aria-hidden="false" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-current slick-active slick-center"
                                         data-slick-index="0" aria-hidden="false" tabindex="-1" role="option"
                                         aria-describedby="slick-slide20" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-active" data-slick-index="1"
                                         aria-hidden="false" tabindex="-1" role="option"
                                         aria-describedby="slick-slide21" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-active" data-slick-index="2"
                                         aria-hidden="false" tabindex="-1" role="option"
                                         aria-describedby="slick-slide22" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide" data-slick-index="3" aria-hidden="true"
                                         tabindex="-1" role="option" aria-describedby="slick-slide23"
                                         style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide" data-slick-index="4" aria-hidden="true"
                                         tabindex="-1" role="option" aria-describedby="slick-slide24"
                                         style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide" data-slick-index="5" aria-hidden="true"
                                         tabindex="-1" role="option" aria-describedby="slick-slide25"
                                         style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-cloned slick-center" data-slick-index="6"
                                         aria-hidden="true" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-cloned" data-slick-index="7"
                                         aria-hidden="true" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-cloned" data-slick-index="8"
                                         aria-hidden="true" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-cloned" data-slick-index="9"
                                         aria-hidden="true" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                    <div class="sm-image slick-slide slick-cloned" data-slick-index="10"
                                         aria-hidden="true" tabindex="-1" style="width: 118px;">
                                        <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}"
                                             alt="product image thumb">
                                    </div>
                                </div>
                            </div>
                            <span class="slick-next slick-arrow" style="display: block;"><i
                                    class="fa fa-angle-right"></i></span></div>
                    </div>
                    <!--// Product Details Left -->
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content sp-normal-content pt-60">
                        <div class="product-info">
                            <h2>{{$sanPham->ten_san_pham}}</h2>
                            <div class="price-box pt-20">
                                <span class="new-price new-price-2">{{$sanPham->gia}} $</span>
                            </div>
                            <div class="product-desc">
                                <p>
                                    <span>{{$sanPham->mo_ta}}</span>
                                </p>
                            </div>
                            <div class="single-add-to-cart">
                                <form action="{{route('processInsertSanPhamVaoGioHang', ['id' => $sanPham->ma_san_pham])}}"
                                      method="post" class="cart-quantity">
                                    @csrf
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input name="soLuong" class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </div>
                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                            </li>
                            <li><a data-toggle="tab" href="#product-details"><span>Product Details</span></a></li>
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="description" class="tab-pane active show" role="tabpanel">
                    <div class="product-description">
                    <span>
                        {{$sanPham->mo_ta}}
                    </span>
                    </div>
                </div>
                <div id="product-details" class="tab-pane" role="tabpanel">
                    <div class="product-details-manufacturer">
                        <div class="Shopping-cart-area pt-60 pb-60">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-content table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td class="li-product-thumbnail">Loại Máy</td>
                                                    <td class="li-product-thumbnail">Tên VGA</td>
                                                    <td class="cart-product-name">Hãng Sản Xuất</td>
                                                    <td class="li-product-thumbnail">Màn Hình</td>
                                                    <td class="li-product-thumbnail">Ram</td>
                                                    <td class="li-product-thumbnail">CPU</td>
                                                    <td class="li-product-thumbnail">Ổ Cứng</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>{{$sanPham->ten_loai_may}}</td>
                                                    <td>{{$sanPham->ten_vga}}</td>
                                                    <td>{{$sanPham->ten_hang_san_xuat}}</td>
                                                    <td>
                                                        {{$sanPham->kich_co}}
                                                        {{$sanPham->tan_so_man_hinh}}
                                                        {{$sanPham->do_phan_giai}}
                                                        {{$sanPham->tam_nen}}
                                                    </td>
                                                    <td>
                                                        {{$sanPham->loai_ram}}
                                                        {{$sanPham->dung_luong_ram}}
                                                        {{$sanPham->tan_so_ram}}
                                                    </td>
                                                    <td>
                                                        {{$sanPham->ten_cpu}}
                                                        ({{$sanPham->tan_so_cpu}}/{{$sanPham->bo_nho_cache}})
                                                    </td>
                                                    <td>
                                                        {{$sanPham->loai_o_cung}}
                                                        {{$sanPham->dung_luong_o_cung}}
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
