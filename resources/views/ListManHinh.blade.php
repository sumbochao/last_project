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
        Danh Sách Màn Hình
    </h1>
    <a href="{{route('insertManHinh')}}">
        <button class="btn btn-behance">Thêm Màn Hình</button>
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
                                    <th class="text-center">Kích Cỡ</th>
                                    <th class="text-center">Độ Phân Giải</th>
                                    <th class="text-center">Tần Số Màn Hình</th>
                                    <th class="text-center">Tấm Nền</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                @foreach ($arrayManHinh as $manHinh)
                                    <tbody>
                                    <tr>
                                        <td>{{$manHinh->kich_co}}</td>
                                        <td>{{$manHinh->do_phan_giai}}</td>
                                        <td>{{$manHinh->tan_so_man_hinh}}</td>
                                        <td>{{$manHinh->tam_nen}}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('updateManHinh', ['id' => $manHinh->ma_man_hinh])}}">
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
