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
        Danh Sách Ram
    </h1>
    <a href="{{route('insert_ram')}}">
        <button class="btn btn-behance">Thêm Ram</button>
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
                                    <th class="text-center">Dung Lượng RAM</th>
                                    <th class="text-center">Tần Số RAM</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($array_ram as $ram)
                                    <tbody>
                                    <tr>
                                        <td>{{$ram->ma_ram}}</td>
                                        <td>{{$ram->dung_luong_ram}}</td>
                                        <td>{{$ram->tan_so_ram}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('update_ram',['id'=>$ram->ma_ram])}}">
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
