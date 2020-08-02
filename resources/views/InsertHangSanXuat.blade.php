@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm Hãng Sản Xuất</h4>
            </div>
    <form action="{{route('processInsertHangSanXuat')}}" class="form-horizontal" method="post">
        @csrf
        <div class="card-content">
            <div class="row">
                <label class="col-sm-2 label-on-left">Tên Hãng Sản Xuất</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty has-error">
                        <label class="control-label"></label>
                        <input type="text" name="tenHangSanXuat" id="tenHangSanXuat" class="form-control error"
                               required="true" aria-required="true"
                               aria-invalid="true" placeholder="Điền Tên Hãng Sản Xuất">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="tenHangSanXuatError"></span></code>
                    </label>
                </div>
            </div>
        </div>
        <button class="btn-success">Thêm Hãng Sản Xuất</button>
        <a href="{{url()->previous()}}">
            <button type="button" class="btn-danger">Quay Lại</button>
        </a>
    </form>
        </div>
    </div>
@stop
