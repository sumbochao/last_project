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
        Danh Sách Màn Hình
    </h1>
    <a href="{{route('insert_man_hinh')}}">
        <button class="btn btn-behance">Thêm Màn Hình</button>
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
                                    <th class="text-center">Kích Cỡ</th>
                                    <th class="text-center">Độ Phân Giải</th>
                                    <th class="text-center">Tần Số Màn Hình</th>
                                    <th class="text-center">Tấm Nến</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($array_man_hinh as $man_hinh)
                                    <tbody>
                                    <tr>
                                        <td>{{$man_hinh->ma_man_hinh}}</td>
                                        <td>{{$man_hinh->kich_co}}</td>
                                        <td>{{$man_hinh->do_phan_giai}}</td>
                                        <td>{{$man_hinh->tan_so_man_hinh}}</td>
                                        <td>{{$man_hinh->tam_nen}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('update_man_hinh',['id'=>$man_hinh->ma_man_hinh])}}">
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
