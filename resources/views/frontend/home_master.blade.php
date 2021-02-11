@php
    $seo = DB::table('seos')->first();    
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ $seo->meta_author }}">
        <meta name="keyword" content="{{ $seo->meta_keyword }}">
        <meta name="description" content="{{ $seo->meta_description }}">
        <meta name="google-verifications" content="{{ $seo->google_verifications }}">

        <title>{{ $seo->meta_title }}</title>
       
        <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('frontend/style.css')}}" rel="stylesheet">
        <link href="{{ asset('frontend/css/menu.css')}}" rel="stylesheet">
        <link href="{{ asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{ asset('frontend/css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

    </head>
    <body>
    <!-- header-start -->
	@include('frontend.body.header')

    <!-- body --->

    @yield('content')
	
    <!-- body --->

	
	<!-- top-footer-start -->
	
	@include('frontend.body.footer')
	
	
	
	
		<script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
		<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('frontend/js/main.js')}}"></script>
		<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
	</body>
</html> 