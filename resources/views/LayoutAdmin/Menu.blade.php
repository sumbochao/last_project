<div class="sidebar" data-active-color="purple" data-background-color="black" data-image="{{asset('img/admin/sidebar-1.jpg')}}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="{{route('welcomeAdmin')}}" class="simple-text logo-mini">
            AM
        </a>
        <a href="{{route('welcomeAdmin')}}" class="simple-text logo-normal">
            Admin
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('storage/'.\Illuminate\Support\Facades\Session::get('anhAdmin'))}}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                {{\Illuminate\Support\Facades\Session::get('hoTenAdmin')}}
                                <b class="caret"></b>
                            </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('adminSignOut')}}">
                                <span class="sidebar-mini"> LO </span>
                                <span class="sidebar-normal"> Log Out </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            @if (\Illuminate\Support\Facades\Session::get('capDo') == 1)
                <li class="active">
                    <a href="{{route('listAdmin')}}">
                        <i class="material-icons">dashboard</i>
                        <p> Admin </p>
                    </a>
                </li>
            @endif
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">image</i>
                    <p> Khách Hàng
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{route('listKhachHang')}}">
                                <span class="sidebar-mini"> LC </span>
                                <span class="sidebar-normal"> Danh Sách Khách Hàng </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p> Danh Sách
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{route('listHangSanXuat')}}">
                                <span class="sidebar-mini"> LB </span>
                                <span class="sidebar-normal"> Danh Sách Hãng Sản Xuất </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('listLoaiMay')}}">
                                <span class="sidebar-mini"> LM </span>
                                <span class="sidebar-normal"> Danh Sách Loại Máy </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('listManHinh')}}">
                                <span class="sidebar-mini"> LM </span>
                                <span class="sidebar-normal"> Danh Sách Màn Hình </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('listRam')}}">
                                <span class="sidebar-mini"> LR </span>
                                <span class="sidebar-normal"> Danh Sách RAM </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('listCpu')}}">
                                <span class="sidebar-mini"> LC </span>
                                <span class="sidebar-normal"> Danh Sách CPU </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('listVga')}}">
                                <span class="sidebar-mini"> LV </span>
                                <span class="sidebar-normal"> Danh Sách VGA </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('listOCung')}}">
                                <span class="sidebar-mini"> LO </span>
                                <span class="sidebar-normal"> Danh Sách Ổ Cứng </span>
                            </a>
                        </li>
                    </ul>
                </div>
            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p> Sản Phẩm
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{route('listSanPham')}}">
                                <span class="sidebar-mini"> LP </span>
                                <span class="sidebar-normal"> Danh Sách Sản Phẩm </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('insertSanPham')}}">
                                <span class="sidebar-mini"> IP </span>
                                <span class="sidebar-normal"> Thêm Sản Phẩm </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">place</i>
                    <p> Thanh Toán
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{route('listThanhToan')}}">
                                <span class="sidebar-mini"> LP </span>
                                <span class="sidebar-normal"> Danh Sách Phương Thức Thanh Toán </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('insertThanhToan')}}">
                                <span class="sidebar-mini"> IP </span>
                                <span class="sidebar-normal"> Thêm Phương Thức Thanh Toán </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{route('listHoaDon')}}">
                    <i class="material-icons">widgets</i>
                    <p> Hóa Đơn </p>
                </a>
            </li>
        </ul>
    </div>
</div>
