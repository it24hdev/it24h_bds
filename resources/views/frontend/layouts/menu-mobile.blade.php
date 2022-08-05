<div class="backgroundmobile">
<div class="mobilenavs" id="mobilenav">
    <div class="menu-scroll-mobile">
      <span class="mobile-nav-close"><i class="fal fa-times"></i></span>
        <div class="mobile-nav-tabs">
            <ul>
            <li class="mobile-tab-title mobile-pages-title active" data-menu="pages"><span>Menu</span></li>
            <li class="mobile-tab-title mobile-categories-title" data-menu="categories"><span>@lang('lang.Menusecond')</span></li>
            </ul>
        </div>
    <nav id="subpage" class="mobile-menu-tab mobile-navigation mobile-pages-menu" aria-label="Mobile Navigation">
        <div class="handheld-navigation">
        <ul id="menu-main-menu" class="menu">
        <li class="menu-item "><a href="{{route('home')}}">@lang('lang.Home')</a>
            <button class="angledown"><i class="fal fa-angle-down fa-xs"></i></button>
        </li>
        <li class="menu-item "><a href=" # {{-- {{route('list_product')}} --}}">Danh mục phụ cấp 1</a>
            <button class="angledown" id='menuitem-699'><i class="fal fa-angle-down fa-xs"></i></button>
            <ul class="sub-menu2" id='sub-menuitem-699' >
                <li class="menu-item"><a href="#">Danh mục phụ cấp 2</a></li>
            </ul>
        </li>
        </ul>
        </div>
    </nav>
    <nav id="subcate" class="mobile-menu-tab mobile-navigation-categories mobile-categories-menu" aria-label="Mobile Navigation">
        <div class="handheld-navigation">
        <ul id="menu-shop-by-department" class="menu">
        <li class="menu-item "><a href=" # {{-- {{route('list_product')}} --}}">Danh mục phụ cấp 1</a>
            <button class="angledown" id='menuitem-64'><i class="fal fa-angle-down fa-xs"></i></button>
            <ul class="sub-menu2" id='sub-menuitem-64' >
                <li class="menu-item"><a href="#">Danh mục phụ cấp 2</a></li>
            </ul>
        </li>
        {{-- @foreach($Sidebars as $Sidebar)
        @if($Sidebar->parent_id == 0)
            <li class="menu-item "><a href="{!! route('product_cat', ['slug' => $Sidebar->slug]) !!}">
                @if($locale =='vi')
                {{$Sidebar->name}}
                @else {{$Sidebar->name2}}
                @endif</a>
            <button class="angledown" id='sidebaritem-{{$Sidebar->category_id}}'><i class="fal fa-angle-down fa-xs"></i></button>
                <ul class="sub-menu2" id='sub-sidebaritem-{{$Sidebar->category_id}}' >
                @foreach($Sidebars as $subSidebar)
                @if($subSidebar->parent_id == $Sidebar->id)
                    <li class="menu-item">
                    <a href="{!! route('product_cat', ['slug' => $Sidebar->slug]) !!}">
                        @if($locale =='vi')
                        {{$subSidebar->name}}
                        @else {{$subSidebar->name2}}
                        @endif</a>
                    <button class="angledown2" id='sidebaritemlv2-{{$subSidebar->category_id}}'><i class="fal fa-angle-down fa-xs"></i></button>
                        @if(count($subSidebar->childs))
                        <ul class="sub-menu2" id='sub-sidebaritemlv2-{{$subSidebar->category_id}}' >
                            @include('frontend.subsidebar',['childs' => $subSidebar->childs])
                        </ul>
                        @endif
                    </li>
                @endif
                @endforeach
                </ul>
            </li>
        @endif
        @endforeach --}}
        </ul>
        </div>
    </nav>
    </div>
    <div class="languagemobile">   
    <a class="langm" href="{!! route('app.setLocale',['vi']) !!}"><img src="{{asset('asset/images/VNicon.png')}}" alt="logo" width="10%" height="auto"></a>  
    <a class="langm" href="{!! route('app.setLocale',['en']) !!}"><img src="{{asset('asset/images/ENicon.png')}}" alt="logo" width="10%" height="auto"></a>          
     </div>
</div>
</div>