@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>Sửa Cấu Hình</h1>
    <form action="{{route('process_update_cau_hinh',['id'=>$cau_hinh->ma_cau_hinh])}}" method="post">
        @csrf
        Tên Cấu Hình
        <input type="text" name="ten_cau_hinh" value="{{$cau_hinh->ten_cau_hinh}}">
        <br>
        <button>Sửa Cấu Hình</button>
    </form>
@stop
