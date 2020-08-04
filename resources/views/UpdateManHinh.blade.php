@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Sửa Màn Hình</h4>
            </div>
            <form action="{{route('processUpdateManHinh',['id'=>$manHinh->ma_man_hinh])}}" class="form-horizontal"
                  method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Kích Cỡ</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="kichCo" id="kichCo" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$manHinh->kich_co}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="kichCoError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Độ Phân Giải</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="doPhanGiai" id="doPhanGiai" class="form-control"
                                       value="{{$manHinh->do_phan_giai}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="doPhanGiaiError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tần Số Màn Hình</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="tanSoManHinh" id="tanSoManHinh" class="form-control"
                                       value="{{$manHinh->tan_so_man_hinh}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="tanSoManHinhError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tấm Nền</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="tamNen" id="tamNen" class="form-control"
                                       value="{{$manHinh->tam_nen}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="tamNenError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success">Sửa Màn Hình</button>
                <a href="{{url()->previous()}}">
                    <button type="button" class="btn-danger">Quay Lại</button>
                </a>
            </form>
        </div>
    </div>
@stop
@push('js')
    <script type="text/javascript">
        function validateForm() {
            var kichCo = document.getElementById("kichCo");
            var kichCoError = document.getElementById("kichCoError");
            if (!kichCo.value.length) {
                kichCoError.innerHTML = "<b><code>Kích cỡ màn hình không được để trống</code></b>";
                kichCo.focus();
                return false;
            } else {
                kichCoError.innerHTML = '';
            }
        }
    </script>
@endpush
