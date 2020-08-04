@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm RAM</h4>
            </div>
            <form action="{{route('processInsertRam')}}" class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Loại RAM</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="loaiRam" id="loaiRam" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập Loại RAM">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="loaiRamError"></span>
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
                                       aria-invalid="true" placeholder="Nhập Dung Lượng RAM">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="dungLuongRamError"></span>
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
                                       aria-invalid="true" placeholder="Nhập Tần Số RAM">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="tanSoRamError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success" onclick="return validateForm()">Thêm RAM</button>
                <a href="{{url()->previous()}}">
                    <button type="button" class="btn-danger">Quay Lại</button>
                </a>
            </form>
        </div>
    </div>
@stop
@push('js')
    <script type="text/javascript">
        function validateForm() {
            var loaiRam = document.getElementById("loaiRam");
            var loaiRamError = document.getElementById("loaiRamError");
            if (!loaiRam.value.length) {
                loaiRamError.innerHTML = "<b><code>Loại ram không được để trống</code></b>";
                loaiRam.focus();
                return false;
            } else {
                loaiRamError.innerHTML = '';
            }

            var dungLuongRam = document.getElementById("dungLuongRam");
            var dungLuongRamError = document.getElementById("dungLuongRamError");
            if (!dungLuongRam.value.length) {
                dungLuongRamError.innerHTML = "<b><code>Dung lượng ram không được để trống</code></b>";
                dungLuongRam.focus();
                return false;
            } else {
                dungLuongRamError.innerHTML = '';
            }

            var tanSoRam = document.getElementById("tanSoRam");
            var tanSoRamError = document.getElementById("tanSoRamError");
            if (!tanSoRam.value.length) {
                tanSoRamError.innerHTML = "<b><code>Tần số ram không được để trống</code></b>";
                tanSoRam.focus();
                return false;
            } else {
                tanSoRamError.innerHTML = '';
            }
        }
    </script>
@endpush
