@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm VGA</h4>
            </div>
    <form action="{{route('processInsertVga')}}" class="form-horizontal" method="post">
        @csrf
        <div class="card-content">
            <div class="row">
                <label class="col-sm-2 label-on-left">Loại VGA</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty has-error">
                        <label class="control-label"></label>
                        <input type="text" name="loaiVga" id="loaiVga" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" placeholder="Nhập Loại VGA">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="loaiVgaError"></span></code>
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
                        <input type="text" name="tenVga" id="tenVga" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" placeholder="Nhập Tên VGA">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="tenVgaError"></span></code>
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
                        <input type="text" name="dungLuongVga" id="dungLuongVga" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" placeholder="Nhập Dung Lượng">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="dungLuongVgaError"></span></code>
                    </label>
                </div>
            </div>
        </div>
        <button class="btn-success">Thêm VGA</button>
        <a href="{{url()->previous()}}">
            <button type="button" class="btn-danger">Quay Lại</button>
        </a>
    </form>
        </div>
    </div>
@stop