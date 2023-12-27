@extends('customer.master')

@section('page')
    Detail
@endsection

@section('content')
    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mb-80">
                        <div class="row">
                            <!-- imgs-zoom-area start -->
                            <div class="col-lg-5">
                                <div class="imgs-zoom-area">
                                    <img id="zoom_03" src="{{ asset($product->img)}}"
                                        alt="">

                                </div>
                            </div>
                            <!-- imgs-zoom-area end -->
                            <!-- single-product-info start -->
                            <div class="col-lg-7">
                                <div class="single-product-info">
                                    <h3 class="text-black-1">{{$product->name}} </h3>
                                    <!--  hr -->
                                    <hr>
                                    <!-- single-pro-color-rating -->
                                    <div class="single-pro-color-rating clearfix">
                                        <div class="sin-pro-color f-left">
                                            <p class="color-title f-left">Size</p>
                                                <select id="size">
                                                    <option value="volvo">36</option>
                                                    <option value="saab">37</option>
                                                    <option value="vw">39</option>
                                                    <option value="audi">40</option>
                                                    <option value="audi">41</option>
                                                    <option value="audi">42</option>
                                                    <option value="audi">43</option>
                                                    <option value="audi">44</option>

                                                </select>
                                        </div>

                                    </div>
                                    <!-- hr -->
                                    <hr>
                                    <!-- plus-minus-pro-action -->
                                    <div class="plus-minus-pro-action clearfix">
                                        <div class="sin-plus-minus f-left clearfix">
                                            <p class="color-title f-left">Số lượng</p>
                                            <div class="cart-plus-minus f-left">
                                                <input type="text" value="01" name="qtybutton"
                                                    class="cart-plus-minus-box">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- plus-minus-pro-action end -->
                                    <!-- hr -->
                                    <hr>
                                    <!-- single-product-price -->
                                    <h3 class="pro-price redcolor">Giá: @money($product->price)<sup>₫</sup></h3>
                                    <!--  hr -->
                                    <hr>
                                    <div>



                                        <a href="{{ route('customer.cart', ['id' => $product->id] ) }}" class="button extra-small " tabindex="-1">
                                            <span class="text-uppercase">Mua ngay</span>
                                        </a>





                                    </div>
                                </div>
                            </div>
                            <!-- single-product-info end -->
                        </div>
                        <!-- single-product-tab -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- hr -->
                                <hr>
                                <div class="single-product-tab reviews-tab">
                                    <ul class="nav mb-20">
                                        <li><a class="active" href="#description" data-bs-toggle="tab">description</a></li>
                                        <li><a href="#information" data-bs-toggle="tab">information</a></li>
                                        <li><a href="#reviews" data-bs-toggle="tab">reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active show" id="description">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majo Rity have be suffered alteration in some form, by injected humou or
                                                randomis Rity have be suffered alteration in some form, by injected
                                                humou or randomis words which donot look even slightly believable. If
                                                you are going to use a passage Lorem Ipsum.</p>
                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti
                                                consectetur non exercitationem. rerum blanditiis dolore dignissimos
                                                expedita consequatur deleniti consectetur non exercitationem.</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="information">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque
                                                fugit inventore quo dignissimos est iure natus quis nam illo officiis,
                                                deleniti consectetur non ,aspernatur.</p>
                                            <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti
                                                consectetur non exercitationem.</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="reviews">
                                            <!-- reviews-tab-desc -->
                                            <div class="reviews-tab-desc">
                                                <!-- single comments -->
                                                <div class="media mt-30">
                                                    <div class="media-left">
                                                        <a href="#"><img class="media-object" src="{{ asset('assets/assetscustomer/img/author/1.jpg')}}"
                                                                alt="#"></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="clearfix">
                                                            <div class="name-commenter pull-left">
                                                                <h6 class="media-heading"><a href="#">Gerald Barnes</a>
                                                                </h6>
                                                                <p class="mb-10">27 Jun, 2019 at 2:30pm</p>
                                                            </div>
                                                            <div class="pull-right">
                                                                <ul class="reply-delate">
                                                                    <li><a href="#">Reply</a></li>
                                                                    <li>/</li>
                                                                    <li><a href="#">Delate</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Integer accumsan egestas .</p>
                                                    </div>
                                                </div>
                                                <!-- single comments -->
                                                <div class="media mt-30">
                                                    <div class="media-left">
                                                        <a href="#"><img class="media-object" src="{{ asset('assets/assetscustomer/img/author/2.jpg')}}"
                                                                alt="#"></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="clearfix">
                                                            <div class="name-commenter pull-left">
                                                                <h6 class="media-heading"><a href="#">Gerald Barnes</a>
                                                                </h6>
                                                                <p class="mb-10">27 Jun, 2019 at 2:30pm</p>
                                                            </div>
                                                            <div class="pull-right">
                                                                <ul class="reply-delate">
                                                                    <li><a href="#">Reply</a></li>
                                                                    <li>/</li>
                                                                    <li><a href="#">Delate</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Integer accumsan egestas .</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  hr -->
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->

                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

@endsection
