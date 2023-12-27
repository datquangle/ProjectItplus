<header class="header-area header-wrapper">
    <!-- header-top-bar -->

    <!-- header-middle-area -->
    <div id="sticky-header" class="header-middle-area plr-185">
        <div class="container-fluid">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- logo -->
                    <div class="col-lg-2 col-md-4">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/assetscustomer/img/logo/logo.png')}}" alt="main logo" width="114px">
                            </a>
                        </div>
                    </div>
                    <!-- primary-menu -->
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav id="primary-menu">
                            <ul class="main-menu text-center">

                                <li class="mega-parent">
                                    <a href="{{ route('customer.indexhome') }}">Trang chủ</a>
                                </li>
                                <li class="mega-parent">
                                    <a href="{{ route('customer.indexproduct') }}">Sản phẩm</a>
                                </li>

                                <li><a href="{{ route('customer.indexlist') }}">Danh mục</a>
{{--                                    <ul class="dropdwn">--}}
{{--                                        <li>--}}
{{--                                            <a href="{{ route('customer.indexhome') }}">Lifestyle</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="{{ route('customer.indexhome') }}">Jordan</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="{{ route('customer.indexhome') }}">Boots</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="{{ route('customer.indexhome') }}">Football</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="{{ route('customer.indexhome') }}">Running</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="mega-parent">
                                    <a href="{{ route('customer.indexblog') }}">Blog</a>
                                </li>



                                <li class="mega-parent">
                                    <a href="{{ route('customer.indexabout') }}">Thông tin</a>
                                </li>

                                <li class="mega-parent">
                                    <a href="{{ route('customer.indexcontact') }}">Liên hệ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- header-search & total-cart -->
                    <div class="col-lg-2 col-md-8">
                        <div class="search-top-cart  f-right">
                            <!-- header-search -->
                            <div class="header-search f-left">
                                <div class="header-search-inner">
                                    <button class="search-toggle">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                    <form action="#">
                                        <div class="top-search-box">
                                            <input type="text" placeholder="Search here your product...">
                                            <button type="submit">
                                                <i class="zmdi zmdi-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- total-cart -->
                            <div class="total-cart f-left">
                                <div class="total-cart-in">
                                    <div class="cart-toggler">
{{--                                    <a href="{{ route('customer.cart') }}">--}}
                                        <a href="{{route('customer.cart')}}">
                                            <span class="cart-quantity">{{ count((array) session('cart')) }}</span><br>
                                            <span class="cart-icon">
                                                <i class="zmdi zmdi-shopping-cart-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
