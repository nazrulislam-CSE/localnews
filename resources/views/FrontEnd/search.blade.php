<!doctype html>
<html lang="en" class="no-js">
<!--
Development By: Nazrul Islam Suzon
         Phone: 01783465103
         Email: nsuzon02@gmail.com
-->
<head>
	<title>{{ $siteinfo->sitename }}</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- Start Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('FrontEndMagazine/images/icon.ico')}}">
	<!-- End Favicon -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEndMagazine/css/bootstrap.min.css') }}" media="screen">	
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEndMagazine/css/jquery.bxslider.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEndMagazine/css/font-awesome.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEndMagazine/css/magnific-popup.css') }}" media="screen">	
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEndMagasine/css/owl.carousel.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('FrontEndMagazine/css/owl.theme.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEndMagazine/css/ticker-style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEndMagazine/css/style.css') }}" media="screen">

</head>
<body>

	<!-- Container -->
	<div id="container">

		<!-- Header
		    ================================================== -->
		@include('includes.header')
		<!-- End Header -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper" style="margin-top:30px;">
			<div class="container">
				<div class="row">
					<div class="grid-box">
								<div class="title-section">
									<h1><span>All Search Post</span></h1>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="news-post image-post2">
											@if($posts->count() > 0)
											@foreach($posts as $post)
											<div class="post-gallery">
												<img width="300" height="300" style="margin-top: 50px;" src="{{ asset($post->featured) }}" alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<a class="category-post tech" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
														<h2><a target="_blank" href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
															<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
															<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
															<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
															<!-- <li><i class="fa fa-eye"></i>872</li> -->
														</ul>
													</div>
												</div>
											</div>
											@endforeach
											@else
											<span class="text-danger">এখানে কোন পোস্ট খুঁজে পাওয়া যাচ্ছে না!</span>
											@endif()
										</div>
									</div>
								</div>
							</div>
				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- footer 
			================================================== -->
		@include('includes.footer')
		<!-- End footer -->

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/jquery.migrate.js') }}"></script>
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/jquery.bxslider.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/jquery.ticker.js') }}"></script>
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/jquery.imagesloaded.min.js') }}"></script>
  	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/jquery.isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/retina-1.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('FrontEndMagazine/js/script.js') }}"></script>

</body>
</html>
<!--
Development By: Nazrul Islam Suzon
         Phone: 01783465103
         Email: nsuzon02@gmail.com
-->