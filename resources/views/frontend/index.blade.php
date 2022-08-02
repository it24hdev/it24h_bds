@extends('frontend.layouts.base')

@section('header')
@include('frontend.layouts.header-home')
@endsection

@section('menu-mobile')
@include('frontend.layouts.menu-mobile')
@endsection

@section('content')
    <div id="wp-content">
        <div class="wp-list-top">
            <h2 class="title">Bất động sản có thể bạn quan tâm</h2>
            <ul class="post-list">
                <li>
                    <a href="">
                        <div class="img-wp">
                            <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                            <div class="location"><i class="fas fa-map-marker-alt"></i>Thủy Nguyên, Hải Phòng</div>
                            <div class="media"><i class="fas fa-camera"></i></div>
                        </div>

                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="img-wp">
                            <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                            <div class="location"><i class="fas fa-map-marker-alt"></i>Thủy Nguyên, Hải Phòng</div>
                            <div class="media"><i class="fas fa-camera"></i></div>
                        </div>

                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="img-wp">
                            <img src="{{asset('asset/images/house_nice-525x328.jpg')}}" alt="">
                            <div class="location"><i class="fas fa-map-marker-alt"></i>Thủy Nguyên, Hải Phòng</div>
                            <div class="media"><i class="fas fa-camera"></i></div>
                        </div>

                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection



@section('footer')
@include('frontend.layouts.footer')
@endsection
