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
        Danh Sách Admin
    </h1>
    <a href="{{route('insertAdmin')}}">
        <button class="btn btn-behance">Thêm Admin</button>
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
                                    <th class="text-center">Tài Khoản</th>
                                    <th class="text-center">Mật Khẩu</th>
                                    <th class="text-center">Họ Tên Admin</th>
                                    <th class="text-center">Ngày Sinh</th>
                                    <th class="text-center">Giới Tính</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Cấp Độ</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($arrayAdmin as $admin)
                                    <tbody>
                                    <tr>
                                        <td>{{$admin->ma_admin}}</td>
                                        <td>{{$admin->tai_khoan}}</td>
                                        <td>{{$admin->mat_khau}}</td>
                                        <td>{{$admin->ho_ten_admin}}</td>
                                        <td>{{\Carbon\Carbon::parse($admin->ngay_sinh)->format('d/m/Y')}}</td>
                                        <td>
                                            @if ($admin->gioi_tinh==0)
                                                Nam
                                            @else
                                                Nữ
                                            @endif
                                        </td>
                                        <td>{{$admin->email}}</td>
                                        <td>
                                            @if ($admin->cap_do==0)
                                                Admin
                                            @else
                                                SuperAdmin
                                            @endif
                                        </td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('updateAdmin',['id'=>$admin->ma_admin])}}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <a href="{{route('deleteAdmin',['id'=>$admin->ma_admin])}}">
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
