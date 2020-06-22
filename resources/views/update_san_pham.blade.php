@extends('layout_admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <form action="{{route('process_update_san_pham',['id'=>$san_pham->ma_san_pham])}}" class="form-horizontal"
                  method="post" enctype="multipart/form-data">
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Sửa Sản Phẩm</h4>
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
                                                        <input type="file" name="anh_san_pham" id="anh_san_pham">
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
                                    <select name="ma_hang_san_xuat" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Tên Hãng Sản Xuất</option>
                                        @foreach ($array_hang_san_xuat as $hang_san_xuat)
                                            <option value="{{$hang_san_xuat->ma_hang_san_xuat}}"
                                                    @if($san_pham->ma_hang_san_xuat==$hang_san_xuat->ma_hang_san_xuat)
                                                            selected
                                                        @endif
                                            >
                                                {{$hang_san_xuat->ten_hang_san_xuat}}</option>
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
                                    <select name="ma_loai_may" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Loại Máy</option>
                                        @foreach ($array_loai_may as $loai_may)
                                            <option value="{{$loai_may->ma_loai_may}}"
                                                    @if($san_pham->ma_loai_may==$loai_may->ma_loai_may)
                                                        selected
                                                        @endif
                                            >
                                                {{$loai_may->ten_loai_may}}</option>
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
                                    <select name="ma_man_hinh" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Màn Hình</option>
                                        @foreach ($array_man_hinh as $man_hinh)
                                            <option value="{{$man_hinh->ma_man_hinh}}"
                                                @if($san_pham->ma_man_hinh==$man_hinh->ma_man_hinh)
                                                    selected
                                                    @endif
                                            >
                                                {{$man_hinh->kich_co}}
                                                {{$man_hinh->do_phan_giai}}
                                                {{$man_hinh->tan_so_man_hinh}}
                                                {{$man_hinh->tam_nen}}
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
                                    <select name="ma_cpu" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn CPU</option>
                                        @foreach ($array_cpu as $cpu)
                                            <option value="{{$cpu->ma_cpu}}"
                                                @if($san_pham->ma_cpu==$cpu->ma_cpu)
                                                    selected
                                                    @endif
                                            >
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
                                    <select name="ma_ram" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn RAM</option>
                                        @foreach ($array_ram as $ram)
                                            <option value="{{$ram->ma_ram}}"
                                                @if($san_pham->ma_ram==$ram->ma_ram)
                                                    selected
                                                    @endif
                                            >
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
                                    <select name="ma_vga" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn VGA</option>
                                        @foreach ($array_vga as $vga)
                                            <option value="{{$vga->ma_vga}}"
                                                @if($san_pham->ma_vga==$vga->ma_vga)
                                                    selected
                                                    @endif
                                            >
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
                                    <select name="ma_o_cung" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Ổ Cứng</option>
                                        @foreach ($array_o_cung as $o_cung)
                                            <option value="{{$o_cung->ma_o_cung}}"
                                                @if($san_pham->ma_o_cung==$o_cung->ma_o_cung)
                                                    selected
                                                    @endif
                                            >
                                                {{$o_cung->dung_luong_o_cung}}
                                                {{$o_cung->loai_o_cung}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Tên Sản Phẩm:</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty has-error">
                                    <label class="control-label"></label>
                                    <input type="text" name="ten_san_pham" id="ten_san_pham" class="form-control error"
                                           required="true" aria-required="true"
                                           aria-invalid="true" value="{{$san_pham->ten_san_pham}}">
                                    <span class="material-input"></span>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="ten_san_pham_error"></span></code>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Mô Tả:</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty has-error">
                                    <label class="control-label"></label>
                                    <input type="text" name="mo_ta" id="mo_ta" class="form-control error"
                                           required="true" aria-required="true"
                                           aria-invalid="true" value="{{$san_pham->mo_ta}}">
                                    <span class="material-input"></span>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="mo_ta_error"></span></code>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Số Lượng:</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty has-error">
                                    <label class="control-label"></label>
                                    <input type="number" name="so_luong" id="so_luong" class="form-control error"
                                           required="true" aria-required="true"
                                           aria-invalid="true" value="{{$san_pham->so_luong}}">
                                    <span class="material-input"></span>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="mo_ta_error"></span></code>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Giá:</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty has-error">
                                    <label class="control-label"></label>
                                    <input type="number" name="gia" id="gia" class="form-control error"
                                           required="true" aria-required="true"
                                           aria-invalid="true" value="{{$san_pham->gia}}">
                                    <span class="material-input"></span>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="gia_error"></span></code>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                    <button class="btn-success" onclick="return validateForm()">Sửa Sản Phẩm</button>
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
