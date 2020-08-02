@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <form action="{{route('processInsertSanPham')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Thêm Sản Phẩm</h4>
                </div>
                @csrf
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <legend>Ảnh Sản Phẩm</legend>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{asset('img/image_placeholder.jpg')}}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="anhSanPham" id="anhSanPham">
                                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                       data-dismiss="fileinput">
                                        <i class="fa fa-times"></i> Remove</a>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="anh_error">Chọn Ảnh</span></code>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Tên Hãng Sản Xuất</label>
                            <div class="col-lg-5 col-md-6 col-sm-3">
                                <div class="bootstrap-select">
                                    <select name="maHangSanXuat" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Tên Hãng Sản Xuất</option>
                                        @foreach ($arrayHangSanXuat as $hangSanXuat)
                                            <option value="{{$hangSanXuat->ma_hang_san_xuat}}">{{$hangSanXuat->ten_hang_san_xuat}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Loại Máy</label>
                            <div class="col-lg-5 col-md-6 col-sm-3">
                                <div class="bootstrap-select">
                                    <select name="maLoaiMay" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Loại Máy</option>
                                        @foreach ($arrayLoaiMay as $loaiMay)
                                            <option value="{{$loaiMay->ma_loai_may}}">{{$loaiMay->ten_loai_may}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Màn Hình</label>
                            <div class="col-lg-5 col-md-6 col-sm-3">
                                <div class="bootstrap-select">
                                    <select name="maManHinh" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Màn Hình</option>
                                        @foreach ($arrayManHinh as $manHinh)
                                            <option value="{{$manHinh->ma_man_hinh}}">
                                                {{$manHinh->kich_co}}
                                                {{$manHinh->do_phan_giai}}
                                                {{$manHinh->tan_so_man_hinh}}
                                                {{$manHinh->tam_nen}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">CPU</label>
                            <div class="col-lg-5 col-md-6 col-sm-3">
                                <div class="bootstrap-select">
                                    <select name="maCpu" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn CPU</option>
                                        @foreach ($arrayCpu as $cpu)
                                            <option value="{{$cpu->ma_cpu}}">
                                                {{$cpu->ten_cpu}}
                                                ({{$cpu->tan_so_cpu}}/{{$cpu->bo_nho_cache}})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">RAM</label>
                            <div class="col-lg-5 col-md-6 col-sm-3">
                                <div class="bootstrap-select">
                                    <select name="maRam" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn RAM</option>
                                        @foreach ($arrayRam as $ram)
                                            <option value="{{$ram->ma_ram}}">
                                                {{$ram->dung_luong_ram}}
                                                {{$ram->loai_ram}}
                                                {{$ram->tan_so_ram}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">VGA</label>
                            <div class="col-lg-5 col-md-6 col-sm-3">
                                <div class="bootstrap-select">
                                    <select name="maVga" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn VGA</option>
                                        @foreach ($arrayVga as $vga)
                                            <option value="{{$vga->ma_vga}}">
                                                {{$vga->ten_vga}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Ổ Cứng</label>
                            <div class="col-lg-5 col-md-6 col-sm-3">
                                <div class="bootstrap-select">
                                    <select name="maOCung" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Ổ Cứng</option>
                                        @foreach ($arrayOCung as $oCung)
                                            <option value="{{$oCung->ma_o_cung}}">
                                                {{$oCung->dung_luong_o_cung}}
                                                {{$oCung->loai_o_cung}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Tên Sản Phẩm</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty has-error">
                                    <label class="control-label"></label>
                                    <input type="text" name="tenSanPham" id="tenSanPham" class="form-control error"
                                           required="true" aria-required="true"
                                           aria-invalid="true" placeholder="Điền Tên Sản Phẩm">
                                    <span class="material-input"></span>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="tenSanPhamError"></span></code>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Mô Tả</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty has-error">
                                    <label class="control-label"></label>
                                    <input type="text" name="moTa" id="moTa" class="form-control error"
                                           required="true" aria-required="true"
                                           aria-invalid="true" placeholder="Mô Tả Sản Phẩm">
                                    <span class="material-input"></span>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="moTaError"></span></code>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Số Lượng</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty has-error">
                                    <label class="control-label"></label>
                                    <input type="number" name="soLuong" id="soLuong" class="form-control error"
                                           required="true" aria-required="true"
                                           aria-invalid="true" placeholder="Nhập Số Lượng">
                                    <span class="material-input"></span>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="soLuongError"></span></code>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Giá</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty has-error">
                                    <label class="control-label"></label>
                                    <input type="text" name="gia" id="gia" class="form-control error"
                                           required="true" aria-required="true"
                                           aria-invalid="true" placeholder="Nhập Giá">
                                    <span class="material-input"></span>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="giaError"></span></code>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                    <button class="btn-success" onclick="return validateForm()">Thêm Sản Phẩm</button>
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
            var ten_thiep = document.getElementById('ten_thiep');
            var ten_thiep_error = document.getElementById('ten_thiep_error');
            if (ten_thiep.value.length == '') {
                ten_thiep_error.innerHTML = "<b>Tên thiệp không để trống</b>";
                ten_thiep.focus();
            } else {
                ten_thiep_error.innerHTML = "";
            }
            var mo_ta = document.getElementById('mo_ta');
            var mo_ta_error = document.getElementById('mo_ta_error');
            if (mo_ta.value.length == '') {
                mo_ta_error.innerHTML = "<b>Mô tả không để trống</b>";
                mo_ta.focus();
            } else {
                mo_ta_error.innerHTML = "";
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
