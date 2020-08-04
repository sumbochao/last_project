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
                            <label class="col-sm-12 label-on-right">
                                <span id="loaiVgaError"></span>
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
                            <label class="col-sm-12 label-on-right">
                                <span id="tenVgaError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Dung Lượng VGA</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="dungLuongVga" id="dungLuongVga" class="form-control"
                                       placeholder="Nhập Dung Lượng">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="dungLuongVgaError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success" onclick="return validateForm()">Thêm VGA</button>
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
            var loaiVga = document.getElementById("loaiVga");
            var loaiVgaError = document.getElementById("loaiVgaError");
            if (!loaiVga.value.length) {
                loaiVgaError.innerHTML = "<b><code>Loại vga không được để trống</code></b>";
                loaiVga.focus();
                return false;
            } else {
                loaiVgaError.innerHTML = '';
            }
            var tenVga = document.getElementById("tenVga");
            var tenVgaError = document.getElementById("tenVgaError");
            if (!tenVga.value.length) {
                tenVgaError.innerHTML = "<b><code>Tên vga không được để trống</code></b>";
                tenVga.focus();
                return false;
            } else {
                tenVgaError.innerHTML = '';
            }
        }
    </script>
@endpush
