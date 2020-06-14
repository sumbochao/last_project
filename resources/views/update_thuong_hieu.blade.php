@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>Sửa Thương Hiệu</h1>
    <form action="{{route('process_update_thuong_hieu',['id'=>$thuong_hieu->ma_thuong_hieu])}}" method="post">
        @csrf
        Tên Thương Hiệu
        <input type="text" name="ten_thuong_hieu" value="{{$thuong_hieu->ten_thuong_hieu}}">
        <br>
        <button>Sửa Thương Hiệu</button>
    </form>
@stop
