@extends('LayoutAdmin.Master')
@section('content')
    @push('css')
        <style type="text/css">
            h1 {
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>
        Danh Sách Hoá Đơn Chi Tiết
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
                                    <th class="text-center">Tên Sản Phẩm</th>
                                    <th class="text-center">Số Lượng</th>
                                    <th class="text-center">Giá</th>
                                </tr>
                                </thead>
                                @foreach ($arrayHoaDonChiTiet as $hoaDonChiTiet)
                                    <tbody>
                                    <tr>
                                        <td>{{$hoaDonChiTiet->ten_san_pham}}</td>
                                        <td>{{$hoaDonChiTiet->so_luong}}</td>
                                        <td>{{$hoaDonChiTiet->gia}}</td>
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
