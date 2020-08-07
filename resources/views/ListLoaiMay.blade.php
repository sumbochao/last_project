@extends('LayoutAdmin.Master')
@section('content')
    @push('css')
        <style type="text/css">
            h1 {
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>
        Danh Sách Loại Máy
    </h1>
    <a href="{{route('insertLoaiMay')}}">
        <button class="btn btn-behance">Thêm Loại Máy</button>
    </a>
    <div class="content">
        @if (\Illuminate\Support\Facades\Session::has('success'))
            <span style="color: #00b931" class="input-group-addon">
                {{\Illuminate\Support\Facades\Session::get('success')}}
            </span>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center">Tên Loại Máy</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($arrayLoaiMay as $loaiMay)
                                    <tbody>
                                    <tr>
                                        <td>{{$loaiMay->ten_loai_may}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('updateLoaiMay', ['id' => $loaiMay->ma_loai_may])}}">
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
