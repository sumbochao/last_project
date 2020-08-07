@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <form action="{{route('processUpdateKhachHang',['id'=>$khachHang->ma_khach_hang])}}"
                  enctype="multipart/form-data"
                  class="form-horizontal" method="post">
                @csrf
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Sửa Khách Hàng</h4>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tài Khoản</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="taiKhoan" id="taiKhoan" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$khachHang->tai_khoan}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="taiKhoanError"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Mật Khẩu</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="password" name="matKhau" id="matKhau" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$khachHang->mat_khau}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="matKhauError"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <legend>Ảnh Khách Hàng</legend>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{asset('img/image_placeholder.jpg')}}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="anhKhachHang">
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
                        <label class="col-sm-2 label-on-left">Họ Tên Khách Hàng</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="hoTenKhachHang" id="hoTenKhachHang"
                                       class="form-control error" required="true" aria-required="true"
                                       aria-invalid="true" value="{{$khachHang->ho_ten_khach_hang}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="hoTenKhachHangError"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Giới Tính</label>
                        <div class="col-sm-10 checkbox-radios">
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="gioiTinh" value="0"
                                           @if($khachHang->gioi_tinh==0)
                                           checked
                                        @endif
                                    >
                                    <span class="circle"></span>
                                    <span class="check"></span>
                                    Nam
                                </label>
                            </div>
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="gioiTinh" value="1"
                                           @if($khachHang->gioi_tinh==1)
                                           checked
                                        @endif
                                    >
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
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="ngaySinh" id="ngaySinh" class="form-control error"
                                       required="true" aria-required="true" aria-invalid="true"
                                       value="{{$khachHang->ngay_sinh}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="ngaySinhError"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Email</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="email" name="email" id="email" class="form-control error" required="true"
                                       aria-required="true"
                                       aria-invalid="true" value="{{$khachHang->email}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="emailError"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Số Điện Thoại</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="number" name="sdt" id="sdt" class="form-control error" required="true"
                                       aria-required="true"
                                       aria-invalid="true" value="{{$khachHang->sdt}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="sdtError"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Địa Chỉ</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input name="diaChi" id="diaChi" class="form-control error" required="true"
                                       aria-required="true"
                                       aria-invalid="true" value="{{$khachHang->dia_chi}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <code><span id="diaChiError"></span></code>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success" onclick="return validateForm()">Sửa Khách Hàng</button>
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
            if (taiKhoan.value.length < 5) {
                taiKhoanError.innerHTML = "<b>Tài khoản ít nhất 5 kí tự</b>";
                taiKhoan.focus();
                return false;
            } else {
                taiKhoanError.innerHTML = "";
            }
            var matKhau = document.getElementById("matKhau");
            var matKhauError = document.getElementById("matKhauError");
            if (matKhau.value.length < 3) {
                matKhauError.innerHTML = "<b>Mật khẩu ít nhất 3 kí tự</b>";
                matKhau.focus();
                return false;
            } else {
                matKhauError.innerHTML = "";
            }
            var hoTenKhachHang = document.getElementById("hoTenKhachHang");
            var hoTenKhachHangError = document.getElementById("hoTenKhachHangError");
            if (hoTenKhachHang.value.length < 5) {
                hoTenKhachHangError.innerHTML = "<b>Họ tên ít nhất 5 ký tự</b>";
                hoTenKhachHang.focus();
                return false;
            } else {
                hoTenKhachHangError.innerHTML = "";
            }

            var ngaySinh = document.getElementById("ngaySinh");
            if (!ngaySinh.value.length) {
                alert('Chọn Ngày Sinh');
                return false;
            }
            var email = document.getElementById("email");
            var emailError = document.getElementById("emailError");
            if (email.value.length < 10) {
                emailError.innerHTML = "<b>Email ít nhất 10 ký tự</b>";
                email.focus();
                return false;
            } else {
                emailError.innerHTML = "";
            }
            var sdt = document.getElementById("sdt");
            var sdtError = document.getElementById("sdtError");
            if (isNaN(sdt.value) || !sdt.value || sdt.value.length < 10 || sdt.value.length > 12) {
                sdtError.innerHTML = "<b>Số Ðiện Thoại phải là số,ít nhất 10 số và nhỏ hơn 12 số</b>";
                sdt.focus();
                return false;
            } else {
                sdtError.innerHTML = "";
            }
            var diaChi = document.getElementById("diaChi");
            var diaChiError = document.getElementById("diaChiError");
            if (diaChi.value.length < 20) {
                diaChiError.innerHTML = "<b>Ðịa chỉ ít nhất 20 kí tự</b>";
                diaChi.focus();
                return false;
            } else {
                diaChiError.innerHTML = "";
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
