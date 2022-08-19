<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function property_list(){
        return \view('frontend.property-list');
    }
    public function create_property(){
        return \view('frontend.create-property');
    }

    public function property(){
        return view('frontend.property');
    }

    public function detail_blog(){
        return view('frontend.detail-blog');
    }

    public function list_blog(){
        return view('frontend.list-blog');
    }
}
