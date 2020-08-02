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
        Danh Sách Phương Thức Thanh Toán
    </h1>
    <a href="{{route('insertThanhToan')}}">
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
                                @foreach ($arrayThanhToan as $thanhToan)
                                    <tbody>
                                    <tr>
                                        <td>{{$thanhToan->ma_thanh_toan}}</td>
                                        <td>{{$thanhToan->phuong_thuc_thanh_toan}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('updateThanhToan',['id'=>$thanhToan->ma_thanh_toan])}}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <a href="{{route('deleteThanhToan',['id'=>$thanhToan->ma_thanh_toan])}}">
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
