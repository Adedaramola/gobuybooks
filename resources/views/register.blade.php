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
        		<div class="wrapper"><h1 class="page-width">Create an Account</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                    <div class="messages">
                        <!-- Session Status -->
                        <x-auth-success-status class="mb-4" :success="session('success')" />
                        <x-auth-error-status class="mb-4" :error="session('error')" />
                    </div>
                	<div class="mb-4">
                       <form method="POST" action="/register">	
                        @csrf
                          <div class="row">
	                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="FirstName">Full Name</label>
                                        <input type="text" name="name" placeholder="" id="FirstName" autofocus="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail">Email</label>
                                        <input type="email" name="email" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPhone">Phone</label>
                                        <input type="text" name="phone" placeholder="" id="CustomerPhone" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerAddress">Address</label>
                                        <input type="text" name="address" placeholder="" id="CustomerAddress" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword">Password</label>
                                        <input type="password" value="" name="password" placeholder="" id="CustomerPassword" class="">                        	
                                    </div>
                                </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Create">
                                <p>Already have an account? <a href="/login">Login</a></p>
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
@endsection

