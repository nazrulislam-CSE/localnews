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
		<section class="block-wrapper">
			<div class="container">
				<div class="block-content non-sidebar">
					<!-- grid box -->
					<div class="grid-box">
						<div class="title-section">
							<h1><span class="world">{{ $category->name }}</span></h1>
						</div>
						<div class="row">
							@if($posts->count() > 0)
							@foreach($posts as $post)
							<div class="col-md-6">
								<a href="{{ route('edit.post',['id'=>$post->id]) }}" class="btn btn-danger">Edit Post</a>
								<div class="block-content">
									<div class="grid-box">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img width="570" height="330"  src="{{ asset($post->featured) }}" alt="">
												<a class="category-post tech" href="#">{{ $post->category->name }}</a>
											</div>
											<div class="post-title">
												<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ Str::limit($post->title,60) }}</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
													<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
													<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
													<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
												</ul>
											</div>
											<div class="post-content">
												<p>
													<?php $des =  strip_tags(html_entity_decode($post->content))?>
													{{ Str::limit($des, $limit = 200, $end = '. . .') }}
												</p>
												<a href="{{ route('post.single',['slug'=>$post->slug]) }}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="justify-content-center">
								
							</div>
							@endforeach()
							@else
								<span class="text-danger">এখানে কোন পোস্ট খুঁজে পাওয়া যাচ্ছে না!</span>
							@endif()
						<!-- block content -->
						<!-- End block content -->
						</div>
						<div class="justify-content-center">
							{{ $posts->links() }}
						</div>
					</div>
					<div class="col-lg-12">
						<!-- sidebar -->
						<div class="sidebar">
							<div class="widget tags-widget">
								<div class="title-section">
									<h1><span>All Popular Tags</span></h1>
								</div>

								<ul class="tag-list">
									@foreach($tags as $tag)
									<li><a href="{{route('post.tag',['id'=>$tag->id]) }}">{{ $tag->name }}</a></li>
									@endforeach()
								</ul>

							</div>
							</div>
						</div>
						<!-- End sidebar -->
					</div>
					<!-- End grid box -->
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