@extends('frontend.layouts.base')
@section('header')
@include('frontend.layouts.header-page')
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/property.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/detail-blog.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/list-blog.css')}}">
@endsection

@section('menu-mobile')
@include('frontend.layouts.menu-mobile')
@endsection

@section('content')
    <div id="wp-content">
        <div class="wpestate_header_image full_screen_no parallax_effect_yes" style="background-image:url(https://wpresidence.net/wp-content/uploads/2020/06/background_header.jpg); height:450px; ">
            <div class="wpestate_header_image_overlay" style="background-color:#2b2525;opacity:0.8;background-image:url();">
            </div>
            <div class="heading_over_image_wrapper">
                <h1 class="heading_over_image">
                    Real Estate Blog
                </h1>
                <div class="subheading_over_image">
                    latest news from the industry
                </div>
            </div>
        </div>
        <div class="container content_wrapper">
            <div class="row">
                <div class="col-xs-12 col-md-12 breadcrumb_container">
                    <ol class="breadcrumb">
                        <li>
                            <a href="https://wpresidence.net/">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            Blog Posts List
                        </li>
                    </ol>
                </div>
                <div class=" col-md-12 ">
                    <span class="entry-title listing_loader_title">
                        Your search results
                    </span>
                    <div class="spinner" id="listing_loader">
                        <div class="rect1">
                        </div>
                        <div class="rect2">
                        </div>
                        <div class="rect3">
                        </div>
                        <div class="rect4">
                        </div>
                        <div class="rect5">
                        </div>
                    </div>
                    <div id="listing_ajax_container">
                    </div>
                    <h1 class="entry-title title_prop">
                        Blog Posts List
                    </h1>
                    <div class="single-content">
                    </div>
                    <div class="blog_list_wrapper row">
                        <div class="col-md-4 listing_wrapper blog2v">
                            <div class="property_listing_blog" data-link="https://wpresidence.net/sidebar-on-the-right-search-widget/">
                                <div class="blog_unit_image">
                                    <a href="https://wpresidence.net/sidebar-on-the-right-search-widget/">
                                        <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/designer2-525x328.jpeg" height="328" loading="lazy" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/designer2-525x328.jpeg" width="525"/>
                                    </a>
                                </div>
                                <h4>
                                    <a class="blog_unit_title" href="https://wpresidence.net/sidebar-on-the-right-search-widget/">
                                        Search widget on the right
                                    </a>
                                </h4>
                                <div class="blog_unit_meta">
                                    Sep 08, 2017
                                </div>
                                <div class="listing_details the_grid_view">
                                    ***Advanced search widget on the right A modern redrawing of the 1807 version of the Commissioner’s Grid plan
                                    <a class="unit_more_x" href="https://wpresidence.net/sidebar-on-the-right-search-widget/">
                                        ...
                                    </a>
                                </div>
                                <a class="read_more" href="https://wpresidence.net/sidebar-on-the-right-search-widget/">
                                    Continue reading
                                    <i class="fas fa-angle-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 listing_wrapper blog2v">
                            <div class="property_listing_blog" data-link="https://wpresidence.net/buying-a-home/">
                                <div class="blog_unit_image">
                                    <a href="https://wpresidence.net/buying-a-home/">
                                        <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-3-525x328.jpg" height="328" loading="lazy" sizes="(max-width: 525px) 100vw, 525px" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-3-525x328.jpg" srcset="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-3-525x328.jpg 525w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-3-300x188.jpg 300w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-3-768x480.jpg 768w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-3.jpg 800w" width="525"/>
                                    </a>
                                </div>
                                <h4>
                                    <a class="blog_unit_title" href="https://wpresidence.net/buying-a-home/">
                                        Buying a Home
                                    </a>
                                </h4>
                                <div class="blog_unit_meta">
                                    May 28, 2014
                                </div>
                                <div class="listing_details the_grid_view">
                                    There are cracks in the foundation. Nothing structural. Nothing that’s going to threaten the stability of the home,
                                    <a class="unit_more_x" href="https://wpresidence.net/buying-a-home/">
                                        ...
                                    </a>
                                </div>
                                <a class="read_more" href="https://wpresidence.net/buying-a-home/">
                                    Continue reading
                                    <i class="fas fa-angle-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 listing_wrapper blog2v">
                            <div class="property_listing_blog" data-link="https://wpresidence.net/manhattan-apartments/">
                                <div class="blog_unit_image">
                                    <a href="https://wpresidence.net/manhattan-apartments/">
                                        <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book9-1-525x328.jpg" height="328" loading="lazy" sizes="(max-width: 525px) 100vw, 525px" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book9-1-525x328.jpg" srcset="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book9-1-525x328.jpg 525w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book9-1-300x188.jpg 300w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book9-1-768x480.jpg 768w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book9-1.jpg 800w" width="525"/>
                                    </a>
                                </div>
                                <h4>
                                    <a class="blog_unit_title" href="https://wpresidence.net/manhattan-apartments/">
                                        Manhattan Apartments
                                    </a>
                                </h4>
                                <div class="blog_unit_meta">
                                    May 27, 2014
                                </div>
                                <div class="listing_details the_grid_view">
                                    In Manhattan, uptown means north (more precisely north-northeast, which is the direction the island and its street
                                    <a class="unit_more_x" href="https://wpresidence.net/manhattan-apartments/">
                                        ...
                                    </a>
                                </div>
                                <a class="read_more" href="https://wpresidence.net/manhattan-apartments/">
                                    Continue reading
                                    <i class="fas fa-angle-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 listing_wrapper blog2v">
                            <div class="property_listing_blog" data-link="https://wpresidence.net/why-live-in-new-york/">
                                <div class="blog_unit_image">
                                    <a href="https://wpresidence.net/why-live-in-new-york/">
                                        <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/decor_7-1-525x328.jpg" height="328" loading="lazy" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/decor_7-1-525x328.jpg" width="525"/>
                                    </a>
                                </div>
                                <h4>
                                    <a class="blog_unit_title" href="https://wpresidence.net/why-live-in-new-york/">
                                        Why Live in New York
                                    </a>
                                </h4>
                                <div class="blog_unit_meta">
                                    May 27, 2014
                                </div>
                                <div class="listing_details the_grid_view">
                                    In contrast with New York City’s urban atmosphere, the vast majority of the state is dominated by farms, fore
                                    <a class="unit_more_x" href="https://wpresidence.net/why-live-in-new-york/">
                                        ...
                                    </a>
                                </div>
                                <a class="read_more" href="https://wpresidence.net/why-live-in-new-york/">
                                    Continue reading
                                    <i class="fas fa-angle-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 listing_wrapper blog2v">
                            <div class="property_listing_blog" data-link="https://wpresidence.net/selling-your-home/">
                                <div class="blog_unit_image">
                                    <a href="https://wpresidence.net/selling-your-home/">
                                        <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/blue-525x328.jpg" height="328" loading="lazy" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/blue-525x328.jpg" width="525"/>
                                    </a>
                                </div>
                                <h4>
                                    <a class="blog_unit_title" href="https://wpresidence.net/selling-your-home/">
                                        Selling Your Home
                                    </a>
                                </h4>
                                <div class="blog_unit_meta">
                                    May 27, 2014
                                </div>
                                <div class="listing_details the_grid_view">
                                    Downsizing, upsizing, looking for something new, or any reason in between, you’re considering selling a New York pr
                                    <a class="unit_more_x" href="https://wpresidence.net/selling-your-home/">
                                        ...
                                    </a>
                                </div>
                                <a class="read_more" href="https://wpresidence.net/selling-your-home/">
                                    Continue reading
                                    <i class="fas fa-angle-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 listing_wrapper blog2v">
                            <div class="property_listing_blog" data-link="https://wpresidence.net/sidebar-on-the-left/">
                                <div class="blog_unit_image">
                                    <a href="https://wpresidence.net/sidebar-on-the-left/">
                                        <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/house_nice_2-525x328.jpg" height="328" loading="lazy" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/house_nice_2-525x328.jpg" width="525"/>
                                    </a>
                                </div>
                                <h4>
                                    <a class="blog_unit_title" href="https://wpresidence.net/sidebar-on-the-left/">
                                        About Real Estate
                                    </a>
                                </h4>
                                <div class="blog_unit_meta">
                                    May 27, 2014
                                </div>
                                <div class="listing_details the_grid_view">
                                    New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5
                                    <a class="unit_more_x" href="https://wpresidence.net/sidebar-on-the-left/">
                                        ...
                                    </a>
                                </div>
                                <a class="read_more" href="https://wpresidence.net/sidebar-on-the-left/">
                                    Continue reading
                                    <i class="fas fa-angle-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination pagination_nojax">
                        <li class="roundleft">
                            <a href="https://wpresidence.net/blog-list-no-sidebar/">
                                <i class="fas fa-angle-left">
                                </i>
                            </a>
                        </li>
                        <li class="active">
                            <a href="https://wpresidence.net/blog-list-no-sidebar/">
                                1
                            </a>
                        </li>
                        <li>
                        </li>
                        <li>
                            <a href="https://wpresidence.net/blog-list-no-sidebar/page/2/">
                                2
                            </a>
                        </li>
                        <li>
                        </li>
                        <li class="roundright">
                            <a href="https://wpresidence.net/blog-list-no-sidebar/page/2/">
                                <i class="fas fa-angle-right">
                                </i>
                            </a>
                        </li>
                        <li>
                        </li>
                        <li class="roundright">
                            <a href="https://wpresidence.net/blog-list-no-sidebar/page/2/">
                                <i class="fa fa-angle-double-right">
                                </i>
                            </a>
                        </li>
                        <li>
                        </li>
                    </ul>
                </div>
                <div class="clearfix visible-xs">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@include('frontend.layouts.footer')
@endsection