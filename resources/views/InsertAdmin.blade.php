@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm Admin</h4>
            </div>
            <form action="{{route('processInsertAdmin')}}" enctype="multipart/form-data"
                  class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tài Khoản</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="taiKhoan" id="taiKhoan" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập tài khoản">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="taiKhoanError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Mật Khẩu</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="password" name="matKhau" id="matKhau" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập Mật Khẩu">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="matKhauError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <legend>Ảnh Admin</legend>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{asset('img/image_placeholder.jpg')}}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="anhAdmin" id="anhAdmin">
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
                        <label class="col-sm-2 label-on-left">Họ Tên Admin</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="hoTenAdmin" id="hoTenAdmin"
                                       class="form-control error" required="true" aria-required="true"
                                       aria-invalid="true" placeholder="Nhập họ tên">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="hoTenAdminError"></span>
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
                                    <input type="radio" name="capDo" value="0" checked>
                                    <span class="circle"></span>
                                    <span class="check"></span>
                                    Admin
                                </label>
                            </div>
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="capDo" value="1">
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
                                    <input type="radio" name="gioiTinh" value="0" checked>
                                    <span class="circle"></span>
                                    <span class="check"></span>
                                    Nam
                                </label>
                            </div>
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="gioiTinh" value="1">
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
                        <label class="col-sm-2 label-on-left">Ngày Sinh</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="ngaySinh" id="ngaySinh" class="form-control error"
                                       required="true" aria-required="true" aria-invalid="true"
                                       placeholder="Chọn Ngày Sinh">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="ngaySinhError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Email</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="email" name="email" id="email" class="form-control error" required="true"
                                       aria-required="true"
                                       aria-invalid="true" placeholder="Nhập email">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="emailError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Số Điện Thoại</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="number" name="sdt" id="sdt" class="form-control error" required="true"
                                       aria-required="true"
                                       aria-invalid="true" placeholder="Nhập số điện thoại">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="sdtError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Địa Chỉ</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty has-error">
                                <label class="control-label"></label>
                                <input type="text" name="diaChi" id="diaChi" class="form-control error" required="true"
                                       aria-required="true"
                                       aria-invalid="true" placeholder="Nhập địa chỉ">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-12 label-on-right">
                                <span id="diaChiError"></span>
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
    <script type="text/javascript">
        $(function () {
            $('#ngaySinh').datetimepicker({
                format: 'YYYY-MM-DD',
                icons: {
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right'
                }
            });
        });

        function validateForm() {
            var taiKhoan = document.getElementById("taiKhoan");
            var taiKhoanError = document.getElementById("taiKhoanError");
            if (!taiKhoan.value.length) {
                taiKhoanError.innerHTML = "<b><code>Tài khoản không được để trống</code></b>";
                taiKhoan.focus();
                return false;
            } else {
                taiKhoanError.innerHTML = '';
            }
            var matKhau = document.getElementById("matKhau");
            var matKhauError = document.getElementById("matKhauError");
            if (!matKhau.value.length) {
                matKhauError.innerHTML = "<b><code>Mật khẩu không được để trống</code></b>";
                matKhau.focus();
                return false;
            } else {
                matKhauError.innerHTML = '';
            }

            var anhAdmin = document.getElementById("anhAdmin");
            if (!anhAdmin.value.length) {
                alert('Thêm Ảnh Admin');
                return false;
            }

            var hoTenAdmin = document.getElementById("hoTenAdmin");
            var hoTenAdminError = document.getElementById("hoTenAdminError");
            if (!hoTenAdmin.value.length) {
                hoTenAdminError.innerHTML = "<b><code>Họ tên không được để trống</code></b>";
                hoTenAdmin.focus();
                return false;
            } else {
                hoTenAdminError.innerHTML = '';
            }

            var ngaySinh = document.getElementById("ngaySinh");
            if (!ngaySinh.value.length) {
                alert('Chọn Ngày Sinh');
                return false;
            }

            var email = document.getElementById("email");
            var emailError = document.getElementById("emailError");
            if (email.value.length < 10) {
                emailError.innerHTML = "<b><code>Email ít nhất 10 ký tự</code></b>";
                email.focus();
                return false;
            } else {
                emailError.innerHTML = '';
            }

            var sdt = document.getElementById("sdt");
            var sdtError = document.getElementById("sdtError");
            if (isNaN(sdt.value) || !sdt.value || sdt.value.length < 10 || sdt.value.length > 12) {
                sdtError.innerHTML = "<b><code>Số Ðiện Thoại phải là số,ít nhất 10 số và nhỏ hơn 12 số</code></b>";
                sdt.focus();
                return false;
            } else {
                sdtError.innerHTML = '';
            }

            var diaChi = document.getElementById("diaChi");
            var diaChiError = document.getElementById("diaChiError");
            if (diaChi.value.length < 20) {
                diaChiError.innerHTML = "<b><code>Ðịa chỉ ít nhất 20 kí tự</code></b>";
                diaChi.focus();
                return false;
            } else {
                diaChiError.innerHTML = '';
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
