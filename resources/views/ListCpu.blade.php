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
        Danh Sách Cpu
    </h1>
    <a href="{{route('insertCpu')}}">
        <button class="btn btn-behance">Thêm Cpu</button>
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
                                    <th class="text-center">Tên Cpu</th>
                                    <th class="text-center">Tần Số CPU</th>
                                    <th class="text-center">Bộ Nhớ Cache</th>
                                    <th class="text-center">Dòng Cpu</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($arrayCpu as $cpu)
                                    <tbody>
                                    <tr>
                                        <td>{{$cpu->ma_cpu}}</td>
                                        <td>{{$cpu->ten_cpu}}</td>
                                        <td>{{$cpu->tan_so_cpu}}</td>
                                        <td>{{$cpu->bo_nho_cache}}</td>
                                        <td>{{$cpu->dong_cpu}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('updateCpu',['id'=>$cpu->ma_cpu])}}">
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
