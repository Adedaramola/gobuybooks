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
        		<div class="wrapper"><h1 class="page-width">Blog Page</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container latest-blog ">
            <div class="row justify-content-center mt-4">
                @if($blogs->isEmpty())
                    <h1 class="text-center">No Post In Our Blog</h1>
                @else
                    @foreach($blogs as $blog)
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="wrap-blog">
                            <a href="" class="article__grid-image">
                                <img src="{{ $blog->img_path }}" alt="{{$blog->title}}" title="{{$blog->title}}" class="blur-up lazyloaded"/>
                            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h1 class="h3 article__title">
                                    <a href="">{{$blog->title}}</a>
                                    </h1>
                                    <span class="article__date mt-2">{{$blog->created_at}}</span>
                                    <ul class="list--inline article__meta-buttons">
                                        <li><a href="/blog/{{$blog->id}}">Read more</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
        
    </div>
    <!--End Body Content-->

@endsection

