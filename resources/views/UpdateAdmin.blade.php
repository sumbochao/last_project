@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <form action="{{route('processUpdateAdmin',['id'=>$admin->ma_admin])}}" class="form-horizontal"
                  method="post">
                @csrf
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Sửa Admin</h4>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Họ Tên Admin</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating">
                                <label class="control-label"></label>
                                <input type="text" name="hoTenAdmin" id="hoTenAdmin"
                                       class="form-control error" required="true" aria-required="true"
                                       aria-invalid="true" value="{{$admin->ho_ten_admin}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="hoTenAdminError"></span>
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
                                <input type="email" name="email" id="email" class="form-control"
                                       required="true"
                                       aria-required="true"
                                       aria-invalid="true" value="{{$admin->email}}">
                                <span class="material-input"></span>
                            </div>
                            <label class="col-sm-3 label-on-right">
                                <span id="emailError"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn-success" onclick="return validateForm()">Sửa Admin</button>
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
            $('#ngay_sinh').datetimepicker({
                format: 'YYYY-MM-DD',
                icons: {
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right'
                }
            });
        });

        function validateForm() {
            var hoTenAdmin = document.getElementById("hoTenAdmin");
            var hoTenAdminError = document.getElementById("hoTenAdminError");
            if (!hoTenAdmin.value.length) {
                hoTenAdminError.innerHTML = "<b><code>Họ tên không được để trống</code></b>";
                hoTenAdmin.focus();
                return false;
            } else {
                hoTenAdminError.innerHTML = '';
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

