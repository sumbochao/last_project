@extends('LayoutWebsite.Master')
@section('content')
    <!-- Begin Login Content Area -->
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                    <!-- Login Form s-->
                    <form action="{{route('processKhachHangSignIn')}}" method="post">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Đăng Nhập</h4>
                            @if (Session::has('error'))
                                <span style="color: #ff171c" class="input-group-addon">
                                    {{Session::get('error')}}
                                </span>
                            @endif
                            @if (Session::has('success'))
                                <span style="color: #0058ff" class="input-group-addon">
                                    {{Session::get('success')}}
                                </span>
                            @endif
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Tài Khoản*</label>
                                    <input class="mb-0" type="text" name="taiKhoan" id="taiKhoanSignIn"
                                           placeholder="Nhập Tài Khoản">
                                    <label class="col-sm-12 label-on-right">
                                        <span id="taiKhoanSignInError"></span>
                                    </label>
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Mật Khẩu*</label>
                                    <input class="mb-0" type="password" name="matKhau" id="matKhauSignIn"
                                           placeholder="Nhập Mật Khẩu">
                                    <label class="col-sm-12 label-on-right">
                                        <span id="matKhauSignInError"></span>
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Nhớ Thông Tin Đăng Nhập</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                    <a href="#"> Quên Mật Khẩu</a>
                                </div>
                                <div class="col-md-12">
                                    <button class="register-button mt-0" onclick="return validateFormSignIn()">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <form action="{{route('processInsertKhachHang')}}" method="post">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Đăng Ký</h4>
                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Họ Tên*</label>
                                    <input class="mb-0" type="text" name="hoTenKhachHang" id="hoTenKhachHang"
                                           placeholder="Điền Họ Tên">
                                    <label class="col-sm-12 label-on-right">
                                        <span id="hoTenKhachHangError"></span>
                                    </label>
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Tài Khoản*</label>
                                    <input class="mb-0" type="text" name="taiKhoan" id="taiKhoan"
                                           placeholder="Nhập Tài Khoản">
                                    <label class="col-sm-12 label-on-right">
                                        <span id="taiKhoanError"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Mật Khẩu*</label>
                                    <input class="mb-0" type="password" name="matKhau" id="matKhau"
                                           placeholder="Nhập Mật Khẩu">
                                    <label class="col-sm-12 label-on-right">
                                        <span id="matKhauError"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Email*</label>
                                    <input class="mb-0" type="email" name="email" id="email" placeholder="Nhập Email">
                                    <label class="col-sm-12 label-on-right">
                                        <span id="emailError"></span>
                                    </label>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Số Điện Thoại</label>
                                    <input class="mb-0" type="text" name="sdt" id="sdt"
                                           placeholder="Nhập Số Điện Thoại">
                                    <label class="col-sm-12 label-on-right">
                                        <span id="sdtError"></span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>Giới Tính</label>
                                    Nam
                                    <input class="mb-0" type="radio" name="gioiTinh" value="0" checked>
                                    Nữ
                                    <input class="mb-0" type="radio" name="gioiTinh" value="1">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Ngày Sinh</label>
                                    <input class="mb-0" type="date" name="ngaySinh" id="ngaySinh">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Địa Chỉ</label>
                                    <input class="mb-0" type="text" name="diaChi" id="diaChi"
                                           placeholder="Nhập Địa Chỉ">
                                    <label class="col-sm-12 label-on-right">
                                        <span id="diaChiError"></span>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button class="register-button mt-0" onclick="return validateFormSignUp()">
                                        Đăng Ký
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content Area End Here -->
@stop
@push('js')
    <script type="text/javascript">
        function validateFormSignIn() {
            var taiKhoanSignIn = document.getElementById("taiKhoanSignIn");
            var taiKhoanSignInError = document.getElementById("taiKhoanSignInError");
            if (!taiKhoanSignIn.value.length) {
                taiKhoanSignInError.innerHTML = "<b><code>Tài khoản không được để trống</code></b>";
                taiKhoanSignIn.focus();
                return false;
            } else {
                taiKhoanSignInError.innerHTML = '';
            }

            var matKhauSignIn = document.getElementById("matKhauSignIn");
            var matKhauSignInError = document.getElementById("matKhauSignInError");
            if (!matKhauSignIn.value.length) {
                matKhauSignInError.innerHTML = "<b><code>Mật khẩu không được để trống</code></b>";
                matKhauSignIn.focus();
                return false;
            } else {
                matKhauSignInError.innerHTML = '';
            }
        }

        function validateFormSignUp() {
            var hoTenKhachHang = document.getElementById("hoTenKhachHang");
            var hoTenKhachHangError = document.getElementById("hoTenKhachHangError");
            if (!hoTenKhachHang.value.length) {
                hoTenKhachHangError.innerHTML = "<b><code>Họ tên không được để trống</code></b>";
                hoTenKhachHang.focus();
                return false;
            } else {
                hoTenKhachHangError.innerHTML = '';
            }

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
            if (isNaN(sdt.value) || !sdt.value) {
                sdtError.innerHTML = "<b><code>Số Ðiện Thoại phải là số</code></b>";
                sdt.focus();
                return false;
            } else {
                sdtError.innerHTML = '';
            }

            var ngaySinh = document.getElementById("ngaySinh");
            if (!ngaySinh.value.length) {
                alert('Chọn Ngày Sinh');
                return false;
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
    </script>
@endpush
