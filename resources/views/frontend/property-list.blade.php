@extends('frontend.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/content-property-list.css')}}">
@endsection

@section('header')
@include('frontend.layouts.header-page')
@endsection

@section('menu-mobile')
@include('frontend.layouts.menu-mobile')
@endsection

@section('content')
    <div id="wp-content">
        <div class="bread-crumb">
            <ul class="container-breadcrumb">
                <li><a href="">Bất động sản bán</a></li>
                <li><i class="fal fa-angle-right"></i> Bất động sản bán toàn quốc</li>
            </ul>
        </div>
        <div class="content">
            {{-- ==== CONTENT ===== --}}
            <div class="wp-list-top">
                <div class="wp-head">
                    <h2 class="title">Bất động sản đang bán</h2>
                </div>
                <div class="count-filter">
                    <div class="count">
                        <p>Hiện có 195,624 bất động sản.</p>
                    </div>
                    <div class="filter">
                        <button class="btn filter-mobile" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="far fa-sliders-v"></i> Lọc kết quả</button>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Thông thường
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Tin thông thường</a></li>
                              <li><a class="dropdown-item" href="#">Tin mới nhất</a></li>
                              <li><a class="dropdown-item" href="#">Giá tăng dần</a></li>
                              <li><a class="dropdown-item" href="#">Giá giảm dần</a></li>
                            </ul>
                        </div>
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
                        </div>
                    </li>
                </ul>
                <div class="pagination">
                    <nav class="pagination">
                        <ul class="page-numbers">
                            <li>
                                <span class="page-numbers current">1</span>
                            </li>
                            <li>
                                <a href="#" class="page-numbers" >2</a>
                            </li>
                            <li>
                                <a href="#" class="page-numbers" >3</a>
                            </li>
                            <li>
                                <a href="#" class="page-numbers" >...</a>
                            </li>
                            <li>
                                <a href="#" class="next page-numbers">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            {{-- ===== SIDEBAR ===== --}}
            <div class="sidebar-right">
                <div class="filter-price filter-sidebar">
                    <h4>Lọc theo khoảng giá</h4>
                    <ul>
                        <li><a href="#">Thỏa thuận</a></li>
                        <li><a href="#"> < 500 triệu </a></li>
                        <li><a href="#">500 - 800 triệu</a></li>
                        <li><a href="#"> 800 triệu - 1 tỷ</a></li>
                        <li><a href="#"> 1 tỷ - 2 tỷ</a></li>
                        <li><a href="#"> 2 tỷ - 3 tỷ</a></li>
                        <li><a href="#"> 3 tỷ - 4 tỷ</a></li>
                        <li><a href="#"> > 4 tỷ</a></li>
                    </ul>
                </div>
                <div class="filter-size filter-sidebar">
                    <h4>Lọc theo diện tích</h4>
                    <ul>
                        <li><a href="#"> ≤ 30 m²</a></li>
                        <li><a href="#"> 30 - 50 m² </a></li>
                        <li><a href="#"> 50 - 80 m²</a></li>
                        <li><a href="#"> 80 - 100 m²</a></li>
                        <li><a href="#"> 100 - 150 m²</a></li>
                        <li><a href="#"> 150 - 200 m²</a></li>
                        <li><a href="#"> 200 - 300 m²</a></li>
                        <li><a href="#"> 300 - 400 m²</a></li>
                        <li><a href="#"> 400 - 500 m²</a></li>
                        <li><a href="#"> > 500 m²</a></li>
                    </ul>
                </div>
                <div class="filter-price filter-sidebar">
                    <h4>Lọc theo khu vực</h4>
                    <ul>
                        <li><a href="#">Hồ Chí Minh</a></li>
                        <li><a href="#"> Hà Nội </a></li>
                        <li><a href="#"> Hải Phòng</a></li>
                        <li><a href="#"> Đà Nẵng</a></li>
                        <li><a href="#"> Quảng Ninh</a></li>
                        <li><a href="#"> Phú Quốc</a></li>
                        <li><a href="#"> Bình Dương</a></li>
                        <li><a href="#"> Thái Nguyên</a></li>
                        <li><a href="#"> Bắc Ninh</a></li>
                        <li><a href="#"> Thanh Hóa</a></li>
                        <li><a href="#"> Vũng Tàu</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    {{-- ==== Sidebar mobile ==== --}}
    <div class="offcanvas offcanvas-end sidebar-mobile" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="filter-price filter-sidebar">
                <h4>Lọc theo khoảng giá</h4>
                <ul>
                    <li><a href="#">Thỏa thuận</a></li>
                    <li><a href="#"> < 500 triệu </a></li>
                    <li><a href="#">500 - 800 triệu</a></li>
                    <li><a href="#"> 800 triệu - 1 tỷ</a></li>
                    <li><a href="#"> 1 tỷ - 2 tỷ</a></li>
                    <li><a href="#"> 2 tỷ - 3 tỷ</a></li>
                    <li><a href="#"> 3 tỷ - 4 tỷ</a></li>
                    <li><a href="#"> > 4 tỷ</a></li>
                </ul>
            </div>
            <div class="filter-size filter-sidebar">
                <h4>Lọc theo diện tích</h4>
                <ul>
                    <li><a href="#"> ≤ 30 m²</a></li>
                    <li><a href="#"> 30 - 50 m² </a></li>
                    <li><a href="#"> 50 - 80 m²</a></li>
                    <li><a href="#"> 80 - 100 m²</a></li>
                    <li><a href="#"> 100 - 150 m²</a></li>
                    <li><a href="#"> 150 - 200 m²</a></li>
                    <li><a href="#"> 200 - 300 m²</a></li>
                    <li><a href="#"> 300 - 400 m²</a></li>
                    <li><a href="#"> 400 - 500 m²</a></li>
                    <li><a href="#"> > 500 m²</a></li>
                </ul>
            </div>
            <div class="filter-price filter-sidebar">
                <h4>Lọc theo khu vực</h4>
                <ul>
                    <li><a href="#">Hồ Chí Minh</a></li>
                    <li><a href="#"> Hà Nội </a></li>
                    <li><a href="#"> Hải Phòng</a></li>
                    <li><a href="#"> Đà Nẵng</a></li>
                    <li><a href="#"> Quảng Ninh</a></li>
                    <li><a href="#"> Phú Quốc</a></li>
                    <li><a href="#"> Bình Dương</a></li>
                    <li><a href="#"> Thái Nguyên</a></li>
                    <li><a href="#"> Bắc Ninh</a></li>
                    <li><a href="#"> Thanh Hóa</a></li>
                    <li><a href="#"> Vũng Tàu</a></li>
                </ul>
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
    </script>
@endsection
