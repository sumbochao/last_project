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
        Danh Sách Thương Hiệu
    </h1>
    <a href="{{route('insert_thuong_hieu')}}">
        <button class="btn btn-behance">Thêm Thương Hiệu</button>
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
                                    <th class="text-center">Tên Thương Hiệu</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($array_thuong_hieu as $thuong_hieu)
                                    <tbody>
                                    <tr>
                                        <td>{{$thuong_hieu->ma_thuong_hieu}}</td>
                                        <td>{{$thuong_hieu->ten_thuong_hieu}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('update_thuong_hieu',['id'=>$thuong_hieu->ma_thuong_hieu])}}">
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
