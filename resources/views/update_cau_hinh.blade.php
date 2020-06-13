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
    <form action="{{route('process_update_admin',['id'=>$cau_hinh->ma_cau_hinh])}}" method="post">
        @csrf
        Tên Cấu Hình
        <input type="text" name="ten_cau_hinh" value="{{$cau_hinh->ten_cau_hinh}}">
        <br>
        <button>Sửa Admin</button>
    </form>
@stop
