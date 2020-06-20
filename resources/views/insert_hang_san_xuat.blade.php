@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>Thêm Hãng Sản Xuất</h1>
    <form action="{{route('process_insert_hang_san_xuat')}}" method="post">
        @csrf
        Tên Hãng Sản Xuất
        <input type="text" name="ten_hang_san_xuat">
        <br>
        <button>Thêm Hãng Sản Xuất</button>
    </form>
@stop
