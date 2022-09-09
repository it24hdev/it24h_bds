@extends('frontend.layouts.base')
@section('title')
    <title>Liên hệ</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/crontact.css')}}">
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
    </div>
@endsection

@section('footer')
@include('frontend.layouts.footer')
@endsection
