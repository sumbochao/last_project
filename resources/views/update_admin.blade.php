@extends('layout_admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
    <form action="{{route('process_update_admin',['id'=>$admin->ma_admin])}}" class="form-horizontal" method="post">
        @csrf
        <div class="card-header card-header-text" data-background-color="rose">
            <h4 class="card-title">Sửa Admin</h4>
        </div>
        <div class="card-content">
            <div class="row">
                <label class="col-sm-2 label-on-left">Họ Tên Admin:</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty has-error">
                        <label class="control-label"></label>
                        <input type="text" name="ho_ten_admin" id="ho_ten_admin"
                               class="form-control error" required="true" aria-required="true"
                               aria-invalid="true" value="{{$admin->ho_ten_admin}}">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="ho_ten_admin_error"></span></code>
                    </label>
                </div>
            </div>
        </div>
        <div class="card-content">
            <div class="row">
                <label class="col-sm-2 label-on-left">Email:</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty has-error">
                        <label class="control-label"></label>
                        <input type="email" name="email" id="email" class="form-control error" required="true"
                               aria-required="true"
                               aria-invalid="true" value="{{$admin->email}}">
                        <span class="material-input"></span>
                    </div>
                    <label class="col-sm-3 label-on-right">
                        <code><span id="email_error"></span></code>
                    </label>
                </div>
            </div>
        </div>
        <button class="btn-success" onclick="return validateForm()">Sửa Admin</button>
        <a href="{{url()->previous()}}">
            <button type="button" class="btn-danger">Quay Lại</button>
        </a>
    </form>
        </div>
    </div>
@stop
@push('js')
    <script>
        $(function () {
            $('#ngay_sinh').datetimepicker({
                format: 'YYYY-MM-DD',
                icons: {
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right'
                }
            });
        });
    </script>
    <script language="javascript">
        function validateForm() {
            var tai_khoan = document.getElementById("tai_khoan");
            var tai_khoan_error = document.getElementById("tai_khoan_error");
            if (tai_khoan.value.length < 5) {
                tai_khoan_error.innerHTML = "<b>Tài khoản ít nhất 5 kí tự</b>";
                tai_khoan.focus();
                return false;
            } else {
                tai_khoan_error.innerHTML = "";
            }
            var mat_khau = document.getElementById("mat_khau");
            var mat_khau_error = document.getElementById("mat_khau_error");
            if (mat_khau.value.length < 3) {
                mat_khau_error.innerHTML = "<b>Mật khẩu ít nhất 3 kí tự</b>";
                mat_khau.focus();
                return false;
            } else {
                mat_khau_error.innerHTML = "";
            }
            var ho_ten_giang_vien = document.getElementById("ho_ten_giang_vien");
            var ho_ten_giang_vien_error = document.getElementById("ho_ten_giang_vien_error");
            if (ho_ten_giang_vien.value.length < 5) {
                ho_ten_giang_vien_error.innerHTML = "<b>Họ tên ít nhất 5 ký tự</b>";
                ho_ten_giang_vien.focus();
                return false;
            } else {
                ho_ten_giang_vien_error.innerHTML = "";
            }
            var chon_nganh = document.getElementById("chon_nganh");
            if (chon_nganh.value == '0') {
                alert('Chọn Ngành');
                return false;
            }
            var ngay_sinh = document.getElementById("ngay_sinh");
            if (ngay_sinh.value.length == '') {
                alert('Chọn Ngày Sinh');
                return false;
            }
            var email = document.getElementById("email");
            var email_error = document.getElementById("email_error");
            if (email.value.length < 10) {
                email_error.innerHTML = "<b>Email ít nhất 10 ký tự</b>";
                email.focus();
                return false;
            } else {
                email_error.innerHTML = "";
            }
            var sdt = document.getElementById("sdt");
            var sdt_error = document.getElementById("sdt_error");
            if (isNaN(sdt.value) || sdt.value == "" || sdt.value.length < 10 || sdt.value.length > 12) {
                sdt_error.innerHTML = "<b>Số Ðiện Thoại phải là số,ít nhất 10 số và nhỏ hơn 12 số</b>";
                sdt.focus();
                return false;
            } else {
                sdt_error.innerHTML = "";
            }
            var dia_chi = document.getElementById("dia_chi");
            var dia_chi_error = document.getElementById("dia_chi_error");
            if (dia_chi.value.length < 20) {
                dia_chi_error.innerHTML = "<b>Ðịa chỉ ít nhất 20 kí tự</b>";
                dia_chi.focus();
                return false;
            } else {
                dia_chi_error.innerHTML = "";
            }
        }
    </script>
    <script type="text/javascript">
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

