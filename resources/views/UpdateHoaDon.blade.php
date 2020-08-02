@extends('LayoutAdmin.Master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <form action="{{route('processUpdateHoaDon',['id'=>$hoaDon->ma_hoa_don])}}"
                  class="form-horizontal" method="post">
                @csrf
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Sửa Hóa Đơn</h4>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Tình Trạng</label>
                        <div class="col-sm-10 checkbox-radios">
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="tinhTrang" value="0"
                                           @if($hoaDon->tinh_trang==0)
                                           checked
                                        @endif
                                    >
                                    <span class="circle"></span>
                                    <span class="check"></span>
                                    Chờ Duyệt
                                </label>
                            </div>
                            <div class="radio" align="left">
                                <label>
                                    <input type="radio" name="tinhTrang" value="1"
                                           @if($hoaDon->tinh_trang==1)
                                           checked
                                        @endif
                                    >
                                    <span class="circle"></span>
                                    <span class="check"></span>
                                    Đã Duyệt
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-success" onclick="return validateForm()">Sửa Hóa Đơn</button>
                <a href="{{url()->previous()}}">
                    <button type="button" class="btn-danger">Quay Lại</button>
                </a>
            </form>
        </div>
    </div>
@stop
