@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Sửa RAM</h4>
            </div>
    <form action="{{route('processUpdateRam',['id'=>$ram->ma_ram])}}" class="form-horizontal" method="post">
        @csrf
        <div class="card-content">
            <div class="row">
                <label class="col-sm-2 label-on-left">Loại RAM</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty has-error">
                        <label class="control-label"></label>
                        <input type="text" name="loaiRam" id="loaiRam" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" value="{{$ram->loai_ram}}">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="loaiRamError"></span></code>
                    </label>
                </div>
            </div>
        </div>
        <div class="card-content">
            <div class="row">
                <label class="col-sm-2 label-on-left">Dung Lượng RAM</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty has-error">
                        <label class="control-label"></label>
                        <input type="text" name="dungLuongRam" id="dungLuongRam" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" value="{{$ram->dung_luong_ram}}">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="dungLuongRamError"></span></code>
                    </label>
                </div>
            </div>
        </div>
        <div class="card-content">
            <div class="row">
                <label class="col-sm-2 label-on-left">Tần Số RAM</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty has-error">
                        <label class="control-label"></label>
                        <input type="text" name="tanSoRam" id="tanSoRam" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" value="{{$ram->tan_so_ram}}">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="tanSoRamError"></span></code>
                    </label>
                </div>
            </div>
        </div>
        <button class="btn-success">Sửa RAM</button>
        <a href="{{url()->previous()}}">
            <button type="button" class="btn-danger">Quay Lại</button>
        </a>
    </form>
        </div>
    </div>
@stop
