@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm Loại Máy</h4>
            </div>
            <form action="{{route('processInsertLoaiMay')}}" class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tên Loại Máy</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="tenLoaiMay" id="tenLoaiMay" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Điền Tên Loại Máy">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="tenLoaiMayError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success">Thêm Loại Máy</button>
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
            var tenLoaiMay = document.getElementById("tenLoaiMay");
            var tenLoaiMayError = document.getElementById("tenLoaiMayError");
            if (!tenLoaiMay.value.length) {
                tenLoaiMayError.innerHTML = "<b><code>Tên loại máy không được để trống</code></b>";
                tenLoaiMay.focus();
                return false;
            } else {
                tenLoaiMayError.innerHTML = '';
            }
        }
    </script>
@endpush
