@extends('frontend.layouts.base')
@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/create-property.css')}}">
@endsection

@section('header')
@include('frontend.layouts.header-page')
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
        <div class="container-content">
            <div id="wp-form-add-property">
                <div class="wp-info-categoty">
                    <div class="info-categoty">
                        <h4 class="title">Thông tin cơ bản</h4>
                        <p>Thông tin có dấu <span class="text-danger">(*)</span> là bắt buộc.</p>
                        <div class="vertical">
                            <button class="active vertical-action">Bán</button>
                            <button class="vertical-action">Cho thuê</button>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Loại bất động sản <span class="text-danger">*</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>VD: Nhà riêng</option>
                                <option value="1">Bán căn hộ</option>
                                <option value="2">Bán đất nền</option>
                                <option value="3">Bán biệt thự</option>
                            </select>
                        </div>
                        <div class="wp-select-address">
                            <div class="form-group mb-4">
                                <label for="">Tỉnh, thành phố <span class="text-danger">*</span></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Chọn</option>
                                    <option value="1">...</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Quận, huyện <span class="text-danger">*</span></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Chọn</option>
                                    <option value="1">...</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Phường, xã <span class="text-danger">*</span></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Chọn</option>
                                    <option value="1">...</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Đường, phố</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Chọn</option>
                                    <option value="1">...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wp-content-post">
                    <div class="content-post">
                        <h4 class="title">Thông tin bài viết</h4>
                        <div class="form-group mb-4">
                            <label for="name">Tiêu đề <span class="text-danger">*</span></label>
                            <textarea name="" id="name" rows="2" placeholder="VD: Bán nhà riêng 100m2 tại Quận 2" class="form-control"></textarea>
                            <p>Tối thiểu 30 ký tự, tối đa 99 ký tự.</p>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Mô tả <span class="text-danger">*</span></label>
                            <textarea name="" id="" rows="5" placeholder="VD: Nhập mô tả chung về bất động sản của bạn. VD: Vị trí đẹp, tiện ích..." class="form-control"></textarea>
                            <p>Tối thiểu 30 ký tự, tối đa 3.000 ký tự.</p>
                        </div>
                    </div>
                </div>
                <div class="wp-info-property">
                    <div class="info-property">
                        <h4 class="title">Thông tin bất động sản</h4>
                        <div class="form-group mb-4">
                            <label for="">Diện tích <span class="text-danger">*</span></label>
                            <div class="form-size-property">
                                <input type="text" class="form-control" autocomplete="off" placeholder="Nhập diện tích VD: 100">
                                <span>m²</span>
                            </div>
                        </div>
                        <div class="wp-price">
                            <div class="form-group mb-4">
                                <label for="">Mức giá <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Nhập mức giá, VD 10000000">
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Đơn vị</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="VND">VND</option>
                                    <option value="gia/m">Giá / m²</option>
                                    <option value="thoa-thuan">Thỏa thuận</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Giấy tờ pháp lý</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Chọn</option>
                                <option value="">Sổ đỏ/ Sổ hồng</option>
                                <option value="">Hợp đồng mua bán</option>
                                <option value="">Đang chờ sổ</option>
                                <option value="">Giấy tờ pháp lý khác</option>
                            </select>
                        </div>
                        <div class="form-group number-room mb-3">
                            <label for="">Số phòng ngủ</label>
                            <input type="number" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group number-room mb-3">
                            <label for="">Số phòng tắm, vệ sinh</label>
                            <input type="number" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group number-room mb-3">
                            <label for="">Số tầng</label>
                            <input type="number" class="form-control" autocomplete="off">
                        </div>
                        <div class="bonus mb-4">
                            <p>Mô tả bổ xung</p>
                        </div>
                        <div class="wp-bonus-detail">
                            <div class="form-group mb-3">
                                <label for="">Hướng nhà</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Chọn hướng</option>
                                    <option value="">Đông</option>
                                    <option value="">Tây</option>
                                    <option value="">Nam</option>
                                    <option value="">Bắc</option>
                                    <option value="">Đông Bắc</option>
                                    <option value="">Tây Bắc</option>
                                    <option value="">Đông Nam</option>
                                    <option value="">Tây Nam</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Hướng ban công</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Chọn hướng</option>
                                    <option value="">Đông</option>
                                    <option value="">Tây</option>
                                    <option value="">Nam</option>
                                    <option value="">Bắc</option>
                                    <option value="">Đông Bắc</option>
                                    <option value="">Tây Bắc</option>
                                    <option value="">Đông Nam</option>
                                    <option value="">Tây Nam</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Đường vào</label>
                                <div class="form-size-property">
                                    <input type="text" class="form-control" autocomplete="off" placeholder="Nhập số">
                                    <span>m</span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mặt tiền</label>
                                <div class="form-size-property">
                                    <input type="text" class="form-control" autocomplete="off" placeholder="Nhập số">
                                    <span>m</span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nội thất</label>
                                <input type="text" class="form-control" autocomplete="off" placeholder="VD: Nội thất đầy đủ">
                            </div>
                        </div>
                    </div>
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
        $('.vertical-action').click(function(){
            $('.vertical-action').removeClass('active');
            $(this).toggleClass('active');
        });
    </script>
@endsection
