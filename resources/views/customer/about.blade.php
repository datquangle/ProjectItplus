@extends('customer.master')
@section('page')
    About
@endsection

@section('content')

    <!-- ABOUT SECTION START -->
    <div class="about-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-start ">
                        <h2 class="uppercase">About DC Sneaker</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-photo p-20 bg-img-1">
                        <img src="{{ asset('assets/assetscustomer/img/others/about.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-description mt-50">
                        <p>DC Ssneaker là một cửa hàng giày trực tuyến đa dạng và chất lượng cao, chuyên cung cấp các sản phẩm giày thể thao chất lượng hàng đầu. Với mục tiêu mang đến sự thoải mái và phong cách cho khách hàng, chúng tôi tự hào với một bộ sưu tập đa dạng, từ giày chạy bộ đến giày bóng rổ, giúp bạn tạo dấu ấn trong mọi hoạt động thể thao.</p>

                        <p>Với chất liệu chất lượng cao, thiết kế đa dạng và tính năng tiên tiến, DC Sneaker cam kết cung cấp cho bạn những sản phẩm giày đáng tin cậy, mang lại sự thoải mái và hỗ trợ tối đa cho đôi chân của bạn. Bên cạnh đó, chúng tôi luôn đặt chất lượng sản phẩm và trải nghiệm khách hàng lên hàng đầu, cung cấp dịch vụ chăm sóc khách hàng tận tâm và hiệu quả.</p>

                        <p>Hãy khám phá bộ sưu tập giày thể thao đa dạng của chúng tôi và trải nghiệm sự thoải mái và phong cách cùng DC Sneaker ngay hôm nay!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION END -->

    <!-- TEAM SECTION START -->
    <div class="team-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-start ">
                        <h2 class="uppercase">team member</h2>
                    </div>
                    <div class="active-team-member section">
                        <!-- team-member start -->
                        <div class="team-member-item">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="{{ asset('assets/assetscustomer/img/team/1.jpg')}}" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Lê Quang Đạt</a></h5>

                                    <ul class="footer-social">
                                        <li>
                                            <a class="facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="google-plus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="rss" href="#" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM SECTION END -->

@endsection
