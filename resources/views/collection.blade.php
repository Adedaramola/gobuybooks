@extends('layouts.home')

@section('content')

    <div id="pre-loader">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Loading..." />
    </div>
    <div class="pageWrapper">

    @include('partials.header_2')

    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Book Collections</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container collection-box">
        	<div class="row">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="/shop">
                            <img class="blur-up lazyload" data-src="{{ asset('images/logo/medicals.jpg') }}" src="{{ asset('images/logo/medicals.jpg') }}" alt="image" title="">
                            <span class="title"><span>Medical Sciences</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="/shop">
                            <img class="blur-up lazyload" data-src="{{ asset('images/logo/law.jpg') }}" src="{{ asset('images/logo/law.jpg') }}" alt="image" title="">
                            <span class="title"><span>Law</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="/shop">
                            <img class="blur-up lazyload" data-src="{{ asset('images/logo/novels.jpg') }}" src="{{ asset('images/logo/novels.jpg') }}" alt="image" title="">
                            <span class="title"><span>Novels</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="/shop">
                            <img class="blur-up lazyload" data-src="{{ asset('images/logo/history.jpg') }}" src="{{ asset('images/logo/history.jpg') }}" alt="image" title="">
                            <span class="title"><span>History</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="/shop">
                            <img class="blur-up lazyload" data-src="{{ asset('images/logo/sports.jpg') }}" src="{{ asset('images/logo/sports.jpg') }}" alt="image" title="">
                            <span class="title"><span>Sports</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="/shop">
                            <img class="blur-up lazyload" data-src="{{ asset('images/logo/politics.jpg') }}" src="{{ asset('images/logo/politics.jpg') }}" alt="image" title="">
                            <span class="title"><span>Politics</span></span>
                        </a>
                    </div>
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->

@endsection

