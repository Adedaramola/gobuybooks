
@extends('layouts.home')

@section('content')
<div id="pre-loader">
    <img src="{{ asset('images/logo/logo.png') }}" alt="Loading..." />
</div>
<div class="pageWrapper">

    @include('partials.header')
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section sliderFull">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{ asset('images/slideshow-banners/belle-banner1.jpg') }}" src="{{ asset('images/logo/library1.jpg') }}" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Get Quality Books At Low Prices</h2>
                                        <span class="mega-subtitle slideshow__subtitle">From Hight to low, classic or modern. We have you covered</span>
                                        <span class="btn"><a href="/shop" style="color: white; text-decoration: none;">Shop now</a></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{ asset('images/slideshow-banners/belle-banner2.jpg') }}" src="{{ asset('images/logo/library2.jpg') }}" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Providing Literacy At Your Doorstep</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend only</span>
                                    <span class="btn"><a href="/shop" style="color: white; text-decoration: none;">Shop now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        <!--Collection Tab slider-->
        <div class="tab-slider-product section mt-5">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">New Arrivals</h2>
                            <p>Browse the huge variety of our books</p>
                        </div>
                        @if($products->isEmpty())
                            <h1 class="text-center">No Book In our Library</h1>
                        @else
                        <div class="tabs-listing">
                            <ul class="tabs clearfix">
                                <li class="active" rel="tab1">Book List</li>
                            </ul>
                            <div class="tab_container">
                                <div id="tab1" class="tab_content grid-products">
                                    <div class="productSlider">
                                        @foreach($products as $p)
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="/short-description/{{$p->id}}">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$p->image_path}}" src="{{$p->image_path}}" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$p->image_path}}" src="{{$p->image_path}}" alt="image" title="product">
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels rectangular"><span class="lbl pr-label1">new</span></div>
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->
                                                
                                                <!-- countdown start -->
                                        		<!-- <div class="saleTime desktop" data-countdown="2022/03/01"></div> -->
                                        		<!-- countdown end -->
        
                                                <!-- Start product button -->
                                                <form class="variants add">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0" onclick="addToCart('{{$p->id}}', '{{$p->name}}', '{{$p->price}}', '1', '{{$p->image_path}}')">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <!-- <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div> -->
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->
                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="/short-description/{{$p->id}}">{{$p->name}}</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">NGN {{$p->price}}</span>
                                                </div>
                                                <!-- End product price -->
                                                
                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
            	</div>    
            </div>
        </div>
        <!--Collection Tab slider-->
        
        <!--Collection Box slider-->
        <div class="collection-box section mt-5">
        	<div class="container-fluid">
				<div class="collection-grid">
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/logo/medicals.jpg') }}" src="{{ asset('images/logo/medicals.jpg') }}" alt="medicals" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Medical Sciences</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img class="blur-up lazyload" data-src="{{ asset('images/logo/law.jpg') }}" src="{{ asset('images/logo/law.jpg') }}" alt="law"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Law</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item blur-up lazyloaded">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/logo/novels.jpg') }}" src="{{ asset('images/logo/novels.jpg') }}" alt="novels" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Novels</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/logo/history.jpg') }}" src="{{ asset('images/logo/history.jpg') }}" alt="history" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">History</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/logo/sports.jpg') }}" src="{{ asset('images/logo/sports.jpg') }}" alt="sports" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Sports</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/logo/politics.jpg') }}" src="{{ asset('images/logo/politics.jpg') }}" alt="politics" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Politics</h3>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        <!--End Collection Box slider-->
        
        <!--Logo Slider-->
        <div class="section logo-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                		<div class="logo-bar">
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo1.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo2.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo3.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo4.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo5.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo6.png') }}" alt="" title="" />
                    </div>
                </div>
                	</div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
        
        
        <!--Latest Blog-->
        <div class="latest-blog section pt-0 mt-5">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
      						<h2 class="h2">Latest From our Blog</h2>
					    </div>
            		</div>
                </div>
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    	<div class="wrap-blog">
                        	<a href="" class="article__grid-image">
              					<img src="{{ asset('images/logo/law6.') }}" alt="The Nigerian Legal System" title="The Nigerian Legal System" class="blur-up lazyloaded"/>
				            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                      <a href="">The Nigerian Legal System</a>
                                    </h2>
                                    <span class="article__date">Jan 07, 2022</span>
                                    <div class="rte article__grid-excerpt">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit ullamcorper laudantium, totam rem aperiam, eaque ipsa quae ab...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                    	<li><a href="">Read more</a></li>
                                    </ul>
                                </div>
							</div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    	<div class="wrap-blog">
                        	<a href="" class="article__grid-image">
              					<img src="{{ asset('images/logo/others6.') }}" alt="The Smart Money Woman" title="The Smart Money Woman" class="blur-up lazyloaded"/>
				            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                      <a href="">The Smart Money Woman</a>
                                    </h2>
                                    <span class="article__date">Jan 02, 2022</span>
                                    <div class="rte article__grid-excerpt">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                    	<li><a href="">Read more</a></li>
                                    </ul>
                                </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Latest Blog-->
        
        <!--Store Feature-->
        <div class="store-feature section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<ul class="display-table store-info">
                        	<li class="display-table-cell">
                            	<i class="icon anm anm-truck-l"></i>
                            	<h5>Free Shipping &amp; Return</h5>
                            	<span class="sub-text">Free shipping on all US orders</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-dollar-sign-r"></i>
                                <h5>Money Guarantee</h5>
                                <span class="sub-text">30 days money back guarantee</span>
                          	</li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-comments-l"></i>
                                <h5>Online Support</h5>
                                <span class="sub-text">We support online 24/7 on day</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-credit-card-front-r"></i>
                                <h5>Secure Payments</h5>
                                <span class="sub-text">All payment are Secured and trusted.</span>
                        	</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Store Feature-->
    </div>
    <!--End Body Content-->
@endsection