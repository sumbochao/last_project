@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Sửa Ổ Cứng</h4>
            </div>
            <form action="{{route('processUpdateOCung',['id'=>$oCung->ma_o_cung])}}" class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Loại Ổ Cứng</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="loaiOCung" id="loaiOCung" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$oCung->loai_o_cung}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="loaiOCungError"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Dung Lượng Ổ Cứng</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="dungLuongOCung" id="dungLuongOCung" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$oCung->dung_luong_o_cung}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="dungLuongOCungError"></span></code>
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