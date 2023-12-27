@extends('customer.master')
@section('page')
    Blog
@endsection

@section('content')

        <!-- BLOG SECTION START -->
        <div class="blog-section mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-details-area">
                            <!-- blog-details-photo -->
                            <div class="blog-details-photo bg-img-1 p-20 mb-30">
                                <img src="{{ asset('assets/assetscustomer/imgthi2/04.png')}}" alt="">
                                <div class="today-date bg-img-1">
                                    <span class="meta-date">30</span>
                                    <span class="meta-month">June</span>
                                </div>
                            </div>
                            <!-- blog-like-share -->
                            <ul class="blog-like-share mb-20">
                                <li>
                                    <a href="#"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                </li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                </li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-share"></i>29 Share</a>
                                </li>
                            </ul>
                            <!-- blog-details-title -->
                            <h3 class="blog-details-title mb-30">Nike anti clog</h3>
                            <!-- blog-description -->
                            <div class="blog-description mb-60">
                                <p> Với tư cách là nhà vô địch về thể thao và vận động viên, Nike hợp tác với các vận động viên có chung niềm
                                    tin rằng thể thao có thể phá vỡ các rào cản, đẩy lùi các giới hạn, châm ngòi cho sự thay đổi và đưa thế giới
                                    tiến về phía trước. Chính trên tinh thần hợp tác đó mà Ronaldo - một trong những tiền đạo hay động nhất của bóng đá
                                    - đang cho ra mắt bộ sưu tập phong cách sống và biểu diễn đầu tiên của mình với Nike, phục vụ tương lai của các vận
                                    động viên và môn thể thao này. Rashford muốn bộ sưu tập khuyến khích những người trẻ thông qua sự tự tin của chính họ,
                                    một tư duy đã đưa anh từ khởi đầu khiêm tốn ở Manchester trở thành ngôi sao quốc tế. Anh coi những món đồ trong bộ sưu
                                    tập là công cụ có thể đưa các vận động viên lên tầm cao mới.</p>

                                <div class="quote-author pl-30">
                                    <p class="quote-border pl-30">Marcus nói: “Cũng giống như trên sân, mọi khoảnh khắc và chi tiết đều có giá trị, và tôi tự hào về cách chúng hội tụ trong bộ sưu tập đầu tiên của tôi với Nike”. “Điều này dành cho tất cả những ai có ước mơ lớn, làm việc chăm chỉ và không bao giờ ngừng tin tưởng vào bản thân.”</p>
                                </div>

                                <p>Giày dép được dẫn dắt bởi kiểu dáng trải rộng cả về hiệu suất và phong cách sống. Trên sân, dòng giày Mercurial Superfly được tạo ra với bảng màu chuyển sắc lấy cảm hứng từ đôi giày của Marcus trong sự nghiệp thi đấu của anh cũng như đồ họa thể hiện làn sóng âm thanh, thể hiện mong muốn nâng đỡ người khác của Marcus. Ngoài sân cỏ, Nike Air Max Pulse có dải màu xanh nhạt ở phía trên, cùng với da mờ và vải dệt kim kỹ thuật. Phần trên của nó gợi nhớ đến thiết kế Mercurial, trong khi các khu vực khác của giày mang lại một số nét đặc trưng, ​​như logo của Marcus trên lưỡi giày. Tấm lót tất có dòng chữ: “Khi bạn tin vào chính mình, những điều đáng kinh ngạc có thể xảy ra”. Các trang phục khác bao gồm áo khoác thể thao dệt, quần dài, áo phông và một quả bóng đá phiên bản giới hạn.</p>
                            </div>
                            <!-- blog-share-tags -->
                            <div class="blog-share-tags box-shadow clearfix mb-60">
                                <div class="blog-share f-left">
                                    <p class="share-tags-title f-left">share</p>
                                    <ul class="footer-social f-left">
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
                                <div class="blog-tags f-right">
                                    <p class="share-tags-title f-left">Tags</p>
                                    <ul class="blog-tags-list f-left">
                                        <li><a href="#">Mobile</a></li>
                                        <li><a href="#">IOS</a></li>
                                        <li><a href="#">Windows</a></li>
                                        <li><a href="#">Tab</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- author-post -->
                            <div class="media author-post box-shadow mb-60">
                                <div class="media-left pr-20">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('assets/assetscustomer/img/author/1.jpg')}}" alt="#">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">
                                        <a href="#">Subas Chandra Das</a>
                                    </h6>
                                    <p class="mb-0">Bài viết rất hay</p>
                                </div>
                            </div>
                            <!-- comments on t this post -->
                            <div class="post-comments mb-60">
                                <h4 class="blog-section-title border-left mb-30">Bình luận</h4>
                                <!-- single-comments -->
                                <div class="media mt-30">
                                    <div class="media-left pr-30">
                                        <a href="#"><img class="media-object" src="{{ asset('assets/assetscustomer/img/author/2.jpg')}}" alt="#"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <div class="name-commenter f-left">
                                                <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                <p class="mb-10">27 Jun, 2019 at 2:30pm</p>
                                            </div>
                                            <ul class="reply-delate f-right">
                                                <li><a href="#">Reply</a></li>
                                                <li>/</li>
                                                <li><a href="#">Delate</a></li>
                                            </ul>
                                        </div>
                                        <p class="mb-0"> Tôi yêu CR7, tôi yêu Nike.</p>
                                    </div>
                                </div>
                                <!-- single-comments -->
                                <div class="media mt-30">
                                    <div class="media-left pr-30">
                                        <a href="#"><img class="media-object" src="{{ asset('assets/assetscustomer/img/author/3.jpg')}}" alt="#"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <div class="name-commenter f-left">
                                                <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                <p class="mb-10">27 Jun, 2019 at 2:30pm</p>
                                            </div>
                                            <ul class="reply-delate f-right">
                                                <li><a href="#">Reply</a></li>
                                                <li>/</li>
                                                <li><a href="#">Delate</a></li>
                                            </ul>
                                        </div>
                                        <p class="mb-0">Giày đi rất vừa vặn.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- leave your comment -->
                            <div class="leave-comment">
                                <h4 class="blog-section-title border-left mb-30">Bình luận ngay</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" placeholder="Họ tên">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" placeholder="Email ...">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="subject" placeholder="Subject here...">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="custom-textarea" placeholder="Your comment here..."></textarea>
                                    </div>
                                </div>
                                <button class="submit-btn-1 black-bg mt-30 btn-hover-2" type="submit">Gửi</button>
                            </div>
                            <!--  -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- BLOG SECTION END -->



@endsection
