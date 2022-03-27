<!--Search Form Drawer-->
<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <p class="phone-no"><i class="anm anm-phone-s"></i> 080 6973 5321</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text">Welcome to Gobuybooks</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    @if($user == null)
                    <ul class="customer-links list-inline">
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Create Account</a></li>
                    </ul>
                    @else
                    <ul class="customer-links list-inline">
                        <li><a>Welcome, {{ $user['name'] }}</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
<!--Header-->
<div class="header-wrap animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="/">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="GoBuyBooks" title="GoBuyBooks" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                    <ul id="siteNav" class="site-nav medium center hidearrow">
                      <li class="lvl1 parent megamenu"><a href="/">Home <i class="anm anm-angle-down-l"></i></a></li>
                      <li class="lvl1 parent megamenu"><a href="/shop">Book Shop <i class="anm anm-angle-down-l"></i></a></li>
                      <li class="lvl1 parent megamenu"><a href="/collection-page.html">Collections <i class="anm anm-angle-down-l"></i></a></li>
                      <li class="lvl1 parent megamenu"><a href="#">Contact Us <i class="anm anm-angle-down-l"></i></a></li>
                    </ul>
                  </nav>
                    <!--End Desktop Menu-->
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="/">
                            <img src="{{ asset('images/logo/logo.png') }}" alt="GoBuyBooks" title="GoBuyBooks" />
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="#;" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-shopping-cart4"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"></span>
                        </a>
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money" id="total_amount">NGN 0</span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="/cart" class="btn btn-secondary btn--small">View Cart</a>
                                    <a href="/checkout" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!--End Minicart Popup-->
                    </div>
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
      <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
          <ul id="MobileNav" class="mobile-nav">
            <li class="lvl1 parent megamenu"><a href="/">Home <i class="anm anm-plus-l"></i></a></li>
            <li class="lvl1 parent megamenu"><a href="/shop">Book Shop <i class="anm anm-plus-l"></i></a></li>
            <li class="lvl1 parent megamenu"><a href="/shop">Product <i class="anm anm-plus-l"></i></a></li>
        </ul>
    </div>
	<!--End Mobile Menu-->

    <script>
        let cartItems = JSON.parse(localStorage.getItem('cart'));
        if(cartItems){
            let total = 0;
            document.querySelector('#CartCount').innerHTML = cartItems.length;
            cartItems.forEach(item => total += (parseInt(item.price) * item.quantity));
            document.querySelector('#total_amount').innerHTML = 'NGN ' + total.toLocaleString();
        }else{
            document.querySelector('#CartCount').innerHTML = 0;
        }
    </script>