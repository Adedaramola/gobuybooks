@extends('layouts.home')

@section('content')

    <div id="pre-loader">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Loading..." />
    </div>
    <div class="pageWrapper">

    @include('partials.header_2')

    <!--Body Content-->
        <div id="page-content">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Short Description</span>
                    </div>
                </div>
                <!--End Breadcrumb-->
                

                <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                    <!--product-single-->
                    <div class="product-single">
                        <div class="row">
                            
                            @if(!$product->isEmpty())
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="zoompro blur-up lazyload" data-zoom-image="{{$product[0]->image_path}}" alt="" src="{{$product[0]->image_path}}" />
                                        </div>
                                        <div class="product-buttons">
                                            <a href="" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                            <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="lightboximages">
                                        <a href="{{$product[0]->image_path}}" data-size="1462x2048"></a>
                                    </div>
        
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h1 class="product-single__title">Short Description</h1>
                                    <div class="product-nav clearfix">					
                                        <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="prInfoRow">
                                        <div class="product-stock"> <span class="instock ">{{$product[0]->availability}}</span>
                                        <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></a></div>
                                    </div>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span class="money">NGN {{$product[0]->price}}</span></span>
                                        </span>
                                    </p>
                                    <br>
                                <div class="product-single__description rte mb-5">
                                    <p>{{$product[0]->description}}</p>
                                </div>
                                <form id="product_form_10508262282" class="product-form product-form-product-template hidedropdown">
                                    <!-- Product Action -->
                                    <div class="product-action clearfix">
                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>                                
                                        <div class="product-form__item--submit">
                                            <button type="button" name="add" class="btn product-form__cart-submit" onclick="addToCart('{{$product[0]->id}}', '{{$product[0]->name}}', '{{$product[0]->price}}', `${document.querySelector('#Quantity').value}`, '{{$product[0]->image_path}}')">
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                        <div class="shopify-payment-button mb-3" data-shopify="payment-button">
                                            <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded read mb-3" onclick="readOnline('{{$product[0]->file_path}}')">Read Online For Free</button>
                                        </div>
                                        @if($product[0]->audio)
                                        <div class="shopify-payment-button mb-3" data-shopify="payment-button">
                                            @if($product[0]->audio_status == 'yes')
                                            <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded listen mb-3">Listen for free</button>
                                            @else
                                            <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded listen mb-3">Buy Audio</button>
                                            @endif
                                        </div>
                                        @endif
                                        <div class="shopify-payment-button" data-shopify="payment-button">
                                            <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded buy">Buy it now</button>
                                        </div>
                                    </div>
                                    <!-- End Product Action -->
                                </form>
                                <div class="display-table shareRow">
                                        <div class="display-table-cell medium-up--one-third">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                            </div>
                                        </div>
                                        <div class="display-table-cell text-right">
                                            <div class="social-sharing">
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                                </a>
                                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                                </a>
                                                <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                                </a>
                                                </div>
                                        </div>
                                    </div>
                                    
                                <!-- <p id="freeShipMsg" class="freeShipMsg" data-price="199"><i class="fa fa-truck" aria-hidden="true"></i> GETTING CLOSER! ONLY <b class="freeShip"><span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span></b> AWAY FROM <b>FREE SHIPPING!</b></p>
                                <p class="shippingMsg"><i class="fa fa-clock-o" aria-hidden="true"></i> ESTIMATED DELIVERY BETWEEN <b id="fromDate">Wed. May 1</b> and <b id="toDate">Tue. May 7</b>.</p>
                                <div class="userViewMsg" data-user="20" data-time="11000"><i class="fa fa-users" aria-hidden="true"></i> <strong class="uersView">14</strong> PEOPLE ARE LOOKING FOR THIS PRODUCT</div> -->
                            </div>
                            @else
                            <h1 class="text-center">Invalid Product!!!</h1>
                            @endif

                        </div>
                    </div>
                    <!--End-product-single-->
                    <!--Product Fearure-->
                    <div class="prFeatures mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="{{ asset('images/credit-card.png') }}" alt="Safe Payment" title="Safe Payment" />
                                <div class="details"><h3>Safe Payment</h3>Pay with the world's most payment methods.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="{{ asset('images/shield.png') }}" alt="Confidence" title="Confidence" />
                                <div class="details"><h3>Confidence</h3>Protection covers your purchase and personal data.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="{{ asset('images/worldwide.png') }}" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                <div class="details"><h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="{{ asset('images/phone-call.png') }}" alt="Hotline" title="Hotline" />
                                <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                            </div>
                        </div>
                    </div>
                    <!--End Product Fearure-->
                    
                    
                    <!--Related Product Slider-->
                    <div class="mt-5 related-product grid-products col-12">
                        <header class="section-header">
                            <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                            <p class="sub-heading"></p>
                        </header>
                        <div class="productPageSlider">
                        
                        @if(!$product->isEmpty())
                        @if(!$related->isEmpty())

                        @foreach($related as $p)
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
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
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

                        @endif
                        @endif
                        </div>
                    <!--End Related Product Slider-->
                    </div>
                <!--ProductSection-product-template-->
                </div>
            </div>
            <!--MainContent-->
        </div>
    	<!--End Body Content-->

@endsection

<script>
    function readOnline(book){
        window.open(book,'_blank')
    }
</script>