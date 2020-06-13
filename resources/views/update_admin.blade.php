@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>Sửa Admin</h1>
    <form action="{{route('process_update_admin',['id'=>$admin->ma_admin])}}" method="post">
        @csrf
        Họ Tên Admin:
        <input type="text" name="ho_ten_admin" value="{{$admin->ho_ten_admin}}">
        <br>
        Email:
        <input type="email" name="email" value="{{$admin->email}}">
        <br>
        <button>Sửa Admin</button>
    </form>
@stop
