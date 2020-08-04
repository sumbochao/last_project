@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Sửa Cpu</h4>
            </div>
            <form action="{{route('processUpdateCpu',['id'=>$cpu->ma_cpu])}}" class="form-horizontal" method="post">
                @csrf
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tên Cpu</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="tenCpu" id="tenCpu" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$cpu->ten_cpu}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="tenCpuError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tần Số CPU</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="tanSoCpu" id="tanSoCpu" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$cpu->tan_so_cpu}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="tanSoCpuError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Bộ nhớ cache</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="boNhoCache" id="boNhoCache" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$cpu->bo_nho_cache}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="boNhoCacheError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Dòng Cpu</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="dongCpu" id="dongCpu" class="form-control error"
                                       required="true" aria-required="true"
                                       aria-invalid="true" value="{{$cpu->dong_cpu}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="dongCpuError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success">Sửa Cpu</button>
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
            var tenCpu = document.getElementById("tenCpu");
            var tenCpuError = document.getElementById("tenCpuError");
            if (!tenCpu.value.length) {
                tenCpuError.innerHTML = "<b><code>Tên cpu không được để trống</code></b>";
                tenCpu.focus();
                return false;
            } else {
                tenCpuError.innerHTML = '';
            }

            var tanSoCpu = document.getElementById("tanSoCpu");
            var tanSoCpuError = document.getElementById("tanSoCpuError");
            if (!tanSoCpu.value.length) {
                tanSoCpuError.innerHTML = "<b><code>Tần số cpu không được để trống</code></b>";
                tanSoCpu.focus();
                return false;
            } else {
                tanSoCpuError.innerHTML = '';
            }

            var boNhoCache = document.getElementById("boNhoCache");
            var boNhoCacheError = document.getElementById("boNhoCacheError");
            if (!boNhoCache.value.length) {
                boNhoCacheError.innerHTML = "<b><code>Bộ nhớ cache không được để trống</code></b>";
                boNhoCache.focus();
                return false;
            } else {
                boNhoCacheError.innerHTML = '';
            }

            var dongCpu = document.getElementById("dongCpu");
            var dongCpuError = document.getElementById("dongCpuError");
            if (!dongCpu.value.length) {
                dongCpuError.innerHTML = "<b><code>Dòng cpu không được để trống</code></b>";
                dongCpu.focus();
                return false;
            } else {
                dongCpuError.innerHTML = '';
            }
        }
    </script>
@endpush

