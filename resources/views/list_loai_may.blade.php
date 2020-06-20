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
        Danh Sách Loại Máy
    </h1>
    <a href="{{route('insert_loai_may')}}">
        <button class="btn btn-behance">Thêm Loại Máy</button>
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
                                    <th class="text-center">Tên Loại Máy</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($array_loai_may as $loai_may)
                                    <tbody>
                                    <tr>
                                        <td>{{$loai_may->ma_loai_may}}</td>
                                        <td>{{$loai_may->ten_loai_may}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('update_loai_may',['id'=>$loai_may->ma_loai_may])}}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <a href="{{route('delete_loai_may',['id'=>$loai_may->ma_loai_may])}}">
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