@extends('customer.master')

@section('page')
    Contact
@endsection

@section('content')

    <!-- ADDRESS SECTION START -->
    <div class="address-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-address box-shadow">
                        <i class="zmdi zmdi-pin"></i>
                        <h6>123 Định Công, Hoàng Mai, Hà Nội.</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-address box-shadow">
                        <i class="zmdi zmdi-phone"></i>
                        <h6><a href="tel:0123456789">Mr. Đạt 0131241239</a></h6>
                        <h6><a href="tel:0123456789">Mr. Lẻ 0312432552</a></h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-address box-shadow">
                        <i class="zmdi zmdi-email"></i>
                        <h6>ledat1st@gmail.com</h6>
                        <h6>dcsneaker@gmail.com</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ADDRESS SECTION END -->

    <!-- GOOGLE MAP SECTION START -->
    {{-- <div class="google-map-section">
        <div class="container-fluid">
            <div class="google-map plr-185">
                <div id="googleMap"></div>
            </div>
        </div>
    </div> --}}
    <!-- GOOGLE MAP SECTION END -->

    <!-- MESSAGE BOX SECTION START -->
    <div class="message-box-section mt--50 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="message-box box-shadow white-bg">
                        <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="blog-section-title border-left mb-30">get in touch</h4>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="con_name" placeholder="Your name here">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="con_email" placeholder="Your email here">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="con_subject" placeholder="Subject here">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="con_phone" placeholder="Your phone here">
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="custom-textarea" name="con_message"
                                        placeholder="Message"></textarea>
                                    <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">submit
                                        message</button>
                                </div>
                            </div>
                            <p class="form-message"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MESSAGE BOX SECTION END -->


@endsection
