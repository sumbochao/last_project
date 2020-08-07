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
        Danh Sách Ổ Cứng
    </h1>
    <a href="{{route('insertOCung')}}">
        <button class="btn btn-behance">Thêm Ổ Cứng</button>
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
                                    <th class="text-center">Loại Ổ Cứng</th>
                                    <th class="text-center">Dung Lượng Ổ Cứng</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($arrayOCung as $oCung)
                                    <tbody>
                                    <tr>
                                        <td>{{$oCung->loai_o_cung}}</td>
                                        <td>{{$oCung->dung_luong_o_cung}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('updateOCung', ['id' => $oCung->ma_o_cung])}}">
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
