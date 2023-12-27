@extends('customer.master')
@section('page')
    checkout
@endsection

@section('content')
    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- shopping-cart start -->
                        <div class="tab-pane" id="shopping-cart">
                            <div class="shopping-cart-content">
                                <form action="#">
                                    <div class="table-content table-responsive mb-50">
                                        <table class="text-center">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">product</th>
                                                    <th class="product-price">price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">total</th>
                                                    <th class="product-remove">remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="img/cart/1.jpg" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus f-left">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">$1020.00</td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="img/cart/2.jpg" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus f-left">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">$1020.00</td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="img/cart/3.jpg" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus f-left">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">$1020.00</td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="coupon-discount box-shadow p-30 mb-50">
                                                <h6 class="widget-title border-left mb-20">coupon discount</h6>
                                                <p>Enter your coupon code if you have one!</p>
                                                <input type="text" name="name" placeholder="Enter your code here.">
                                                <button class="submit-btn-1 black-bg btn-hover-2" type="submit">apply coupon</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="payment-details box-shadow p-30 mb-50">
                                                <h6 class="widget-title border-left mb-20">payment details</h6>
                                                <table>
                                                    <tr>
                                                        <td class="td-title-1">Cart Subtotal</td>
                                                        <td class="td-title-2">$155.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Shipping and Handing</td>
                                                        <td class="td-title-2">$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Vat</td>
                                                        <td class="td-title-2">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Order Total</td>
                                                        <td class="order-total-price">$170.00</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="culculate-shipping box-shadow p-30">
                                                <h6 class="widget-title border-left mb-20">culculate shipping</h6>
                                                <p>Enter your coupon code if you have one!</p>
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12">
                                                        <input type="text"  placeholder="Country">
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <input type="text"  placeholder="Region / State">
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <input type="text"  placeholder="Post code">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="submit-btn-1 black-bg btn-hover-2">get a quote</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- shopping-cart end -->
                        <!-- wishlist start -->
                        <div class="tab-pane" id="wishlist">
                            <div class="wishlist-content">
                                <form action="#">
                                    <div class="table-content table-responsive mb-50">
                                        <table class="text-center">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">product</th>
                                                    <th class="product-price">price</th>
                                                    <th class="product-stock">Stock status</th>
                                                    <th class="product-add-cart">add to cart</th>
                                                    <th class="product-remove">remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="img/cart/1.jpg" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-stock text-uppercase">in stoct</td>
                                                    <td class="product-add-cart">
                                                        <a href="#" title="Add To Cart">
                                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                        </a>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="img/cart/2.jpg" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-stock text-uppercase">in stoct</td>
                                                    <td class="product-add-cart">
                                                        <a href="#" title="Add To Cart">
                                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                        </a>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="img/cart/3.jpg" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-stock text-uppercase">in stoct</td>
                                                    <td class="product-add-cart">
                                                        <a href="#" title="Add To Cart">
                                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                        </a>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- wishlist end -->
                        <!-- checkout start -->
                        <div class="tab-pane active" id="checkout">
                            <div class="checkout-content box-shadow p-30">
                                <form action="#">
                                    <div class="row">
                                        <!-- billing details -->
                                        <div class="col-md-6">
                                            <div class="billing-details pr-10">
                                                <h6 class="widget-title border-left mb-20">Hóa đơn</h6>
                                                <input type="text"  placeholder="Họ và tên">
                                                <input type="text"  placeholder="Email">
                                                <input type="text"  placeholder="Điện thoại">
                                                <textarea class="custom-textarea" placeholder="Your address here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- our order -->
                                            <div class="payment-details pl-10 mb-50">
                                                <h6 class="widget-title border-left mb-20">Thanh toán</h6>
                                                <table>
                                                    @foreach(session('cart') as $id => $details)

                                                    <tr>
                                                        <td class="td-title-1">{{ $details['name'] }}</td>
                                                        <td class="td-title-2">@money(2000000)đ</td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td class="td-title-1">Shipping and Handing</td>
                                                        <td class="td-title-2">@money(30000)đ</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Order Total</td>
                                                        <td class="order-total-price">@money(4030000)đ</td>
                                                    </tr>

                                                </table>
                                            </div>
                                            <!-- payment-method -->
                                            <div class="payment-method">
                                                <h6 class="widget-title border-left mb-20">Phương thức thanh toán</h6>
                                                <div id="accordion">
                                                    <div class="panel">
                                                        <h4 class="payment-title box-shadow">
                                                            <a data-bs-toggle="collapse" href="#bank-transfer" >
                                                            Chuyển khoản ngân hàng
                                                            </a>
                                                        </h4>
                                                        <div id="bank-transfer" class="panel-collapse collapse" data-bs-parent="#accordion">
                                                            <div class="payment-content">
                                                            <p>Ngân hàng Vietin Bank </p>
                                                            <p>STK: 2324199922</p>
                                                                <p>STK:Tên người nhận: Lê Quang Đạt </p>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel">
                                                        <h4 class="payment-title box-shadow">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo">
                                                            Zalo Pay
                                                            </a>
                                                        </h4>
                                                        <div id="collapseTwo" class="panel-collapse collapse" data-bs-parent="#accordion">
                                                            <div class="payment-content">
                                                                <p>Số điện thoại: 0857929124</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- payment-method end -->
                                            <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">Đặt hàng</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- checkout end -->
                        <!-- order-complete start -->

                        <!-- order-complete end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

@endsection
