@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>Thêm Admin</h1>
    <form action="{{route('process_insert_admin')}}" method="post">
        @csrf
        Tài Khoản:
        <input type="text" name="tai_khoan">
        <br>
        Mật Khẩu:
        <input type="password" name="mat_khau">
        <br>
        Họ Tên Admin:
        <input type="text" name="ho_ten_admin">
        <br>
        Ngày Sinh:
        <input type="date" name="ngay_sinh">
        <br>
        <fieldset>
            <legend>Giới Tính</legend>
            <input type="radio" name="gt" value="0" checked>Nam
            <input type="radio" name="gt" value="1" >Nữ
            <legend>Cấp Độ</legend>
            <input type="radio" name="cap_do" value="0" checked>Admin
            <input type="radio" name="cap_do" value="1" >Super Admin
        </fieldset>
        Email:
        <input type="email" name="email">
        <br>
        <button>Thêm Admin</button>
    </form>
@stop
