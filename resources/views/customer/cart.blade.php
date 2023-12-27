@extends('customer.master')
@section('page')
    Cart
@endsection

@section('content')
    @if(session('cart'))
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- shopping-cart start -->
                        <div class="tab-pane active" id="shopping-cart">
                            <div class="shopping-cart-content">
                                <form action="#">
                                    <div class="table-content table-responsive mb-50">
                                        <table class="text-center">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">Sản phẩm</th>
                                                    <th class="product-price">Giá</th>
                                                    <th class="product-quantity">Số lượng</th>
                                                    <th class="product-subtotal">Tổng</th>
                                                    <th class="product-remove">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- tr -->
                                                @foreach(session('cart') as $id => $details)
                                                <tr rowId=" {{ $id }}">
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="{{ asset('') }}{{ $details['img'] }}" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">{{ $details['name'] }}</a>
                                                            </h6>

                                                        </div>
                                                    </td>
                                                    <td class="product-price">@money( $details['price'])</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus f-left">
                                                            <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">@money(2000000)</td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                                <!-- tr -->

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="coupon-discount box-shadow p-30 mb-50">
                                                <h6 class="widget-title border-left mb-20">Voucher</h6>
                                                <p>Nhập mã giảm giá của bạn</p>
                                                <input type="text" name="name" placeholder="Enter your code here.">
                                                <button class="submit-btn-1 black-bg btn-hover-2" type="submit">Áp dụng</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="payment-details box-shadow p-30 mb-50">
                                                <h6 class="widget-title border-left mb-20">Hóa đơn</h6>
                                                <table>
                                                    <tr>
                                                        <td class="td-title-1">Tổng tiền hàng</td>
                                                        <td class="td-title-2">@money(4000000)đ</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Phí vận chuyển</td>
                                                        <td class="td-title-2">@money(30000)đ</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">VAT</td>
                                                        <td class="td-title-2">0đ</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Tổng thanh toán</td>
                                                        <td class="order-total-price">@money(4030000)đ</td>
                                                    </tr>

                                                </table>
                                                <a href="{{ route('customer.checkout') }}" class="button extra-small " tabindex="-1">
                                                    <span class="text-uppercase">Mua ngay</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- shopping-cart end -->
                        <!-- wishlist start -->

                        <!-- wishlist end -->
                        <!-- checkout start -->

                        <!-- checkout end -->
                        <!-- order-complete start -->

                        <!-- order-complete end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
@endsection

