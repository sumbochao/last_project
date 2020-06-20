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
        Danh Sách Phương Thức Thanh Toán
    </h1>
    <a href="{{route('insert_thanh_toan')}}">
        <button class="btn btn-behance">Thêm Phương Thức Thanh Toán</button>
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
                                    <th class="text-center">Phương Thức Thanh Toán</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($array_thanh_toan as $thanh_toan)
                                    <tbody>
                                    <tr>
                                        <td>{{$thanh_toan->ma_thanh_toan}}</td>
                                        <td>{{$thanh_toan->phuong_thuc_thanh_toan}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('update_thanh_toan',['id'=>$thanh_toan->ma_thanh_toan])}}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <a href="{{route('delete_thanh_toan',['id'=>$thanh_toan->ma_thanh_toan])}}">
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
