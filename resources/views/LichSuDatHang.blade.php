@extends('LayoutWebsite.Master')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Lịch Sử Đặt Hàng</li>
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
                                <th class="li-product-thumbnail">Họ Tên Khách Hàng</th>
                                <th class="cart-product-name">Phương Thức Thanh Toán</th>
                                <th class="li-product-price">Tổng Tiền</th>
                                <th class="li-product-quantity">Ngày Đặt Hàng</th>
                                <th class="li-product-subtotal">Tình Trạng</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            @foreach ($arrayHoaDon as $hoaDon)
                                <tbody>
                                <tr>
                                    <td>{{$hoaDon->ma_hoa_don}}</td>
                                    <td>{{$hoaDon->ho_ten_khach_hang}}</td>
                                    <td>{{$hoaDon->phuong_thuc_thanh_toan}}</td>
                                    <td>{{$hoaDon->tong_tien}} $</td>
                                    <td>
                                        {{\Carbon\Carbon::parse($hoaDon->created_at)->format('d/m/Y H:i:s')}}
                                    </td>
                                    <td>
                                        @if ($hoaDon->tinh_trang==0)
                                            Chờ Duyệt
                                        @else
                                            Đã Duyệt
                                        @endif
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="{{route('historyHoaDonChiTiet',['id'=>$hoaDon->ma_hoa_don])}}" class="btn btn-success btn-round">
                                            Chi Tiết
                                            <div class="ripple-container"></div>
                                        </a>
                                    </td>
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
