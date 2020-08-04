@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <form action="{{route('processInsertThanhToan')}}"
                  class="form-horizontal" method="post">
                @csrf
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Thêm Phương Thức Thanh Toán</h4>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Phương Thức Thanh Toán:</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="phuongThucThanhToan" id="phuongThucThanhToan"
                                       class="form-control error" required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Điền Tên Phương Thức Thanh Toán">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="phuongThucThanhToanError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success" onclick="return validateForm()">Thêm Phương Thức Thanh Toán</button>
                <a href="{{url()->previous()}}">
                    <button type="button" class="btn-danger">Quay Lại</button>
                </a>
            </form>
        </div>
    </div>
@stop
@push('js')
    <script language="javascript">
        function validateForm() {
            var phuongThucThanhToan = document.getElementById("phuongThucThanhToan");
            var phuongThucThanhToanError = document.getElementById("phuongThucThanhToanError");
            if (!phuongThucThanhToan.value.length) {
                phuongThucThanhToanError.innerHTML = "<b><code>Phương thức thanh toán không để trống</code></b>";
                phuongThucThanhToan.focus();
                return false;
            } else {
                phuongThucThanhToanError.innerHTML = "";
            }
        }

        function setFormValidation(id) {
            $(id).validate({
                errorPlacement: function (error, element) {
                    $(element).closest('div').addClass('has-error');
                }
            });
        }

        $(document).ready(function () {
            setFormValidation('#RegisterValidation');
            setFormValidation('#TypeValidation');
            setFormValidation('#RangeValidation');
        });
    </script>
@endpush
