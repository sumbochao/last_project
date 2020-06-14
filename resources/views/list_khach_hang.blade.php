@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>
        Danh Sách Khách Hàng
    </h1>
    <a href="{{route('insert_khach_hang')}}">
        <button class="btn btn-behance">Thêm Khách Hàng</button>
    </a>
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
                                    <th class="text-center">Ảnh Khách Hàng</th>
                                    <th class="text-center">Tài Khoản</th>
                                    <th class="text-center">Mật Khẩu</th>
                                    <th class="text-center">Họ Tên Khách Hàng</th>
                                    <th class="text-center">Ngày Sinh</th>
                                    <th class="text-center">Giới Tính</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Số Điện Thoại</th>
                                    <th class="text-center">Địa Chỉ</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($array_khach_hang as $khach_hang)
                                    <tbody>
                                    <tr>
                                        <td>{{$khach_hang->ma_khach_hang}}</td>
                                        <td>{{$khach_hang->anh_khach_hang}}</td>
                                        <td>{{$khach_hang->tai_khoan}}</td>
                                        <td>{{$khach_hang->mat_khau}}</td>
                                        <td>{{$khach_hang->ho_ten_khach_hang}}</td>
                                        <td>{{\Carbon\Carbon::parse($khach_hang->ngay_sinh)->format('d/m/Y')}}</td>
                                        <td>
                                            @if ($khach_hang->gioi_tinh==0)
                                                Nam
                                            @else
                                                Nữ
                                            @endif
                                        </td>
                                        <td>{{$khach_hang->email}}</td>
                                        <td>{{$khach_hang->sdt}}</td>
                                        <td>{{$khach_hang->dia_chi}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('update_khach_hang',['id'=>$khach_hang->ma_khach_hang])}}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <a href="{{route('delete_khach_hang',['id'=>$khach_hang->ma_khach_hang])}}">
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                                    <i class="material-icons">close</i>
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
