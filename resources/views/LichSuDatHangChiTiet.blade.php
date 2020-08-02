@extends('LayoutWebsite.Master')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Lịch Sử Đặt Hàng Chi Tiết</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="li-product-thumbnail">#</th>
                                <th class="li-product-thumbnail">Tên Sản Phẩm</th>
                                <th class="cart-product-name">Số Lượng</th>
                                <th class="li-product-price">Giá</th>
                            </tr>
                            </thead>
                            @foreach ($arrayHoaDonChiTiet as $hoaDonChiTiet)
                                <tbody>
                                <tr>
                                    <td>{{$hoaDonChiTiet->ma_hoa_don}}</td>
                                    <td>{{$hoaDonChiTiet->ten_san_pham}}</td>
                                    <td>{{$hoaDonChiTiet->so_luong}}</td>
                                    <td>{{number_format($hoaDonChiTiet->gia)}} $</td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
