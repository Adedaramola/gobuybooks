@extends('layouts.home')

@section('content')

    <div id="pre-loader">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Loading..." />
    </div>
    <div class="pageWrapper">

    @include('partials.header_2')

    <!--Body Content-->
    <div id="page-content">
    	<!--Collection Banner-->
    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{ asset('images/logo/library.jpg') }}" src="{{ asset('images/logo/library.jpg') }}" alt="background" title="background" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Book Shop</h1></div>
      		</div>
		</div>
        <!--End Collection Banner-->
        
        <div class="container mt-5">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Categories</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    @if($categories->isEmpty())
                                        <h1 class="text-left">No Category In our Library</h1>
                                    @else
                                        @foreach($categories as $c)
                                            <li class="lvl-1"><a href="/shop/category/{{$c->id}}" class="site-nav">{{ $c->name }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!--Categories-->
                        <!--Price Filter-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title">
                            	<h2>Price</h2>
                            </div>
                            <form action="#" method="post" class="price-filter">
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                	<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="no-margin"><input id="amount" type="text"></p>
                                    </div>
                                    <div class="col-6 text-right margin-25px-top">
                                        <button class="btn btn-secondary btn--small">filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Price Filter-->

                        <!--Banner-->
                        <div class="sidebar_widget static-banner">
                        	<img src="assets/images/side-banner-2.jpg" alt="" />
                        </div>
                        <!--Banner-->
                        <!--Information-->
                        <div class="sidebar_widget">
                            <div class="widget-title"><h2>Information</h2></div>
                            <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                        </div>
                        <!--end Information-->
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	<div class="category-description">
                        @if($selected)
                            @if($selected->isEmpty())
                                <h3>All Books List</h3>
                            @else
                                <h3>Category Description</h3>
                                <p>{{$selected[0]->description}}</p>
                            @endif
                        @else
                            <h3>All Books List</h3>
                        @endif
                    </div>
                    <hr>
                	<div class="productList product-load-more">
                    	<!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    	<div class="toolbar">
                        	<div class="filters-toolbar-wrapper">
                            	<div class="row">
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                    	<div class="filters-toolbar__item">
                                      		<label for="SortBy" class="hidden">Sort</label>
                                      		<select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                                <option>Alphabetically, A-Z</option>
                                                <option>Alphabetically, Z-A</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                                <option>Date, new to old</option>
                                                <option>Date, old to new</option>
                                      		</select>
                                      		<input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Toolbar-->
                        
                        @if($products->isEmpty())
                            <h1 class="text-center">No Book In our Library</h1>
                        @else
                        <div class="grid-products grid--view-items">
                            <div class="row">
                                @foreach($products as $p)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
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

                                        <!-- Start product button -->
                                        <form class="variants add">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0" onclick="addToCart('{{$p->id}}', '{{$p->name}}', '{{$p->price}}')">Add To Cart</button>
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

                            <div class="mt-3 d-flex justify-content-start align-items center">
                                {{ $products->links('pagination::bootstrap-4') }}
                            </div>

                        </div>

                        @endif
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
    </div>

@endsection

