<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="{{route('list_admin')}}" class="simple-text logo-mini">
            AM
        </a>
        <a href="{{route('list_admin')}}" class="simple-text logo-normal">
            Admin
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="../assets/img/faces/avatar.jpg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                {{\Illuminate\Support\Facades\Session::get('ho_ten_admin')}}
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
                            <a href="{{route('admin_sign_out')}}">
                                <span class="sidebar-mini"> LO </span>
                                <span class="sidebar-normal"> Log Out </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{route('list_admin')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Admin </p>
                </a>
            </li>
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
                            <a href="{{route('list_khach_hang')}}">
                                <span class="sidebar-mini"> LC </span>
                                <span class="sidebar-normal"> Danh Sách Khách Hàng </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('insert_khach_hang')}}">
                                <span class="sidebar-mini"> IC </span>
                                <span class="sidebar-normal"> Thêm Khách Hàng </span>
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
                            <a href="{{route('list_hang_san_xuat')}}">
                                <span class="sidebar-mini"> LB </span>
                                <span class="sidebar-normal"> Danh Sách Hãng Sản Xuất </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('list_loai_may')}}">
                                <span class="sidebar-mini"> LM </span>
                                <span class="sidebar-normal"> Danh Sách Loại Máy </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('list_man_hinh')}}">
                                <span class="sidebar-mini"> LM </span>
                                <span class="sidebar-normal"> Danh Sách Màn Hình </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('list_ram')}}">
                                <span class="sidebar-mini"> LR </span>
                                <span class="sidebar-normal"> Danh Sách RAM </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('list_cpu')}}">
                                <span class="sidebar-mini"> LC </span>
                                <span class="sidebar-normal"> Danh Sách CPU </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('list_vga')}}">
                                <span class="sidebar-mini"> LV </span>
                                <span class="sidebar-normal"> Danh Sách VGA </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('list_o_cung')}}">
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
                            <a href="{{route('list_san_pham')}}">
                                <span class="sidebar-mini"> LP </span>
                                <span class="sidebar-normal"> Danh Sách Sản Phẩm </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('insert_san_pham')}}">
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
                            <a href="{{route('list_thanh_toan')}}">
                                <span class="sidebar-mini"> LP </span>
                                <span class="sidebar-normal"> Danh Sách Phương Thức Thanh Toán </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('insert_thanh_toan')}}">
                                <span class="sidebar-mini"> IP </span>
                                <span class="sidebar-normal"> Thêm Phương Thức Thanh Toán </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">widgets</i>
                    <p> Hóa Đơn </p>
                </a>
            </li>
        </ul>
    </div>
</div>
