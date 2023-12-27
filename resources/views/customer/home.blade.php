@extends('customer.master')
@section('page')
    Home
@endsection

@section('slider')
    <div class="slider-area plr-185 mb-80 section">
        <div class="container-fluid">
            <div class="slider-content">
                <div class="active-slider-1 slick-arrow-1 slick-dots-1">
                    <!-- layer-1 Start -->
                    <div class="col-lg-12">
                        <div class="layer-1">
                            <div class="slider-img">
                                <img src="    {{ asset('assets/assetscustomer/imgthi2/01.png ')}}" alt="">
                            </div>
                            <div class="slider-info gray-bg">
                                <div class="slider-info-inner">
                                    <h1 class="slider-title-1 text-uppercase text-black-1">AIR JORDAN 1</h1>
                                    <div class="slider-brief text-black-2">
                                        <p>SALE UP 35% MỪNG GIÁNG SINH</p>
                                    </div>
                                    <a href="#" class="button extra-small button-black">
                                        <span class="text-uppercase">Buy now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- layer-1 end -->
                    <!-- layer-1 Start -->
                    <div class="col-lg-12">
                        <div class="layer-1">
                            <div class="slider-img">
                                <img src="    {{ asset('assets/assetscustomer/imgthi2/02.png ')}}" alt="">
                            </div>
                            <div class="slider-info gray-bg">
                                <div class="slider-info-inner">
                                    <h1 class="slider-title-1 text-uppercase text-black-1">AIR FORCE 1 WHITE</h1>
                                    <div class="slider-brief text-black-2">
                                        <p>MỘT ĐÔI GIÀY MÀ BẠN KHÔNG THỂ THIẾU TRONG BỘ SƯU TẬP</p>
                                    </div>
                                    <a href="#" class="button extra-small button-black">
                                        <span class="text-uppercase">Buy now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- layer-1 end -->
                    <!-- layer-1 Start -->
                    <div class="col-lg-12">
                        <div class="layer-1">
                            <div class="slider-img">
                                <img src="    {{ asset('assets/assetscustomer/imgthi2/03.png ')}}" alt="">
                            </div>
                            <div class="slider-info gray-bg">
                                <div class="slider-info-inner">
                                    <h1 class="slider-title-1 text-uppercase text-black-1">Giày Bóng Đá</h1>
                                    <div class="slider-brief text-black-2">
                                        <p>GIÀY BÓNG ĐÁ NIKE LUÔN LUÔN ĐƯỢC TIN TƯỞNG VỀ CHẤT LƯƠNG</p>
                                    </div>
                                    <a href="#" class="button extra-small button-black">
                                        <span class="text-uppercase">Buy now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- layer-1 end -->
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <!-- BY BRAND SECTION START-->
    <div class="by-brand-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-start mb-40">
                        <h2 class="uppercase">Danh mục sản phẩm</h2>

                    </div>
                    <div class="by-brand-product">
                        <div class="active-by-brand slick-arrow-2">
                            <!-- single-brand-product start -->
                            <div class="brand-item">
                                <div class="single-brand-product">
                                    <a href="single-product.html"><img src="    {{ asset('assets/assetscustomer/imgthi2/Lifestyle1/lifestyle.png')}}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="#">Lifestyle</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="brand-item">
                                <div class="single-brand-product">
                                    <a href="single-product.html"><img src="    {{ asset('assets/assetscustomer/imgthi2/Jordan2/jordan.png')}}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="#">Jordan</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="brand-item">
                                <div class="single-brand-product">
                                    <a href="single-product.html"><img src="    {{ asset('assets/assetscustomer/imgthi2/Boots3/boots.jpg')}}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="#">Boots</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="brand-item">
                                <div class="single-brand-product">
                                    <a href="single-product.html"><img src="    {{ asset('assets/assetscustomer/imgthi2/Football4/football.jpg')}}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="#">Football</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                            <!-- single-brand-product start -->
                            <div class="brand-item">
                                <div class="single-brand-product">
                                    <a href="single-product.html"><img src="    {{ asset('assets/assetscustomer/imgthi2/Running5/running.png')}}" alt=""></a>
                                    <h3 class="brand-title text-gray">
                                        <a href="#">Running</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- single-brand-product end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BY BRAND SECTION END -->

    <!-- FEATURED PRODUCT SECTION START -->
    <div class="featured-product-section mb-50">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title text-start mb-40">
                        <h2 class="uppercase">Sản phẩm mới</h2>

                    </div>
                    <div class="featured-product">
                        <div class="active-featured-product slick-arrow-2">
                            @foreach($products->where('id_category','=', '1') as $product)

                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="{{ asset($product->img) }}" alt=""/>

                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">{{$product->name}}</a>
                                    </h6>

                                    <h3 class="pro-price redcolor">@money($product->price)đ</h3>
                                    <ul class="action-button">

                                        <li>
                                            <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURED PRODUCT SECTION END -->

    <!-- UP COMMING PRODUCT SECTION START -->
{{--    <div class="up-comming-product-section mb-80">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <!-- up-comming-pro -->--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="up-comming-pro gray-bg clearfix">--}}
{{--                        <div class="up-comming-pro-img f-left">--}}
{{--                            <a href="#">--}}
{{--                                <img src="    {{ asset('assets/assetscustomer/img/up-comming/1.jpg')}}" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="up-comming-pro-info f-left">--}}
{{--                            <h3><a href="#">Dummy Product Name</a></h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. </p>--}}
{{--                            <div class="up-comming-time">--}}
{{--                                <div data-countdown="2022/02/02"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 d-block d-md-none d-lg-block">--}}
{{--                    <div class="banner-item banner-1">--}}
{{--                        <div class="ribbon-price">--}}
{{--                            <span></span>--}}
{{--                        </div>--}}
{{--                        <div class="banner-img">--}}
{{--                            <a href="#"><img src="    {{ asset('assets/assetscustomer/img/banner/1.jpg')}}" alt=""></a>--}}
{{--                        </div>--}}
{{--                        <div class="banner-info">--}}
{{--                            <h3><a href="#">Product Name</a></h3>--}}
{{--                            <ul class="banner-featured-list">--}}
{{--                                <li>--}}
{{--                                    <i class="zmdi zmdi-check"></i><span>Lorem ipsum dolor</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="zmdi zmdi-check"></i><span>amet, consectetur</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="zmdi zmdi-check"></i><span>adipisicing elitest,</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="zmdi zmdi-check"></i><span>eiusmod tempor</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="zmdi zmdi-check"></i><span>labore et dolore.</span>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- UP COMMING PRODUCT SECTION END -->

    <!-- PRODUCT TAB SECTION START -->
    <div class="product-tab-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-start mb-40">
                        <h2 class="uppercase">sản phẩm</h2>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-tab pro-tab-menu text-end">
                        <!-- Nav tabs -->
                        <ul class="nav" >
                            <a href="{{ route('customer.indexlist') }}" >Xem tất cả >></a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- popular-product start -->
                        <div id="popular-product" class="tab-pane active show">
                            <div class="row">
                                <!-- product-item start -->
                                @foreach($products as $product)
{{--                                @foreach($products->where('id_category','=', '4') as $product)--}}

                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="{{ route('customer.detail',"$product->slug" ) }}">
                                                <img width="200px" src="{{ asset($product->img) }}">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">{{$product->name}}</a>
                                            </h6>
                                            <h3 class="pro-price redcolor"> @money($product->price)<sup>₫</sup></h3>
                                            <ul class="action-button">
                                                <li>
                                                    <a href="{{ route('customer.addcart', $product->id) }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- product-item end -->

                            </div>
                        </div>
                        <!-- popular-product end -->

                    </div>
                    <div class="card-footer clearfix">
                        {{ $products->links('pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('slider')
<div class="slider-area plr-185 mb-80 section">
    <div class="container-fluid">
        <div class="slider-content">
            <div class="active-slider-1 slick-arrow-1 slick-dots-1">
                <!-- layer-1 Start -->
                <div class="col-lg-12">
                    <div class="layer-1">
                        <div class="slider-img">
                            <img src="    {{ asset('assets/assetscustomer/img/slider/slider-1/1.jpg ')}}" alt="">
                        </div>
                        <div class="slider-info gray-bg">
                            <div class="slider-info-inner">
                                <h1 class="slider-title-1 text-uppercase text-black-1">WaterProof smartphone</h1>
                                <div class="slider-brief text-black-2">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum,</p>
                                </div>
                                <a href="#" class="button extra-small button-black">
                                    <span class="text-uppercase">Buy now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- layer-1 end -->
                <!-- layer-1 Start -->
                <div class="col-lg-12">
                    <div class="layer-1">
                        <div class="slider-img">
                            <img src="    {{ asset('assets/assetscustomer/img/slider/slider-1/2.jpg ')}}" alt="">
                        </div>
                        <div class="slider-info gray-bg">
                            <div class="slider-info-inner">
                                <h1 class="slider-title-1 text-uppercase text-black-1">WaterProof smartphone</h1>
                                <div class="slider-brief text-black-2">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum,</p>
                                </div>
                                <a href="#" class="button extra-small button-black">
                                    <span class="text-uppercase">Buy now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- layer-1 end -->
                <!-- layer-1 Start -->
                <div class="col-lg-12">
                    <div class="layer-1">
                        <div class="slider-img">
                            <img src="    {{ asset('assets/assetscustomer/img/slider/slider-1/1.jpg ')}}" alt="">
                        </div>
                        <div class="slider-info gray-bg">
                            <div class="slider-info-inner">
                                <h1 class="slider-title-1 text-uppercase text-black-1">WaterProof smartphone</h1>
                                <div class="slider-brief text-black-2">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum,</p>
                                </div>
                                <a href="#" class="button extra-small button-black">
                                    <span class="text-uppercase">Buy now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- layer-1 end -->
            </div>
        </div>
    </div>
</div>

@endsection
