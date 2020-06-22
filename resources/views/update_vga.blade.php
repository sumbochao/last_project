@extends('layout_admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Sửa VGA</h4>
            </div>
            <form action="{{route('process_update_vga',['id'=>$vga->ma_vga])}}" class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Loại VGA</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="loai_vga" id="loai_vga" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$vga->loai_vga}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="loai_vga_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tên VGA</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="ten_vga" id="ten_vga" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$vga->ten_vga}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="ten_vga_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Dung Lượng VGA</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="dung_luong" id="dung_luong" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$vga->dung_luong_vga}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="dung_luong_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success">Sửa VGA</button>
                <a href="{{url()->previous()}}">
                    <button type="button" class="btn-danger">Quay Lại</button>
                </a>
            </form>
        </div>
    </div>
@stop
