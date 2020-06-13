@extends('layout_admin.master')
@section('content')
@push('css')
<style type="text/css">
    h1{
        color: #ff30de;
    }
</style>
@endpush
<h1>Thêm Cấu Hình</h1>
<form action="{{route('process_insert_cau_hinh')}}" method="post">
    @csrf
    Tên Cấu Hình
    <input type="text" name="ten_cau_hinh">
    <br>
    <button>Thêm Cấu Hình</button>
</form>
@stop
