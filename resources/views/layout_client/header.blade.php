<header class="header">
    <style>
        .badge {
            padding-left: 9px;
            padding-right: 9px;
            -webkit-border-radius: 9px;
            -moz-border-radius: 9px;
            border-radius: 9px;
            }

            .label-warning[href],
            .badge-warning[href] {
            background-color: #c67605;
            }
            #lblCartCount {
                font-size: 12px;
                background: #ff0000;
                color: #fff;
                padding: 0 5px;
                vertical-align: top;
                margin-left: -10px; 
            }
    </style>
    <!-- Header bar -->
    <div class="header_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_bar_content d-flex flex-row align-items-center justify-content-start">
                        <div class="sub_button text-center"><a href="#">TTTH</a><div class="d-flex flex-row align-items-start justify-content-start"><div></div><div></div><div></div></div></div>
                        <div class="header_social ml-auto">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('khach-hang/thong-tin-gio-hang')}}"><i class="fa fa-cart-plus" style="font-size:24px"></i>
                                    <span class='badge badge-warning' id='lblCartCount'> {{Cart::count()}} </span></a></li>
                                @if(Session::has('ho_ten_kh'))
                                    <li><a href="#">{{Session::get('ho_ten_kh')}}</a></li>
                                    <li><a href="{{url('AuthManagement/logout')}}">Đăng xuất</a></li>
                                @elseif(Cookie::has('ho_ten_kh'))
                                    <li><a href="#">{{Cookie::get('ho_ten_kh')}}</a></li>
                                    <li><a href="{{url('AuthManagement/logout')}}">Đăng xuất</a></li>
                                @else
                                    <li><a href="{{url('AuthManagement/login')}}">Đăng nhập</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Header Navigation & Search -->
    <div class="header_nav_container" id="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                        
                        <!-- Logo -->
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo"><span>TT</span>TH</div>
                                <div class="logo_sub">Lập trình & CSDL</div>
                            </a>
                        </div>

                        <!-- Navigation -->
                        <nav class="main_nav">
                            <ul class="main_nav_list d-flex flex-row align-items-center justify-content-start">
                                <li><a href="{{url('/')}}">Trang chủ</a></li>
                                <li><a href="{{url('san-pham/danh-sach')}}">Sản phẩm</a></li>
                                <li><a href="#">Cửa hàng</a></li>
                                <li><a href="#">Khuyến mãi</a></li>
                                <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                                <li><a href="contact.html">Ý kiến khách hàng</a></li>
                                <li><a href="contact.html">Sản phẩm mới</a></li>
                            </ul>
                        </nav>

                        <!-- Search -->
                        <div class="header_search_container ml-auto">
                            <div class="header_search">
                                <form action="#" id="header_search_form" class="header_search_form d-flex flex-row align-items-center justfy-content-start">
                                    <div><div class="header_search_activation"><i class="fa fa-search" aria-hidden="true"></i></div></div>
                                    <input type="text" class="header_search_input" placeholder="Search" required="required">
                                </form>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="hamburger ml-auto menu_mm"><i class="fa fa-bars  trans_200 menu_mm" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>		
    </div>
</header>