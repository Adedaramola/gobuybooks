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
        		<div class="wrapper"><h1 class="page-width">Blog Post</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container collection-box">
            <div class="row justify-content-center mt-4">
                @if($blog->isEmpty())
                    <h1 class="text-center">Invalid Blog Post</h1>
                @else
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="wrap-blog">
                            <a href="" class="article__grid-image">
                                <img src="{{ $blog[0]->img_path }}" alt="{{$blog[0]->title}}" title="{{$blog[0]->title}}" class="blur-up lazyloaded"/>
                            </a>
                            <div class="article__grid-meta article__grid-meta--has-image mt-4">
                                <div class="wrap-blog-inner">
                                    <h1 class="h3 article__title">
                                    <a href="">{{$blog[0]->title}}</a>
                                    </h1>
                                    <h3>{{$blog[0]->body}}</h3>
                                    <span class="article__date mt-2">{{$blog[0]->created_at}}</span>
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

