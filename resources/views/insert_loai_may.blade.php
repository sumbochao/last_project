@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>Thêm Loại Máy</h1>
    <form action="{{route('process_insert_hang_san_xuat')}}" method="post">
        @csrf
        Tên Loại Máy
        <input type="text" name="ten_loai_may">
        <br>
        <button>Thêm Loại Máy</button>
    </form>
@stop
