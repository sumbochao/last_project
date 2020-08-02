@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Sửa Cpu</h4>
            </div>
            <form action="{{route('processUpdateCpu',['id'=>$cpu->ma_cpu])}}" class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tên Cpu</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="tenCpu" id="tenCpu" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$cpu->ten_cpu}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="tenCpuError"></span></code>
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
                                <input type="text" name="tanSoCpu" id="tanSoCpu" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$cpu->tan_so_cpu}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="tanSoCpuError"></span></code>
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
                                <input type="text" name="boNhoCache" id="boNhoCache" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$cpu->bo_nho_cache}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="boNhoCacheError"></span></code>
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
                                <input type="text" name="dongCpu" id="dongCpu" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$cpu->dong_cpu}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="dongCpuError"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success">Sửa Cpu</button>
                <a href="{{url()->previous()}}">
                    <button type="button" class="btn-danger">Quay Lại</button>
                </a>
            </form>
        </div>
    </div>
@stop
