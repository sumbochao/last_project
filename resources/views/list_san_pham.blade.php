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
                                    <th class="text-center">Hãng Sản Xuất</th>
                                    <th class="text-center">Loại Máy</th>
                                    <th class="text-center">Màn Hình</th>
                                    <th class="text-center">CPU</th>
                                    <th class="text-center">RAM</th>
                                    <th class="text-center">VGA</th>
                                    <th class="text-center">Ổ Cứng</th>
                                    <th class="text-center">Số Lượng</th>
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
                                        <td>{{$san_pham->ten_hang_san_xuat}}</td>
                                        <td>{{$san_pham->ten_loai_may}}</td>
                                        <td>
                                            {{$san_pham->kich_co}}
                                            {{$san_pham->do_phan_giai}}
                                            {{$san_pham->tan_so_man_hinh}}
                                            {{$san_pham->tam_nen}}
                                        </td>
                                        <td>{{$san_pham->ten_cpu}}</td>
                                        <td>
                                            {{$san_pham->dung_luong_ram}}
                                            {{$san_pham->loai_ram}}
                                            {{$san_pham->tan_so_ram}}
                                        </td>
                                        <td>{{$san_pham->ten_vga}}</td>
                                        <td>
                                            {{$san_pham->dung_luong_o_cung}}
                                            {{$san_pham->loai_o_cung}}
                                        </td>
                                        <td>{{$san_pham->so_luong}}</td>
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
