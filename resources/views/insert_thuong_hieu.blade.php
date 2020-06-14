@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>Thêm Thương Hiệu</h1>
    <form action="{{route('process_insert_thuong_hieu')}}" method="post">
        @csrf
        Tên Thương Hiệu
        <input type="text" name="ten_thuong_hieu">
        <br>
        <button>Thêm Thương Hiệu</button>
    </form>
@stop
