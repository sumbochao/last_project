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
        Danh Sách Hãng Sản Xuất
    </h1>
    <a href="{{route('insert_thuong_hieu')}}">
        <button class="btn btn-behance">Thêm Hãng Sản Xuất</button>
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
                                    <th class="text-center">Tên Hãng Sản Xuất</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($array_hang_san_xuat as $hang_san_xuat)
                                    <tbody>
                                    <tr>
                                        <td>{{$hang_san_xuat->ma_hang_san_xuat}}</td>
                                        <td>{{$hang_san_xuat->ten_hang_san_xuat}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('update_hang_san_xuat',['id'=>$hang_san_xuat->ma_hang_san_xuat])}}">
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
