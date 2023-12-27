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

                <div class="col-lg-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- popular-product start -->
                        <div id="Lifestyle" class="tab-pane active show">
                            <div class="row">
                                @foreach($products as $product)
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

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB SECTION END -->


@endsection
