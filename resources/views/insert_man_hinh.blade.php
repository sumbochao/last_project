@extends('layout_admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm Màn Hình</h4>
            </div>
            <form action="{{route('process_insert_man_hinh')}}" class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Kích Cỡ</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="kich_co" id="kich_co" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập Kích Cỡ">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="kich_co_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Độ Phân Giải</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="do_phan_giai" id="do_phan_giai" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập Độ Phân Giải">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="do_phan_giai_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tần Số Màn Hình</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="tan_so_man_hinh" id="tan_so_man_hinh" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập Tần Số Màn Hình">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="tan_so_man_hinh_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tấm Nền</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="tam_nen" id="tam_nen" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập Tấm Nền">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="tam_nen_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success">Thêm Màn Hình</button>
                <a href="{{url()->previous()}}">
                    <button type="button" class="btn-danger">Quay Lại</button>
                </a>
            </form>
        </div>
    </div>
@stop
