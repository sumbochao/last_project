@extends('layout_admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <form action="{{route('process_update_san_pham',['id'=>$san_pham->ma_san_pham])}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Thêm Sản Phẩm</h4>
                </div>
                @csrf
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <legend>Ảnh Sản Phẩm:</legend>
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
                            <label class="col-sm-2 label-on-left">Tên Cấu Hình:</label>
                            <div class="col-lg-5 col-md-6 col-sm-3">
                                <div class="bootstrap-select">
                                    <select name="ma_cau_hinh" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Tên Cấu Hình</option>
                                        @foreach ($array_cau_hinh as $cau_hinh)
                                            <option value="{{$cau_hinh->ma_cau_hinh}}"
                                                    @if ($san_pham->ma_cau_hinh==$cau_hinh->ma_cau_hinh)
                                                        selected
                                                    @endif
                                            >
                                                {{$cau_hinh->ten_cau_hinh}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Tên Thương Hiệu:</label>
                            <div class="col-lg-5 col-md-6 col-sm-3">
                                <div class="bootstrap-select">
                                    <select name="ma_thuong_hieu" class="selectpicker" data-style="btn btn-primary btn-round"
                                            title="Single Select">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option disabled="" selected="">Chọn Tên Thương Hiệu</option>
                                        @foreach ($array_thuong_hieu as $thuong_hieu)
                                            <option value="{{$thuong_hieu->ma_thuong_hieu}}"
                                                    @if ($san_pham->ma_thuong_hieu==$thuong_hieu->ma_thuong_hieu)
                                                        selected
                                                    @endif
                                            >
                                                {{$thuong_hieu->ten_thuong_hieu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Gaming</label>
                            <div class="col-sm-10 checkbox-radios">
                                <div class="radio" align="left">
                                    <label><input type="radio" name="gaming" value="0"
                                                  @if ($san_pham->gaming==0)
                                                    checked
                                            @endif
                                        >
                                        <span class="circle"></span><span class="check"></span>
                                        Không phải máy gaming
                                    </label>
                                </div>
                                <div class="radio" align="left">
                                    <label><input type="radio" name="gaming" value="1"
                                                  @if ($san_pham->gaming==1)
                                                  checked
                                            @endif
                                        >
                                        <span class="circle"></span><span class="check"></span>
                                        Gaming
                                    </label>
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
                            <label class="col-sm-2 label-on-left">Thông Số Kĩ Thuật:</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty has-error">
                                    <label class="control-label"></label>
                                    <input type="text" name="thong_so_ki_thuat" id="thong_so_ki_thuat" class="form-control error"
                                           required="true" aria-required="true"
                                           aria-invalid="true" value="{{$san_pham->thong_so_ki_thuat}}">
                                    <span class="material-input"></span>
                                </div>
                                <label class="col-sm-3 label-on-right">
                                    <code><span id="thong_so_ki_thuat_error"></span></code>
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
                    <button class="btn-success" onclick="return validateForm()">Sửa Sản Phẩm</button>
                    <a href="{{url()->previous()}}">
                        <button type="button" class="btn-danger">Quay Lại</button>
                    </a>
                </div>
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
