@extends('LayoutAdmin.Master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>
        Danh Sách Hoá Đơn
    </h1>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Họ Tên Khách Hàng</th>
                                    <th class="text-center">Phương Thức Thanh Toán</th>
                                    <th class="text-center">Tổng Tiền</th>
                                    <th class="text-center">Ngày Đặt Hàng</th>
                                    <th class="text-center">Tình Trạng</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($arrayHoaDon as $hoaDon)
                                    <tbody>
                                    <tr>
                                        <td>{{$hoaDon->ma_hoa_don}}</td>
                                        <td>{{$hoaDon->ho_ten_khach_hang}}</td>
                                        <td>{{$hoaDon->phuong_thuc_thanh_toan}}</td>
                                        <td>{{$hoaDon->tong_tien}}</td>
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
                                            <a href="{{route('listHoaDonChiTiet',['id'=>$hoaDon->ma_hoa_don])}}" class="btn btn-simple btn-warning btn-icon edit">
                                                <i class="material-icons">dvr</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a href="{{route('updateHoaDon',['id'=>$hoaDon->ma_hoa_don])}}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
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
    </div>
@stop
