@extends('layout_admin.master')
@section('content')
@push('css')
<style type="text/css">
    h1{
        color: #ff30de;
    }
</style>
@endpush
<h1>Thêm Cpu</h1>
<form action="{{route('process_insert_cpu')}}" method="post">
    @csrf
    Tên Cpu
    <input type="text" name="ten_cpu">
    <br>
    Tần Số:
    <input type="text" name="tan_so">
    <br>
    Bộ nhớ cache
    <input type="text" name="bo_nho_cache">
    <br>
    Dòng Cpu
    <input type="text" name="dong_cpu">
    <br>
    <button>Thêm Cpu</button>
</form>
@stop
