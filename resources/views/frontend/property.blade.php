@extends('frontend.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/property.css')}}">
@endsection

@section('header')
@include('frontend.layouts.header-page')
@endsection

@section('menu-mobile')
@include('frontend.layouts.menu-mobile')
@endsection

@section('content')
    <div id="wp-content">
    <div class="header_media mobile_header_media_sticky_no header_mediatype_12 with_search_6 header_media_non_elementor">
        <div class="gallery_wrapper property_header_gallery_wrapper">
            <div class="status-wrapper">
                <div class="slider-property-status horizontalstatus ribbon-wrapper-open-house open-house">
                    open house
                </div>
            </div>
            <div class="col col-md-6 image_gallery lightbox_trigger special_border" data-slider-no="1" style="background-image:url(https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/featured_property_large-1110x623.jpg)  ">
                <div class="img_listings_overlay">
                </div>
            </div>
            <div class="col col-md-3 image_gallery lightbox_trigger special_border_top " data-slider-no="2" style="background-image:url(https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/interior38-800x467.jpg)">
                <div class="img_listings_overlay">
                </div>
            </div>
            <div class="col-md-3 image_gallery lightbox_trigger special_border_top " data-slider-no="3" style="background-image:url(https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/interior39-800x467.jpg)">
                <div class="img_listings_overlay">
                </div>
            </div>
            <div class="col col-md-3 image_gallery lightbox_trigger " data-slider-no="4" style="background-image:url(https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/interior40-800x467.jpg)">
                <div class="img_listings_overlay">
                </div>
            </div>
            <div class="col col-md-3 image_gallery last_gallery_item lightbox_trigger" data-slider-no="5" style="background-image:url(https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/interior41-800x467.jpg)  ">
                <div class="img_listings_overlay img_listings_overlay_last">
                </div>
                <span class="img_listings_mes">
                    See all 6 photos
                </span>
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
                <li>
                    <a href="https://wpresidence.net/listings/condos/" rel="tag">
                        Condos
                    </a>
                </li>
                <li class="active">
                    Modern Condo for Sale
                </li>
            </ol>
        </div>
        <div class="notice_area col-md-12 ">
            <div class="single_property_labels">
                <div class="property_title_label">
                    <a href="https://wpresidence.net/action/sales/" rel="tag">
                        Sales
                    </a>
                </div>
                <div class="property_title_label actioncat">
                    <a href="https://wpresidence.net/listings/condos/" rel="tag">
                        Condos
                    </a>
                </div>
            </div>
            <h1 class="entry-title entry-prop">
                Modern Condo for Sale
            </h1>
            <div class="price_area">
                $ 150,000
                <span class="price_label">
                </span>
            </div>
            <div class="property_categs">
                <i class="fas fa-map-marker-alt">
                </i>
                Crown Heights,
                <a href="https://wpresidence.net/city/new-york/" rel="tag">
                    New York
                </a>
                ,
                <a href="https://wpresidence.net/area/manhattan/" rel="tag">
                    Manhattan
                </a>
            </div>
            <div class="prop_social">
                <div class="share_unit">
                    <a class="social_facebook" href="https://www.facebook.com/sharer.php?u=https://wpresidence.net/properties/modern-condo-for-sale/&t=Modern+Condo+for+Sale" rel="noreferrer" target="_blank">
                        Facebook
                    </a>
                    <a class="social_tweet" href="https://twitter.com/intent/tweet?text=Modern+Condo+for+Sale+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fmodern-condo-for-sale%2F" rel="noreferrer" target="_blank">
                        Twitter
                    </a>
                    <a class="social_pinterest" href="https://pinterest.com/pin/create/button/?url=https://wpresidence.net/properties/modern-condo-for-sale/&media=https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/featured_property_large-1440x790.jpg&description=Modern+Condo+for+Sale" rel="noreferrer" target="_blank">
                        Pinterest
                    </a>
                    <a class="social_whatsup" href="https://api.whatsapp.com/send?text=Modern+Condo+for+Sale+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fmodern-condo-for-sale%2F" rel="noreferrer" target="_blank">
                        WhatsApp
                    </a>
                    <a class="social_email" data-action="share email" href="mailto:email@email.com?subject=Modern+Condo+for+Sale&body=https%3A%2F%2Fwpresidence.net%2Fproperties%2Fmodern-condo-for-sale%2F">
                        Email
                    </a>
                </div>
                <div class="title_share share_list single_property_action" data-original-title="share this page">
                    <i class="fas fa-share-alt">
                    </i>
                    Share
                </div>
                <div class="title_share single_property_action isnotfavorite" data-original-title="add to favorites" data-postid="22211" id="add_favorites">
                    <i class="far fa-heart">
                    </i>
                    Favorite
                </div>
                <div class="title_share single_property_action" data-original-title="print page" data-propid="22211" id="print_page">
                    <i class="fas fa-print">
                    </i>
                    Print
                </div>
            </div>
        </div>
        <div class=" col-md-9 rightmargin full_width_prop">
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
            <div class="single-content listing-content">
                <div class="single-overview-section panel-group property-panel">
                    <h4 class="panel-title" id="">
                        Overview
                    </h4>
                    <ul class="overview_element">
                        <li class="first_overview">
                            Updated On:
                        </li>
                        <li class="first_overview_date">
                            July 21, 2021
                        </li>
                    </ul>
                    <ul class="overview_element">
                        <li class="first_overview">
                            <svg fill="none" height="569" viewbox="0 0 798 569" width="798" xmlns="http://www.w3.org/2000/svg">
                                <path d="M236.65 0H560.87C567.29 0 573.12 2.61 577.33 6.83L656.2 85.7C660.75 90.24 663.02 96.2 663.02 102.17L663.03 216.94C667.14 217.92 671.04 220 674.23 223.21L712.37 261.37C717.33 265.63 720.47 271.96 720.47 279.02V329.58H754.52C760.95 329.58 766.78 332.19 770.99 336.41L790.71 356.12C795.25 360.66 797.52 366.63 797.52 372.59L797.53 446.06C797.53 458.91 787.1 469.35 774.24 469.35H717.9V545.52C717.9 558.38 707.47 568.81 694.61 568.81H624.8C611.94 568.81 601.51 558.38 601.51 545.52V469.35H196.02V545.52C196.02 558.38 185.59 568.81 172.73 568.81H102.92C90.06 568.81 79.63 558.38 79.63 545.52V469.35H23.29C10.43 469.35 0 458.91 0 446.06V372.59C0 366.16 2.61 360.34 6.82 356.12L26.54 336.41C31.08 331.87 37.04 329.6 43.01 329.58H77.04V279.02C77.06 273.06 79.33 267.1 83.87 262.55L123.31 223.11C126.34 220.08 130.18 217.89 134.49 216.89V102.17C134.49 95.74 137.1 89.91 141.31 85.7L220.19 6.83C224.73 2.28 230.69 0.01 236.65 0V0ZM52.65 376.16L46.58 382.23V422.77C281.37 422.77 516.16 422.77 750.95 422.77V382.23L744.88 376.16C514.13 376.16 283.4 376.16 52.65 376.16V376.16ZM262.99 119.54H534.51C547.37 119.54 557.8 129.97 557.8 142.83V216.29H616.45V111.81L551.22 46.58H246.3L181.07 111.81V216.29H239.7V142.83C239.7 129.97 250.14 119.54 262.99 119.54V119.54ZM511.22 166.12H286.28V216.29H511.22V166.12ZM149.44 469.35H126.21V522.23H149.44V469.35ZM671.32 469.35H648.09V522.23H671.32V469.35ZM639.74 262.87C479.08 262.87 318.44 262.87 157.78 262.87H149.42L123.62 288.66V329.58H673.89V288.57L648.22 262.87H639.74V262.87Z" fill="#333333">
                                </path>
                            </svg>
                        </li>
                        <li>
                            2 Bedrooms
                        </li>
                    </ul>
                    <ul class="overview_element">
                        <li class="first_overview">
                            <svg fill="none" height="515" viewbox="0 0 517 515" width="517" xmlns="http://www.w3.org/2000/svg">
                                <path d="M53.7957 274.151C131 273.543 208.204 272.936 285.409 272.328C320.502 272.052 355.595 271.776 390.687 271.499C408.709 271.357 436.246 267.321 453.855 271.002C483.718 277.245 500.827 291.055 460.56 297.045C394.658 306.848 320.713 297.873 254.042 298.06C220.181 298.154 186.32 298.249 152.459 298.344C132.142 298.4 111.826 298.457 91.5092 298.514C84.737 298.533 77.9649 298.552 71.1927 298.571C52.3786 304.32 40.7481 296.826 36.3013 276.088C52.8826 279.86 59.9619 254.352 43.3362 250.57C24.104 246.195 9.18371 253.464 2.87718 272.911C-7.86142 306.025 12.9416 323.181 40.7178 325.119C107.664 329.789 176.766 324.739 243.883 324.551C313.315 324.357 383.305 326.686 452.681 323.869C475.355 322.948 505.639 324.33 513.939 298.79C523.252 270.129 504.563 248.411 478.428 244.846C413.411 235.977 340.514 245.431 274.881 245.948C201.186 246.528 127.491 247.108 53.7957 247.688C36.7748 247.822 36.7351 274.285 53.7957 274.151Z" fill="#222222">
                                </path>
                                <path d="M466.461 323.548C474.73 375.537 434.999 433.231 387.646 453.943C349.846 470.477 295.94 463.719 254.54 464.503C214.778 465.257 180.991 468.261 146.51 445.99C109.925 422.358 55.4102 377.073 57.7829 329.415C58.6303 312.393 32.165 312.438 31.3198 329.415C28.8418 379.189 68.1589 422.234 105.975 450.969C163.88 494.97 203.297 492.106 274.482 490.561C338.061 489.181 389.722 494.909 438.653 449.799C477.721 413.783 500.49 370.025 491.979 316.513C489.311 299.741 463.807 306.861 466.461 323.548Z" fill="#222222">
                                </path>
                                <path d="M334.065 61.9826C335.204 45.8633 330.105 43.7571 345.043 34.9641C356.06 28.4795 367.53 30.2771 379.689 30.2471C414.788 30.1607 403.851 39.6988 403.886 73.8339C403.94 127.831 403.995 181.828 404.05 235.825C404.067 252.852 430.531 252.881 430.513 235.825C430.461 184.67 430.409 133.515 430.357 82.3597C430.335 60.6536 439.565 21.7027 418.084 7.15394C401.503 -4.07547 349.393 -0.082615 330.83 5.5742C302.887 14.0895 309.347 37.2869 307.602 61.9826C306.402 78.9773 332.87 78.9021 334.065 61.9826Z" fill="#222222">
                                </path>
                                <path d="M352.821 107.029C330.46 107.037 304.602 110.618 282.562 107.149C285.198 109.176 287.834 111.203 290.47 113.23C287.659 109.117 303.833 98.2036 305.929 96.6067C312.01 91.9742 315.44 89.1697 322.877 88.4098C328.161 87.8699 337.461 87.4048 342.258 89.8401C353.907 95.7527 352.133 108.756 351.855 119.376C351.41 136.411 377.873 136.401 378.318 119.376C378.914 96.5592 374.266 71.7971 349.293 64.3223C339.232 61.3106 327.763 61.3313 317.357 62.0418C303.547 62.9849 295.08 71.5673 284.66 79.9306C272.257 89.8861 250.532 115.735 271.027 130.299C279.718 136.474 294.167 133.512 304.151 133.509C320.374 133.503 336.597 133.498 352.821 133.492C369.848 133.486 369.877 107.023 352.821 107.029Z" fill="#222222">
                                </path>
                                <path d="M341.354 158.199C341.354 162.021 341.354 165.844 341.354 169.666C341.354 186.694 367.817 186.722 367.817 169.666C367.817 165.844 367.817 162.021 367.817 158.199C367.817 141.171 341.354 141.143 341.354 158.199Z" fill="#222222">
                                </path>
                                <path d="M277.405 164.373C278.206 166.629 278.029 165.509 277.797 167.892C277.106 175.015 284.373 181.124 291.029 181.124C298.759 181.124 303.568 175.035 304.26 167.892C304.605 164.343 304.116 160.695 302.923 157.338C300.531 150.608 293.895 146.105 286.646 148.097C280.131 149.887 275.001 157.608 277.405 164.373Z" fill="#222222">
                                </path>
                                <path d="M307.834 203.186C307.834 205.832 307.834 208.479 307.834 211.125C307.834 228.153 334.297 228.181 334.297 211.125C334.297 208.479 334.297 205.832 334.297 203.186C334.297 186.158 307.834 186.13 307.834 203.186Z" fill="#222222">
                                </path>
                                <path d="M317.537 488.987C317.537 493.398 317.537 497.808 317.537 502.219C317.537 519.246 344 519.275 344 502.219C344 497.808 344 493.398 344 488.987C344 471.959 317.537 471.931 317.537 488.987Z" fill="#222222">
                                </path>
                                <path d="M170.226 487.222C170.226 492.221 170.226 497.219 170.226 502.218C170.226 519.245 196.689 519.274 196.689 502.218C196.689 497.219 196.689 492.221 196.689 487.222C196.689 470.194 170.226 470.166 170.226 487.222Z" fill="#222222">
                                </path>
                            </svg>
                        </li>
                        <li>
                            2 Bathrooms
                        </li>
                    </ul>
                    <ul class="overview_element">
                        <li class="first_overview">
                            <svg fill="none" height="525" viewbox="0 0 696 525" width="696" xmlns="http://www.w3.org/2000/svg">
                                <path d="M693.732 158.062C692.963 146.618 685.277 138.75 672.98 138.75C668.368 138.75 663.757 138.75 659.145 138.75C633.781 138.75 616.104 165.931 616.104 165.931C614.567 169.507 612.261 172.368 609.187 176.66C606.112 166.646 603.806 158.063 601.501 150.194C590.74 114.431 573.831 80.8125 550.774 50.7708C534.633 29.3125 511.576 22.1598 486.212 17.8681C440.097 10.7153 391.675 0 345.56 0C298.676 0 254.098 10.7153 207.982 17.8681C182.619 22.1598 159.561 30.0278 143.421 50.7708C120.363 81.5278 103.454 114.431 92.6936 150.194C90.3879 158.063 88.0821 166.646 85.0077 176.66C81.9334 171.653 79.6277 168.792 78.0905 165.931C78.0905 165.931 60.4128 138.75 35.0493 138.75C30.4378 138.75 25.8264 138.75 21.2148 138.75C8.91736 139.465 1.23136 147.333 0.462769 158.062C0.462769 165.931 0.462769 174.514 0.462769 182.382C0.462769 194.542 9.68593 202.41 22.752 202.41C35.818 202.41 48.884 202.41 61.95 202.41C67.3302 202.41 72.7103 202.41 77.3218 202.41C78.0904 203.125 78.0905 203.84 78.8591 204.556C77.3219 205.271 75.0161 205.986 74.2475 207.417C41.1981 236.743 23.5205 272.507 24.2891 315.424C25.0577 341.174 27.3635 366.208 30.4379 391.958C32.7436 411.271 37.3552 430.583 47.3468 448.465C51.1898 456.333 56.5699 462.055 65.793 463.486C70.4045 464.201 70.4046 467.062 70.4046 469.924C70.4046 480.653 70.4046 490.667 70.4046 501.396C70.4046 516.417 79.6277 525 95.7681 525C109.603 525 122.669 525 136.503 525C154.181 525 162.635 516.417 162.635 500.681C162.635 492.813 162.635 484.229 162.635 475.646C224.891 479.938 286.379 482.083 347.866 482.083C409.353 482.083 471.609 479.938 533.096 475.646C533.096 484.229 533.096 492.813 533.096 500.681C533.096 516.417 542.319 525 559.228 525C573.063 525 586.129 525 599.964 525C616.104 525 625.327 516.417 625.327 501.396C625.327 490.667 625.327 480.653 625.327 469.924C625.327 466.347 626.096 464.201 629.939 463.486C639.162 462.055 644.542 455.618 648.385 448.465C657.608 430.583 662.988 411.271 665.294 391.958C668.368 366.924 670.674 341.174 671.442 315.424C672.211 272.507 654.533 236.743 621.484 207.417C619.947 205.986 618.41 205.986 616.872 204.556C617.641 203.84 617.641 203.125 618.41 202.41C623.79 202.41 629.17 202.41 633.782 202.41C646.848 202.41 659.914 202.41 672.98 202.41C686.046 202.41 694.5 194.542 695.269 182.382C694.5 173.799 694.5 165.931 693.732 158.062ZM124.206 183.097C134.198 144.472 149.569 108.708 171.09 74.375C172.627 72.2292 173.396 70.7986 174.933 70.0833C176.47 68.6527 178.007 67.9375 180.313 67.2222C194.148 61.5 234.883 67.9375 345.56 67.2222C456.237 67.9375 498.51 61.5 512.344 67.2222C514.65 67.9375 516.187 68.6527 517.724 70.0833C519.261 71.5138 520.799 72.9444 521.567 74.375C543.088 107.993 558.46 144.472 568.451 183.097C569.22 185.958 569.22 188.819 569.988 190.25C495.435 184.528 420.113 180.951 345.56 180.951C271.007 180.951 196.453 183.812 121.132 190.25C123.437 188.104 123.437 185.243 124.206 183.097ZM135.735 346.181C108.834 346.181 86.545 325.438 86.545 300.403C86.545 275.368 108.834 254.625 135.735 254.625C162.635 254.625 184.925 275.368 184.925 300.403C184.925 326.153 162.635 346.181 135.735 346.181ZM558.46 346.181C531.559 346.181 509.27 325.438 509.27 300.403C509.27 275.368 531.559 254.625 558.46 254.625C585.36 254.625 607.649 275.368 607.649 300.403C607.649 326.153 585.36 346.181 558.46 346.181Z" fill="#222222">
                                </path>
                            </svg>
                        </li>
                        <li>
                            1 Garages
                        </li>
                    </ul>
                    <ul class="overview_element">
                        <li class="first_overview">
                            <svg fill="none" height="400" viewbox="0 0 400 400" width="400" xmlns="http://www.w3.org/2000/svg">
                                <path d="M357.143 0H42.8571C31.4907 0 20.5898 4.50961 12.5526 12.5368C4.51529 20.5639 0 31.4511 0 42.8032V356.694C0 368.046 4.51529 378.933 12.5526 386.96C20.5898 394.987 31.4907 399.497 42.8571 399.497H357.143C368.509 399.497 379.41 394.987 387.447 386.96C395.485 378.933 400 368.046 400 356.694V42.8032C400 31.4511 395.485 20.5639 387.447 12.5368C379.41 4.50961 368.509 0 357.143 0ZM371.429 356.694C371.429 360.478 369.923 364.107 367.244 366.782C364.565 369.458 360.932 370.961 357.143 370.961H171.429V299.623H314.286C318.075 299.623 321.708 298.119 324.387 295.444C327.066 292.768 328.571 289.139 328.571 285.355C328.571 281.571 327.066 277.942 324.387 275.266C321.708 272.59 318.075 271.087 314.286 271.087H157.143C153.354 271.087 149.72 272.59 147.041 275.266C144.362 277.942 142.857 281.571 142.857 285.355V370.961H42.8571C39.0683 370.961 35.4347 369.458 32.7556 366.782C30.0765 364.107 28.5714 360.478 28.5714 356.694V171.213H142.857V199.748C142.857 203.532 144.362 207.162 147.041 209.837C149.72 212.513 153.354 214.016 157.143 214.016C160.932 214.016 164.565 212.513 167.244 209.837C169.923 207.162 171.429 203.532 171.429 199.748V114.142C171.429 110.358 169.923 106.729 167.244 104.053C164.565 101.377 160.932 99.8742 157.143 99.8742C153.354 99.8742 149.72 101.377 147.041 104.053C144.362 106.729 142.857 110.358 142.857 114.142V142.677H28.5714V42.8032C28.5714 39.0192 30.0765 35.3901 32.7556 32.7144C35.4347 30.0387 39.0683 28.5355 42.8571 28.5355H242.857V185.481C242.857 189.265 244.362 192.894 247.041 195.57C249.72 198.245 253.354 199.748 257.143 199.748H314.286C318.075 199.748 321.708 198.245 324.387 195.57C327.066 192.894 328.571 189.265 328.571 185.481C328.571 181.697 327.066 178.068 324.387 175.392C321.708 172.716 318.075 171.213 314.286 171.213H271.429V28.5355H357.143C360.932 28.5355 364.565 30.0387 367.244 32.7144C369.923 35.3901 371.429 39.0192 371.429 42.8032V356.694Z" fill="#222222">
                                </path>
                            </svg>
                        </li>
                        <li>
                            200 ft
                            <sup>
                                2
                            </sup>
                        </li>
                    </ul>
                </div>
                <div class="wpestate_property_description" id="wpestate_property_description_section">
                    <h4 class="panel-title">
                        Description
                    </h4>
                    <p>
                        Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hardwood floors throughout, brand new bathrooms, newer EIK, modern front-load washer/dryer, full dining room, large living area, 3 spacious bedrooms and plenty of storage.
                    </p>
                    <p>
                        Master bedroom includes both a standard closet and custom closet wall unit. Large windows face many directions for tons of natural light. Just steps away from QM2 express bus to Manhattan and local buses; only minutes from the LIRR.
                    </p>
                    <p>
                        Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hardwood floors throughout, brand new bathrooms, newer EIK, modern front-load washer/dryer, full dining room, large living area, 3 spacious bedrooms and plenty of storage.
                    </p>
                    <p>
                        Master bedroom includes both a standard closet and custom closet wall unit. Large windows face many directions for tons of natural light. Just steps away from QM2 express bus to Manhattan and local buses; only minutes from the LIRR.
                    </p>
                    <div class="download_docs">
                        Documents
                    </div>
                    <div class="document_down">
                        <a href="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/Energetic-Certificate-PDF6.pdf" target="_blank">
                            Energetic-Certificate-PDF6
                            <i class="fas fa-download">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="panel-group property-panel" id="accordion_prop_addr">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_prop_addr" data-toggle="collapse" href="#collapseTwo">
                                <h4 class="panel-title">
                                    Address
                                </h4>
                            </a>
                        </div>
                        <div class="row panel-collapse " id="collapseTwo">
                            <div class="panel-body">
                                <div class="row" style="padding: 0px 30px 30px">
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Address:
                                    </strong>
                                    Crown Heights
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        City:
                                    </strong>
                                    <a href="https://wpresidence.net/city/new-york/" rel="tag">
                                        New York
                                    </a>
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Area:
                                    </strong>
                                    <a href="https://wpresidence.net/area/manhattan/" rel="tag">
                                        Manhattan
                                    </a>
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Zip:
                                    </strong>
                                    56550
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Country:
                                    </strong>
                                    United States
                                </div>
                                 </div>
                                <a class="acc_google_maps" href="https://maps.google.com/?q=Crown+Heights%2CNew+York" rel="noopener" target="_blank">
                                    Open In Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group property-panel" id="accordion_prop_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_prop_details" data-toggle="collapse" href="#collapseOne">
                                <h4 class="panel-title" id="prop_det">
                                    Details
                                </h4>
                            </a>
                        </div>
                        <div class="panel-collapse " id="collapseOne">
                            <div class="panel-body">
                                <div class="row" style="padding: 0px 30px 30px">
                                <div class="listing_detail col-md-4" id="propertyid_display">
                                    <strong>
                                        Property Id :
                                    </strong>
                                    22211
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Price:
                                    </strong>
                                    $ 150,000
                                    <span class="price_label">
                                    </span>
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Property Size:
                                    </strong>
                                    200 ft
                                    <sup>
                                        2
                                    </sup>
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Rooms:
                                    </strong>
                                    3
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Bedrooms:
                                    </strong>
                                    2
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Bathrooms:
                                    </strong>
                                    2
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Garages:
                                    </strong>
                                    1
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Structure Type:
                                    </strong>
                                    Brick
                                </div>
                                <div class="listing_detail col-md-4">
                                    <strong>
                                        Floors No:
                                    </strong>
                                    1
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group property-panel" id="accordion_prop_features">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_prop_features" data-toggle="collapse" href="#collapseThree">
                                <h4 class="panel-title" id="prop_ame">
                                    Features
                                </h4>
                            </a>
                        </div>
                        <div class="panel-collapse " id="collapseThree">
                            <div class="panel-body">
                                
                                <div class="listing_detail col-md-12 feature_block_Interior Details ">
                                    <div class="feature_chapter_name col-md-12">
                                        Interior Details
                                    </div>
                                    <div class="row" style="padding: 0px 30px 30px">
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 19px; width: 19px; fill: currentcolor;" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m10.5 0a .5.5 0 0 0 -.5.5v7a .5.5 0 0 1 -.49.5h-1.51v-7.5a.5.5 0 1 0 -1 0v7.5h-1.51a.5.5 0 0 1 -.49-.5v-7a .5.5 0 1 0 -1 0v7c0 .83.67 1.5 1.49 1.5h1.51v5c0 .03.01.06.02.09a1.49 1.49 0 0 0 -1.02 1.41v7c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-7c0-.66-.43-1.21-1.02-1.41.01-.03.02-.06.02-.09v-5h1.51a1.5 1.5 0 0 0 1.49-1.5v-7a .5.5 0 0 0 -.5-.5zm-2.5 15.5v7a .5.5 0 0 1 -.5.5.5.5 0 0 1 -.5-.5v-7c0-.28.22-.5.5-.5s.5.22.5.5zm11.5-15.5h-2c-1.4 0-2.5 1.07-2.5 2.5v7c0 1.43 1.1 2.5 2.5 2.5h1.5v2.09a1.49 1.49 0 0 0 -.5-.09c-.83 0-1.5.67-1.5 1.5v7c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-22.5zm-2 11c-.86 0-1.5-.63-1.5-1.5v-7c0-.87.65-1.5 1.5-1.5h1.5v10zm1.5 11.5a.5.5 0 0 1 -.5.5.5.5 0 0 1 -.5-.5v-7c0-.28.22-.5.5-.5s.5.22.5.5z" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        Equipped Kitchen
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 19px; width: 19px; fill: currentcolor;" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m22 10v-2.5a1.5 1.5 0 0 0 -2.06-1.39 1.5 1.5 0 0 0 -2.94.39v3.5h-10v-3.5a1.5 1.5 0 0 0 -1.5-1.5c-.7 0-1.27.47-1.44 1.11a1.5 1.5 0 0 0 -2.06 1.39v2.5c-1.1 0-2 .89-2 2s .89 2 2 2v2.5a1.5 1.5 0 0 0 2.06 1.39 1.5 1.5 0 0 0 2.94-.39v-3.5h10v3.5a1.5 1.5 0 0 0 1.5 1.5c.7 0 1.27-.47 1.44-1.11a1.5 1.5 0 0 0 2.06-1.38v-2.51c1.11 0 2-.89 2-2s-.9-2-2-2zm-20 3c-.56 0-1-.45-1-1a1 1 0 0 1 1-1zm1.5 4a .5.5 0 0 1 -.5-.5v-9c0-.28.22-.5.5-.5s.5.22.5.5v9.01a.5.5 0 0 1 -.5.5zm2.5.5a.5.5 0 1 1 -1 0v-11a .5.5 0 1 1 1 0zm11-4.5h-10v-2h10zm2-5.5v10a .5.5 0 1 1 -1 0v-11a .5.5 0 1 1 1 0zm2 9.01a.5.5 0 0 1 -.5.5.5.5 0 0 1 -.5-.5v-9.01c0-.28.22-.5.5-.5s.5.22.5.5zm1-3.51v-2a1 1 0 0 1 1 1c0 .56-.44 1-1 1z" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        Gym
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 19px; width: 19px; fill: currentcolor;" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m5 3.5a1.5 1.5 0 1 0 -3 0 1.5 1.5 0 0 0 3 0zm-1.5.5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm4 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0-2a .5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm4.5 3c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm0 15c-3.77 0-6.84-2.99-6.99-6.73.35-.23.84-.57.85-.57 1.64-1.05 3.31-1.06 5.85.71 2.88 2.01 4.99 1.99 6.96.73l.25-.17c-.47 3.4-3.39 6.03-6.92 6.03zm6.13-6.7c-1.64 1.05-3.31 1.06-5.85-.71-2.88-2.01-4.99-1.99-6.96-.73l-.25.17c.48-3.4 3.4-6.03 6.93-6.03 3.77 0 6.84 2.99 6.99 6.73-.35.23-.84.57-.85.57zm3.37-14.3h-19a2.51 2.51 0 0 0 -2.5 2.5v19c0 1.38 1.12 2.5 2.5 2.5h19c1.38 0 2.5-1.12 2.5-2.5v-19c0-1.37-1.12-2.5-2.5-2.5zm1.5 21.5c0 .83-.68 1.5-1.5 1.5h-19c-.83 0-1.5-.68-1.5-1.5v-19c0-.82.68-1.5 1.5-1.5h19c .83 0 1.5.68 1.5 1.5z" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        Laundry
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="listing_detail col-md-12 feature_block_Outdoor Details ">
                                    <div class="feature_chapter_name col-md-12">
                                        Outdoor Details
                                    </div>
                                    <div class="row" style="padding: 0px 30px 30px">
                                    <div class="listing_detail col-md-4">
                                       <svg xmlns="http://www.w3.org/2000/svg" class="bk-icon -iconset-garden hp__facility_group_icon" fill="currentColor" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M116 112H69V80.7a10.5 10.5 0 0 0 5.5-9.2 8.5 8.5 0 0 0-.2-1.7 8.5 8.5 0 0 0 1 1.4 10.5 10.5 0 0 0 14.9-14.9 8.5 8.5 0 0 0-1.4-1 8.5 8.5 0 0 0 1.7.2 10.5 10.5 0 0 0 0-21 8.5 8.5 0 0 0-1.7.2 8.5 8.5 0 0 0 1.4-1 10.5 10.5 0 1 0-14.9-14.9 8.5 8.5 0 0 0-1 1.4 8.5 8.5 0 0 0 .2-1.7 10.5 10.5 0 1 0-21 0 8.5 8.5 0 0 0 .2 1.7 8.5 8.5 0 0 0-1-1.4 10.5 10.5 0 0 0-14.9 14.9 8.5 8.5 0 0 0 1.4 1 8.5 8.5 0 0 0-1.7-.2 10.5 10.5 0 0 0 0 21 8.5 8.5 0 0 0 1.7-.2 8.5 8.5 0 0 0-1.4 1 10.5 10.5 0 0 0 14.9 14.9 8.5 8.5 0 0 0 1-1.4 8.5 8.5 0 0 0-.2 1.7 10.5 10.5 0 0 0 5.5 9.2V112H12a4 4 0 0 0 0 8h104a4 4 0 0 0 0-8zM87.3 68.3a6.5 6.5 0 0 1-9.1 0 42 42 0 0 1-5.1-12 15.6 15.6 0 0 0 2.4-2.2 42.2 42.2 0 0 1 11.8 5 6.5 6.5 0 0 1 0 9.2zM97 45a6.5 6.5 0 0 1-6.5 6.5c-2 0-6.7-2.1-11.3-4.5a15.6 15.6 0 0 0 .4-3.3v-.9c4.4-2.3 9-4.3 11-4.3A6.5 6.5 0 0 1 97 45zM78.2 21.7a6.5 6.5 0 0 1 9.1 9.1 37 37 0 0 1-10.2 4.6 15.6 15.6 0 0 0-3.3-3.8c1.4-4.5 3.1-8.7 4.4-10zM64 12a6.5 6.5 0 0 1 6.5 6.5c0 1.7-1.7 5.8-3.8 9.9a14.7 14.7 0 0 0-5.4 0 35 35 0 0 1-3.8-10A6.5 6.5 0 0 1 64 12zm-23.3 9.7a6.5 6.5 0 0 1 9.1 0 32 32 0 0 1 4.5 9.9 15.6 15.6 0 0 0-3.4 3.8 35 35 0 0 1-10.2-4.6 6.5 6.5 0 0 1 0-9.1zM31 45a6.5 6.5 0 0 1 6.5-6.5c1.9 0 6.5 2 11 4.3v1a15.6 15.6 0 0 0 .3 3.2 38.8 38.8 0 0 1-11.3 4.5A6.5 6.5 0 0 1 31 45zm18.8 23.3a6.5 6.5 0 0 1-9.1-9.1c1.4-1.5 6.7-3.5 11.8-5a15.6 15.6 0 0 0 2.4 2.1 42.1 42.1 0 0 1-5 12zm12.7-9.1h3c2.5 4.8 5 10.2 5 12.3a6.5 6.5 0 0 1-13 0c0-2 2.5-7.4 5-12.3zM48 104q-24 0-24-24 24 0 24 24zm56-24q0 24-24 24 0-24 24-24z"></path></svg>
                                        Back yard
                                    </div>
                                   <div class="listing_detail col-md-4">
                                        <svg id="Capa_1" style="enable-background:new 0 0 270 270;" version="1.1" viewbox="0 0 270 270" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                        <path color-interpolation="sRGB" color-rendering="auto" d="M135,0 C60.501,0,0,60.501,0,135c0,74.499,60.501,135,135,135s135-60.501,135-135C270,60.501,209.499,0,135,0L135,0z M138.359,10.047
                                        c33.812,0.889,64.25,15.174,86.225,37.744c-26.232,20.93-42.072,50.257-43.775,81.504c-3.598,0.05-7.195,0.078-10.793,0.094
                                        c-0.465-30.571-4.732-58.744-11.75-80.971C153.1,32.057,146.64,18.635,138.359,10.047L138.359,10.047z M122.129,10.654l-0.041,0.113
                                        c9.039,3.253,19.471,17.946,26.643,40.66c6.624,20.979,10.811,48.283,11.283,77.957c-6.973-0.032-13.926-0.126-20.842-0.287
                                        c-3.126-39.947-37.831-73.972-87.076-87.678C71.139,24.54,95.375,13.385,122.129,10.654z M43.707,49.582
                                        c48.874,11.658,81.965,43.463,85.398,79.238c-43.307-1.411-84.534-5.364-117.838-11.641C14.966,91.212,26.628,67.831,43.707,49.582
                                        L43.707,49.582z M231.283,55.236c15.987,19.282,26.286,43.454,28.338,69.959c-22.141,2.072-45.363,3.366-68.795,3.908
                                        C192.575,100.945,206.999,74.403,231.283,55.236z M10.252,127.166c33.999,6.35,75.531,10.308,119.035,11.703
                                        c-2.21,36.706-35.667,69.631-85.592,81.535C22.795,198.066,10,168.044,10,135C10,132.368,10.092,129.758,10.252,127.166
                                        L10.252,127.166z M259.998,135.205c-0.048,30.207-10.78,57.883-28.625,79.455c-24.788-19.528-39.325-46.739-40.623-75.527
                                        C214.302,138.585,237.661,137.283,259.998,135.205L259.998,135.205z M139.293,139.141c6.88,0.158,13.798,0.25,20.732,0.279
                                        c-0.395,31.492-4.962,60.258-12.148,81.777c-7.185,21.517-17.301,35.081-26.035,38.117c-26.647-2.781-50.785-13.919-69.762-30.746
                                        C102.051,214.666,137.054,179.843,139.293,139.141L139.293,139.141z M180.75,139.324c1.357,31.745,17.308,61.589,43.93,82.789
                                        c-21.978,22.622-52.449,36.945-86.303,37.84c7.767-8.097,13.955-20.522,18.986-35.588c7.635-22.865,12.269-52.52,12.662-84.943
                                        C173.6,139.405,177.176,139.375,180.75,139.324L180.75,139.324z" image-rendering="auto" shape-rendering="auto">
                                        </path>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                        Basketball court
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg id="Capa_1" style="enable-background:new 0 0 512 512;" version="1.1" viewbox="0 0 512 512" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                            <g>
                                                <g>
                                                    <path d="M256,41.982L0,238.919l53.634,69.718l26.261-20.202v181.583h352.213V288.435l26.261,20.202L512,238.919L256,41.982z
                                                     M281.53,439.983h-51.06V332.58h51.06V439.983z M402.072,439.983h-90.507V302.545h-111.13v137.438h-90.507V265.329L256,152.965
                                                    l146.071,112.364V439.983z M452.875,266.518l-20.768-15.978v-0.002l-34.815-26.78L256,115.064L59.125,266.518l-17.006-22.106
                                                    L256,79.876l213.88,164.536L452.875,266.518z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                        Front yard
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 19px; width: 19px; fill: currentcolor;" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m12 0c-6.63 0-12 5.37-12 12s5.37 12 12 12 12-5.37 12-12-5.37-12-12-12zm0 23c-6.07 0-11-4.92-11-11s4.93-11 11-11 11 4.93 11 11-4.93 11-11 11zm .5-17h-4.5v11.5a.5.5 0 0 0 1 0v-4.5h3.5c1.93 0 3.5-1.57 3.5-3.5s-1.57-3.5-3.5-3.5zm0 6h-3.5v-5h3.5c1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5z" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        Garage Attached
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 19px; width: 19px; fill: currentcolor;" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m23.5 23h-.5v-11.09a1.49 1.49 0 0 0 1-1.41 1.5 1.5 0 0 0 -1.5-1.5h-20.99a1.5 1.5 0 0 0 -.5 2.91v11.09h-.5a.5.5 0 1 0 0 1h23a .5.5 0 0 0 0-1zm-19.5 0h-2v-11h2zm3 0h-2v-11h2zm3 0h-2v-11h2zm3 0h-2v-11h2zm3 0h-2v-11h2zm3 0h-2v-11h2zm3 0h-2v-11h2zm0-12h-20.5a.5.5 0 0 1 -.5-.5c0-.28.22-.5.5-.5h20.99a.5.5 0 0 1 .5.5c0 .28-.22.5-.5.5zm-10.88-7.29c-.92-1.26-.76-2.38.06-3.18a2.6 2.6 0 0 1 .66-.48.5.5 0 1 1 .43.9 1.66 1.66 0 0 0 -.4.29c-.48.47-.56 1.04.01 1.83 2.09 2.27 2.09 4.26.34 4.89a.5.5 0 0 1 -.34-.94c.94-.34.94-1.46-.77-3.32zm4 0c-.92-1.26-.76-2.38.06-3.18a2.6 2.6 0 0 1 .66-.48.5.5 0 1 1 .43.9 1.66 1.66 0 0 0 -.4.29c-.48.47-.56 1.04.01 1.83 2.09 2.27 2.09 4.26.34 4.89a.5.5 0 0 1 -.34-.94c.94-.34.94-1.46-.77-3.32zm-8 0c-.92-1.26-.76-2.38.06-3.18a2.6 2.6 0 0 1 .66-.48.5.5 0 1 1 .43.9 1.66 1.66 0 0 0 -.4.29c-.48.47-.56 1.04.01 1.83 2.09 2.27 2.09 4.26.34 4.89a.5.5 0 0 1 -.34-.94c.94-.34.94-1.46-.77-3.32z" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        Hot Bath
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg id="Capa_1" style="enable-background:new 0 0 512 512;" version="1.1" viewbox="0 0 512 512" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                        <g>
                                            <g>
                                                <path d="M460.704,439.729C450.572,446.853,443.252,452,426.663,452s-23.909-5.147-34.041-12.271
                                                C381.388,431.83,367.406,422,341.326,422c-26.079,0-40.06,9.831-51.294,17.729C279.901,446.854,272.581,452,255.993,452
                                                c-16.587,0-23.907-5.146-34.038-12.271C210.722,431.831,196.741,422,170.663,422c-26.079,0-40.06,9.831-51.294,17.729
                                                C109.238,446.854,101.918,452,85.331,452c-16.587,0-23.906-5.146-34.037-12.271C40.06,431.831,26.079,422,0,422v30
                                                c16.587,0,23.907,5.146,34.038,12.271C45.271,472.169,59.252,482,85.331,482c26.079,0,40.06-9.831,51.294-17.729
                                                c10.13-7.125,17.45-12.271,34.038-12.271c16.587,0,23.906,5.146,34.037,12.271C215.934,472.169,229.915,482,255.993,482
                                                s40.06-9.831,51.294-17.729C317.418,457.146,324.738,452,341.326,452c16.589,0,23.909,5.147,34.041,12.271
                                                C386.602,472.17,400.583,482,426.663,482c26.08,0,40.062-9.83,51.296-17.729C488.091,457.147,495.411,452,512,452v-30
                                                C485.92,422,471.938,431.83,460.704,439.729z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M460.704,359.729C450.572,366.853,443.252,372,426.663,372c-16.589,0-23.909-5.147-34.041-12.271
                                                c-8.86-6.229-19.433-13.656-36.296-16.519V30h-30v51H185.663V30h-30v313.211c-16.862,2.863-27.435,10.29-36.294,16.519
                                                C109.238,366.854,101.918,372,85.331,372c-16.587,0-23.906-5.146-34.037-12.271C40.06,351.831,26.079,342,0,342v30
                                                c16.587,0,23.907,5.146,34.038,12.271C45.271,392.169,59.252,402,85.331,402c26.079,0,40.06-9.831,51.294-17.729
                                                c10.13-7.125,17.45-12.271,34.038-12.271c16.587,0,23.906,5.146,34.037,12.271C215.934,392.169,229.915,402,255.993,402
                                                s40.06-9.831,51.294-17.729C317.418,377.146,324.738,372,341.326,372c16.589,0,23.909,5.147,34.041,12.271
                                                C386.602,392.17,400.583,402,426.663,402c26.08,0,40.062-9.83,51.296-17.729C488.091,377.147,495.411,372,512,372v-30
                                                C485.92,342,471.938,351.83,460.704,359.729z M185.663,111h140.663v60H185.663V111z M326.326,343.211
                                                c-16.862,2.863-27.435,10.29-36.294,16.518C279.901,366.854,272.581,372,255.993,372c-16.587,0-23.907-5.146-34.038-12.271
                                                c-8.859-6.229-19.432-13.655-36.293-16.519V291h140.664V343.211z M326.327,261h-0.001H185.663v-60h140.664V261z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                                        Pool
                                    </div>
                                    </div>
                                </div>
                                <div class="listing_detail col-md-12 feature_block_Utilities ">
                                    <div class="feature_chapter_name col-md-12">
                                        Utilities
                                    </div>
                                    <div class="row" style="padding: 0px 30px 30px">
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" class="bk-icon -iconset-snowflake hp__facility_group_icon" fill="currentColor" focusable="false" role="presentation" viewbox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M89.6 44.6L94 28.3a4 4 0 0 1 4.9-2.9 4 4 0 0 1 2.8 5l-2.3 8.5 7.7-4.4a4 4 0 0 1 5.5 1.4 4 4 0 0 1-1.5 5.5l-7.7 4.4 8.6 2.4a4 4 0 0 1 2.8 4.9 4 4 0 0 1-4.9 2.8l-16.3-4.4-15.5 9a4 4 0 0 1-5.5-1.5 4 4 0 0 1 1.5-5.5zM53.9 74.5a4 4 0 0 0 1.4-5.5 4 4 0 0 0-5.4-1.5l-15.6 9L18 72.2a4 4 0 0 0-5 2.8 4 4 0 0 0 2.9 5l8.4 2.2-7.5 4.3a4 4 0 0 0-1.4 5.5 4 4 0 0 0 5.4 1.5l7.8-4.5-2.4 8.8a4 4 0 0 0 2.9 4.9 4 4 0 0 0 4.9-2.9l4.4-16.4zM60 32.2V50a4 4 0 0 0 4 4 4 4 0 0 0 4-4V32l11.9-11.9a4 4 0 0 0 0-5.6 4 4 0 0 0-5.7 0L68 20.7V12a4 4 0 0 0-4-4 4 4 0 0 0-4 4v8.9l-6.4-6.4a4 4 0 0 0-5.6 0 4 4 0 0 0 0 5.7zM114.8 75a4 4 0 0 0-4.9-2.8l-16.3 4.3-15.5-9a4 4 0 0 0-5.5 1.5 4 4 0 0 0 1.5 5.5l15.5 8.9 4.3 16.4a4 4 0 0 0 4.9 2.8 4 4 0 0 0 2.8-4.9L99.3 89l7.7 4.5a4 4 0 0 0 5.5-1.5 4 4 0 0 0-1.5-5.4l-7.6-4.4 8.6-2.3a4 4 0 0 0 2.8-4.9zM68 95.8V78a4 4 0 0 0-4-4 4 4 0 0 0-4 4v18l-11.9 11.9a4 4 0 0 0 0 5.6 4 4 0 0 0 5.7 0l6.2-6.2v8.7a4 4 0 0 0 4 4 4 4 0 0 0 4-4v-8.9l6.4 6.4a4 4 0 0 0 5.6 0 4 4 0 0 0 0-5.7zM13.2 53a4 4 0 0 0 4.8 2.8l16.3-4.3 15.5 9a4 4 0 0 0 5.5-1.5 4 4 0 0 0-1.4-5.5l-15.5-8.9-4.3-16.4a4 4 0 0 0-5-2.8 4 4 0 0 0-2.8 4.9l2.3 8.7-7.7-4.5a4 4 0 0 0-5.4 1.5 4 4 0 0 0 1.4 5.5l7.6 4.3-8.5 2.3a4 4 0 0 0-2.9 4.9z">
                                            </path>
                                        </svg>
                                        Central Air
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg enable-background="new 0 0 512 512" height="512" id="Capa_1" viewbox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="m256.396 204.495c-25.57 0-50.014 11.003-67.063 30.189l22.425 19.928c11.361-12.785 27.631-20.117 44.638-20.117s33.277 7.333 44.638 20.117l22.425-19.928c-17.05-19.185-41.493-30.189-67.063-30.189z">
                                                </path>
                                                <path d="m343.285 217.108 22.425-19.928c-27.785-31.267-67.629-49.2-109.314-49.2-41.686 0-81.529 17.933-109.314 49.2l22.425 19.928c22.097-24.866 53.768-39.127 86.89-39.127s64.791 14.261 86.888 39.127z">
                                                </path>
                                                <path d="m467.66 254.318 23.151 23.151 21.19-21.19-61.091-61.091v-155.518h-104.63v50.887l-90.558-90.557-255.488 255.488 21.19 21.19 22.359-22.359v227.714h-43.783v29.967h511.443v-29.967h-43.783zm-91.414-184.68h44.695v95.583l-44.695-44.696zm-302.495 154.713 181.971-181.97 181.971 181.97v257.682h-166.693v-43.486c30.489-6.858 53.341-34.133 53.341-66.662v-48.745h-23.339v-38.079h-30v38.079h-30.004v-38.079h-30v38.079h-23.339v48.745c0 32.529 22.852 59.804 53.341 66.662v43.486h-167.249zm143.908 128.789h76.682v18.745c0 21.141-17.2 38.341-38.341 38.341s-38.341-17.2-38.341-38.341z">
                                                </path>
                                            </g>
                                        </svg>
                                        Electricity
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" class="bk-icon -iconset-heater c-bh-strip__icon" focusable="false" role="presentation" viewbox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M34.8 19.7a4 4 0 0 1 0-4.8l4-5.3a4 4 0 1 1 6.4 4.8l-2.2 3 2.2 2.9a4 4 0 0 1 0 4.8l-4 5.3a4 4 0 1 1-6.4-4.8l2.2-3zm26.2 3l-2.2 2.9a4 4 0 0 0 6.4 4.8l4-5.3a4 4 0 0 0 0-4.8l-2.2-3 2.2-2.9a4 4 0 1 0-6.4-4.8l-4 5.3a4 4 0 0 0 0 4.8zm24 0l-2.2 2.9a4 4 0 0 0 6.4 4.8l4-5.3a4 4 0 0 0 0-4.8l-2.2-3 2.2-2.9a4 4 0 1 0-6.4-4.8l-4 5.3a4 4 0 0 0 0 4.8zm35 28.5V108a12 12 0 0 1-23.3 4h-9.4a12 12 0 0 1-22.6 0h-9.4a12 12 0 0 1-22.6 0H24v8H8v-8h8V47H8v-8h16v8.2h8.7a12 12 0 0 1 22.6 0h9.4a12 12 0 0 1 22.6 0h9.4a12 12 0 0 1 23.3 4zm-32 4V104h8V55.2zm-32 0V104h8V55.2zM24 104h8V55.2h-8zm24-52.8a4 4 0 1 0-8 0V108a4 4 0 0 0 8 0zM80 108V51.2a4 4 0 1 0-8 0V108a4 4 0 0 0 8 0zm32-56.8a4 4 0 1 0-8 0V108a4 4 0 0 0 8 0z">
                                            </path>
                                        </svg>
                                        Heating
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg id="Capa_1" style="enable-background:new 0 0 512.001 512.001;" version="1.1" viewbox="0 0 512.001 512.001" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                            <g>
                                                <g>
                                                    <path d="M80.681,0v431.028l78.193,40.928h28.721v40.045h30.001v-40.045h76.811v40.045h30.001v-40.045h28.722l78.192-40.928V0
                                                    H80.681z M401.319,412.869l-55.569,29.086H166.251l-55.569-29.086v-45.934h290.638V412.869z M401.319,336.935H110.682V30.001
                                                    h290.638V336.935z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M264.777,73.124L256,66.789l-8.777,6.335c-1.48,1.067-36.248,26.574-36.248,62.772c0,24.827,20.198,45.024,45.025,45.024
                                                    s45.025-20.197,45.025-45.024C301.025,99.697,266.257,74.191,264.777,73.124z M256,150.92c-8.284,0-15.024-6.739-15.024-15.023
                                                    c0-10.264,6.051-19.836,11.128-26.06c1.31-1.605,2.629-3.083,3.896-4.417c1.268,1.334,2.587,2.812,3.896,4.417
                                                    c5.077,6.223,11.128,15.795,11.128,26.06C271.024,144.18,264.284,150.92,256,150.92z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <rect height="30.001" width="106.813" x="202.595" y="276.887">
                                                    </rect>
                                                </g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                        Natural Gas
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg enable-background="new 0 0 511.718 511.718" height="512" id="Capa_1" viewbox="0 0 511.718 511.718" width="512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m245.152 233.856-32.968-76.375-.399-.927-.521-.864c-4.939-8.205-13.224-13.579-22.73-14.742-9.505-1.163-18.843 2.053-25.613 8.825l-53.799 53.799c-6.771 6.771-9.988 16.107-8.825 25.613 1.163 9.507 6.537 17.791 14.742 22.73l.864.521 77.302 33.367c-.594 3.484-.92 7.057-.92 10.707s.326 7.224.92 10.707l-76.375 32.968-.927.399-.864.521c-8.205 4.939-13.579 13.224-14.742 22.73s2.054 18.842 8.825 25.613l53.799 53.799c5.861 5.861 13.642 9.059 21.793 9.059 1.266 0 2.542-.077 3.82-.233 9.507-1.163 17.791-6.537 22.73-14.742l.521-.864 33.367-77.302c3.484.594 7.057.92 10.707.92s7.224-.326 10.707-.92l32.968 76.375.399.927.521.864c4.939 8.205 13.224 13.579 22.73 14.742 1.278.156 2.554.233 3.82.233 8.15 0 15.933-3.197 21.793-9.059l53.799-53.799c6.771-6.771 9.988-16.107 8.825-25.613-1.163-9.507-6.537-17.791-14.742-22.73l-.864-.521-77.302-33.367c.594-3.484.92-7.057.92-10.707s-.326-7.224-.92-10.707l76.375-32.968.927-.399.864-.521c8.205-4.939 13.579-13.224 14.742-22.73s-2.054-18.842-8.825-25.613l-53.799-53.799c-6.771-6.771-16.104-9.993-25.613-8.825-9.507 1.163-17.791 6.537-22.73 14.742l-.521.864-33.367 77.302c-3.484-.594-7.057-.92-10.707-.92-3.65.001-7.224.327-10.707.92zm-114.944-7.92c-.062-.097-.112-.225-.133-.395-.055-.441.158-.653.26-.756l53.799-53.799c.102-.103.318-.326.756-.26.17.021.298.071.395.133l32.332 74.904c-4.724 3.569-8.935 7.78-12.504 12.504zm55.076 196.226c-.097.062-.225.112-.395.133-.438.061-.654-.158-.756-.26l-53.799-53.799c-.102-.103-.314-.314-.26-.756.021-.17.071-.298.133-.395l74.904-32.332c3.569 4.724 7.78 8.935 12.504 12.504zm196.226-55.076c.062.097.112.225.133.395.055.441-.158.653-.26.756l-53.799 53.799c-.103.102-.319.321-.756.26-.17-.021-.298-.071-.395-.133l-32.332-74.904c4.724-3.569 8.935-7.78 12.504-12.504zm-55.076-196.227c.097-.062.225-.112.395-.133.436-.066.653.157.756.26l53.799 53.799c.102.103.314.314.26.756-.021.17-.071.298-.133.395l-74.904 32.332c-3.569-4.724-7.78-8.935-12.504-12.504zm-37.001 125.652c0 18.513-15.062 33.574-33.574 33.574s-33.574-15.062-33.574-33.574 15.062-33.574 33.574-33.574 33.574 15.061 33.574 33.574z">
                                            </path>
                                            <path d="m255.859 0-255.177 209.197 19.02 23.2 15.994-13.112v292.433h440.163v-292.566l16.157 13.246 19.02-23.2zm190 481.718h-380.163v-287.027l190.163-155.898 190 155.764z">
                                            </path>
                                        </svg>
                                        Ventilation
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg id="Capa_1" style="enable-background:new 0 0 512 512;" version="1.1" viewbox="0 0 512 512" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                        <g>
                                            <g>
                                                <path d="M381.788,112.93l-11.331-13.069l-11.331,13.07c-1.24,1.431-26.592,30.807-54.725,72.526
                                                c-10.391-19.831-22.517-40.549-36.383-62.129C227.844,60.804,188.287,14.99,186.623,13.07L175.293,0l-11.331,13.069
                                                c-1.665,1.919-41.221,47.734-81.395,110.258C27.829,208.514,0.074,280.33,0.074,336.783C0.074,433.398,78.677,512,175.292,512
                                                c38.622,0,74.357-12.57,103.351-33.82c25.569,21.897,57.692,33.82,91.814,33.82c78.005,0,141.469-63.463,141.469-141.469
                                                C511.926,264.267,387.102,119.06,381.788,112.93z M175.291,482.009c-80.078,0-145.226-65.148-145.226-145.226
                                                c0-102.389,109.245-245.904,145.229-290.393c35.984,44.466,145.223,187.91,145.223,290.393
                                                C320.517,416.861,255.369,482.009,175.291,482.009z M370.458,482.009c-25.388,0-49.373-8.379-68.932-23.839
                                                c30.315-31.514,48.983-74.309,48.983-121.387c0-34.433-10.345-74.592-30.821-120.004c19.368-30.164,38.908-55.66,50.761-70.447
                                                c30.402,37.977,111.486,146.55,111.486,224.201C481.934,432,431.926,482.009,370.458,482.009z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M293.39,331.42c-1.111-29.794-12.616-51.54-13.106-52.451l-26.422,14.188c0.087,0.162,8.717,16.821,9.559,39.38
                                                c1.132,30.349-12.012,56.617-39.065,78.073l18.637,23.498C286.524,399.583,294.427,359.209,293.39,331.42z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M462.709,368.29c-0.788-21.138-8.647-36.341-9.541-38.006l-13.211,7.094l-13.256,7.01
                                                c0.058,0.111,5.773,11.266,6.067,26.078c0.373,18.772-8.046,35.116-25.022,48.579l18.638,23.498
                                                C457.767,417.652,463.46,388.426,462.709,368.29z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                                        Water
                                    </div>
                                    </div>
                                </div>
                                <div class="listing_detail col-md-12 feature_block_others ">
                                    <div class="feature_chapter_name col-md-12">
                                        Other Features
                                    </div>
                                     <div class="row" style="padding: 0px 30px 30px">
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" class="bk-icon -iconset-disabled hp__facility_group_icon" fill="currentColor" focusable="false" role="presentation" viewbox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M83 93.5a24 24 0 1 1-43.1-20.8L36 58a36 36 0 1 0 53 48.7z">
                                            </path>
                                            <circle cx="56" cy="20" r="12">
                                            </circle>
                                            <path d="M107 111.6a4 4 0 0 1-4.8-2.2L90.5 83.2 61 84a8 8 0 0 1-8.2-7q-3.3-15.4-7.7-30.7c-1.3-4.3 1.6-8.5 6.6-9.2l9-1.4c5.1-.8 9.9 2.1 10.4 6.5l1 8.6L93 52a4 4 0 0 1 0 8l-19.7 1.1.6 7.2 19.1.5c4 .2 5.9 2.2 6.6 4.2l10.2 33.6a4 4 0 0 1-2.8 5z">
                                            </path>
                                        </svg>
                                        Chair Accessible
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 19px; width: 19px; fill: currentcolor;" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.5 23H21V1h1.5a.5.5 0 0 0 0-1H.5a.5.5 0 1 0 0 1H2v22H.5a.5.5 0 1 0 0 1h22a.5.5 0 0 0 0-1zM11 3v20H3V1h8v2zm9 20h-8V1h8v22zM4.146 10.854a.5.5 0 0 1 0-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 1 1-.708.708L7 9.707V14.5a.5.5 0 0 1-1 0V9.707l-1.146 1.147a.5.5 0 0 1-.708 0zm10 2a.5.5 0 1 1 .708-.708L16 13.293V8.5a.5.5 0 1 1 1 0v4.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2z" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        Elevator
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg id="Capa_1" style="enable-background:new 0 0 512 512;" version="1.1" viewbox="0 0 512 512" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                            <g>
                                                <g>
                                                    <path d="M501.106,0H10.894c-4.513,0-8.17,3.658-8.17,8.17v65.362c0,4.512,3.657,8.17,8.17,8.17h13.617V503.83
                                                    c0,4.512,3.657,8.17,8.17,8.17h446.638c4.513,0,8.17-3.658,8.17-8.17V81.702h13.617c4.513,0,8.17-3.658,8.17-8.17V8.17
                                                    C509.277,3.658,505.62,0,501.106,0z M405.785,495.66H106.213v-38.128h299.572V495.66z M305.044,392.17
                                                    c-5.141,6.832-8.193,15.321-8.193,24.511s3.052,17.678,8.193,24.511H174.298c-13.515,0-24.511-10.996-24.511-24.511
                                                    s10.996-24.511,24.511-24.511H305.044z M188.793,308.623c0-14.803,4.652-28.789,13.477-40.481L256,196.131l53.758,72.048
                                                    c8.799,11.656,13.45,25.641,13.45,40.444c-0.001,37.058-30.149,67.207-67.208,67.207S188.793,345.681,188.793,308.623z
                                                     M313.191,416.681c0-13.515,10.996-24.511,24.511-24.511c13.515,0,24.511,10.996,24.511,24.511s-10.996,24.511-24.511,24.511
                                                    C324.188,441.191,313.191,430.195,313.191,416.681z M471.149,495.66h-49.023V324.963c0-4.512-3.657-8.17-8.17-8.17
                                                    s-8.17,3.658-8.17,8.17v116.228H370.36c5.141-6.832,8.193-15.321,8.193-24.511c0-22.525-18.325-40.851-40.851-40.851h-32.138
                                                    c20.598-15.23,33.984-39.682,33.984-67.207c0-18.384-5.791-35.775-16.722-50.252l-60.279-80.788
                                                    c-1.54-2.066-3.969-3.284-6.547-3.284c-2.578,0-5.007,1.218-6.548,3.284l-60.253,80.751
                                                    c-10.957,14.515-16.748,31.904-16.748,50.289c0,27.526,13.386,51.977,33.984,67.207h-32.137
                                                    c-22.526,0-40.851,18.326-40.851,40.851c0,9.19,3.052,17.678,8.193,24.511h-35.427V147.064h299.572v145.218
                                                    c0,4.512,3.657,8.17,8.17,8.17s8.17-3.658,8.17-8.17V147.064h24.513c4.513,0,8.17-3.658,8.17-8.17s-3.657-8.17-8.17-8.17H65.362
                                                    c-4.513,0-8.17,3.658-8.17,8.17s3.657,8.17,8.17,8.17h24.511V495.66H40.851V81.702h430.298V495.66z M492.936,65.362H19.064V16.34
                                                    h473.872V65.362z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                        Fireplace
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 19px; width: 19px; fill: currentcolor;" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m15.25 14c .97 0 1.75-.9 1.75-2s-.79-2-1.75-2-1.75.9-1.75 2 .79 2 1.75 2zm0 1c-1.52 0-2.75-1.35-2.75-3s1.23-3 2.75-3 2.75 1.35 2.75 3-1.23 3-2.75 3zm3.31-5.93.23.45.89-.46-.23-.45a9.4 9.4 0 0 0 -4.22-4.11l-.45-.22-.44.9.45.22a8.4 8.4 0 0 1 3.78 3.67zm.89 6.32.23-.45-.89-.46-.23.45a8.4 8.4 0 0 1 -3.78 3.67l-.45.22.44.9.45-.22a9.4 9.4 0 0 0 4.22-4.11zm.61.51c-.92 1.78-2.44 3.26-4.28 4.15l-.45.22.44.9.45-.22a10.51 10.51 0 0 0 4.72-4.59l.23-.44-.89-.46zm2.94-3.9c0-6.07-4.93-11-11-11s-11 4.93-11 11 4.93 11 11 11 11-4.93 11-11zm1 0c0 6.62-5.38 12-12 12s-12-5.38-12-12 5.38-12 12-12 12 5.38 12 12zm-19.44-3.39-.23.45.89.46.23-.45a8.4 8.4 0 0 1 3.78-3.67l.45-.22-.44-.9-.45.22a9.4 9.4 0 0 0 -4.22 4.11zm-.61 7.29-.23-.44-.89.46.23.44a10.51 10.51 0 0 0 4.72 4.59l.45.22.44-.9-.45-.22c-1.84-.9-3.36-2.37-4.28-4.15zm0-7.8c.92-1.78 2.44-3.26 4.28-4.15l.45-.22-.44-.9-.45.22a10.51 10.51 0 0 0 -4.72 4.59l-.23.44.89.46zm1.5 6.83-.23-.45-.89.46.23.45a9.4 9.4 0 0 0 4.22 4.11l.45.22.44-.9-.45-.22a8.4 8.4 0 0 1 -3.78-3.67zm3.4-4.93c.73 0 1.39.47 1.69 1.19l.93-.38c-.45-1.1-1.48-1.81-2.62-1.81-1.57 0-2.85 1.35-2.85 3s1.28 3 2.85 3c1.14 0 2.16-.71 2.62-1.81l-.93-.38c-.3.72-.96 1.19-1.69 1.19-1.02 0-1.85-.9-1.85-2s .83-2 1.85-2zm11.21-1.9.23.44.89-.46-.23-.44a10.51 10.51 0 0 0 -4.72-4.59l-.45-.22-.44.9.45.22c1.84.9 3.36 2.37 4.28 4.15zm1.94 3.9a1 1 0 1 1 -2 0 1 1 0 0 1 2 0z" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        Smoke detectors
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 19px; width: 19px; fill: currentcolor;" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m5 3.5a1.5 1.5 0 1 0 -3 0 1.5 1.5 0 0 0 3 0zm-1.5.5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm4 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0-2a .5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm4.5 3c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm0 15c-3.77 0-6.84-2.99-6.99-6.73.35-.23.84-.57.85-.57 1.64-1.05 3.31-1.06 5.85.71 2.88 2.01 4.99 1.99 6.96.73l.25-.17c-.47 3.4-3.39 6.03-6.92 6.03zm6.13-6.7c-1.64 1.05-3.31 1.06-5.85-.71-2.88-2.01-4.99-1.99-6.96-.73l-.25.17c.48-3.4 3.4-6.03 6.93-6.03 3.77 0 6.84 2.99 6.99 6.73-.35.23-.84.57-.85.57zm3.37-14.3h-19a2.51 2.51 0 0 0 -2.5 2.5v19c0 1.38 1.12 2.5 2.5 2.5h19c1.38 0 2.5-1.12 2.5-2.5v-19c0-1.37-1.12-2.5-2.5-2.5zm1.5 21.5c0 .83-.68 1.5-1.5 1.5h-19c-.83 0-1.5-.68-1.5-1.5v-19c0-.82.68-1.5 1.5-1.5h19c .83 0 1.5.68 1.5 1.5z" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        Washer and dryer
                                    </div>
                                    <div class="listing_detail col-md-4">
                                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 19px; width: 19px; fill: currentcolor;" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m12 15a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 5a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm5.92-5.78a.5.5 0 1 1 -.84.55c-1.19-1.81-3.07-2.77-5.08-2.77s-3.89.96-5.08 2.78a.5.5 0 0 1 -.84-.55c1.38-2.1 3.58-3.23 5.92-3.23s4.54 1.13 5.92 3.23zm2.98-3.03a.5.5 0 1 1 -.79.61c-1.66-2.14-5.22-3.8-8.11-3.8-2.83 0-6.26 1.62-8.12 3.82a.5.5 0 0 1 -.76-.65c2.05-2.42 5.75-4.17 8.88-4.17 3.19 0 7.05 1.8 8.9 4.19zm2.95-2.33a.5.5 0 0 1 -.71-.02c-2.94-3.07-6.71-4.84-11.14-4.84s-8.2 1.77-11.14 4.85a.5.5 0 0 1 -.72-.69c3.12-3.27 7.14-5.16 11.86-5.16s8.74 1.89 11.86 5.16a.5.5 0 0 1 -.02.71z" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        WiFi
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group property-panel" id="accordion_video">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_video" data-toggle="collapse" href="#collapseThreeOne">
                            </a>
                            <h4 class="panel-title" id="prop_video">
                                <a data-parent="#accordion_video" data-toggle="collapse" href="#collapseThreeOne">
                                    Video
                                </a>
                            </h4>
                        </div>
                        <div class="panel-collapse " id="collapseThreeOne">
                            <div class="panel-body">
                                <div class="property_video_wrapper">
                                    <div id="property_video_wrapper_player">
                                    </div>
                                    <a class="venobox vbox-item" data-autoplay="true" data-vbtype="video" href="https://player.vimeo.com/video/284436243?api=1&player_id=player_1">
                                        <img alt="video image" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/featured_property_large-1110x623.jpg"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group property-panel" id="accordion_prop_map">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_prop_map" data-toggle="collapse" href="#collapsemap">
                                <h4 class="panel-title" id="prop_ame">
                                    Map
                                </h4>
                            </a>
                        </div>
                        <div class="panel-collapse " id="collapsemap">
                            <div class="panel-body">
                                <div class="google_map_shortcode_wrapper ">
                                    <div class="smallslidecontrol shortcode_control" id="gmapzoomplus_sh">
                                        <i class="fas fa-plus">
                                        </i>
                                    </div>
                                    <div class="smallslidecontrol shortcode_control" id="gmapzoomminus_sh">
                                        <i class="fas fa-minus">
                                        </i>
                                    </div>
                                    <div class="google_map_poi_marker">
                                        <div class="google_poish" id="transport">
                                            <img alt="Transport" class="dashboad-tooltip" data-original-title="Transport" data-placement="right" src="https://wpresidence.net/wp-content/themes/wpresidence/css/css-images/poi/transport_icon.png"/>
                                        </div>
                                        <div class="google_poish" id="supermarkets">
                                            <img alt="Supermarkets" class="dashboad-tooltip" data-original-title="Supermarkets" data-placement="right" src="https://wpresidence.net/wp-content/themes/wpresidence/css/css-images/poi/supermarkets_icon.png"/>
                                        </div>
                                        <div class="google_poish" id="schools">
                                            <img alt="Schools" class="dashboad-tooltip" data-original-title="Schools" data-placement="right" src="https://wpresidence.net/wp-content/themes/wpresidence/css/css-images/poi/schools_icon.png"/>
                                        </div>
                                        <div class="google_poish" id="restaurant">
                                            <img alt="Restaurants" class="dashboad-tooltip" data-original-title="Restaurants" data-placement="right" src="https://wpresidence.net/wp-content/themes/wpresidence/css/css-images/poi/restaurant_icon.png"/>
                                        </div>
                                        <div class="google_poish" id="pharma">
                                            <img alt="Pharmacies" class="dashboad-tooltip" data-original-title="Pharmacies" data-placement="right" src="https://wpresidence.net/wp-content/themes/wpresidence/css/css-images/poi/pharma_icon.png"/>
                                        </div>
                                        <div class="google_poish" id="hospitals">
                                            <img alt="Hospitals" class="dashboad-tooltip" data-original-title="Hospitals" data-placement="right" src="https://wpresidence.net/wp-content/themes/wpresidence/css/css-images/poi/hospitals_icon.png"/>
                                        </div>
                                    </div>
                                    <div data-original-title="Street View" data-placement="bottom" id="slider_enable_street_sh">
                                        <i class="fas fa-location-arrow">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group property-panel" id="accordion_virtual_tour">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_virtual_tour" data-toggle="collapse" href="#collapsenine1">
                                <h4 class="panel-title" id="prop_virtual">
                                    Virtual Tour
                                </h4>
                            </a>
                        </div>
                        <div class="panel-collapse " id="collapsenine1">
                            <div class="panel-body">
                                <div class="property_video_wrapper">
                                    <div id="property_video_wrapper_player">
                                    </div>
                                    <a class="venobox vbox-item" data-autoplay="true" data-vbtype="video" href="https://player.vimeo.com/video/284436243?api=1&player_id=player_1">
                                        <img alt="video image" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/featured_property_large-1110x623.jpg"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group property-panel" id="accordion_walkscore">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_walkscore" data-toggle="collapse" href="#collapseFour">
                                <h4 class="panel-title" id="prop_ame">
                                    WalkScore
                                </h4>
                            </a>
                        </div>
                        <div class="panel-collapse " id="collapseFour">
                            <div class="panel-body">
                                <div id="ws-walkscore-tile" style="position: relative; text-align: left; text-decoration: none; padding: 0px; font-stretch: normal; font-style: normal; font-variant: normal; letter-spacing: normal; word-spacing: normal; text-transform: none; vertical-align: baseline; text-indent: 0px; text-shadow: none; white-space: normal; background-image: none; background-color: transparent; height: 400px; width: 100%;">
                                    <iframe frameborder="0" height="400px" marginheight="0" marginwidth="0" scrolling="no" src="https://www.walkscore.com/serve-walkscore-tile.php?wsid=60d2f7fcf7c27d387418eaddde65caaa&s=Crown-Heights-56550-New-York-&o=h&c=f&h=400&fh=0&w=787" style="margin: 0px; outline: none; text-align: left; text-decoration: none; padding: 0px; font-stretch: normal; font-style: normal; font-variant: normal; letter-spacing: normal; word-spacing: normal; text-transform: none; vertical-align: baseline; text-indent: 0px; text-shadow: none; white-space: normal; background-image: none; background-color: transparent; border: 0px;" title="Walk Score" width="100%">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="panel-group property-panel" id="accordion_morgage">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_morgage" data-toggle="collapse" href="#collapsemorgage">
                                <h4 class="panel-title" id="prop_morg">
                                    Payment Calculator
                                </h4>
                            </a>
                        </div>
                        <div class="panel-collapse " id="collapsemorgage">
                            <div class="panel-body">
                                <div class="morgage_chart_wrapper onfirst">
                                    <div id="canvas-holder">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class="">
                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class="">
                                                </div>
                                            </div>
                                        </div>
                                        <canvas class="chartjs-render-monitor" height="189" id="morgage_chart" style="display: block; width: 379px; height: 189px;" width="379">
                                        </canvas>
                                    </div>
                                    <div class="morg_momth_pay">
                                        <div class="morg_month_wrap">
                                            $
                                            <span id="morg_month_total">
                                                581.58
                                            </span>
                                        </div>
                                        <span id="morg_per_month">
                                            per month
                                        </span>
                                    </div>
                                    <ul class="morgage_legend">
                                        <li>
                                            Principal and Interest
                                        </li>
                                        <li>
                                            Property Tax
                                        </li>
                                        <li>
                                            HOA fee
                                        </li>
                                    </ul>
                                </div>
                                <div class="morgage_chart_wrapper">
                                    <label>
                                        Principal and Interest
                                    </label>
                                    $
                                    <span data-per="100" id="morg_principal">
                                        581.58
                                    </span>
                                    <label>
                                        Property Tax
                                    </label>
                                    <input data-per="0" id="monthly_property_tax" type="text" value="0">
                                        <label>
                                            Homeowners Association Fee
                                        </label>
                                        <input data-per="0" id="hoo_fees" type="text" value="0">
                                        </input>
                                    </input>
                                </div>
                                <div class=" morgage_data_wrapper onfirst">
                                    <label>
                                        Home Price
                                    </label>
                                    <input class="morgage_inputdata" data-price="150000" id="morgage_home_price" name="morgage_home_price" type="text" value="150000">
                                        <label>
                                            Down Payment
                                        </label>
                                        <input class="morgage_inputdata" data-price="30000" id="morgage_down_payment" name="morgage_down_payment" type="text" value="30000">
                                            <input 20="" class="morgage_inputdata" data-down-pay="" id="morgage_down_payment_percent" name="morgage_down_payment_percent" type="text" value="20">
                                            </input>
                                        </input>
                                    </input>
                                </div>
                                <div class=" morgage_data_wrapper">
                                    <label>
                                        Term(*in years)
                                    </label>
                                    <input class="morgage_inputdata" id="morgage_term" name="morgage_term" type="text" value="30">
                                        <label>
                                            Interest
                                        </label>
                                        <input class="morgage_inputdata" id="morgage_interest" name="morgage_interest" type="text" value="4.125">
                                        </input>
                                    </input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="panel-group property-panel" id="accordion_prop_floor_plans">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_prop_floor_plans" data-toggle="collapse" href="#collapseflplan">
                                <h4 class="panel-title" id="prop_ame">
                                    Floor Plans
                                </h4>
                            </a>
                        </div>
                        <div class="panel-collapse " id="collapseflplan">
                            <div class="panel-body">
                                <div class="front_plan_row ">
                                    <div class="floor_title">
                                        Floor Plan A
                                    </div>
                                    <div class="floor_details">
                                        <span class="bold_detail">
                                            size:
                                        </span>
                                        2000 ft
                                        <sup>
                                            2
                                        </sup>
                                    </div>
                                    <div class="floor_details">
                                        <span class="bold_detail">
                                            rooms:
                                        </span>
                                        10
                                    </div>
                                    <div class="floor_details">
                                        <span class="bold_detail">
                                            baths:
                                        </span>
                                        7
                                    </div>
                                    <div class="floor_details floor_price_details">
                                        <span class="bold_detail">
                                            price:
                                        </span>
                                        $ 1,300
                                    </div>
                                </div>
                                <div ;="" class="front_plan_row_image " style="display:block">
                                    <div class="floor_image">
                                        <a href="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2018/02/floor-plan-3-1.jpg" rel="prettyPhoto" title="Inside this enchanting home, the great room enjoys a fireplace and views of the rear patio. The secluded master suite at the front of the home delights in tons of natural light, a splendid bath, a sitting room with a fireplace, and a private lanai. Three upper-level bedrooms share an optional bonus room, perfect for a home gym, playroom, or studio. Click the home to see the layout!">
                                            <img alt="Floor Plan A" class="lightbox_trigger_floor" data-slider-no="1" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2018/02/floor-plan-3-1.jpg"/>
                                        </a>
                                    </div>
                                    <div class="floor_description">
                                        Inside this enchanting home, the great room enjoys a fireplace and views of the rear patio. The secluded master suite at the front of the home delights in tons of natural light, a splendid bath, a sitting room with a fireplace, and a private lanai. Three upper-level bedrooms share an optional bonus room, perfect for a home gym, playroom, or studio. Click the home to see the layout!
                                    </div>
                                </div>
                                <div class="front_plan_row ">
                                    <div class="floor_title">
                                        Floor Plan B
                                    </div>
                                    <div class="floor_details">
                                        <span class="bold_detail">
                                            size:
                                        </span>
                                        1500 ft
                                        <sup>
                                            2
                                        </sup>
                                    </div>
                                    <div class="floor_details">
                                        <span class="bold_detail">
                                            rooms:
                                        </span>
                                        8
                                    </div>
                                    <div class="floor_details">
                                        <span class="bold_detail">
                                            baths:
                                        </span>
                                        5
                                    </div>
                                    <div class="floor_details floor_price_details">
                                        <span class="bold_detail">
                                            price:
                                        </span>
                                        $ 900
                                    </div>
                                </div>
                                <div class="front_plan_row_image ">
                                    <div class="floor_image">
                                        <a href="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2018/02/flloor-plan-2.jpg" rel="prettyPhoto" title="Living Spaces are more easily interpreted. All-In-Ones color floor plan option clearly defines your listing’s living spaces, making them obvious and clearly visible to your potential buyers/clients. Add extra value to your services. Color floor-plans show that you care about selling your client’s listing; they add a premium, high value look to any listing and can be used in your brochures, email and websites.">
                                            <img alt="Floor Plan B" class="lightbox_trigger_floor" data-slider-no="2" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2018/02/flloor-plan-2.jpg"/>
                                        </a>
                                    </div>
                                    <div class="floor_description">
                                        Living Spaces are more easily interpreted. All-In-Ones color floor plan option clearly defines your listing’s living spaces, making them obvious and clearly visible to your potential buyers/clients. Add extra value to your services. Color floor-plans show that you care about selling your client’s listing; they add a premium, high value look to any listing and can be used in your brochures, email and websites.
                                    </div>
                                </div>
                                <div class="lightbox_property_wrapper_floorplans">
                                    <div class="lightbox_property_wrapper_level2">
                                        <div class="lightbox_property_content row">
                                            <div class="lightbox_property_slider col-md-12">
                                                <div class="owl-carousel owl-theme owl-loaded owl-drag" id="owl-demo-floor">
                                                    <div class="owl-stage-outer">
                                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                                            <div class="owl-item">
                                                                <div class="item" href="#1">
                                                                    <div class="itemimage">
                                                                        <img alt="Floor Plan A" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2018/02/floor-plan-3-1.jpg">
                                                                        </img>
                                                                    </div>
                                                                    {{-- <div class="lightbox_floor_details">
                                                                        <div class="floor_title">
                                                                            Floor Plan A
                                                                        </div>
                                                                        <div class="floor_light_desc">
                                                                            Inside this enchanting home, the great room enjoys a fireplace and views of the rear patio. The secluded master suite at the front of the home delights in tons of natural light, a splendid bath, a sitting room with a fireplace, and a private lanai. Three upper-level bedrooms share an optional bonus room, perfect for a home gym, playroom, or studio. Click the home to see the layout!
                                                                        </div>
                                                                        <div class="floor_details">
                                                                            <span class="bold_detail">
                                                                                size:
                                                                            </span>
                                                                            2000 ft
                                                                            <sup>
                                                                                2
                                                                            </sup>
                                                                        </div>
                                                                        <div class="floor_details">
                                                                            <span class="bold_detail">
                                                                                rooms:
                                                                            </span>
                                                                            10
                                                                        </div>
                                                                        <div class="floor_details">
                                                                            <span class="bold_detail">
                                                                                baths:
                                                                            </span>
                                                                            7
                                                                        </div>
                                                                        <div class="floor_details">
                                                                            <span class="bold_detail">
                                                                                price:
                                                                            </span>
                                                                            $ 1,300
                                                                        </div>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                           {{--  <div class="owl-item">
                                                                <div class="item" href="#2">
                                                                    <div class="itemimage">
                                                                        <img alt="Floor Plan B" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2018/02/flloor-plan-2.jpg">
                                                                        </img>
                                                                    </div>
                                                                    <div class="lightbox_floor_details">
                                                                        <div class="floor_title">
                                                                            Floor Plan B
                                                                        </div>
                                                                        <div class="floor_light_desc">
                                                                            Living Spaces are more easily interpreted. All-In-Ones color floor plan option clearly defines your listing’s living spaces, making them obvious and clearly visible to your potential buyers/clients. Add extra value to your services. Color floor-plans show that you care about selling your client’s listing; they add a premium, high value look to any listing and can be used in your brochures, email and websites.
                                                                        </div>
                                                                        <div class="floor_details">
                                                                            <span class="bold_detail">
                                                                                size:
                                                                            </span>
                                                                            1500 ft
                                                                            <sup>
                                                                                2
                                                                            </sup>
                                                                        </div>
                                                                        <div class="floor_details">
                                                                            <span class="bold_detail">
                                                                                rooms:
                                                                            </span>
                                                                            8
                                                                        </div>
                                                                        <div class="floor_details">
                                                                            <span class="bold_detail">
                                                                                baths:
                                                                            </span>
                                                                            5
                                                                        </div>
                                                                        <div class="floor_details">
                                                                            <span class="bold_detail">
                                                                                price:
                                                                            </span>
                                                                            $ 900
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                    <div class="owl-nav">
                                                        <button class="owl-prev" role="presentation" type="button">
                                                            <div class="nextleft">
                                                                <i class="demo-icon icon-left-open-big">
                                                                </i>
                                                            </div>
                                                        </button>
                                                        <button class="owl-next" role="presentation" type="button">
                                                            <div class="nextright">
                                                                <i class="demo-icon icon-right-open-big">
                                                                </i>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="owl-dots disabled">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="lighbox-image-close-floor">
                                            <i aria-hidden="true" class="fas fa-times">
                                            </i>
                                        </div> --}}
                                    </div>
                                   {{--  <div class="lighbox_overlay">
                                    </div> --}}
                                </div>
                         
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="panel-group property-panel" id="accordion_prop_stat">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-parent="#accordion_prop_stat" data-toggle="collapse" href="#collapseSeven">
                                <h4 class="panel-title">
                                    Page Views Statistics
                                </h4>
                            </a>
                        </div>
                        <div class="panel-collapse " id="collapseSeven">
                            <div class="panel-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class="">
                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class="">
                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class="">
                                        </div>
                                    </div>
                                </div>
                                <canvas class="chartjs-render-monitor" height="353" id="myChart" style="display: block; width: 708px; height: 353px;" width="708">
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="wpestate_agent_details_wrapper row">
                    <div class="col-md-5 agentpic-wrapper">
                        <div class="agent-listing-img-wrapper" data-link="https://wpresidence.net/agents/john-collins/">
                            <div class="agentpict" style="background-image:url(https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2015/04/person-500x328.webp)">
                            </div>
                        </div>
                        <div class="agent_unit_social_single">
                            <a href="#" rel="noopener" target="_blank">
                                <i class="fab fa-facebook-f">
                                </i>
                            </a>
                            <a href="#" rel="noopener" target="_blank">
                                <i class="fab fa-twitter">
                                </i>
                            </a>
                            <a href="#" rel="noopener" target="_blank">
                                <i class="fab fa-linkedin">
                                </i>
                            </a>
                            <a href="#" rel="noopener" target="_blank">
                                <i class="fab fa-pinterest">
                                </i>
                            </a>
                            <a href="#" rel="noopener" target="_blank">
                                <i class="fab fa-instagram">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 agent_details">
                        <h3>
                            <a href="https://wpresidence.net/agents/john-collins/">
                                John Collins
                            </a>
                        </h3>
                        <div class="agent_position">
                            Company Agent
                        </div>
                        <div class="agent_detail agent_phone_class">
                            <i class="fas fa-phone">
                            </i>
                            <a href="tel: 1-800-555-6789">
                                1-800-555-6789
                            </a>
                        </div>
                        <div class="agent_detail agent_mobile_class">
                            <i class="fas fa-mobile">
                            </i>
                            <a href="tel: 1-800-555-0000">
                                1-800-555-0000
                            </a>
                        </div>
                        <div class="agent_detail agent_email_class">
                            <i class="far fa-envelope">
                            </i>
                            <a href="mailto:John_demo@email.com">
                                John_demo@email.com
                            </a>
                        </div>
                        <div class="agent_detail agent_skype_class">
                            <i class="fab fa-skype">
                            </i>
                            johnc_demo
                        </div>
                        <div class="agent_detail agent_web_class">
                            <i class="fas fa-desktop">
                            </i>
                            <a href="http://paris.wpresidence.net/" target="_blank">
                                paris.wpresidence.net/
                            </a>
                        </div>
                        <div class="agent_detail agent_web_class">
                            <strong>
                                Member of:
                            </strong>
                            Keller Williams
                        </div>
                    </div>
                    <div class="row custom_details_container">
                    </div>
                </div>
                <div class="agent_contanct_form ">
                    <h4 id="show_contact">
                        Contact Me
                    </h4>
                    <div class="schedule_meeting">
                        Schedule a showing?
                    </div>
                    <div class="alert-box error">
                        <div class="alert-message wpestate-agent-contact-sent" id="alert-agent-contact"> The message was sent!</div>
                    </div>
                    <div class="schedule_wrapper" style="display: none;">
                        <input aria-required="true" class="schedule_day form-control hasDatepicker" id="dp1660526907946" name="schedule_day" placeholder="Day" type="text">
                            <select class="form-control" id="schedule_hour" name="schedule_hour">
                                <option value="0">
                                    Time
                                </option>
                                <option value="7:00">
                                    7:00
                                </option>
                                <option value="7:15">
                                    7:15
                                </option>
                                <option value="7:30">
                                    7:30
                                </option>
                                <option value="7:45">
                                    7:45
                                </option>
                                <option value="8:00">
                                    8:00
                                </option>
                                <option value="8:15">
                                    8:15
                                </option>
                                <option value="8:30">
                                    8:30
                                </option>
                                <option value="8:45">
                                    8:45
                                </option>
                                <option value="9:00">
                                    9:00
                                </option>
                                <option value="9:15">
                                    9:15
                                </option>
                                <option value="9:30">
                                    9:30
                                </option>
                                <option value="9:45">
                                    9:45
                                </option>
                                <option value="10:00">
                                    10:00
                                </option>
                                <option value="10:15">
                                    10:15
                                </option>
                                <option value="10:30">
                                    10:30
                                </option>
                                <option value="10:45">
                                    10:45
                                </option>
                                <option value="11:00">
                                    11:00
                                </option>
                                <option value="11:15">
                                    11:15
                                </option>
                                <option value="11:30">
                                    11:30
                                </option>
                                <option value="11:45">
                                    11:45
                                </option>
                                <option value="12:00">
                                    12:00
                                </option>
                                <option value="12:15">
                                    12:15
                                </option>
                                <option value="12:30">
                                    12:30
                                </option>
                                <option value="12:45">
                                    12:45
                                </option>
                                <option value="13:00">
                                    13:00
                                </option>
                                <option value="13:15">
                                    13:15
                                </option>
                                <option value="13:30">
                                    13:30
                                </option>
                                <option value="13:45">
                                    13:45
                                </option>
                                <option value="14:00">
                                    14:00
                                </option>
                                <option value="14:15">
                                    14:15
                                </option>
                                <option value="14:30">
                                    14:30
                                </option>
                                <option value="14:45">
                                    14:45
                                </option>
                                <option value="15:00">
                                    15:00
                                </option>
                                <option value="15:15">
                                    15:15
                                </option>
                                <option value="15:30">
                                    15:30
                                </option>
                                <option value="15:45">
                                    15:45
                                </option>
                                <option value="16:00">
                                    16:00
                                </option>
                                <option value="16:15">
                                    16:15
                                </option>
                                <option value="16:30">
                                    16:30
                                </option>
                                <option value="16:45">
                                    16:45
                                </option>
                                <option value="17:00">
                                    17:00
                                </option>
                                <option value="17:15">
                                    17:15
                                </option>
                                <option value="17:30">
                                    17:30
                                </option>
                                <option value="17:45">
                                    17:45
                                </option>
                                <option value="18:00">
                                    18:00
                                </option>
                                <option value="18:15">
                                    18:15
                                </option>
                                <option value="18:30">
                                    18:30
                                </option>
                                <option value="18:45">
                                    18:45
                                </option>
                                <option value="19:00">
                                    19:00
                                </option>
                                <option value="19:15">
                                    19:15
                                </option>
                                <option value="19:30">
                                    19:30
                                </option>
                                <option value="19:45">
                                    19:45
                                </option>
                            </select>
                        </input>
                    </div>
                    <div class="contact_form_flex_wrapper">
                        <input aria-required="true" class="form-control" id="agent_contact_name" name="contact_name" placeholder="Your Name" type="text">
                            <input aria-required="true" class="form-control" id="agent_user_email" name="email" placeholder="Your Email" type="text">
                                <input class="form-control" id="agent_phone" name="phone" placeholder="Your Phone" type="text">
                                </input>
                            </input>
                        </input>
                    </div>
                    <textarea aria-required="true" class="form-control" cols="45" id="agent_comment" name="comment" rows="8">
                        I'm interested in [ Luxury House in Greenville ]
                    </textarea>
                    <input class="wpresidence_button agent_submit_class " id="agent_submit" type="submit" value="Send Email"></input>
                    <a class="wpresidence_button wpresidence_button_inverse realtor_call" href="tel: 1-800-555-0000 ">
                        <i class="fas fa-phone">
                        </i>
                        Call
                        <span class="agent_call_no">
                            1-800-555-0000
                        </span>
                    </a>
                    <a class="wpresidence_button wpresidence_button_inverse realtor_whatsapp" href="https://api.whatsapp.com/send?phone=%201-800-555-0000&text=Hello%20I'm%20interested%20in%20%5BLuxury%20House%20in%20Greenville%5D%20https://wpresidence.net/properties/luxury-house-in-greenville/">
                        <i class="fab fa-whatsapp">
                        </i>
                        WhatsApp
                    </a>
                    <input id="agent_property_id" name="prop_id" type="hidden" value="22972">
                        
                    </input>
                    <input id="agent_id" name="prop_id" type="hidden" value="22914"></input>
                     <input id="agent_property_ajax_nonce" name="contact_ajax_nonce" type="hidden" value="7a95f4182b">
                    </input>
                </div>

                <div class="mylistings" id="property_similar_listings">
                    <h3 class="agent_listings_title_similar">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Danh sách tương tự
                            </font>
                        </font>
                    </h3>
                    <div class="col-md-6 listing_wrapper " data-listid="31744" data-main-modal="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior21-2-835x467.jpg" data-modal-link="https://wpresidence.net/properties/custom-property-template-v4/" data-modal-title="Apartment on Washington Ave" data-org="6">
                        <div class="property_listing property_card_default " data-link="https://wpresidence.net/properties/custom-property-template-v4/">
                            <div class="listing-unit-img-wrapper">
                                <div class="prop_new_details">
                                    <div class="prop_new_details_back">
                                    </div>
                                    <div class="property_media">
                                        <i class="fas fa-video">
                                        </i>
                                        <i class="fas fa-camera">
                                        </i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                số 8
                                            </font>
                                        </font>
                                    </div>
                                    <div class="property_location_image">
                                        <span class="property_marker"><i class="fas fa-map-marker-alt"></i>
                                        </span>
                                        <a href="https://wpresidence.net/area/greenville/" rel="tag">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Greenville
                                                </font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                ,
                                            </font>
                                        </font>
                                        <a href="https://wpresidence.net/city/jersey-city/" rel="tag">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Thành phố Jersey
                                                </font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="featured_gradient">
                                    </div>
                                </div>
                                <a href="https://wpresidence.net/properties/custom-property-template-v4/" target="_self">
                                    <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior21-2-525x328.jpg" height="328" loading="lazy" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior21-2-525x328.jpg" width="525"/>
                                </a>
                                <div class="tag-wrapper">
                                    <div class="status-wrapper">
                                        <div class="action_tag_wrapper Sales ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Việc bán hàng
                                                </font>
                                            </font>
                                        </div>
                                        <div class="ribbon-inside Active">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Tích cực
                                                </font>
                                            </font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-unit-information-wrapper">
                                <h4>
                                    <a href="https://wpresidence.net/properties/custom-property-template-v4/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Căn hộ trên Washington Ave
                                            </font>
                                        </font>
                                    </a>
                                </h4>
                                <div class="listing_unit_price_wrapper">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            $ 950,000
                                        </font>
                                    </font>
                                    <span class="price_label">
                                    </span>
                                </div>
                                <div class="listing_details the_grid_view">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Nơi nghỉ này chủ yếu là cây cối và nằm cao trên đỉnh đồi nhìn ra sông Mohawk River Val
                                        </font>
                                    </font>
                                    <a class="unit_more_x" href="https://wpresidence.net/properties/custom-property-template-v4/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                ...
                                            </font>
                                        </font>
                                    </a>
                                </div>
                              
                                <div class="property_listing_details">
                                    <span class="inforoom">
                                        <svg fill="none" viewbox="0 0 19 15" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                4
                                            </font>
                                        </font>
                                    </span>
                                    <span class="infobath">
                                        <svg fill="none" height="16" viewbox="0 0 17 16" width="17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2
                                            </font>
                                        </font>
                                    </span>
                                    <span class="infosize">
                                        <svg fill="none" height="15" viewbox="0 0 15 15" width="15" xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                560 ft
                                            </font>
                                        </font>
                                        <sup>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    2
                                                </font>
                                            </font>
                                        </sup>
                                    </span>
                                    <a class="unit_details_x" href="https://wpresidence.net/properties/custom-property-template-v4/" target="_self">
                                     
                                    </a>
                                </div>
                                <div class="property_location">
                                    <div class="property_agent_wrapper">
                                        <div class="property_agent_image" style="background-image:url('https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/person3-120x120.jpg')">
                                        </div>
                                        <div class="property_agent_image_sign">
                                            <i class="far fa-user-circle">
                                            </i>
                                        </div>
                                        <a href="https://wpresidence.net/agents/lily-bicharm/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Lily Bicharm
                                                </font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="listing_actions">
                                        <div class="share_unit" style="display: none;">
                                            <a class="social_facebook" href="https://www.facebook.com/sharer.php?u=https://wpresidence.net/properties/custom-property-template-v4/&t=Apartment+on+Washington+Ave" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_tweet" href="https://twitter.com/intent/tweet?text=Apartment+on+Washington+Ave+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fcustom-property-template-v4%2F" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_pinterest" href="https://pinterest.com/pin/create/button/?url=https://wpresidence.net/properties/custom-property-template-v4/&media=https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior21-2-1920x790.jpg&description=Apartment+on+Washington+Ave" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_whatsup" href="https://api.whatsapp.com/send?text=Apartment+on+Washington+Ave+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fcustom-property-template-v4%2F" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_email" data-action="share email" href="mailto:email@email.com?subject=Apartment+on+Washington+Ave&body=https%3A%2F%2Fwpresidence.net%2Fproperties%2Fcustom-property-template-v4%2F">
                                            </a>
                                        </div>
                                        <span class="share_list" data-original-title="share"><i class="fal fa-share-alt"></i>
                                        </span>
                                        <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="31744"><i class="fal fa-heart"></i>
                                        </span>
                                        <span class="compare-action" data-original-title="compare" ><i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 listing_wrapper " data-listid="31745" data-main-modal="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior39-800x467.jpg" data-modal-link="https://wpresidence.net/properties/custom-property-template-v3/" data-modal-title="Apartment with Central Park View" data-org="6">
                        <div class="property_listing property_card_default " data-link="https://wpresidence.net/properties/custom-property-template-v3/">
                            <div class="listing-unit-img-wrapper">
                                <div class="prop_new_details">
                                    <div class="prop_new_details_back">
                                    </div>
                                    <div class="property_media">
                                        <i class="fas fa-video">
                                        </i>
                                        <i class="fas fa-camera">
                                        </i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                6
                                            </font>
                                        </font>
                                    </div>
                                    <div class="property_location_image">
                                        <span class="property_marker"><i class="fas fa-map-marker-alt"></i>
                                        </span>
                                        <a href="https://wpresidence.net/area/greenville/" rel="tag">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Greenville
                                                </font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                ,
                                            </font>
                                        </font>
                                        <a href="https://wpresidence.net/city/jersey-city/" rel="tag">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Thành phố Jersey
                                                </font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="featured_gradient">
                                    </div>
                                </div>
                                <a href="https://wpresidence.net/properties/custom-property-template-v3/" target="_self">
                                    <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior39-525x328.jpg" height="328" loading="lazy" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior39-525x328.jpg" width="525"/>
                                </a>
                                <div class="tag-wrapper">
                                    <div class="status-wrapper">
                                        <div class="action_tag_wrapper Sales ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Việc bán hàng
                                                </font>
                                            </font>
                                        </div>
                                        <div class="ribbon-inside Active">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Tích cực
                                                </font>
                                            </font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-unit-information-wrapper">
                                <h4>
                                    <a href="https://wpresidence.net/properties/custom-property-template-v3/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Căn hộ Nhìn ra Công viên Trung tâm
                                            </font>
                                        </font>
                                    </a>
                                </h4>
                                <div class="listing_unit_price_wrapper">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            $ 950,000
                                        </font>
                                    </font>
                                    <span class="price_label">
                                    </span>
                                </div>
                                <div class="listing_details the_grid_view">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Nơi nghỉ này chủ yếu là cây cối và nằm cao trên đỉnh đồi nhìn ra sông Mohawk River Val
                                        </font>
                                    </font>
                                    <a class="unit_more_x" href="https://wpresidence.net/properties/custom-property-template-v3/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                ...
                                            </font>
                                        </font>
                                    </a>
                                </div>

                                <div class="property_listing_details">
                                    <span class="inforoom">
                                        <svg fill="none" viewbox="0 0 19 15" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                4
                                            </font>
                                        </font>
                                    </span>
                                    <span class="infobath">
                                        <svg fill="none" height="16" viewbox="0 0 17 16" width="17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2
                                            </font>
                                        </font>
                                    </span>
                                    <span class="infosize">
                                        <svg fill="none" height="15" viewbox="0 0 15 15" width="15" xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                560 ft
                                            </font>
                                        </font>
                                        <sup>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    2
                                                </font>
                                            </font>
                                        </sup>
                                    </span>
                                    <a class="unit_details_x" href="https://wpresidence.net/properties/custom-property-template-v3/" target="_self">
                                       
                                    </a>
                                </div>
                                <div class="property_location">
                                    <div class="property_agent_wrapper">
                                        <div class="property_agent_image" style="background-image:url('https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/person3-120x120.jpg')">
                                        </div>
                                        <div class="property_agent_image_sign">
                                            <i class="far fa-user-circle">
                                            </i>
                                        </div>
                                        <a href="https://wpresidence.net/agents/lily-bicharm/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Lily Bicharm
                                                </font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="listing_actions">
                                        <div class="share_unit" style="display: none;">
                                            <a class="social_facebook" href="https://www.facebook.com/sharer.php?u=https://wpresidence.net/properties/custom-property-template-v3/&t=Apartment+with+Central+Park+View" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_tweet" href="https://twitter.com/intent/tweet?text=Apartment+with+Central+Park+View+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fcustom-property-template-v3%2F" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_pinterest" href="https://pinterest.com/pin/create/button/?url=https://wpresidence.net/properties/custom-property-template-v3/&media=https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior39.jpg&description=Apartment+with+Central+Park+View" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_whatsup" href="https://api.whatsapp.com/send?text=Apartment+with+Central+Park+View+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fcustom-property-template-v3%2F" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_email" data-action="share email" href="mailto:email@email.com?subject=Apartment+with+Central+Park+View&body=https%3A%2F%2Fwpresidence.net%2Fproperties%2Fcustom-property-template-v3%2F">
                                            </a>
                                        </div>
                                        <span class="share_list" data-original-title="share"><i class="fal fa-share-alt"></i>
                                        </span>
                                        <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="31745"><i class="fal fa-heart"></i>
                                        </span>
                                        <span class="compare-action" data-original-title="compare"> <i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 listing_wrapper " data-listid="31746" data-main-modal="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior23-800x467.jpg" data-modal-link="https://wpresidence.net/properties/custom-property-template-v2/" data-modal-title="Beautiful Condo in Central New York" data-org="6">
                        <div class="property_listing property_card_default " data-link="https://wpresidence.net/properties/custom-property-template-v2/">
                            <div class="listing-unit-img-wrapper">
                                <div class="prop_new_details">
                                    <div class="prop_new_details_back">
                                    </div>
                                    <div class="property_media">
                                        <i class="fas fa-video">
                                        </i>
                                        <i class="fas fa-camera">
                                        </i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                5
                                            </font>
                                        </font>
                                    </div>
                                    <div class="property_location_image">
                                        <span class="property_marker"><i class="fas fa-map-marker-alt"></i>
                                        </span>
                                        <a href="https://wpresidence.net/area/greenville/" rel="tag">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Greenville
                                                </font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                ,
                                            </font>
                                        </font>
                                        <a href="https://wpresidence.net/city/jersey-city/" rel="tag">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Thành phố Jersey
                                                </font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="featured_gradient">
                                    </div>
                                </div>
                                <a href="https://wpresidence.net/properties/custom-property-template-v2/" target="_self">
                                    <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior23-525x328.jpg" height="328" loading="lazy" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior23-525x328.jpg" width="525"/>
                                </a>
                                <div class="tag-wrapper">
                                    <div class="status-wrapper">
                                        <div class="action_tag_wrapper Sales ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Việc bán hàng
                                                </font>
                                            </font>
                                        </div>
                                        <div class="ribbon-inside Active">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Tích cực
                                                </font>
                                            </font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-unit-information-wrapper">
                                <h4>
                                    <a href="https://wpresidence.net/properties/custom-property-template-v2/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Căn hộ đẹp ở Trung tâm New York
                                            </font>
                                        </font>
                                    </a>
                                </h4>
                                <div class="listing_unit_price_wrapper">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            $ 950,000
                                        </font>
                                    </font>
                                    <span class="price_label">
                                    </span>
                                </div>
                                <div class="listing_details the_grid_view">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Nơi nghỉ này chủ yếu là cây cối và nằm cao trên đỉnh đồi nhìn ra sông Mohawk River Val
                                        </font>
                                    </font>
                                    <a class="unit_more_x" href="https://wpresidence.net/properties/custom-property-template-v2/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                ...
                                            </font>
                                        </font>
                                    </a>
                                </div>
                              
                                <div class="property_listing_details">
                                    <span class="inforoom">
                                        <svg fill="none" viewbox="0 0 19 15" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                4
                                            </font>
                                        </font>
                                    </span>
                                    <span class="infobath">
                                        <svg fill="none" height="16" viewbox="0 0 17 16" width="17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2
                                            </font>
                                        </font>
                                    </span>
                                    <span class="infosize">
                                        <svg fill="none" height="15" viewbox="0 0 15 15" width="15" xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                560 ft
                                            </font>
                                        </font>
                                        <sup>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    2
                                                </font>
                                            </font>
                                        </sup>
                                    </span>
                                    <a class="unit_details_x" href="https://wpresidence.net/properties/custom-property-template-v2/" target="_self">
                                       
                                    </a>
                                </div>
                                <div class="property_location">
                                    <div class="property_agent_wrapper">
                                        <div class="property_agent_image" style="background-image:url('https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/person3-120x120.jpg')">
                                        </div>
                                        <div class="property_agent_image_sign">
                                            <i class="far fa-user-circle">
                                            </i>
                                        </div>
                                        <a href="https://wpresidence.net/agents/lily-bicharm/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Lily Bicharm
                                                </font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="listing_actions">
                                        <div class="share_unit" style="display: none;">
                                            <a class="social_facebook" href="https://www.facebook.com/sharer.php?u=https://wpresidence.net/properties/custom-property-template-v2/&t=Beautiful+Condo+in+Central+New+York" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_tweet" href="https://twitter.com/intent/tweet?text=Beautiful+Condo+in+Central+New+York+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fcustom-property-template-v2%2F" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_pinterest" href="https://pinterest.com/pin/create/button/?url=https://wpresidence.net/properties/custom-property-template-v2/&media=https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2021/07/interior23.jpg&description=Beautiful+Condo+in+Central+New+York" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_whatsup" href="https://api.whatsapp.com/send?text=Beautiful+Condo+in+Central+New+York+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fcustom-property-template-v2%2F" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_email" data-action="share email" href="mailto:email@email.com?subject=Beautiful+Condo+in+Central+New+York&body=https%3A%2F%2Fwpresidence.net%2Fproperties%2Fcustom-property-template-v2%2F">
                                            </a>
                                        </div>
                                        <span class="share_list" data-original-title="share"><i class="fal fa-share-alt"></i>
                                        </span>
                                        <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="31746"><i class="fal fa-heart"></i>
                                        </span>
                                        <span class="compare-action" data-original-title="compare" ><i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 listing_wrapper " data-listid="23010" data-main-modal="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/book_wide3-835x467.jpg" data-modal-link="https://wpresidence.net/properties/beautiful-flat-in-manhattan/" data-modal-title="Beautiful Flat in Manhattan" data-org="6">
                        <div class="property_listing property_card_default " data-link="https://wpresidence.net/properties/beautiful-flat-in-manhattan/">
                            <div class="listing-unit-img-wrapper">
                                <div class="prop_new_details">
                                    <div class="prop_new_details_back">
                                    </div>
                                    <div class="property_media">
                                        <i class="fas fa-video">
                                        </i>
                                        <i class="fas fa-camera">
                                        </i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                5
                                            </font>
                                        </font>
                                    </div>
                                    <div class="property_location_image">
                                        <span class="property_marker"><i class="fas fa-map-marker-alt"></i>
                                        </span>
                                        <a href="https://wpresidence.net/area/manhattan/" rel="tag">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Manhattan
                                                </font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                ,
                                            </font>
                                        </font>
                                        <a href="https://wpresidence.net/city/new-york/" rel="tag">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    New York
                                                </font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="featured_gradient">
                                    </div>
                                </div>
                                <a href="https://wpresidence.net/properties/beautiful-flat-in-manhattan/" target="_self">
                                    <img alt="" class="lazyload img-responsive wp-post-image" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/book_wide3-525x328.jpg" height="328" loading="lazy" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/book_wide3-525x328.jpg" width="525"/>
                                </a>
                                <div class="tag-wrapper">
                                    <div class="status-wrapper">
                                        <div class="action_tag_wrapper Sales ">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Việc bán hàng
                                                </font>
                                            </font>
                                        </div>
                                        <div class="ribbon-inside sold">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    đã bán
                                                </font>
                                            </font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-unit-information-wrapper">
                                <h4>
                                    <a href="https://wpresidence.net/properties/beautiful-flat-in-manhattan/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Căn hộ tuyệt đẹp ở Manhattan
                                            </font>
                                        </font>
                                    </a>
                                </h4>
                                <div class="listing_unit_price_wrapper">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            600.000 đô la
                                        </font>
                                    </font>
                                    <span class="price_label">
                                    </span>
                                </div>
                                <div class="listing_details the_grid_view">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            1 Ngôi nhà Gia đình Lớn Đẹp đẽ ở Trung tâm Westbury.
                                        </font>
                                        <font style="vertical-align: inherit;">
                                            Cải Tạo Mới Với Sàn Gỗ Mới,
                                        </font>
                                    </font>
                                    <a class="unit_more_x" href="https://wpresidence.net/properties/beautiful-flat-in-manhattan/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                ...
                                            </font>
                                        </font>
                                    </a>
                                </div>
                               
                                <div class="property_listing_details">
                                    <span class="inforoom">
                                        <svg fill="none" viewbox="0 0 19 15" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                3
                                            </font>
                                        </font>
                                    </span>
                                    <span class="infobath">
                                        <svg fill="none" height="16" viewbox="0 0 17 16" width="17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                3
                                            </font>
                                        </font>
                                    </span>
                                    <span class="infosize">
                                        <svg fill="none" height="15" viewbox="0 0 15 15" width="15" xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" fill-rule="evenodd">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                230 ft
                                            </font>
                                        </font>
                                        <sup>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    2
                                                </font>
                                            </font>
                                        </sup>
                                    </span>
                                    <a class="unit_details_x" href="https://wpresidence.net/properties/beautiful-flat-in-manhattan/" target="_self">
                                    </a>
                                </div>
                                <div class="property_location">
                                    <div class="property_agent_wrapper">
                                        <div class="property_agent_image" style="background-image:url('https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/logo-agency3-120x120.png')">
                                        </div>
                                        <div class="property_agent_image_sign">
                                            <i class="far fa-user-circle">
                                            </i>
                                        </div>
                                        <a href="https://wpresidence.net/estate_agency/agency1_demo/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Lux Estate
                                                </font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="listing_actions">
                                        <div class="share_unit" style="display: none;">
                                            <a class="social_facebook" href="https://www.facebook.com/sharer.php?u=https://wpresidence.net/properties/beautiful-flat-in-manhattan/&t=Beautiful+Flat+in+Manhattan" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_tweet" href="https://twitter.com/intent/tweet?text=Beautiful+Flat+in+Manhattan+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fbeautiful-flat-in-manhattan%2F" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_pinterest" href="https://pinterest.com/pin/create/button/?url=https://wpresidence.net/properties/beautiful-flat-in-manhattan/&media=https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/book_wide3-1920x790.jpg&description=Beautiful+Flat+in+Manhattan" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_whatsup" href="https://api.whatsapp.com/send?text=Beautiful+Flat+in+Manhattan+https%3A%2F%2Fwpresidence.net%2Fproperties%2Fbeautiful-flat-in-manhattan%2F" rel="noreferrer" target="_blank">
                                            </a>
                                            <a class="social_email" data-action="share email" href="mailto:email@email.com?subject=Beautiful+Flat+in+Manhattan&body=https%3A%2F%2Fwpresidence.net%2Fproperties%2Fbeautiful-flat-in-manhattan%2F">
                                            </a>
                                        </div>
                                        <span class="share_list" data-original-title="share"><i class="fal fa-share-alt"></i>
                                        </span>
                                        <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="23010"><i class="fal fa-heart"></i></span>
                                        <span class="compare-action" data-original-title="compare" ><i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class=" col-xs-12 col-md-3 widget-area-sidebar" id="primary">
            <div id="primary_sidebar_wrapper">
                <ul class="xoxo">
                    <li class="widget-container measurement_unit_widget" id="measurement_unit_widget-6">
                        <h3 class="widget-title-sidebar">
                            Change Measurement
                        </h3>
                        <div class="dropdown form-control">
                            <div class="sidebar_filter_menu" data-bs-toggle="dropdown" id="sidebar_measure_unit_list">
                                square feet - ft
                                <sup>
                                    2
                                </sup>
                                <span class="caret caret_sidebar">
                                </span>
                            </div>
                            <input name="sidebar_measure_unit_list[]" type="hidden" value="">
                                <ul aria-labelledby="sidebar_measure_unit_list" class="dropdown-menu filter_menu" id="" role="menu">
                                    <li class="dropdown-item" data-value="ft" role="presentation">
                                        square feet - ft
                                        <sup>
                                            2
                                        </sup>
                                    </li>
                                    <li class="dropdown-item" data-value="m" role="presentation">
                                        square meters - m
                                        <sup>
                                            2
                                        </sup>
                                    </li>
                                </ul>
                        </div>
                        <input id="wpestate_change_measure" type="hidden" value="c8b5fefd4e">
                        </input>
                    </li>
                    <li class="widget-container advanced_search_sidebar boxed_widget" id="advanced_search_widget-14">
                        <h3 class="widget-title-sidebar">
                            Advanced Search
                        </h3>
                        <form action="https://wpresidence.net/advanced-search/" method="get" role="search">
                            <input id="wpestate_regular_search_nonce" name="wpestate_regular_search_nonce" type="hidden" value="df09151047">
                                <input name="_wp_http_referer" type="hidden" value="/properties/luxury-house-in-greenville/">
                                    <div class="adv_search_tab wpestate_search_tab_align_center" id="tab_prpg_adv6" role="tabpanel">
                                        <div class="nav nav-tabs" role="tablist">
                                            <div class="adv_search_tab_item active rentals" data-tax="property_action_category" data-term="rentals" data-termid="2">
                                                <a aria-controls="rentalssidebar" class="adv6_tab_head" data-toggle="tab" href="#rentalssidebar" role="tab">
                                                    Rentals
                                                </a>
                                            </div>
                                            <div class="adv_search_tab_item sales" data-tax="property_action_category" data-term="sales" data-termid="3">
                                                <a aria-controls="salessidebar" class="adv6_tab_head" data-toggle="tab" href="#salessidebar" role="tab">
                                                    Sales
                                                </a>
                                            </div>
                                            <div class="adv_search_tab_item invest" data-tax="property_action_category" data-term="invest" data-termid="2697">
                                                <a aria-controls="investsidebar" class="adv6_tab_head" data-toggle="tab" href="#investsidebar" role="tab">
                                                    Invest
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="rentalssidebar" role="tabpanel">
                                                <input name="filter_search_action[]" type="hidden" value="rentals">
                                                    <input name="adv6_search_tab" type="hidden" value="rentals">
                                                        <input class="term_id_class" name="term_id" type="hidden" value="2">
                                                            <input class="term_counter" name="term_counter" type="hidden" value="0">
                                                                <div class="col-md-3 categories">
                                                                    <div class="dropdown form-control">
                                                                        <div aria-expanded="false" cacaall="" categories="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-adv_categ" xxmaca="">
                                                                            Categories
                                                                            <span class="caret caret_sidebar ">
                                                                            </span>
                                                                        </div>
                                                                        <input name="filter_search_type[]" type="hidden" value="">
                                                                            <ul aria-labelledby="sidebar-adv_categ" class="dropdown-menu filter_menu" id="sidebar-categlist" role="menu">
                                                                                <li data-value="all" role="presentation">
                                                                                    Categories
                                                                                </li>
                                                                                <li data-value="apartments" role="presentation">
                                                                                    Apartments
                                                                                </li>
                                                                                <li data-value="condos" role="presentation">
                                                                                    Condos
                                                                                </li>
                                                                                <li data-value="houses" role="presentation">
                                                                                    Houses
                                                                                </li>
                                                                                <li data-value="industrial" role="presentation">
                                                                                    Industrial
                                                                                </li>
                                                                                <li data-value="land" role="presentation">
                                                                                    Land
                                                                                </li>
                                                                                <li data-value="offices" role="presentation">
                                                                                    Offices
                                                                                </li>
                                                                                <li data-value="retail" role="presentation">
                                                                                    Retail
                                                                                </li>
                                                                                <li data-value="villas" role="presentation">
                                                                                    Villas
                                                                                </li>
                                                                            </ul>
                                                                        </input>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 cities">
                                                                    <div class="dropdown form-control">
                                                                        <div aria-expanded="false" cacaall="" cities="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-advanced_city" xxmaca="">
                                                                            Cities
                                                                            <span class="caret caret_sidebar ">
                                                                            </span>
                                                                        </div>
                                                                        <input name="advanced_city" type="hidden" value="">
                                                                            <ul aria-labelledby="sidebar-advanced_city" class="dropdown-menu filter_menu" id="sidebar-adv-search-city" role="menu">
                                                                                <li data-value="all" data-value2="all" role="presentation">
                                                                                    Cities
                                                                                </li>
                                                                                <li data-parentcounty="new-jersey-state" data-value="jersey-city" data-value2="jersey-city" role="presentation">
                                                                                    Jersey City
                                                                                </li>
                                                                                <li data-parentcounty="new-york-state" data-value="new-york" data-value2="new-york" role="presentation">
                                                                                    New York
                                                                                </li>
                                                                            </ul>
                                                                        </input>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 areas">
                                                                    <div class="dropdown form-control">
                                                                        <div areas="" aria-expanded="false" cacaall="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-advanced_area" xxmaca="">
                                                                            Areas
                                                                            <span class="caret caret_sidebar ">
                                                                            </span>
                                                                        </div>
                                                                        <input name="advanced_area" type="hidden" value="">
                                                                            <ul aria-labelledby="sidebar-advanced_area" class="dropdown-menu filter_menu" id="sidebar-adv-search-area" role="menu">
                                                                                <li data-value="all" role="presentation">
                                                                                    Areas
                                                                                </li>
                                                                                <li data-parentcity="jersey-city" data-value="bayonne" role="presentation">
                                                                                    Bayonne
                                                                                </li>
                                                                                <li data-parentcity="jersey-city" data-value="greenville" role="presentation">
                                                                                    Greenville
                                                                                </li>
                                                                                <li data-parentcity="new-york" data-value="manhattan" role="presentation">
                                                                                    Manhattan
                                                                                </li>
                                                                                <li data-parentcity="new-york" data-value="queens" role="presentation">
                                                                                    Queens
                                                                                </li>
                                                                                <li data-parentcity="jersey-city" data-value="the-heights" role="presentation">
                                                                                    The Heights
                                                                                </li>
                                                                                <li data-parentcity="new-york" data-value="upper-east-side" role="presentation">
                                                                                    Upper East Side
                                                                                </li>
                                                                                <li data-parentcity="new-york" data-value="west-side" role="presentation">
                                                                                    West Side
                                                                                </li>
                                                                            </ul>
                                                                        </input>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 property_bedrooms">
                                                                    <div class="dropdown form-control">
                                                                        <div aria-expanded="false" bedrooms="" cacaall="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-bedrooms" maca="" xx="">
                                                                            Bedrooms
                                                                            <span class="caret caret_sidebar ">
                                                                            </span>
                                                                        </div>
                                                                        <input doithere="" name="bedrooms" type="hidden" value="">
                                                                            <ul aria-labelledby="sidebar-bedrooms" class="dropdown-menu filter_menu" id="sidebar-search-bedrooms" role="menu">
                                                                                <li data-value="all" role="presentation">
                                                                                    Bedrooms
                                                                                </li>
                                                                                <li data-value="1" value="1">
                                                                                    1
                                                                                </li>
                                                                                <li data-value="2" value="2">
                                                                                    2
                                                                                </li>
                                                                                <li data-value="3" value="3">
                                                                                    3
                                                                                </li>
                                                                                <li data-value="4" value="4">
                                                                                    4
                                                                                </li>
                                                                                <li data-value="5" value="5">
                                                                                    5
                                                                                </li>
                                                                                <li data-value="6" value="6">
                                                                                    6
                                                                                </li>
                                                                                <li data-value="7" value="7">
                                                                                    7
                                                                                </li>
                                                                                <li data-value="8" value="8">
                                                                                    8
                                                                                </li>
                                                                                <li data-value="9" value="9">
                                                                                    9
                                                                                </li>
                                                                                <li data-value="10" value="10">
                                                                                    10
                                                                                </li>
                                                                            </ul>
                                                                        </input>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 property_size">
                                                                    <input class="advanced_select form-control" id="sidebar-min-size-in-sqft" name="min-size-in-sqft" placeholder="Min size (in sqft)" type="text" value=""/>
                                                                </div>
                                                                <div class="col-md-6 property_price">
                                                                    <div class="adv_search_slider">
                                                                        <p>
                                                                            <label for="amount">
                                                                                Price range:
                                                                            </label>
                                                                            <span class="wpresidence_slider_price" id="amount_2_sidebar">
                                                                                $ 0 to $ 1,000
                                                                            </span>
                                                                        </p>
                                                                        <div class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" id="slider_price_2_sidebar">
                                                                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;">
                                                                            </div>
                                                                            <span class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;" tabindex="0">
                                                                            </span>
                                                                            <span class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;" tabindex="0">
                                                                            </span>
                                                                        </div>
                                                                        <input class="adv6_price_low price_active" id="price_low_2" name="price_low_2" type="hidden" value="0">
                                                                            <input class="adv6_price_max price_active" id="price_max_2" name="price_max_2" type="hidden" value="1000">
                                                                            </input>
                                                                        </input>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 submit_container_half ">
                                                                    <input class="wpresidence_button advanced_submit_4" name="submit" type="submit" value="Search Properties"/>
                                                                </div>
                                                                <div class="adv_extended_options_text" id="adv_extended_options_text_sidebar">
                                                                    More Search Options
                                                                </div>
                                                                <div class="extended_search_check_wrapper">
                                                                    <span class="adv_extended_close_button" id="adv_extended_close_sidebar">
                                                                        <i class="fas fa-times">
                                                                        </i>
                                                                    </span>
                                                                    <div class="extended_search_checker">
                                                                        <input id="back-yardsidebarrentals" name="back-yard" name-title="Back yard" type="checkbox" value="1">
                                                                            <label for="back-yardsidebarrentals">
                                                                                Back yard
                                                                            </label>
                                                                        </input>
                                                                    </div>
                                                                    <div class="extended_search_checker">
                                                                        <input id="central-airsidebarrentals" name="central-air" name-title="Central Air" type="checkbox" value="1">
                                                                            <label for="central-airsidebarrentals">
                                                                                Central Air
                                                                            </label>
                                                                        </input>
                                                                    </div>
                                                                    <div class="extended_search_checker">
                                                                        <input id="chair-accessiblesidebarrentals" name="chair-accessible" name-title="Chair Accessible" type="checkbox" value="1">
                                                                            <label for="chair-accessiblesidebarrentals">
                                                                                Chair Accessible
                                                                            </label>
                                                                        </input>
                                                                    </div>
                                                                    <div class="extended_search_checker">
                                                                        <input id="elevatorsidebarrentals" name="elevator" name-title="Elevator" type="checkbox" value="1">
                                                                            <label for="elevatorsidebarrentals">
                                                                                Elevator
                                                                            </label>
                                                                        </input>
                                                                    </div>
                                                                    <div class="extended_search_checker">
                                                                        <input id="fireplacesidebarrentals" name="fireplace" name-title="Fireplace" type="checkbox" value="1">
                                                                            <label for="fireplacesidebarrentals">
                                                                                Fireplace
                                                                            </label>
                                                                        </input>
                                                                    </div>
                                                                    <div class="extended_search_checker">
                                                                        <input id="front-yardsidebarrentals" name="front-yard" name-title="Front yard" type="checkbox" value="1">
                                                                            <label for="front-yardsidebarrentals">
                                                                                Front yard
                                                                            </label>
                                                                        </input>
                                                                    </div>
                                                                    <div class="extended_search_checker">
                                                                        <input id="garage-attachedsidebarrentals" name="garage-attached" name-title="Garage Attached" type="checkbox" value="1">
                                                                            <label for="garage-attachedsidebarrentals">
                                                                                Garage Attached
                                                                            </label>
                                                                        </input>
                                                                    </div>
                                                                    <div class="extended_search_checker">
                                                                        <input id="laundrysidebarrentals" name="laundry" name-title="Laundry" type="checkbox" value="1">
                                                                            <label for="laundrysidebarrentals">
                                                                                Laundry
                                                                            </label>
                                                                        </input>
                                                                    </div>
                                                                </div>
                                                            </input>
                                                        </input>
                                                    </input>
                                                </input>
                                            </div>
                                            <div class="tab-pane " id="salessidebar" role="tabpanel">
                                                <form action="https://wpresidence.net/advanced-search/" method="get" role="search" serch5="">
                                                    <input name="filter_search_action[]" type="hidden" value="sales">
                                                        <input name="adv6_search_tab" type="hidden" value="sales">
                                                            <input class="term_id_class" name="term_id" type="hidden" value="3">
                                                                <input class="term_counter" name="term_counter" type="hidden" value="1">
                                                                    <div class="col-md-3 county_/_state">
                                                                        <div class="dropdown form-control ">
                                                                            <div cacaall="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-county-state" states="" xxmaca="">
                                                                                States
                                                                                <span class="caret caret_sidebar ">
                                                                                </span>
                                                                            </div>
                                                                            <input name="advanced_contystate" type="hidden" value="">
                                                                                <ul aria-labelledby="sidebar-county-state" class="dropdown-menu filter_menu" id="sidebar-adv-search-countystate" role="menu">
                                                                                    <li data-value="all" data-value2="all" role="presentation">
                                                                                        States
                                                                                    </li>
                                                                                    <li data-value="new-jersey-state" data-value2="new-jersey-state" role="presentation">
                                                                                        New Jersey State
                                                                                    </li>
                                                                                    <li data-value="new-york-state" data-value2="new-york-state" role="presentation">
                                                                                        New York State
                                                                                    </li>
                                                                                </ul>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 property_status">
                                                                        <div class="dropdown form-control ">
                                                                            <div cacaall="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-adv_status" property="" status="" xxmaca="">
                                                                                Property Status
                                                                                <span class="caret caret_sidebar ">
                                                                                </span>
                                                                            </div>
                                                                            <input name="property_status" type="hidden" value="">
                                                                                <ul aria-labelledby="sidebar-adv_status" class="dropdown-menu filter_menu" id="sidebar-statuslist" role="menu">
                                                                                    <li data-value="all" role="presentation">
                                                                                        Property Status
                                                                                    </li>
                                                                                    <li data-value="active" role="presentation">
                                                                                        Active (6)
                                                                                    </li>
                                                                                    <li data-value="hot-offer" role="presentation">
                                                                                        Hot Offer (7)
                                                                                    </li>
                                                                                    <li data-value="new-offer" role="presentation">
                                                                                        New Offer (10)
                                                                                    </li>
                                                                                    <li data-value="open-house" role="presentation">
                                                                                        Open House (6)
                                                                                    </li>
                                                                                    <li data-value="sold" role="presentation">
                                                                                        Sold (1)
                                                                                    </li>
                                                                                </ul>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 property_bedrooms">
                                                                        <div class="dropdown form-control ">
                                                                            <div beds="" cacaall="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-min-beds" maca="" min.="" xx="">
                                                                                Min. Beds
                                                                                <span class="caret caret_sidebar ">
                                                                                </span>
                                                                            </div>
                                                                            <input doithere="" name="min-beds" type="hidden" value="">
                                                                                <ul aria-labelledby="sidebar-min-beds" class="dropdown-menu filter_menu" id="sidebar-search-min-beds" role="menu">
                                                                                    <li data-value="all" role="presentation">
                                                                                        Min. Beds
                                                                                    </li>
                                                                                    <li data-value="1" value="1">
                                                                                        1
                                                                                    </li>
                                                                                    <li data-value="2" value="2">
                                                                                        2
                                                                                    </li>
                                                                                    <li data-value="3" value="3">
                                                                                        3
                                                                                    </li>
                                                                                    <li data-value="4" value="4">
                                                                                        4
                                                                                    </li>
                                                                                    <li data-value="5" value="5">
                                                                                        5
                                                                                    </li>
                                                                                    <li data-value="6" value="6">
                                                                                        6
                                                                                    </li>
                                                                                    <li data-value="7" value="7">
                                                                                        7
                                                                                    </li>
                                                                                    <li data-value="8" value="8">
                                                                                        8
                                                                                    </li>
                                                                                    <li data-value="9" value="9">
                                                                                        9
                                                                                    </li>
                                                                                    <li data-value="10" value="10">
                                                                                        10
                                                                                    </li>
                                                                                </ul>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 property_bathrooms">
                                                                        <div class="dropdown form-control ">
                                                                            <div baths="" cacaall="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-min-baths" maca="" min.="" xx="">
                                                                                Min. Baths
                                                                                <span class="caret caret_sidebar ">
                                                                                </span>
                                                                            </div>
                                                                            <input doithere="" name="min-baths" type="hidden" value="">
                                                                                <ul aria-labelledby="sidebar-min-baths" class="dropdown-menu filter_menu" id="sidebar-search-min-baths" role="menu">
                                                                                    <li data-value="all" role="presentation">
                                                                                        Min. Baths
                                                                                    </li>
                                                                                    <li data-value="1" value="1">
                                                                                        1
                                                                                    </li>
                                                                                    <li data-value="2" value="2">
                                                                                        2
                                                                                    </li>
                                                                                    <li data-value="3" value="3">
                                                                                        3
                                                                                    </li>
                                                                                    <li data-value="4" value="4">
                                                                                        4
                                                                                    </li>
                                                                                    <li data-value="5" value="5">
                                                                                        5
                                                                                    </li>
                                                                                    <li data-value="6" value="6">
                                                                                        6
                                                                                    </li>
                                                                                    <li data-value="7" value="7">
                                                                                        7
                                                                                    </li>
                                                                                    <li data-value="8" value="8">
                                                                                        8
                                                                                    </li>
                                                                                    <li data-value="9" value="9">
                                                                                        9
                                                                                    </li>
                                                                                    <li data-value="10" value="10">
                                                                                        10
                                                                                    </li>
                                                                                </ul>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 property_size">
                                                                        <input class="advanced_select form-control" id="sidebar-max-size" name="max-size" placeholder="Max. Size" type="text" value=""/>
                                                                    </div>
                                                                    <div class="col-md-6 property_price">
                                                                        <div class="adv_search_slider">
                                                                            <p>
                                                                                <label for="amount">
                                                                                    Price range:
                                                                                </label>
                                                                                <span class="wpresidence_slider_price" id="amount_3_sidebar">
                                                                                    $ 0 to $ 1,500,000
                                                                                </span>
                                                                            </p>
                                                                            <div class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" id="slider_price_3_sidebar">
                                                                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;">
                                                                                </div>
                                                                                <span class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;" tabindex="0">
                                                                                </span>
                                                                                <span class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;" tabindex="0">
                                                                                </span>
                                                                            </div>
                                                                            <input class="adv6_price_low price_active" id="price_low_3" name="price_low_3" type="hidden" value="0">
                                                                                <input class="adv6_price_max price_active" id="price_max_3" name="price_max_3" type="hidden" value="1500000">
                                                                                </input>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 submit_container_half ">
                                                                        <input class="wpresidence_button advanced_submit_4" name="submit" type="submit" value="Search Properties"/>
                                                                    </div>
                                                                    <div class="adv_extended_options_text" id="adv_extended_options_text_sidebar">
                                                                        More Search Options
                                                                    </div>
                                                                    <div class="extended_search_check_wrapper">
                                                                        <span class="adv_extended_close_button" id="adv_extended_close_sidebar">
                                                                            <i class="fas fa-times">
                                                                            </i>
                                                                        </span>
                                                                        <div class="extended_search_checker">
                                                                            <input id="back-yardsidebarsales" name="back-yard" name-title="Back yard" type="checkbox" value="1">
                                                                                <label for="back-yardsidebarsales">
                                                                                    Back yard
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="central-airsidebarsales" name="central-air" name-title="Central Air" type="checkbox" value="1">
                                                                                <label for="central-airsidebarsales">
                                                                                    Central Air
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="chair-accessiblesidebarsales" name="chair-accessible" name-title="Chair Accessible" type="checkbox" value="1">
                                                                                <label for="chair-accessiblesidebarsales">
                                                                                    Chair Accessible
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="elevatorsidebarsales" name="elevator" name-title="Elevator" type="checkbox" value="1">
                                                                                <label for="elevatorsidebarsales">
                                                                                    Elevator
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="fireplacesidebarsales" name="fireplace" name-title="Fireplace" type="checkbox" value="1">
                                                                                <label for="fireplacesidebarsales">
                                                                                    Fireplace
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="front-yardsidebarsales" name="front-yard" name-title="Front yard" type="checkbox" value="1">
                                                                                <label for="front-yardsidebarsales">
                                                                                    Front yard
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="garage-attachedsidebarsales" name="garage-attached" name-title="Garage Attached" type="checkbox" value="1">
                                                                                <label for="garage-attachedsidebarsales">
                                                                                    Garage Attached
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="laundrysidebarsales" name="laundry" name-title="Laundry" type="checkbox" value="1">
                                                                                <label for="laundrysidebarsales">
                                                                                    Laundry
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                </input>
                                                            </input>
                                                        </input>
                                                    </input>
                                                </form>
                                            </div>
                                            <div class="tab-pane " id="investsidebar" role="tabpanel">
                                                <form action="https://wpresidence.net/advanced-search/" method="get" role="search" serch5="">
                                                    <input name="filter_search_action[]" type="hidden" value="invest">
                                                        <input name="adv6_search_tab" type="hidden" value="invest">
                                                            <input class="term_id_class" name="term_id" type="hidden" value="2697">
                                                                <input class="term_counter" name="term_counter" type="hidden" value="2">
                                                                    <div class="col-md-3 categories">
                                                                        <div class="dropdown form-control ">
                                                                            <div cacaall="" categories="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-adv_categ" xxmaca="">
                                                                                Categories
                                                                                <span class="caret caret_sidebar ">
                                                                                </span>
                                                                            </div>
                                                                            <input name="filter_search_type[]" type="hidden" value="">
                                                                                <ul aria-labelledby="sidebar-adv_categ" class="dropdown-menu filter_menu" id="sidebar-categlist" role="menu">
                                                                                    <li data-value="all" role="presentation">
                                                                                        Categories
                                                                                    </li>
                                                                                    <li data-value="apartments" role="presentation">
                                                                                        Apartments
                                                                                    </li>
                                                                                    <li data-value="condos" role="presentation">
                                                                                        Condos
                                                                                    </li>
                                                                                    <li data-value="houses" role="presentation">
                                                                                        Houses
                                                                                    </li>
                                                                                    <li data-value="industrial" role="presentation">
                                                                                        Industrial
                                                                                    </li>
                                                                                    <li data-value="land" role="presentation">
                                                                                        Land
                                                                                    </li>
                                                                                    <li data-value="offices" role="presentation">
                                                                                        Offices
                                                                                    </li>
                                                                                    <li data-value="retail" role="presentation">
                                                                                        Retail
                                                                                    </li>
                                                                                    <li data-value="villas" role="presentation">
                                                                                        Villas
                                                                                    </li>
                                                                                </ul>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 property_size">
                                                                        <input class="advanced_select form-control" id="sidebar-property-size" name="property-size" placeholder="Property Size" type="text" value=""/>
                                                                    </div>
                                                                    <div class="col-md-3 property_lot_size">
                                                                        <input class="advanced_select form-control" id="sidebar-property-lot-size" name="property-lot-size" placeholder="Property Lot Size" type="text" value=""/>
                                                                    </div>
                                                                    <div class="col-md-3 property_status">
                                                                        <div class="dropdown form-control ">
                                                                            <div cacaall="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-adv_status" property="" status="" xxmaca="">
                                                                                Property Status
                                                                                <span class="caret caret_sidebar ">
                                                                                </span>
                                                                            </div>
                                                                            <input name="property_status" type="hidden" value="">
                                                                                <ul aria-labelledby="sidebar-adv_status" class="dropdown-menu filter_menu" id="sidebar-statuslist" role="menu">
                                                                                    <li data-value="all" role="presentation">
                                                                                        Property Status
                                                                                    </li>
                                                                                    <li data-value="active" role="presentation">
                                                                                        Active (6)
                                                                                    </li>
                                                                                    <li data-value="hot-offer" role="presentation">
                                                                                        Hot Offer (7)
                                                                                    </li>
                                                                                    <li data-value="new-offer" role="presentation">
                                                                                        New Offer (10)
                                                                                    </li>
                                                                                    <li data-value="open-house" role="presentation">
                                                                                        Open House (6)
                                                                                    </li>
                                                                                    <li data-value="sold" role="presentation">
                                                                                        Sold (1)
                                                                                    </li>
                                                                                </ul>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 property_bedrooms">
                                                                        <div class="dropdown form-control ">
                                                                            <div bedrooms="" cacaall="" class=" sidebar_filter_menu " data-toggle="dropdown" data-value="all" id="sidebar-bedrooms" maca="" xx="">
                                                                                Bedrooms
                                                                                <span class="caret caret_sidebar ">
                                                                                </span>
                                                                            </div>
                                                                            <input doithere="" name="bedrooms" type="hidden" value="">
                                                                                <ul aria-labelledby="sidebar-bedrooms" class="dropdown-menu filter_menu" id="sidebar-search-bedrooms" role="menu">
                                                                                    <li data-value="all" role="presentation">
                                                                                        Bedrooms
                                                                                    </li>
                                                                                    <li data-value="1" value="1">
                                                                                        1
                                                                                    </li>
                                                                                    <li data-value="2" value="2">
                                                                                        2
                                                                                    </li>
                                                                                    <li data-value="3" value="3">
                                                                                        3
                                                                                    </li>
                                                                                    <li data-value="4" value="4">
                                                                                        4
                                                                                    </li>
                                                                                    <li data-value="5" value="5">
                                                                                        5
                                                                                    </li>
                                                                                    <li data-value="6" value="6">
                                                                                        6
                                                                                    </li>
                                                                                    <li data-value="7" value="7">
                                                                                        7
                                                                                    </li>
                                                                                    <li data-value="8" value="8">
                                                                                        8
                                                                                    </li>
                                                                                    <li data-value="9" value="9">
                                                                                        9
                                                                                    </li>
                                                                                    <li data-value="10" value="10">
                                                                                        10
                                                                                    </li>
                                                                                </ul>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 property_price">
                                                                        <div class="adv_search_slider">
                                                                            <p>
                                                                                <label for="amount">
                                                                                    Price range:
                                                                                </label>
                                                                                <span class="wpresidence_slider_price" id="amount_2697_sidebar">
                                                                                    $ 0 to $ 90,000,000
                                                                                </span>
                                                                            </p>
                                                                            <div class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" id="slider_price_2697_sidebar">
                                                                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;">
                                                                                </div>
                                                                                <span class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;" tabindex="0">
                                                                                </span>
                                                                                <span class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;" tabindex="0">
                                                                                </span>
                                                                            </div>
                                                                            <input class="adv6_price_low price_active" id="price_low_2697" name="price_low_2697" type="hidden" value="0">
                                                                                <input class="adv6_price_max price_active" id="price_max_2697" name="price_max_2697" type="hidden" value="90000000">
                                                                                </input>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 submit_container_half ">
                                                                        <input class="wpresidence_button advanced_submit_4" name="submit" type="submit" value="Search Properties"/>
                                                                    </div>
                                                                    <div class="adv_extended_options_text" id="adv_extended_options_text_sidebar">
                                                                        More Search Options
                                                                    </div>
                                                                    <div class="extended_search_check_wrapper">
                                                                        <span class="adv_extended_close_button" id="adv_extended_close_sidebar">
                                                                            <i class="fas fa-times">
                                                                            </i>
                                                                        </span>
                                                                        <div class="extended_search_checker">
                                                                            <input id="back-yardsidebarinvest" name="back-yard" name-title="Back yard" type="checkbox" value="1">
                                                                                <label for="back-yardsidebarinvest">
                                                                                    Back yard
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="central-airsidebarinvest" name="central-air" name-title="Central Air" type="checkbox" value="1">
                                                                                <label for="central-airsidebarinvest">
                                                                                    Central Air
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="chair-accessiblesidebarinvest" name="chair-accessible" name-title="Chair Accessible" type="checkbox" value="1">
                                                                                <label for="chair-accessiblesidebarinvest">
                                                                                    Chair Accessible
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="elevatorsidebarinvest" name="elevator" name-title="Elevator" type="checkbox" value="1">
                                                                                <label for="elevatorsidebarinvest">
                                                                                    Elevator
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="fireplacesidebarinvest" name="fireplace" name-title="Fireplace" type="checkbox" value="1">
                                                                                <label for="fireplacesidebarinvest">
                                                                                    Fireplace
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="front-yardsidebarinvest" name="front-yard" name-title="Front yard" type="checkbox" value="1">
                                                                                <label for="front-yardsidebarinvest">
                                                                                    Front yard
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="garage-attachedsidebarinvest" name="garage-attached" name-title="Garage Attached" type="checkbox" value="1">
                                                                                <label for="garage-attachedsidebarinvest">
                                                                                    Garage Attached
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                        <div class="extended_search_checker">
                                                                            <input id="laundrysidebarinvest" name="laundry" name-title="Laundry" type="checkbox" value="1">
                                                                                <label for="laundrysidebarinvest">
                                                                                    Laundry
                                                                                </label>
                                                                            </input>
                                                                        </div>
                                                                    </div>
                                                                </input>
                                                            </input>
                                                        </input>
                                                    </input>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </input>
                            </input>
                        </form>
                    </li>
                    <li class="widget-container property_categories" id="property_categories-10">
                        <h3 class="widget-title-sidebar">
                            Our Listings
                        </h3>
                        <div class="category_list_widget">
                            <ul>
                                <li>
                                    <a href="https://wpresidence.net/listings/apartments/">
                                        Apartments
                                    </a>
                                    <span class="category_no">
                                        (17)
                                    </span>
                                </li>
                                <li>
                                    <a href="https://wpresidence.net/listings/condos/">
                                        Condos
                                    </a>
                                    <span class="category_no">
                                        (8)
                                    </span>
                                </li>
                                <li>
                                    <a href="https://wpresidence.net/listings/houses/">
                                        Houses
                                    </a>
                                    <span class="category_no">
                                        (5)
                                    </span>
                                </li>
                                <li>
                                    <a href="https://wpresidence.net/listings/industrial/">
                                        Industrial
                                    </a>
                                    <span class="category_no">
                                        (1)
                                    </span>
                                </li>
                                <li>
                                    <a href="https://wpresidence.net/listings/land/">
                                        Land
                                    </a>
                                    <span class="category_no">
                                        (1)
                                    </span>
                                </li>
                                <li>
                                    <a href="https://wpresidence.net/listings/offices/">
                                        Offices
                                    </a>
                                    <span class="category_no">
                                        (2)
                                    </span>
                                </li>
                                <li>
                                    <a href="https://wpresidence.net/listings/retail/">
                                        Retail
                                    </a>
                                    <span class="category_no">
                                        (4)
                                    </span>
                                </li>
                                <li>
                                    <a href="https://wpresidence.net/listings/villas/">
                                        Villas
                                    </a>
                                    <span class="category_no">
                                        (4)
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="widget-container latest_listings" id="footer_latest_widget-19">
                        <h3 class="widget-title-sidebar">
                            Featured Properties
                        </h3>
                <div class="latest_listings list_type">
                    <div class="widget_latest_internal" data-link="https://wpresidence.net/properties/luxury-house-in-greenville/">
                        <div class="widget_latest_listing_image">
                            <a href="#">
                                <img alt="slider-thumb"  height="70" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/house_nice_2-105x70.jpg" width="105"/>
                            </a>
                        </div>
                        <div class="listing_name ">
                            <span class="widget_latest_title">
                                <a href="#">
                                    Luxury House in Greenville
                                </a>
                            </span>
                            <span class="widget_latest_price">
                                <span class="price_label price_label_before">
                                    from
                                </span>
                                $ 86,000
                                <span class="price_label">
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="widget_latest_internal" data-link="https://wpresidence.net/properties/modern-condo-for-sale/">
                        <div class="widget_latest_listing_image">
                            <a href="#">
                                <img alt="slider-thumb"  height="70" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/featured_property_large-105x70.jpg" width="105"/>
                            </a>
                        </div>
                        <div class="listing_name ">
                            <span class="widget_latest_title">
                                <a href="https://wpresidence.net/properties/modern-condo-for-sale/">
                                    Modern Condo for Sale
                                </a>
                            </span>
                            <span class="widget_latest_price">
                                $ 150,000
                                <span class="price_label">
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="widget_latest_internal" data-link="https://wpresidence.net/properties/apartment-building/">
                        <div class="widget_latest_listing_image">
                            <a href="#">
                                <img alt="slider-thumb" height="70" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/01/interior36-105x70.jpg" width="105"/>
                            </a>
                        </div>
                        <div class="listing_name ">
                            <span class="widget_latest_title">
                                <a href="#">
                                    Apartment with Subunits
                                </a>
                            </span>
                            <span class="widget_latest_price">
                                <span class="price_label price_label_before">
                                    from
                                </span>
                                $ 999
                                <span class="price_label">
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="widget-container mortgage_calculator_li boxed_widget" id="mortgage_widget-9">
                <h3 class="widget-title-sidebar">
                    Mortgage Calculator
                </h3>
                <div id="input_formula">
                    <label for="sale_price">
                        Sale Price
                    </label>
                    <div class="sale_price_wrapper">
                        <input class="form-control" id="sale_price" type="text" value="100000">
                        </input>
                    </div>
                    <label for="percent_down">
                        Percent Down
                    </label>
                    <div class="percent_down_wrapper">
                        <input class="form-control" id="percent_down" type="text" value="10">
                        </input>
                    </div>
                    <label for="term_years">
                        Term (Years)
                    </label>
                    <div class="years_wrapper">
                        <input class="form-control" id="term_years" type="text" value="30">
                        </input>
                    </div>
                    <label for="interest_rate">
                        Interest Rate in %
                    </label>
                    <div class="interest_wrapper">
                        <input class="form-control" id="interest_rate" type="text" value="5">
                        </input>
                    </div>
                    <div id="morg_results">
                        <span id="am_fin">
                        </span>
                        <span id="morgage_pay">
                        </span>
                        <span id="anual_pay">
                        </span>
                    </div>
                    <button class="wpresidence_button" id="morg_compute">
                        Calculate
                    </button>
                </div>
            </li>
            <li class="widget-container social_sidebar" id="social_widget-9">
                <h3 class="widget-title-sidebar">
                    Social Links:
                </h3>
                <div class="social_sidebar_internal">
                    <a href="#" target="_blank">
                        <i class="fas fa-rss">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-facebook-f">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-twitter">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-dribbble">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-google-plus-g">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-linkedin-in">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-tumblr">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-pinterest-p">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-youtube">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-vimeo-v">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-foursquare">
                        </i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>    
    </div>
</div>
    </div>
@endsection