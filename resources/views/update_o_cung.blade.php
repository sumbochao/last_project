@extends('layout_admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Sửa Ổ Cứng</h4>
            </div>
            <form action="{{route('process_update_o_cung',['id'=>$o_cung->ma_o_cung])}}" class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Loại Ổ Cứng</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="loai_o_cung" id="loai_o_cung" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$o_cung->loai_o_cung}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="loai_o_cung_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Dung Lượng</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="dung_luong" id="dung_luong" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$o_cung->dung_luong_o_cung}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="dung_luong_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success">Sửa Ổ Cứng</button>
                <a href="{{url()->previous()}}">
                    <button type="button" class="btn-danger">Quay Lại</button>
                </a>
            </form>
        </div>
    </div>
@stop
