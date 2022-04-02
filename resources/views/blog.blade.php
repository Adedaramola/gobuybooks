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
                @if($blog->isEmpty())
        		    <div class="wrapper"><h1 class="page-width">Blog Post</h1></div>
                @else
        		    <div class="wrapper"><h1 class="page-width">{{ $blog[0]->title }}</h1></div>
                @endif
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container collection-box">
            <div class="row justify-content-center mt-4">
                @if($blog->isEmpty())
                    <h1 class="text-center">Invalid Blog Post</h1>
                @else
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="wrap-blog">
                            <a href="" class="article__grid-image">
                                <img src="{{ $blog[0]->img_path }}" alt="{{$blog[0]->title}}" title="{{$blog[0]->title}}" class="blur-up lazyloaded"/>
                            </a>
                            <div class="article__grid-meta article__grid-meta--has-image mt-4">
                                <span class="article__date mt-3">{{$blog[0]->created_at}}</span><br>
                                <span class="article__date mt-3">@if($blog[0]->author) {{$blog[0]->author}} @else Admin @endif</span>
                                <div class="wrap-blog-inner mt-3">
                                    <h3>{{!! $blog[0]->body !!}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        
    </div>
    <!--End Body Content-->

@endsection

