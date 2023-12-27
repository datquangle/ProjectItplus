@extends('customer.master')

@section('page')
    List
@endsection

@section('content')
    <!-- PRODUCT TAB SECTION START -->
    <div class="product-tab-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-start mb-40">
                        <h2 class="uppercase">Các sản phẩm</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-tab pro-tab-menu text-end">
                        <!-- Nav tabs -->
                        <ul class="nav">
                            <li><a class="active" href="#Lifestyle" data-bs-toggle="tab">Lifestyle </a></li>
                            <li><a href="#Jordan" data-bs-toggle="tab">Jordan</a></li>
                            <li><a href="#Boots" data-bs-toggle="tab">Boots</a></li>
                            <li><a href="#Football" data-bs-toggle="tab">Football</a></li>
                            <li><a href="#Running" data-bs-toggle="tab">Running</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- popular-product start -->
                        <div id="Lifestyle" class="tab-pane active show">
                            <div class="row">
                                @foreach($products->where('id_category','=', '1') as $product)

                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="single-product.html">
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
                                                    <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
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
                        <!-- new-arrival start -->
                        <div id="Jordan" class="tab-pane" role="tabpanel">
                            <div class="row">
                                @foreach($products->where('id_category','=', '2') as $product)

                                    <!-- product-item start -->
                                    <div class="col-lg-3 col-md-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html">
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
                                                        <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- new-arrival end -->
                        <!-- best-seller start -->
                        <div id="Boots" class="tab-pane" role="tabpanel">
                            <div class="row">
                                @foreach($products->where('id_category','=', '3') as $product)

                                    <!-- product-item start -->
                                    <div class="col-lg-3 col-md-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html">
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
                                                        <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- product-item end -->

                            </div>
                        </div>
                        <!-- best-seller end -->
                        <!-- special-offer start -->
                        <div id="Football" class="tab-pane" role="tabpanel">
                            <div class="row">
                                @foreach($products->where('id_category','=', '4') as $product)

                                    <!-- product-item start -->
                                    <div class="col-lg-3 col-md-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html">
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
                                                        <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- product-item end -->

                            </div>
                        </div>
                        <!-- special-offer end -->
                        <!-- special-offer start -->
                        <div id="Running" class="tab-pane" role="tabpanel">
                            <div class="row">
                                @foreach($products->where('id_category','=', '5') as $product)

                                    <!-- product-item start -->
                                    <div class="col-lg-3 col-md-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html">
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
                                                        <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- special-offer end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB SECTION END -->


@endsection
