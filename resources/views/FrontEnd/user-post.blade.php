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
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- grid box -->
							<div class="grid-box">
								<div class="title-section">
									<h1><span>Author Details</span></h1>
								</div>

								<ul class="autor-list">

									<li>

										<div class="autor-box">

											<img width="100" height="100" src="{{ asset($user->profile->avater) }}" alt="">

											<div class="autor-content">

												<div class="autor-title">
													<h1><span>{{ $user->name }}</span><a href="#">{{ DB::table('posts')->where('user_id', '=', $user->id)->count() }} Posts</a></h1>
													<ul class="autor-social">
														<li><a href="{{ $user->profile->facebook }}" class="facebook"><i class="fa fa-facebook"></i></a></li>
														<li><a href="{{ $user->profile->youtube }}" class="youtube"><i class="fa fa-youtube"></i></a></li>
														<li><a href="{{ $user->profile->twitter }}" class="twitter"><i class="fa fa-twitter"></i></a></li>
														<li><a href="{{ $user->profile->google }}" class="google"><i class="fa fa-google-plus"></i></a></li>
													</ul>
												</div>

												<p>
													{{ $user->profile->about }} 
												</p>

											</div>

										</div>

										<!-- <div class="autor-last-line">
											<ul class="autor-tags">
												<li><span><i class="fa fa-bars"></i>Category</span></li>
												<li><a href="#">Fashion</a></li>
												<li><a href="#">Politics</a></li>
												<li><a href="#">Sport</a></li>
											</ul>
											<a href="#" class="autor-site">http://www.janesmith.com</a>
										</div> -->

									</li>

								</ul>

								<div class="row">
									@if($posts->count() > 0)
									@foreach($posts as $post)
									<div class="col-md-6">
										<div class="d-flex">
											<span><a href="{{ route('edit.post',['id'=>$post->id]) }}" class="btn btn-danger">Edit Post</a></span>
											<span class="pull-right"><h4>{{ $post->views }} views</h4></span>
										</div>
										<div class="news-post image-post2">
											<div class="post-gallery">
												<img width="330" height="260" src="{{ asset($post->featured) }}" alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<a class="category-post fashion" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
														<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString()}}</li>
															<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
															<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="post-content">
												<a href="{{ route('post.single',['slug'=>$post->slug]) }}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
									@endforeach()
									@else
									<span class="text-danger">এখানে কোন পোস্ট খুঁজে পাওয়া যাচ্ছে না!</span>
									@endif()
								</div>
								<!-- <div class="center-button">
									<a href="#"><i class="fa fa-refresh"></i> Show me more</a>
								</div> -->

							</div>
							<div class="text-left">
			                   {{ $posts->links() }}
			               </div>
							<!-- End grid box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<div class="sidebar">

							<div class="widget social-widget">
								<div class="title-section">
									<h1><span>Stay Connected</span></h1>
								</div>
								<ul class="social-share">
									<li>
										<a href="#" class="rss"><i class="fa fa-rss"></i></a>
										<span class="number">9,455</span>
										<span>Subscribers</span>
									</li>
									<li>
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<span class="number">56,743</span>
										<span>Fans</span>
									</li>
									<li>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<span class="number">43,501</span>
										<span>Followers</span>
									</li>
									<li>
										<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
										<span class="number">35,003</span>
										<span>Followers</span>
									</li>
								</ul>
							</div>

							<div class="widget features-slide-widget">
								<div class="title-section">
									<h1><span>Featured Posts</span></h1>
								</div>
								<div class="image-post-slider">
									<ul class="bxslider">
										<li>
											<div class="news-post image-post2">
												<img src="upload/news-posts/im3.jpg" alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
															<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
															<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															<li><i class="fa fa-eye"></i>872</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="news-post image-post2">
												<img src="upload/news-posts/im1.jpg" alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
															<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
															<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															<li><i class="fa fa-eye"></i>872</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="news-post image-post2">
												<img src="upload/news-posts/im2.jpg" alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
															<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
															<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															<li><i class="fa fa-eye"></i>872</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="widget tab-posts-widget">

								<ul class="nav nav-tabs" id="myTab">
									<li class="active">
										<a href="#option1" data-toggle="tab">জনপ্রিয়</a>
									</li>
									<li>
										<a href="#option2" data-toggle="tab">সাম্প্রতিক</a>
									</li>
									<li>
										<a href="#option3" data-toggle="tab">শীর্ষ পর্যালোচনা</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="option1">
										<ul class="list-posts">
											@foreach($popular as $post)
											<li>
												<img src="{{ asset($post->featured) }}" alt="">
												<div class="post-content">
													<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
													</ul>
												</div>
											</li>
											@endforeach()
										</ul>
									</div>
									<div class="tab-pane" id="option2">
										<ul class="list-posts">
											@foreach($recent as $post)
											<li>
												<img src="{{ asset($post->featured) }}" alt="">
												<div class="post-content">
													<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
													</ul>
												</div>
											</li>
											@endforeach()
										</ul>										
									</div>
									<div class="tab-pane" id="option3">
										<ul class="list-posts">
											@foreach($topreviews as $post)
											<li>
												<img src="{{ asset($post->featured)}}" alt="">
												<div class="post-content">
													<h2><a target="_blank" href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
													</ul>
												</div>
											</li>
											@endforeach
										</ul>										
									</div>
								</div>
							</div>

							<!-- <div class="widget post-widget">
								<div class="title-section">
									<h1><span>Featured Video</span></h1>
								</div>
								@foreach($featured_video as $post)
								<div class="news-post video-post">
									<img alt="" src="{{ asset($post->featured) }}">
									<a href="https://www.youtube.com/watch?v=gVyezX1IChI&list=RDgVyezX1IChI&start_radio=1" class="video-link"><i class="fa fa-play-circle-o"></i></a>
									<div class="hover-box">
										<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
										</ul>
									</div>
								</div>
								<p>{!! $post->content !!}</p>
							</div>
							@endforeach() -->
							<div class="widget subscribe-widget">
								<form class="subscribe-form">
									<h1>Subscribe to RSS Feeds</h1>
									<input type="text" name="email" id="subscribe" placeholder="Email"/>
									<button id="submit-subscribe">
										<i class="fa fa-arrow-circle-right"></i>
									</button>
									<p>Get all latest content delivered to your email a few times a month.</p>
								</form>
							</div>

							<div class="widget tags-widget">

								<div class="title-section">
									<h1><span>Popular Tags</span></h1>
								</div>

								<ul class="tag-list">
									@foreach($tag as $tag)
										<li><a href="{{route('post.tag',['id'=>$tag->id]) }}">{{ $tag->name }}</a></li>
									@endforeach()
								</ul>

							</div>

							<div class="advertisement">
								<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="{{ asset('FrontEndMagazine/upload/addsense/f.gif') }}" alt="">
								</div>
							</div>
							</div>

						</div>
						<!-- End sidebar -->

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