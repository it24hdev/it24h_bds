@extends('frontend.layouts.base')

@section('header')
@include('frontend.layouts.header-home')
@endsection

@section('login')
@include('frontend.layouts.login')
@endsection


@section('menu-mobile')
@include('frontend.layouts.menu-mobile')
@endsection

@section('login-mobile')
@include('frontend.layouts.login-mobile')
@endsection

@section('content')
    <div id="wp-content">
        <div class="wp-list-top">
            <div class="wp-head">
                <h2 class="title">Bất động sản có thể bạn quan tâm</h2>
                <div class="wp-control">
                    <div class="taxonomy">Bất động sản bán</div>
                    <div class="taxonomy">Bất động sản cho thuê</div>
                    <div class="taxonomy">Dự án</div>
                </div>
            </div>
            <ul class="post-list">
                <li>
                    <div class="wp-post">
                        <a href="" class="img-wp">
                            <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                            <div class="location"><i class="fas fa-map-marker-alt me-1"></i>Thủy Nguyên, Hải Phòng</div>
                            <div class="media"><i class="fas fa-camera"></i> 5 </div>
                        </a>
                        <div class="wp-detail">
                            <h4><a href=""> Bán căn hộ Royal DT 55m2 đến 430m2 từ 1-6PN, vay 70%, miễn phí DV. Thuê 11 tr/th, sổ đỏ vĩnh viễn</a></h4>
                            <span class="price">
                                Giá: 20 tỷ
                            </span>
                            <div class="description">
                                Công ty chúng tôi độc quyền phân phối hàng ngoại giao biệt thự các dự Vinhomes. Tôi đang ở tại Royal City nên tôi tự tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn đề liên qua
                            </div>
                            <div class="detail">
                                <div class="info-room"><i class="fal fa-bed-alt"></i> 3</div>
                                <div class="info-bath"><i class="fas fa-bath"></i> 2 </div>
                                <div class="info-size"><i class="fal fa-expand-wide"></i> 100 m2</div>
                            </div>
                            <div class="wp-author">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset('asset/images/avt-user.png')}}" alt="">
                                    </div>
                                    <div class="name">Trung Dũng</div>
                                </div>
                                <div class="action">
                                    <div class="share_unit display-none">
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fas fa-envelope"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-viber"></i></a>
                                    </div>
                                    <span class="share box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Chia sẻ"><i class="fas fa-share-alt"></i></span>
                                    <span class="wish box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Lưu tin"><i class="far fa-heart"></i></span>
                                    <span class="compare box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="So sánh"><i class="fas fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wp-post">
                        <a href="" class="img-wp">
                            <img src="{{asset('asset/images/house_nice_2-525x328.jpg')}}" alt="">
                            <div class="location"><i class="fas fa-map-marker-alt me-1"></i>Thủy Nguyên, Hải Phòng</div>
                            <div class="media"><i class="fas fa-camera"></i> 5 </div>
                        </a>
                        <div class="wp-detail">
                            <h4><a href=""> Bán căn hộ Royal DT 55m2 đến 430m2 từ 1-6PN, vay 70%, miễn phí DV. Thuê 11 tr/th, sổ đỏ vĩnh viễn</a></h4>
                            <span class="price">
                                Giá: 20 tỷ
                            </span>
                            <div class="description">
                                Công ty chúng tôi độc quyền phân phối hàng ngoại giao biệt thự các dự Vinhomes. Tôi đang ở tại Royal City nên tôi tự tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn đề liên qua
                            </div>
                            <div class="detail">
                                <div class="info-room"><i class="fal fa-bed-alt"></i> 3</div>
                                <div class="info-bath"><i class="fas fa-bath"></i> 2 </div>
                                <div class="info-size"><i class="fal fa-expand-wide"></i> 100 m2</div>
                            </div>
                            <div class="wp-author">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset('asset/images/avt-user.png')}}" alt="">
                                    </div>
                                    <div class="name">Trung Dũng</div>
                                </div>
                                <div class="action">
                                    <div class="share_unit display-none">
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fas fa-envelope"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-viber"></i></a>
                                    </div>
                                    <span class="share box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Chia sẻ"><i class="fas fa-share-alt"></i></span>
                                    <span class="wish box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Lưu tin"><i class="far fa-heart"></i></span>
                                    <span class="compare box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="So sánh"><i class="fas fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wp-post">
                        <a href="" class="img-wp">
                            <img src="{{asset('asset/images/featured_property_large-525x328.jpg')}}" alt="">
                            <div class="location"><i class="fas fa-map-marker-alt me-1"></i>Thủy Nguyên, Hải Phòng</div>
                            <div class="media"><i class="fas fa-camera"></i> 5 </div>
                        </a>
                        <div class="wp-detail">
                            <h4><a href=""> Bán căn hộ Royal DT 55m2 đến 430m2 từ 1-6PN, vay 70%, miễn phí DV. Thuê 11 tr/th, sổ đỏ vĩnh viễn</a></h4>
                            <span class="price">
                                Giá: 20 tỷ
                            </span>
                            <div class="description">
                                Công ty chúng tôi độc quyền phân phối hàng ngoại giao biệt thự các dự Vinhomes. Tôi đang ở tại Royal City nên tôi tự tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn đề liên qua
                            </div>
                            <div class="detail">
                                <div class="info-room"><i class="fal fa-bed-alt"></i> 3</div>
                                <div class="info-bath"><i class="fas fa-bath"></i> 2 </div>
                                <div class="info-size"><i class="fal fa-expand-wide"></i> 100 m2</div>
                            </div>
                            <div class="wp-author">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset('asset/images/avt-user.png')}}" alt="">
                                    </div>
                                    <div class="name">Trung Dũng</div>
                                </div>
                                <div class="action">
                                    <div class="share_unit display-none">
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fas fa-envelope"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-viber"></i></a>
                                    </div>
                                    <span class="share box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Chia sẻ"><i class="fas fa-share-alt"></i></span>
                                    <span class="wish box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Lưu tin"><i class="far fa-heart"></i></span>
                                    <span class="compare box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="So sánh"><i class="fas fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wp-post">
                        <a href="" class="img-wp">
                            <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                            <div class="location"><i class="fas fa-map-marker-alt me-1"></i>Thủy Nguyên, Hải Phòng</div>
                            <div class="media"><i class="fas fa-camera"></i> 5 </div>
                        </a>
                        <div class="wp-detail">
                            <h4><a href=""> Bán căn hộ Royal DT 55m2 đến 430m2 từ 1-6PN, vay 70%, miễn phí DV. Thuê 11 tr/th, sổ đỏ vĩnh viễn</a></h4>
                            <span class="price">
                                Giá: 20 tỷ
                            </span>
                            <div class="description">
                                Công ty chúng tôi độc quyền phân phối hàng ngoại giao biệt thự các dự Vinhomes. Tôi đang ở tại Royal City nên tôi tự tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn đề liên qua
                            </div>
                            <div class="detail">
                                <div class="info-room"><i class="fal fa-bed-alt"></i> 3</div>
                                <div class="info-bath"><i class="fas fa-bath"></i> 2 </div>
                                <div class="info-size"><i class="fal fa-expand-wide"></i> 100 m2</div>
                            </div>
                            <div class="wp-author">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset('asset/images/avt-user.png')}}" alt="">
                                    </div>
                                    <div class="name">Trung Dũng</div>
                                </div>
                                <div class="action">
                                    <div class="share_unit display-none">
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fas fa-envelope"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-viber"></i></a>
                                    </div>
                                    <span class="share box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Chia sẻ"><i class="fas fa-share-alt"></i></span>
                                    <span class="wish box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Lưu tin"><i class="far fa-heart"></i></span>
                                    <span class="compare box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="So sánh"><i class="fas fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wp-post">
                        <a href="" class="img-wp">
                            <img src="{{asset('asset/images/house_nice_2-525x328.jpg')}}" alt="">
                            <div class="location"><i class="fas fa-map-marker-alt me-1"></i>Thủy Nguyên, Hải Phòng</div>
                            <div class="media"><i class="fas fa-camera"></i> 5 </div>
                        </a>
                        <div class="wp-detail">
                            <h4><a href=""> Bán căn hộ Royal DT 55m2 đến 430m2 từ 1-6PN, vay 70%, miễn phí DV. Thuê 11 tr/th, sổ đỏ vĩnh viễn</a></h4>
                            <span class="price">
                                Giá: 20 tỷ
                            </span>
                            <div class="description">
                                Công ty chúng tôi độc quyền phân phối hàng ngoại giao biệt thự các dự Vinhomes. Tôi đang ở tại Royal City nên tôi tự tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn đề liên qua
                            </div>
                            <div class="detail">
                                <div class="info-room"><i class="fal fa-bed-alt"></i> 3</div>
                                <div class="info-bath"><i class="fas fa-bath"></i> 2 </div>
                                <div class="info-size"><i class="fal fa-expand-wide"></i> 100 m2</div>
                            </div>
                            <div class="wp-author">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset('asset/images/avt-user.png')}}" alt="">
                                    </div>
                                    <div class="name">Trung Dũng</div>
                                </div>
                                <div class="action">
                                    <div class="share_unit display-none">
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fas fa-envelope"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-viber"></i></a>
                                    </div>
                                    <span class="share box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Chia sẻ"><i class="fas fa-share-alt"></i></span>
                                    <span class="wish box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Lưu tin"><i class="far fa-heart"></i></span>
                                    <span class="compare box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="So sánh"><i class="fas fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wp-post">
                        <a href="" class="img-wp">
                            <img src="{{asset('asset/images/featured_property_large-525x328.jpg')}}" alt="">
                            <div class="location"><i class="fas fa-map-marker-alt me-1"></i>Thủy Nguyên, Hải Phòng</div>
                            <div class="media"><i class="fas fa-camera"></i> 5 </div>
                        </a>
                        <div class="wp-detail">
                            <h4><a href=""> Bán căn hộ Royal DT 55m2 đến 430m2 từ 1-6PN, vay 70%, miễn phí DV. Thuê 11 tr/th, sổ đỏ vĩnh viễn</a></h4>
                            <span class="price">
                                Giá: 20 tỷ
                            </span>
                            <div class="description">
                                Công ty chúng tôi độc quyền phân phối hàng ngoại giao biệt thự các dự Vinhomes. Tôi đang ở tại Royal City nên tôi tự tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn đề liên qua
                            </div>
                            <div class="detail">
                                <div class="info-room"><i class="fal fa-bed-alt"></i> 3</div>
                                <div class="info-bath"><i class="fas fa-bath"></i> 2 </div>
                                <div class="info-size"><i class="fal fa-expand-wide"></i> 100 m2</div>
                            </div>
                            <div class="wp-author">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset('asset/images/avt-user.png')}}" alt="">
                                    </div>
                                    <div class="name">Trung Dũng</div>
                                </div>
                                <div class="action">
                                    <div class="share_unit display-none">
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fas fa-envelope"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-viber"></i></a>
                                    </div>
                                    <span class="share box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Chia sẻ"><i class="fas fa-share-alt"></i></span>
                                    <span class="wish box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Lưu tin"><i class="far fa-heart"></i></span>
                                    <span class="compare box-action" data-bs-toggle="tooltip" data-bs-placement="top" title="So sánh"><i class="fas fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="show-category">
                <a href="" class="btn-redirect">Xem các bài đăng khác</a>
            </div>
        </div>

        <div class="list-post-field">
            <div class="container-home">
                <div class="wp-list-post-field">
                    <div class="wp-title">
                        <h3>Các loại hình bất động sản</h3>
                        <p>Tìm kiếm các bất động sản của bạn theo nhóm loại hình!</p>
                    </div>
                    <div class="wp-list-field">
                        <ul class="list-field owl-carousel owl-theme" id="list-field">
                            <li>
                                <a href="">
                                    <div class="image-field" style="background-image: url('{{asset('asset/images/biet-th.jpg')}}')"></div>
                                    <h3 class="name-field">Biệt thự</h3>
                                    <div class="count-post">1202 bài đăng</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-field" style="background-image: url('{{asset('asset/images/can-ho-chung-cu.jpg')}}')"></div>
                                    <h3 class="name-field">Căn hộ chung cư</h3>
                                    <div class="count-post">22023 bài đăng</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-field" style="background-image: url('{{asset('asset/images/shop-house.jpg')}}')"></div>
                                    <h3 class="name-field">Shophouse</h3>
                                    <div class="count-post">1655 bài đăng</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-field" style="background-image: url('{{asset('asset/images/condotel.jpg')}}')"></div>
                                    <h3 class="name-field">Condotel</h3>
                                    <div class="count-post">19600 bài đăng</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-field" style="background-image: url('{{asset('asset/images/nha-dat.jpg')}}')"></div>
                                    <h3 class="name-field">Nhà đất</h3>
                                    <div class="count-post">1655 bài đăng</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-field" style="background-image: url('{{asset('asset/images/dat-nen.jpg')}}')"></div>
                                    <h3 class="name-field">Đất nền</h3>
                                    <div class="count-post">26032 bài đăng</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="wp-list-post-area">
            <div class="wp-head">
                <h2 class="title">Bất động sản theo khu vực</h2>
                <p>Tìm kiếm các bất động sản bạn mong muốn theo khu vực địa lý tỉnh, thành phố</p>
            </div>
            <div class="list-area">
                <div class="wp-image-area area-1">
                    <a href="" class="image-background" style="background-image: url('{{asset('asset/images/hochiminh.jpg')}}');">
                        <div class="content-area">
                            <h4>TP. Hồ Chí Minh</h4>
                            <div class="count-post">12521 bài đăng</div>
                        </div>
                    </a>
                </div>
                <div class="wp-image-area area">
                    <a href="" class="image-background" style="background-image: url('{{asset('asset/images/hanoi.jpg')}}');">
                        <div class="content-area">
                            <h4>Hà Nội</h4>
                            <div class="count-post">10099 bài đăng</div>
                        </div>
                    </a>
                </div>
                <div class="wp-image-area area">
                    <a href="" class="image-background" style="background-image: url('{{asset('asset/images/haiphong.jpg')}}');">
                        <div class="content-area">
                            <h4>Hải Phòng</h4>
                            <div class="count-post">999 bài đăng</div>
                        </div>
                    </a>
                </div>
                <div class="wp-image-area area">
                    <a href="" class="image-background" style="background-image: url('{{asset('asset/images/danang.jpg')}}');">
                        <div class="content-area">
                            <h4>Đà Nẵng</h4>
                            <div class="count-post">689 bài đăng</div>
                        </div>
                    </a>
                </div>
                <div class="wp-image-area area">
                    <a href="" class="image-background" style="background-image: url('{{asset('asset/images/binhduong.jpg')}}');">
                        <div class="content-area">
                            <h4>Bình Dương</h4>
                            <div class="count-post">589 bài đăng</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="wp-list-news">
            <div class="container-home">
                <div class="head-news">
                    <h2>Tin tức bất động sản</h2>
                </div>
                <div class="list-news">
                    <ul>
                        <li>
                            <a href="">
                                <div class="thumb-post">
                                    <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                                </div>
                                <div class="detail-post">
                                    <h3 class="title">Người mua nhà Hà Nội "cụt hứng" do loạt dự án căn hộ mới có giá quá cao</h3>
                                    <span class="date">03/08/2022</span>
                                    <div class="desc">
                                        <p>Sau một thời gian dài vắng bóng nguồn cung mới, Hà Nội xuất hiện một số dự án mới được giới thiệu hoặc mở bán chính thức trên thị trường trong 3 tháng gần đây. Tuy nhiên, nguồn cung mới này không giải quyết được cơn khát nhà ở của thị trường do giá bán cao so với thu nhập của phần đông dân chúng.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="thumb-post">
                                    <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                                </div>
                                <div class="detail-post">
                                    <h3 class="title">Người mua nhà Hà Nội "cụt hứng" do loạt dự án căn hộ mới có giá quá cao</h3>
                                    <span class="date">03/08/2022</span>
                                    <div class="desc">
                                        <p>Sau một thời gian dài vắng bóng nguồn cung mới, Hà Nội xuất hiện một số dự án mới được giới thiệu hoặc mở bán chính thức trên thị trường trong 3 tháng gần đây. Tuy nhiên, nguồn cung mới này không giải quyết được cơn khát nhà ở của thị trường do giá bán cao so với thu nhập của phần đông dân chúng.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="thumb-post">
                                    <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                                </div>
                                <div class="detail-post">
                                    <h3 class="title">Người mua nhà Hà Nội "cụt hứng" do loạt dự án căn hộ mới có giá quá cao</h3>
                                    <span class="date">03/08/2022</span>
                                    <div class="desc">
                                        <p>Sau một thời gian dài vắng bóng nguồn cung mới, Hà Nội xuất hiện một số dự án mới được giới thiệu hoặc mở bán chính thức trên thị trường trong 3 tháng gần đây. Tuy nhiên, nguồn cung mới này không giải quyết được cơn khát nhà ở của thị trường do giá bán cao so với thu nhập của phần đông dân chúng.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="thumb-post">
                                    <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                                </div>
                                <div class="detail-post">
                                    <h3 class="title">Người mua nhà Hà Nội "cụt hứng" do loạt dự án căn hộ mới có giá quá cao</h3>
                                    <span class="date">03/08/2022</span>
                                    <div class="desc">
                                        <p>Sau một thời gian dài vắng bóng nguồn cung mới, Hà Nội xuất hiện một số dự án mới được giới thiệu hoặc mở bán chính thức trên thị trường trong 3 tháng gần đây. Tuy nhiên, nguồn cung mới này không giải quyết được cơn khát nhà ở của thị trường do giá bán cao so với thu nhập của phần đông dân chúng.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="thumb-post">
                                    <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                                </div>
                                <div class="detail-post">
                                    <h3 class="title">Người mua nhà Hà Nội "cụt hứng" do loạt dự án căn hộ mới có giá quá cao</h3>
                                    <span class="date">03/08/2022</span>
                                    <div class="desc">
                                        <p>Sau một thời gian dài vắng bóng nguồn cung mới, Hà Nội xuất hiện một số dự án mới được giới thiệu hoặc mở bán chính thức trên thị trường trong 3 tháng gần đây. Tuy nhiên, nguồn cung mới này không giải quyết được cơn khát nhà ở của thị trường do giá bán cao so với thu nhập của phần đông dân chúng.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="thumb-post">
                                    <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                                </div>
                                <div class="detail-post">
                                    <h3 class="title">Người mua nhà Hà Nội "cụt hứng" do loạt dự án căn hộ mới có giá quá cao do loạt dự án căn hộ mới có giá quá cao</h3>
                                    <span class="date">03/08/2022</span>
                                    <div class="desc">
                                        <p>Sau một thời gian dài vắng bóng nguồn cung mới, Hà Nội xuất hiện một số dự án mới được giới thiệu hoặc mở bán chính thức trên thị trường trong 3 tháng gần đây. Tuy nhiên, nguồn cung mới này không giải quyết được cơn khát nhà ở của thị trường do giá bán cao so với thu nhập của phần đông dân chúng.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="show-category">
                    <a href="" class="btn-redirect">Xem các bài viết khác</a>
                </div>
            </div>
        </div>

    </div>
@endsection



@section('footer')
@include('frontend.layouts.footer')
@endsection
@section('js')
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        $(document).ready(function(){
            $('.share').click(function(){
                $(this).parent('.action').children('.share_unit').toggleClass('display-none');
            });
            $(document).scroll(function(){
                $('.share_unit').addClass('display-none');
            })
        });

        $('#list-field').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            900:{
                items:3
            },

        }
    });
    </script>
@endsection
