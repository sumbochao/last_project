@extends('layout_admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm Cpu</h4>
            </div>
<form action="{{route('process_insert_cpu')}}" class="form-horizontal" method="post">
    @csrf
    <div class="card-content">
        <div class="row">
            <label class="col-sm-2 label-on-left">Tên Cpu</label>
            <div class="col-sm-10">
                <div class="form-group label-floating is-empty has-error">
                    <label class="control-label"></label>
                    <input type="text" name="ten_cpu" id="ten_cpu" class="form-control error"
                           required="true" aria-required="true"
                           aria-invalid="true" placeholder="Nhập Tên CPU">
                    <span class="material-input"></span>
                </div>
                <label class="col-sm-3 label-on-right">
                    <code><span id="ten_cpu_error"></span></code>
                </label>
            </div>
        </div>
    </div>
    <div class="card-content">
        <div class="row">
            <label class="col-sm-2 label-on-left">Tần Số CPU</label>
            <div class="col-sm-10">
                <div class="form-group label-floating is-empty has-error">
                    <label class="control-label"></label>
                    <input type="text" name="tan_so_cpu" id="tan_so_cpu" class="form-control error"
                           required="true" aria-required="true"
                           aria-invalid="true" placeholder="Nhập Tần Số CPU">
                    <span class="material-input"></span>
                </div>
                <label class="col-sm-3 label-on-right">
                    <code><span id="tan_so_cpu_error"></span></code>
                </label>
            </div>
        </div>
    </div>
    <div class="card-content">
        <div class="row">
            <label class="col-sm-2 label-on-left">Bộ nhớ cache</label>
            <div class="col-sm-10">
                <div class="form-group label-floating is-empty has-error">
                    <label class="control-label"></label>
                    <input type="text" name="bo_nho_cache" id="bo_nho_cache" class="form-control error"
                           required="true" aria-required="true"
                           aria-invalid="true" placeholder="Nhập Bộ Nhớ Cache">
                    <span class="material-input"></span>
                </div>
                <label class="col-sm-3 label-on-right">
                    <code><span id="bo_nho_cache_error"></span></code>
                </label>
            </div>
        </div>
    </div>
    <div class="card-content">
        <div class="row">
            <label class="col-sm-2 label-on-left">Dòng Cpu</label>
            <div class="col-sm-10">
                <div class="form-group label-floating is-empty has-error">
                    <label class="control-label"></label>
                    <input type="text" name="dong_cpu" id="dong_cpu" class="form-control error"
                           required="true" aria-required="true"
                           aria-invalid="true" placeholder="Dòng Cpu">
                    <span class="material-input"></span>
                </div>
                <label class="col-sm-3 label-on-right">
                    <code><span id="dong_cpu_error"></span></code>
                </label>
            </div>
        </div>
    </div>
    <button class="btn-success">Thêm Cpu</button>
    <a href="{{url()->previous()}}">
        <button type="button" class="btn-danger">Quay Lại</button>
    </a>
</form>
        </div>
    </div>
@stop
