@extends('layout_admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm Admin</h4>
            </div>
            <form action="{{route('process_insert_admin')}}" enctype="multipart/form-data"
                  class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tài Khoản:</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="tai_khoan" id="tai_khoan" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập tài khoản">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="tai_khoan_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Mật Khẩu:</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="password" name="mat_khau" id="mat_khau" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập Mật Khẩu">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="mat_khau_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <legend>Ảnh Admin:</legend>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{asset('img/image_placeholder.jpg')}}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="anh_admin">
                                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                       data-dismiss="fileinput">
                                        <i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Họ Tên Admin:</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="ho_ten_admin" id="ho_ten_admin"
                                       class="form-control error" required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập họ tên">
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
                        <label class="col-sm-2 label-on-left">Cấp Độ</label>
                        <div class="col-sm-10 checkbox-radios">
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="cap_do" value="0" checked>
                                    <span class="circle"></span>
                                    <span class="check"></span>
                                    Admin
                                </label>
                            </div>
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="cap_do" value="1">
                                    <span class="circle"></span>
                                    <span class="check"></span>
                                    SuperAdmin
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Giới Tính</label>
                        <div class="col-sm-10 checkbox-radios">
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="gioi_tinh" value="0" checked>
                                    <span class="circle"></span>
                                    <span class="check"></span>
                                    Nam
                                </label>
                            </div>
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="gioi_tinh" value="1">
                                    <span class="circle"></span>
                                    <span class="check"></span>
                                    Nữ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Ngày Sinh:</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="ngay_sinh" id="ngay_sinh" class="form-control error"
                                       required="true" aria-required="true" aria-invalid="true"
                                       placeholder="Chọn Ngày Sinh">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="ngay_sinh_error"></span></code>
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
                                       aria-invalid="true" placeholder="Nhập email">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="email_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Số Điện Thoại:</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="number" name="sdt" id="sdt" class="form-control error" required="true"
                                       aria-required="true"
                                       aria-invalid="true" placeholder="Nhập số điện thoại">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="sdt_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Địa Chỉ:</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input name="dia_chi" id="dia_chi" class="form-control error" required="true"
                                       aria-required="true"
                                       aria-invalid="true" placeholder="Nhập địa chỉ">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="dia_chi_error"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success" onclick="return validateForm()">Thêm Admin</button>
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
