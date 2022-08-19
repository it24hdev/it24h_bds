@extends('frontend.layouts.base')

@section('header')
@include('frontend.layouts.header-page')
@endsection

@section('menu-mobile')
@include('frontend.layouts.menu-mobile')
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/property.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/detail-blog.css')}}">
   
@endsection

@section('content')
    <div id="wp-content">
        <div class="container content_wrapper">
            <div class="row " id="post">
                <div class="col-xs-12 col-md-12 breadcrumb_container">
                    <ol class="breadcrumb">
                        <li>
                            <a href="https://wpresidence.net/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="https://wpresidence.net/category/selling-properties/">
                                Buying Properties
                            </a>
                            ,
                            <a href="https://wpresidence.net/category/location/">
                                Location
                            </a>
                            ,
                            <a href="https://wpresidence.net/category/price/">
                                Price
                            </a>
                            ,
                            <a href="https://wpresidence.net/category/real-estate/">
                                Real Estate
                            </a>
                        </li>
                        <li class="active">
                            About Real Estate
                        </li>
                    </ol>
                </div>
                <div class=" col-md-9 rightmargin single_width_blog">
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
                    <div class="single-content single-blog">
                        <div id="carouselExampleDark" class="carousel carousel-dark post-carusel" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <img src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book3-1-800x467.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                              <img src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book4-1-800x467.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book8-835x467.jpg" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <h1 class="entry-title single-title">
                            About Real Estate
                        </h1>
                        <div class="meta-info">
                            <div class="meta-element">
                                <i class="far fa-calendar-alt meta_icon firsof">
                                </i>
                                Posted by admin on May 27, 2014
                            </div>
                            <div class="meta-element">
                                <i class="far fa-file meta_icon">
                                </i>
                                <a href="https://wpresidence.net/category/selling-properties/">
                                    Buying Properties
                                </a>
                                ,
                                <a href="https://wpresidence.net/category/location/">
                                    Location
                                </a>
                                ,
                                <a href="https://wpresidence.net/category/price/">
                                    Price
                                </a>
                                ,
                                <a href="https://wpresidence.net/category/real-estate/">
                                    Real Estate
                                </a>
                            </div>
                            <div class="meta-element">
                                <i class="far fa-comment meta_icon">
                                </i>
                                3 Comments
                            </div>
                        </div>
                        <p>
                            New York County as a whole covers a total area of 33.77 square miles (87.5 km2), of which 22.96 square miles (59.5 km2) are land and 10.81 square miles (28.0 km2) are water.
                        </p>
                        <blockquote class="block-quotes">
                            <p>
                                A modern redrawing of the 1807 version of the Commissioner’s Grid plan for Manhattan, a few years before it was adopted in 1811. Central Park is absent.
                            </p>
                        </blockquote>
                        <p>
                            Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis.
                        </p>
                        <h3>
                            What you must know about the New York market
                        </h3>
                        <p>
                            Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et. Mauris risus lectus, tristique at nisl at, pharetra tristique enim.
                        </p>
                        <p>
                            Nullam this is a link nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Nulla elit mauris, volutpat eu varius malesuada, pulvinar eu ligula. Ut et adipiscing erat. Curabitur adipiscing erat vel libero tempus congue. Nam pharetra interdum vestibulum. Aenean gravida mi non aliquet porttitor. Praesent dapibus, nisi a faucibus tincidunt, quam dolor condimentum metus, in convallis libero ligula ut eros.
                        </p>
                        <ul>
                            <li>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            </li>
                            <li>
                                Aliquam tincidunt mauris eu risus.
                                <ol>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </li>
                                    <li>
                                        Aliquam tincidunt mauris eu risus.
                                    </li>
                                    <li>
                                        Vestibulum auctor dapibus neque.
                                    </li>
                                </ol>
                            </li>
                            <li>
                                Vestibulum auctor dapibus neque.
                            </li>
                        </ul>
                        <p>
                            Ut non gravida arcu. Vivamus non congue leo. Aliquam dapibus laoreet purus, vitae iaculis eros egestas ac. Mauris massa est, lobortis a viverra eget, elementum sit amet ligula. Maecenas venenatis eros quis porta laoreet.
                        </p>
                        <h4>
                            Top 10 New York apartments for sell now trending
                        </h4>
                        <figure class="wp-container-2 wp-block-gallery-1 wp-block-gallery columns-3 is-cropped">
                            <ul class="blocks-gallery-grid">
                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img alt="" class="wp-image-29078" data-full-url="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book3-1.jpg" data-id="29078" data-link="https://d21sbe0q8pamcf.cloudfront.net/sidebar-on-the-left/book3-3/" height="500" sizes="(max-width: 800px) 100vw, 800px" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book3-1.jpg" srcset="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book3-1.jpg 800w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book3-1-300x188.jpg 300w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book3-1-768x480.jpg 768w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book3-1-525x328.jpg 525w" width="800"/>
                                    </figure>
                                </li>
                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img alt="" class="wp-image-29079" data-full-url="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book4-1.jpg" data-id="29079" data-link="https://d21sbe0q8pamcf.cloudfront.net/sidebar-on-the-left/book4-2/" height="500" loading="lazy" sizes="(max-width: 800px) 100vw, 800px" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book4-1.jpg" srcset="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book4-1.jpg 800w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book4-1-300x188.jpg 300w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book4-1-768x480.jpg 768w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book4-1-525x328.jpg 525w" width="800"/>
                                    </figure>
                                </li>
                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img alt="" class="wp-image-29081" data-full-url="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-1.jpg" data-id="29081" data-link="https://d21sbe0q8pamcf.cloudfront.net/sidebar-on-the-left/book5-2/" height="500" loading="lazy" sizes="(max-width: 800px) 100vw, 800px" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-1.jpg" srcset="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-1.jpg 800w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-1-300x188.jpg 300w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-1-768x480.jpg 768w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/book5-1-525x328.jpg 525w" width="800"/>
                                    </figure>
                                </li>
                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img alt="" class="wp-image-23240" data-full-url="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/housing-900240_1920.jpg" data-id="23240" data-link="https://d21sbe0q8pamcf.cloudfront.net/sidebar-on-the-left/housing-900240_1920/" height="1280" loading="lazy" sizes="(max-width: 1920px) 100vw, 1920px" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/housing-900240_1920-1920x1280.jpg" srcset="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/housing-900240_1920.jpg 1920w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/housing-900240_1920-300x200.jpg 300w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/housing-900240_1920-768x512.jpg 768w, https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/housing-900240_1920-105x70.jpg 105w" width="1920"/>
                                    </figure>
                                </li>
                            </ul>
                        </figure>
                        <p>
                            One neighborhood of New York County is contiguous with The Bronx. Marble Hill at one time was part of Manhattan Island, but the Harlem River Ship Canal, dug in 1895 to improve navigation on the Harlem River, separated it from the remainder of Manhattan as an island between the Bronx and the remainder of Manhattan. Before World War I, the section of the original Harlem River channel separating Marble Hill from The Bronx was filled in, and Marble Hill became part of the mainland.
                        </p>
                        <p>
                            Vivamus varius vitae dolor ac hendrerit. Vestibulum nec dolor ac nunc blandit aliquam. Nam at metus non ligula egestas varius ac sed mauris. Fusce at mi metus. Nam elementum dui id nulla bibendum elementum.
                        </p>
                        <ol>
                            <li>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            </li>
                            <li>
                                Aliquam tincidunt mauris eu risus.
                                <ol>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </li>
                                    <li>
                                        Aliquam tincidunt mauris eu risus.
                                    </li>
                                    <li>
                                        Vestibulum auctor dapibus neque.
                                    </li>
                                </ol>
                            </li>
                            <li>
                                Vestibulum auctor dapibus neque.
                            </li>
                        </ol>
                        <p>
                            Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.
                        </p>
                        <div class="prop_social_single">
                            <a class="share_facebook" href="https://www.facebook.com/sharer.php?u=https://wpresidence.net/sidebar-on-the-left/&t=About+Real+Estate" rel="noreferrer" target="_blank">
                                <i class="fab fa-facebook-f">
                                </i>
                            </a>
                            <a class="share_tweet" href="https://twitter.com/intent/tweet?text=About+Real+Estate+https%3A%2F%2Fwpresidence.net%2Fsidebar-on-the-left%2F" rel="noreferrer" target="_blank">
                                <i class="fab fa-twitter">
                                </i>
                            </a>
                            <a class="share_pinterest" href="https://pinterest.com/pin/create/button/?url=https://wpresidence.net/sidebar-on-the-left/&media=https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/house_nice_2-1400x790.jpg&description=About+Real+Estate" rel="noreferrer" target="_blank">
                                <i class="fab fa-pinterest-p">
                                </i>
                            </a>
                            <a class="" href="https://api.whatsapp.com/send?text=About+Real+Estate+https%3A%2F%2Fwpresidence.net%2Fsidebar-on-the-left%2F" rel="noreferrer">
                                <i aria-hidden="true" class="fab fa-whatsapp">
                                </i>
                            </a>
                            <a class="social_email" href="mailto:email@email.com?subject=About+Real+Estate&body=https%3A%2F%2Fwpresidence.net%2Fsidebar-on-the-left%2F">
                                <i class="far fa-envelope">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div id="comments">
                        <h3>
                            3 thoughts on “
                            <span>
                                About Real Estate
                            </span>
                            ”
                        </h3>
                        <ul class="commentlist ">
                            <li class="comment even thread-even depth-1" id="li-comment-2526">
                                <div class="blog_author_image singlepage" style="background-image: url(https://secure.gravatar.com/avatar/2816d28dee2839a68a1cd80d35f367e1?s=55&d=mm&r=g);">
                                    <a aria-label="Reply to Gina Manny" class="comment-reply-link" data-belowelement="comment-2526" data-commentid="2526" data-postid="198" data-replyto="Reply to Gina Manny" data-respondelement="respond" href="#comment-2526" rel="nofollow">
                                        Reply
                                    </a>
                                </div>
                                <div class="comment" id="comment-2526">
                                    <div class="comment-meta">
                                        <div class="comment-author vcard">
                                            <div class="comment_name">
                                                <a class="url" href="https://wpresidence.net" rel="external nofollow ugc">
                                                    Gina Manny
                                                </a>
                                            </div>
                                            <span class="comment_date">
                                                on March 16, 2021
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-2527">
                                <div class="blog_author_image singlepage" style="background-image: url(https://secure.gravatar.com/avatar/dd29c7992424c74605c5447482c9c5c8?s=55&d=mm&r=g);">
                                    <a aria-label="Reply to Simone Butcher" class="comment-reply-link" data-belowelement="comment-2527" data-commentid="2527" data-postid="198" data-replyto="Reply to Simone Butcher" data-respondelement="respond" href="#comment-2527" rel="nofollow">
                                        Reply
                                    </a>
                                </div>
                                <div class="comment" id="comment-2527">
                                    <div class="comment-meta">
                                        <div class="comment-author vcard">
                                            <div class="comment_name">
                                                <a class="url" href="http://wpestate.org" rel="external nofollow ugc">
                                                    Simone Butcher
                                                </a>
                                            </div>
                                            <span class="comment_date">
                                                on March 16, 2021
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>
                                            Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise.
                                        </p>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="comment even depth-2" id="li-comment-2528">
                                        <div class="blog_author_image singlepage" style="background-image: url(https://secure.gravatar.com/avatar/2816d28dee2839a68a1cd80d35f367e1?s=55&d=mm&r=g);">
                                            <a aria-label="Reply to Gina Manny" class="comment-reply-link" data-belowelement="comment-2528" data-commentid="2528" data-postid="198" data-replyto="Reply to Gina Manny" data-respondelement="respond" href="#comment-2528" rel="nofollow">
                                                Reply
                                            </a>
                                        </div>
                                        <div class="comment" id="comment-2528">
                                            <div class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <div class="comment_name">
                                                        <a class="url" href="http://wpestate.org" rel="external nofollow ugc">
                                                            Gina Manny
                                                        </a>
                                                    </div>
                                                    <span class="comment_date">
                                                        on March 16, 2021
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>
                                                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="comment-respond" id="respond">
                            <h3 class="comment-reply-title" id="reply-title">
                                Leave a Reply
                                <small>
                                    <a href="/sidebar-on-the-left/#respond" id="cancel-comment-reply-link" rel="nofollow" style="display:none;">
                                        Cancel Reply
                                    </a>
                                </small>
                            </h3>
                            <form action="https://wpresidence.net/wp-comments-post.php" class="comment-form" id="commentform" method="post">
                                <p class="comment-notes">
                                    Your email address will not be published.
                                </p>
                                <p class="comment-form-comment">
                                    <label for="comment">
                                    </label>
                                    <textarea aria-required="true" class="form-control" cols="45" id="comment" name="comment" placeholder="Comment" rows="8">
                                    </textarea>
                                </p>
                                <p class="comment-form-author">
                                    <input aria-required="true" class="form-control" id="author" name="author" placeholder="Name" size="30" type="text" value="">
                                    </input>
                                </p>
                                <p class="comment-form-email">
                                    <input aria-required="true" class="form-control" id="email" name="email" placeholder="Email" size="30" type="text" value=""/>
                                </p>
                                <p class="comment-form-url">
                                    <input class="form-control" id="url" name="url" placeholder="Website" size="30" type="text" value=""/>
                                </p>
                                <p class="form-submit">
                                    <input class="wpresidence_button" id="submit" name="submit" type="submit" value="Post Comment">
                                        <input id="comment_post_ID" name="comment_post_ID" type="hidden" value="198">
                                            <input id="comment_parent" name="comment_parent" type="hidden" value="0">
                                            </input>
                                        </input>
                                    </input>
                                </p>
                                <p style="display: none;">
                                    <input id="akismet_comment_nonce" name="akismet_comment_nonce" type="hidden" value="6d322571f7"/>
                                </p>
                                <p style="display: none !important;">
                                    <label>
                                        Δ
                                        <textarea cols="45" maxlength="100" name="ak_hp_textarea" rows="8">
                                        </textarea>
                                    </label>
                                    <input id="ak_js_1" name="ak_js" type="hidden" value="1660631674388">
                                        <script>
                                            document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );
                                        </script>
                                    </input>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="related_posts">
                        <h3>
                            Related Posts
                        </h3>
                        <div class="col-md-6 listing_wrapper blog2v">
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
                        <div class="col-md-6 listing_wrapper blog2v">
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
                        <div class="col-md-6 listing_wrapper blog2v">
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
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 widget-area-sidebar" id="primary">
                    <div id="primary_sidebar_wrapper">
                        <ul class="xoxo">
                            <li class="widget widget-container sbg_widget BlogSidebar latest_listings" id="footer_latest_widget-22">
                                <h3 class="widget-title-sidebar">
                                    Featured Listings
                                </h3>
                                <div class="latest_listings list_type">
                                    <div class="widget_latest_internal" data-link="https://wpresidence.net/properties/luxury-house-in-greenville/">
                                        <div class="widget_latest_listing_image">
                                            <a href="https://wpresidence.net/properties/luxury-house-in-greenville/">
                                                <img alt="slider-thumb" class="lazyload img_responsive" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/house_nice_2-105x70.jpg" height="70" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/11/house_nice_2-105x70.jpg" width="105"/>
                                            </a>
                                        </div>
                                        <div class="listing_name ">
                                            <span class="widget_latest_title">
                                                <a href="https://wpresidence.net/properties/luxury-house-in-greenville/">
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
                                            <a href="https://wpresidence.net/properties/modern-condo-for-sale/">
                                                <img alt="slider-thumb" class="lazyload img_responsive" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/featured_property_large-105x70.jpg" height="70" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/09/featured_property_large-105x70.jpg" width="105"/>
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
                                            <a href="https://wpresidence.net/properties/apartment-building/">
                                                <img alt="slider-thumb" class="lazyload img_responsive" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/01/interior36-105x70.jpg" height="70" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2017/01/interior36-105x70.jpg" width="105"/>
                                            </a>
                                        </div>
                                        <div class="listing_name ">
                                            <span class="widget_latest_title">
                                                <a href="https://wpresidence.net/properties/apartment-building/">
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
                                    <div class="widget_latest_internal" data-link="https://wpresidence.net/properties/3-rooms-mahattan-new-york/">
                                        <div class="widget_latest_listing_image">
                                            <a href="https://wpresidence.net/properties/3-rooms-mahattan-new-york/">
                                                <img alt="slider-thumb" class="lazyload img_responsive" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2020/06/house_nice-105x70.jpg" height="70" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2020/06/house_nice-105x70.jpg" width="105"/>
                                            </a>
                                        </div>
                                        <div class="listing_name ">
                                            <span class="widget_latest_title">
                                                <a href="https://wpresidence.net/properties/3-rooms-mahattan-new-york/">
                                                    3 Rooms Manhattan
                                                </a>
                                            </span>
                                            <span class="widget_latest_price">
                                                $ 550,000
                                                <span class="price_label">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="widget_latest_internal" data-link="https://wpresidence.net/properties/luxury-villa-in-rego-park/">
                                        <div class="widget_latest_listing_image">
                                            <a href="https://wpresidence.net/properties/luxury-villa-in-rego-park/">
                                                <img alt="slider-thumb" class="lazyload img_responsive" data-original="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/prop-105x70.jpg" height="70" src="https://d21sbe0q8pamcf.cloudfront.net/wp-content/uploads/2014/05/prop-105x70.jpg" width="105"/>
                                            </a>
                                        </div>
                                        <div class="listing_name ">
                                            <span class="widget_latest_title">
                                                <a href="https://wpresidence.net/properties/luxury-villa-in-rego-park/">
                                                    Luxury villa in Rego Park
                                                </a>
                                            </span>
                                            <span class="widget_latest_price">
                                                $ 420,000
                                                <span class="price_label">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="widget widget-container sbg_widget BlogSidebar widget_recent_entries" id="recent-posts-2">
                                <h3 class="widget-title-sidebar">
                                    Recent Posts
                                </h3>
                                <ul>
                                    <li>
                                        <a href="https://wpresidence.net/sidebar-on-the-right-search-widget/">
                                            Search widget on the right
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wpresidence.net/buying-a-home/">
                                            Buying a Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wpresidence.net/manhattan-apartments/">
                                            Manhattan Apartments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wpresidence.net/why-live-in-new-york/">
                                            Why Live in New York
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wpresidence.net/selling-your-home/">
                                            Selling Your Home
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="widget widget-container sbg_widget BlogSidebar widget_search" id="search-5">
                                <h3 class="widget-title-sidebar">
                                    Search Keyword
                                </h3>
                                <form action="https://wpresidence.net/" id="searchform" method="get">
                                    <input class="form-control" id="s" name="s" placeholder="Type Keyword" type="text">
                                        <button class="wpresidence_button" id="submit-form" style="width: 100%;">
                                            Search
                                        </button>
                                        <input id="wpestate_default_search_nonce" name="wpestate_default_search_nonce" type="hidden" value="e60a5d6046">
                                            <input name="_wp_http_referer" type="hidden" value="/sidebar-on-the-left/"/>
                                        </input>
                                    </input>
                                </form>
                            </li>
                        </ul>
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
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4500,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
            },
        });


    });
</script>
@endsection