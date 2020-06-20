@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>Sửa Loại Máy</h1>
    <form action="{{route('process_insert_hang_san_xuat',['id'=>$loai_may->ma_loai_may])}}" method="post">
        @csrf
        Tên Loại Máy
        <input type="text" name="ten_loai_may" value="{{$loai_may->ten_loai_may}}">
        <br>
        <button>Sửa Loại Máy</button>
    </form>
@stop
