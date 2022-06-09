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

		<!-- ticker-news-section
			================================================== -->
		<section class="ticker-news">

			<div class="container">
				<div class="ticker-news-box">
					<span class="breaking-news">breaking news</span>
					<span class="new-news">New</span>
					<ul id="js-news">
						@foreach($brekingnews as $posts)
						<li class="news-item"><span class="time-news"></span>  <a href="{{ route('post.single',['slug'=>$posts->slug]) }}">{{ $posts->title }}</a></li>
						@endforeach()
					</ul>
				</div>
			</div>

		</section>
		<!-- End ticker-news-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">

								<div class="title-post">
									<h1>{{ $post->title }} <a href="{{ route('edit.post',['id'=>$post->id]) }}" class="btn btn-danger" style="margin-left: 10px;">Edit Post</a></h1>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
										<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
										<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>0</span></a></li> -->
										<li><i class="fa fa-eye"></i>{{ $counter }}</li>
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
									</ul>
								</div>

								<div class="post-gallery">
									<span class="pull-right"><h4>{{ $post->views }} views</h4></span>
									<img width="770" height="380" src="{{ asset($post->featured) }}" alt="">
									<!-- <span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span> -->
								</div>

								<div class="post-content">

									{!! $post->content !!}
								</div>
								<!-- <div class="article-inpost">
									<div class="row">
										<div class="col-md-6">
											<div class="image-content">
												<div class="image-place">
													<img src="{{ asset($post->featured) }}" alt="">
													<div class="hover-image">
														<a class="zoom" href="{{ asset($post->featured) }}">
															<i class="fa fa-arrows-alt"></i>
														</a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-content">
												<h2>{{ $post->title }}</h2>
												<p>{!! $post->content !!}</p>
											</div>
										</div>
									</div>
								</div> -->

								<div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
										@foreach($post->tags as $tag)
										<li><a href="{{route('post.tag',['id'=>$tag->id]) }}">{{ $tag->name }}</a></li>
										@endforeach()
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on Facebook</a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Share on Twitter</a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
									</ul>
								</div>

								<div class="prev-next-posts">
									@if($prev)
									<div class="prev-post">
										<span class="text-left">পূর্ববর্তী পোস্ট</span>
										<img src="{{ asset($prev->featured) }}" alt="">
										<div class="post-content">
											<h2><a href="{{ route('post.single',['slug'=>$prev->slug]) }}" title="prev post">{{ $prev->title }}</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>{{ $prev->created_at->toFormattedDateString() }}</li>
												<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>11</span></a></li> -->
												<li><i class="fa fa-eye"></i>{{ $prev->views }}</li>
											</ul>
										</div>
									</div>
									@elseif(!$prev)
										<div class="prev-post">
											<h3 class="text-danger">পূর্ববর্তী পোস্ট খুঁজে পাওয়া যায়নি !</h3>
										</div>
									@endif()
									@if($next)
									<div class="next-post">
										<span class="text-left">পরবর্তী পোস্ট</span>
										<img src="{{ asset($next->featured) }}" alt="">
										<div class="post-content">
											<h2><a  href="{{ route('post.single',['slug'=>$next->slug]) }}" title="next post">{{ $next->title }}</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>{{ $next->created_at->toFormattedDateString() }}</li>
												<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>8</span></a></li> -->
												<li><i class="fa fa-eye"></i>{{ $next->views }}</li>
											</ul>
										</div>
									</div>
									@elseif(!$next)
										<div class="prev-post">
											<h4 class="text-danger">পরবর্তী পোস্ট খুঁজে পাওয়া যায়নি !</h4>
										</div>
									@endif()
								</div>

								<div class="about-more-autor">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#about-autor" data-toggle="tab">About The Autor</a>
										</li>
										<li>
											<a href="#more-autor" data-toggle="tab">More From Autor</a>
										</li>
									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="about-autor">
											<div class="autor-box">
												<img src="{{asset($post->user->profile->avater) }}" alt="">
												<div class="autor-content">
													<div class="autor-title">
														<h1><span>{{ $post->user->name }}</span><a href="{{ route('post.user')}}">{{ DB::table('posts')->where('user_id', '=', $post->user->id)->count() }} Posts</a></h1>
														<ul class="autor-social">
															<li><a href="{{ $post->user->profile->facebook }}" class="facebook"><i class="fa fa-facebook"></i></a></li>
															<li><a href="{{ $post->user->profile->youtube }}" class="youtube"><i class="fa fa-youtube"></i></a></li>
															<li><a href="{{ $post->user->profile->twitter }}" class="twitter"><i class="fa fa-twitter"></i></a></li>
															<li><a href="{{ $post->user->profile->google }}" class="google"><i class="fa fa-google-plus"></i></a></li>
															<!-- <li><a href="{{ $post->user->profile->instagram }}" class="instagram"><i class="fa fa-instagram"></i></a></li>
															<li><a href="{{ $post->user->profile->linkedin }}" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="{{ $post->user->profile->dribble }}" class="dribble"><i class="fa fa-dribbble"></i></a></li> -->
														</ul>
													</div>
													<p>
														{{ $post->user->profile->about }}
													</p>
												</div>
											</div>
										</div>

										<!-- <div class="tab-pane" id="more-autor">
											<div class="more-autor-posts">

												<div class="news-post image-post3">
													<img src="{{asset($post->user->profile->avater) }}" alt="">
													<div class="hover-box">
														<h2><a href="#">{{ $post->title }}</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="{{asset($post->user->profile->avater) }}" alt="">
													<div class="hover-box">
														<h2><a href="#">{{ $post->title }}</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="{{asset($post->user->profile->avater) }}" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">{{ $post->title }}</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="{{asset($post->user->profile->avater) }}" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">{{ $post->title }}</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
														</ul>
													</div>
												</div>

											</div>
										</div> -->

									</div>
								</div>

								<!-- carousel box -->
								<!-- <div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h1><span>You may also like</span></h1>
									</div>
									<div class="owl-carousel" data-num="3">
									
										<div class="item news-post image-post3">
											<img src="upload/news-posts/art1.jpg" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post image-post3">
											<img src="upload/news-posts/art2.jpg" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post video-post">
											<img src="upload/news-posts/art3.jpg" alt="">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Lorem ipsum dolor sit consectetuer adipiscing elit. Donec odio. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post image-post3">
											<img src="upload/news-posts/art4.jpg" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post image-post3">
											<img src="upload/news-posts/art5.jpg" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>

									</div>
								</div> -->
								<!-- End carousel box -->

								<!-- contact form box -->
								@include('includes.disqus')
								<!-- <div class="contact-form-box">
									<div class="title-section">
										<h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>
									</div>
									<form id="comment-form">
										<div class="row">
											<div class="col-md-4">
												<label for="name">Name*</label>
												<input id="name" name="name" type="text">
											</div>
											<div class="col-md-4">
												<label for="mail">E-mail*</label>
												<input id="mail" name="mail" type="text">
											</div>
											<div class="col-md-4">
												<label for="website">Website</label>
												<input id="website" name="website" type="text">
											</div>
										</div>
										<label for="comment">Comment*</label>
										<textarea id="comment" name="comment"></textarea>
										<button type="submit" id="submit-contact">
											<i class="fa fa-comment"></i> Post Comment
										</button>
									</form>
								</div> -->
								<!-- End contact form box -->

							</div>
							<!-- End single-post box -->

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
										@foreach($featured_post as $post)
										<li>
											<div class="news-post image-post2">
												<div class="post-gallery">
													<img width="368" height="300" src="{{ asset($post->featured) }}" alt="">
													<div class="hover-box">
														<div class="inner-hover">
															<h2><a target="_blank" href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
																<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
																<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
																<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										@endforeach()
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

							<div class="widget post-widget">
								<div class="title-section">
									<h1><span>Featured Video</span></h1>
								</div>
								<div class="news-post video-post">
									<img alt="" src="{{ asset($featured_video->featured) }} ">
									<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
									<div class="hover-box">
										<h2><a target="_blank" href="{{ route('post.single',['slug'=>$featured_video->slug]) }}">{{ $featured_video->title }}</a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i>{{ $featured_video->created_at->toFormattedDateString() }}</li>
											<li><i class="fa fa-eye"></i>{{ $counter }}</li>
										</ul>
									</div>
								</div>
								<p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis. </p>
							</div>

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
									@foreach($tags as $tag)
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