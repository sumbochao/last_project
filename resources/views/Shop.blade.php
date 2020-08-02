@extends('LayoutWebsite.Master')
@section('content')
{{--!-- Begin Li's Breadcrumb Area -->--}}
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60 pt-sm-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Showing 1 to 9 of {{count($arraySanPham)}}</span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sort By:</p>
                            <select class="nice-select">
                                <option value="trending">Relevance</option>
                                <option value="sales">Name (A - Z)</option>
                                <option value="sales">Name (Z - A)</option>
                                <option value="rating">Price (Low &gt; High)</option>
                                <option value="date">Rating (Lowest)</option>
                                <option value="price-asc">Model (A - Z)</option>
                                <option value="price-asc">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                    @foreach($arraySanPham as $sanPham)
                                    <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('viewChiTietSanPham',['id'=>$sanPham->ma_san_pham])}}">
                                                    <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}" alt="Li's Product Image">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4>
                                                        <a class="product_name" href="{{route('viewChiTietSanPham',['id'=>$sanPham->ma_san_pham])}}">
                                                            {{$sanPham->ten_san_pham}}
                                                        </a>
                                                    </h4>
                                                    <div class="price-box">
                                                        <span class="new-price">{{number_format($sanPham->gia)}} $</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active">
                                                            <a href="{{route('viewChiTietSanPham',['id'=>$sanPham->ma_san_pham])}}">
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
                        <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    @foreach ($arraySanPham as $sanPham)
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="{{route('viewChiTietSanPham',['id'=>$sanPham->ma_san_pham])}}">
                                                    <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}" alt="{{$sanPham->ten_san_pham}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4>
                                                        <a class="product_name" href="{{route('viewChiTietSanPham',['id'=>$sanPham->ma_san_pham])}}">
                                                            {{$sanPham->ten_san_pham}}
                                                        </a>
                                                    </h4>
                                                    <div class="price-box">
                                                        <span class="new-price">{{$sanPham->gia}}</span>
                                                    </div>
                                                    <p>
                                                        {{$sanPham->mo_ta}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart">
                                                        <a href="{{route('viewChiTietSanPham',['id'=>$sanPham->ma_san_pham])}}">
                                                            Add to cart
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 pt-xs-15">
                                    <p>Showing 1-12 of {{count($arraySanPham)}} item(s)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box pt-xs-20 pb-xs-15">
                                        {{$arraySanPham->links()}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                    <div class="sidebar-title">
                        <h2>Laptop</h2>
                    </div>
                    <!-- category-sub-menu start -->
                    <div class="category-sub-menu">
                        <ul>
                            <li class="has-sub"><a href="#">Hãng Sản Xuất</a>
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
                            <li class="has-sub"><a href="#">Loại Máy</a>
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
                    </div>
                    <!-- category-sub-menu end -->
                </div>
                <!--sidebar-categores-box end  -->
            </div>
        </div>
    </div>
</div>
<!-- Content Wraper Area End Here -->
@stop
