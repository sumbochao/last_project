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
        Danh Sách Cấu Hình
    </h1>
    <a href="{{route('insert_cau_hinh')}}">
        <button class="btn btn-behance">Thêm Cấu Hình</button>
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
                                    <th class="text-center">Tên Cấu Hình</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($array_cau_hinh as $cau_hinh)
                                    <tbody>
                                    <tr>
                                        <td>{{$cau_hinh->ma_cau_hinh}}</td>
                                        <td>{{$cau_hinh->ten_cau_hinh}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('update_cau_hinh',['id'=>$cau_hinh->ma_cau_hinh])}}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <a href="{{route('delete_cau_hinh',['id'=>$cau_hinh->ma_cau_hinh])}}">
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
