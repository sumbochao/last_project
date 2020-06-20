@extends('layout_admin.master')
@section('content')
    @push('css')
        <style type="text/css">
            h1{
                color: #ff30de;
            }
        </style>
    @endpush
    <h1>Sửa Cpu</h1>
    <form action="{{route('process_update_cpu',['id'=>$cpu->ma_cpu])}}" method="post">
        @csrf
        Tên Cpu
        <input type="text" name="ten_cpu" value="{{$cpu->ten_cpu}}">
        <br>
        Tần Số:
        <input type="text" name="tan_so" value="{{$cpu->tan_so}}">
        <br>
        Bộ nhớ Cache:
        <input type="text" name="bo_nho_cache" value="{{$cpu->bo_nho_cache}}">
        <br>
        Dòng Cpu
        <input type="text" name="dong_cpu" value="{{$cpu->dong_cpu}}">
        <br>
        <button>Sửa Cpu</button>
    </form>
@stop
