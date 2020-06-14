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
        Danh Sách Sản Phẩm
    </h1>
    <a href="{{route('insert_san_pham')}}">
        <button class="btn btn-behance">Thêm Sản Phẩm</button>
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
                                    <th class="text-center">Ảnh Sản Phẩm</th>
                                    <th class="text-center">Tên Sản Phẩm</th>
                                    <th class="text-center">Mô Tả</th>
                                    <th class="text-center">Thương Hiệu</th>
                                    <th class="text-center">Cấu Hình</th>
                                    <th class="text-center">Gaming</th>
                                    <th class="text-center">Số Lượng</th>
                                    <th class="text-center">Thông Số Kĩ Thuật</th>
                                    <th class="text-center">Giá</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($array_san_pham as $san_pham)
                                    <tbody>
                                    <tr>
                                        <td>{{$san_pham->ma_san_pham}}</td>
                                        <td>{{$san_pham->anh_san_pham}}</td>
                                        <td>{{$san_pham->ten_san_pham}}</td>
                                        <td>{{$san_pham->mo_ta}}</td>
                                        <td>{{$san_pham->ten_thuong_hieu}}</td>
                                        <td>{{$san_pham->ten_cau_hinh}}</td>
                                        <td>
                                            @if ($san_pham->gaming==0)
                                                Không phải máy gaming
                                            @else
                                                Gaming
                                            @endif
                                        </td>
                                        <td>{{$san_pham->so_luong}}</td>
                                        <td>{{$san_pham->thong_so_ki_thuat}}</td>
                                        <td>{{$san_pham->gia}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('update_san_pham',['id'=>$san_pham->ma_san_pham])}}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <a href="{{route('delete_san_pham',['id'=>$san_pham->ma_san_pham])}}">
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
