@extends('layout_admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm RAM</h4>
            </div>
    <form action="{{route('process_insert_ram')}}" class="form-horizontal" method="post">
        @csrf
        <div class="card-content">
            <div class="row">
                <label class="col-sm-2 label-on-left">Loại RAM</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty has-error">
                        <label class="control-label"></label>
                        <input type="text" name="loai_ram" id="loai_ram" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" placeholder="Nhập Loại RAM">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="loai_ram_error"></span></code>
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
                        <input type="text" name="dung_luong_ram" id="dung_luong_ram" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" placeholder="Nhập Dung Lượng RAM">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="dung_luong_ram_error"></span></code>
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
                        <input type="text" name="tan_so_ram" id="tan_so_ram" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" placeholder="Nhập Tần Số RAM">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="tan_so_ram_error"></span></code>
                    </label>
                </div>
            </div>
        </div>
        <button class="btn-success">Thêm RAM</button>
        <a href="{{url()->previous()}}">
            <button type="button" class="btn-danger">Quay Lại</button>
        </a>
    </form>
        </div>
    </div>
@stop
