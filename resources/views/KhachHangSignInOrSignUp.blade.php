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
                                <input class="mb-0" type="text" name="taiKhoan" placeholder="Nhập Tài Khoản">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Mật Khẩu*</label>
                                <input class="mb-0" type="password" name="matKhau" placeholder="Nhập Mật Khẩu">
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
                                <button class="register-button mt-0">Login</button>
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
                                <input class="mb-0" type="text" name="hoTenKhachHang" placeholder="Điền Họ Tên">
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>Tài Khoản*</label>
                                <input class="mb-0" type="text" name="taiKhoan" placeholder="Nhập Tài Khoản">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Mật Khẩu*</label>
                                <input class="mb-0" type="password" name="matKhau" placeholder="Nhập Mật Khẩu">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email*</label>
                                <input class="mb-0" type="email" name="email" placeholder="Nhập Email">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Số Điện Thoại</label>
                                <input class="mb-0" type="text" name="sdt" placeholder="Nhập Số Điện Thoại">
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
                                <input class="mb-0" type="date" name="ngaySinh">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Địa Chỉ</label>
                                <input class="mb-0" type="text" name="diaChi" placeholder="Nhập Địa Chỉ">
                            </div>
                            <div class="col-12">
                                <button class="register-button mt-0">Đăng Ký</button>
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
