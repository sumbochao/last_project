@extends('LayoutWebsite.Master')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="li-product-remove">remove</th>
                                <th class="li-product-thumbnail">Ảnh Sản Phẩm</th>
                                <th class="cart-product-name">Tên Sản Phẩm</th>
                                <th class="li-product-price">Giá</th>
                                <th class="li-product-quantity">Số Lượng</th>
                                <th class="li-product-subtotal">Tổng Tiền</th>
                            </tr>
                            </thead>
                            @foreach (Cart::content() as $contentValue)
                            <tbody>
                            <tr>
                                <td class="li-product-remove"><a href="{{route('deleteSanPhamKhoiGioHang',['rowId'=>$contentValue->rowId])}}"><i class="fa fa-times"></i></a></td>
                                <td class="li-product-thumbnail"><a href="#"><img src="{{asset('storage/'.$contentValue->options['image'])}}" width="150px" height="150px" alt="Li's Product Image"></a></td>
                                <td class="li-product-name"><a href="{{route('viewChiTietSanPham',['id'=>$contentValue->id])}}">{{$contentValue->name}}</a></td>
                                <td class="li-product-price"><span class="amount">{{$contentValue->price}} $</span></td>
                                <td class="quantity">
                                    <form action="{{route('updateQualtityCart')}}" method="post" class="cart_quantity_updates">
                                        @csrf
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" name="soLuong" value="{{$contentValue->qty}}" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                        <input type="hidden" value="{{$contentValue->rowId}}" name="rowId">
                                        <input type="submit" value="Cập Nhật" class="btn btn-primary">
                                    </form>
                                </td>
                                <td class="product-subtotal">
                                    <span class="amount">
                                        {{$subtotal=$contentValue->price*$contentValue->qty}} $
                                    </span></td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Tổng Tiền <span>{{Cart::subtotal().' '.'$'}}</span></li>
                                    <li>Thành Tiền <span>{{Cart::subtotal().' '.'$'}}</span></li>
                                </ul>
                                @if (Session::has('maKhachHang'))
                                    <a href="{{route('checkOut')}}">Thanh Toán</a>
                                @else
                                    <a href="{{route('khachHangSignInOrSignUp')}}">Đăng Nhập & Đăng Ký</a>
                                @endif
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@stop
