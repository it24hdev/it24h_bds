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
        <div class="wp-list-top">
            <div class="wp-head">
                <h2 class="title">Bất động sản đang bán</h2>
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
        <div class="sidebar-right">
            sidebar
        </div>
    </div>
@endsection

@section('footer')
@include('frontend.layouts.footer')
@endsection
