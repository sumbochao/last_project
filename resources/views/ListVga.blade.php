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
        Danh Sách VGA
    </h1>
    <a href="{{route('insertVga')}}">
        <button class="btn btn-behance">Thêm VGA</button>
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
                                    <th class="text-center">Loại VGA</th>
                                    <th class="text-center">Tên VGA</th>
                                    <th class="text-center">Dung Lượng VGA</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($arrayVga as $vga)
                                    <tbody>
                                    <tr>
                                        <td>{{$vga->ma_vga}}</td>
                                        <td>{{$vga->loai_vga}}</td>
                                        <td>{{$vga->ten_vga}}</td>
                                        <td>{{$vga->dung_luong_vga}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('updateVga',['id'=>$vga->ma_vga])}}">
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
