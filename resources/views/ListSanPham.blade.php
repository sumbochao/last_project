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
        Danh Sách Sản Phẩm
    </h1>
    <a href="{{route('insertSanPham')}}">
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
                                @foreach ($arraySanPham as $sanPham)
                                    <tbody>
                                    <tr>
                                        <td>{{$sanPham->ma_san_pham}}</td>
                                        <td>
                                            <img src="{{asset('storage/'.$sanPham->anh_san_pham)}}" width="150px" height="150px">
                                        </td>
                                        <td>{{$sanPham->ten_san_pham}}</td>
                                        <td>{{$sanPham->ten_hang_san_xuat}}</td>
                                        <td>{{$sanPham->ten_loai_may}}</td>
                                        <td>
                                            {{$sanPham->kich_co}}
                                            {{$sanPham->do_phan_giai}}
                                            {{$sanPham->tan_so_man_hinh}}
                                            {{$sanPham->tam_nen}}
                                        </td>
                                        <td>{{$sanPham->ten_cpu}}</td>
                                        <td>
                                            {{$sanPham->dung_luong_ram}}
                                            {{$sanPham->loai_ram}}
                                            {{$sanPham->tan_so_ram}}
                                        </td>
                                        <td>{{$sanPham->ten_vga}}</td>
                                        <td>
                                            {{$sanPham->dung_luong_o_cung}}
                                            {{$sanPham->loai_o_cung}}
                                        </td>
                                        <td>{{$sanPham->so_luong}}</td>
                                        <td>{{$sanPham->gia}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('updateSanPham',['id'=>$sanPham->ma_san_pham])}}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <a href="{{route('deleteSanPham',['id'=>$sanPham->ma_san_pham])}}">
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
