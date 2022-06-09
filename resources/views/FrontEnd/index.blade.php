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
<body class="boxed">

	<!-- Container -->
	<div id="container">
		@include('includes.header')
		<!-- heading-news-section2
			================================================== -->
		<section class="heading-news2">

			<div class="container">
				
				<div class="ticker-news-box">
					<span class="breaking-news">সর্বশেষ</span>
					<ul id="js-news">
						@foreach($brekingnews as $post)
						<li class="news-item"><span class="time-news"></span>
							<a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a>
						</li>
						@endforeach
					</ul>
				</div>

				<div class="iso-call heading-news-box">
					<div class="image-slider snd-size">
						<span class="top-stories">TOP STORIES</span>
						<ul class="bxslider">
							@foreach($post_slide1 as $post)
							<li>
								<div class="news-post image-post">
									<img width="586" height="490" src="{{ asset($post->featured) }}" alt="">
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post sport" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
											<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
												<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
												<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
												<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
												<li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>

					<div class="news-post image-post default-size">
						@foreach($post_one as $post)
						<img width="293" height="245" src="{{ asset($post->featured) }}" alt="image">
						<div class="hover-box">
							<div class="inner-hover">
								<a class="category-post travel" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
								<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><span>{{ $post->created_at->toFormattedDateString() }}</span></li>
									<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
									<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
								</ul>
								<p>
									<?php $des =  strip_tags(html_entity_decode($post->content))?>
									{{ Str::limit($des, $limit = 100, $end = '. . .') }}
								</p>
							</div>
						</div>
						@endforeach
					</div>
					<div class="news-post image-post">
						@foreach($post_two as $post)
						<img width="293" height="245" src="{{ asset($post->featured) }}" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<a class="category-post food" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
								<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><span>{{ $post->created_at->toFormattedDateString() }}</span></li>
									<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li> -->
									<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
								</ul>
								<p>
									<?php $des =  strip_tags(html_entity_decode($post->content))?>
									{{ Str::limit($des, $limit = 100, $end = '. . .') }}
								</p>
							</div>
						</div>
						@endforeach
					</div>

					<div class="news-post image-post">
						@foreach($post_three as $post)
						<img width="293" height="236" src="{{ asset($post->featured) }}" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<a class="category-post sport" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
								<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }} </a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><span>{{ $post->created_at->toFormattedDateString() }}</span></li>
									<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
									<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
								</ul>
								<p>
									<?php $des =  strip_tags(html_entity_decode($post->content))?>
									{{ Str::limit($des, $limit = 100, $end = '. . .') }}
								</p>
							</div>
						</div>
						@endforeach
					</div>

					<div class="news-post image-post">
						@foreach($post_four as $post)
						<img width="293" height="236" src="{{ asset($post->featured) }}" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<a class="category-post fashion" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
								<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><span>{{ $post->created_at->toFormattedDateString() }}</span></li>
									<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
									<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
								</ul>
								<p>
									<?php $des =  strip_tags(html_entity_decode($post->content))?>
									{{ Str::limit($des, $limit = 100, $end = '. . .') }}
								</p>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>

		</section>
		<!-- End heading-news-section -->

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
									<h1><span>আজকের খবর</span></h1>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="news-post image-post2">
											@foreach($featured_one as $post)
											<div class="post-gallery">
												<img width="368" height="300"  src="{{ asset($post->featured) }}" alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<a class="category-post tech" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
														<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
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
										</div>
									</div>

									<div class="col-md-6">
										<ul class="list-posts">
											@foreach($featured_two as $post)
											<li>
												<img width="100" height="86"  src="{{ asset($post->featured) }}" alt="">
												<div class="post-content">
													<a href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
													<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
														<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
													</ul>
												</div>
											</li>
											@endforeach
										</ul>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="news-post image-post2">
											@foreach($featured_three as $post)
											<div class="post-gallery">
												<img width="368" height="300"  src="{{ asset($post->featured) }}" alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<a class="category-post tech" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
														<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
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
										</div>
									</div>

									<div class="col-md-6">
										<ul class="list-posts">
											@foreach($featured_four as $post)
											<li>
												<img width="100" height="86"  src="{{ asset($post->featured) }}" alt="">
												<div class="post-content">
													<a href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
													<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
														<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
													</ul>
												</div>
											</li>
											@endforeach
										</ul>
									</div>

								</div>
								<div class="center-button">
									<a href="#"><i class="fa fa-refresh"></i> More from featured</a>
								</div>

							</div>
							<!-- End grid box -->

							<!-- google addsense -->
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="{{asset('FrontEndMagazine/upload/addsense/blog.gif') }}" alt="">
								</div>
							</div>
							<!-- End google addsense -->
							<!-- grid box -->
							<div class="grid-box">

								<div class="title-section">
									<h1><span>{{ $national->name }}</span></h1>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="news-post image-post2">
											@foreach($national->posts()->take(1)->get() as $post)
											<div class="post-gallery">
												<img width="368" height="300"  src="{{ asset($post->featured) }}" alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<a class="category-post tech" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
														<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
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
										</div>
									</div>
									<div class="col-md-6">
										<ul class="list-posts">
											@foreach($national->posts()->take(3)->get() as $post)
											<li>
												<img width="100" height="86"  src="{{ asset($post->featured) }}" alt="">
												<div class="post-content">
													<a href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
													<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
														<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
													</ul>
												</div>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
								<div class="center-button">
									<a href="#"><i class="fa fa-refresh"></i> More from featured</a>
								</div>

							</div>
							<div class="grid-box">

								<div class="title-section">
									<h1><span>{{ $capital->name }}</span></h1>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="news-post image-post2">
											@foreach($capital->posts()->take(1)->get() as $post)
											<div class="post-gallery">
												<img width="368" height="300"  src="{{ asset($post->featured) }}" alt="">
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
										</div>
									</div>
									<div class="col-md-6">
										<ul class="list-posts">
											@foreach($capital->posts()->take(3)->get() as $post)
											<li>
												<img width="100" height="86"  src="{{ asset($post->featured) }}" alt="">
												<div class="post-content">
													<a href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
													<h2><a target="_blank" href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
														<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
													</ul>
												</div>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
								<div class="center-button">
									<a href="#"><i class="fa fa-refresh"></i> More from featured</a>
								</div>

							</div>
							<div class="grid-box">

								<div class="title-section">
									<h1><span>{{ $country->name }}</span></h1>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="news-post image-post2">
											@foreach($country->posts()->take(1)->get() as $post)
											<div class="post-gallery">
												<img width="368" height="300"  src="{{ asset($post->featured) }}" alt="">
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
										</div>
									</div>
									<div class="col-md-6">
										<ul class="list-posts">
											@foreach($country->posts()->take(3)->get() as $post)
											<li>
												<img width="100" height="86"  src="{{ asset($post->featured) }}" alt="">
												<div class="post-content">
													<a href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
													<h2><a target="_blank" href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
														<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
													</ul>
												</div>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
								<div class="center-button">
									<a href="#"><i class="fa fa-refresh"></i> More from featured</a>
								</div>

							</div>
							<!-- grid-box -->
						<div class="grid-box">
								<div class="title-section">
									<h1><span class="world">{{ $entertainment->name }}</span></h1>
								</div>
								<div class="row">
									@foreach($entertainment->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
									<div class="col-md-4">
										<div class="news-post standard-post2">
										<div class="post-gallery">
											<img width="270" height="200"  src="{{ asset($post->featured) }}" alt="">
											<a class="category-post tech" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
										</div>
										<div class="post-title">
											<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
												<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
												<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
												<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
											</ul>
										</div>
										</div>
									</div>
									@endforeach
								</div>
							</div> 
							
							<!-- End grid-box -->

							<!-- google addsense -->
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="{{asset('FrontEndMagazine/upload/addsense/b.gif') }}" alt="">
								</div>
							</div>
							<!-- End google addsense -->

							<!-- article box -->
							<div class="article-box">

								<div class="title-section">
									<h1><span>{{ $lifestyle->name }}</span></h1>
								</div>

								<div class="news-post article-post">
									<div class="row">
										<div class="row">
										@foreach($lifestyle->posts()->orderBy('created_at','desc')->take(1)->get() as $post)
										<div class="col-sm-5">
											<div class="post-gallery">
												<img alt="" src="{{ asset($post->featured) }}">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="post-content">
												<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
													<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
													<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
													<!-- <li><i class="fa fa-eye"></i>872</li> -->
												</ul>
												<p>
													<?php $des =  strip_tags(html_entity_decode($post->content))?>
													{{ Str::limit($des, $limit = 350, $end = '. . .') }}
												</p>
												<a href="{{ route('post.single',['slug'=>$post->slug]) }}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
										@endforeach()
									</div>
									</div>
								</div>
							</div>
							<!-- End article box -->

							<!-- pagination box -->
							<!-- <div class="pagination-box">
								<ul class="pagination-list">
									<li><a class="active" href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><span>...</span></li>
									<li><a href="#">9</a></li>
									<li><a href="#">Next</a></li>
								</ul>
								<p>Page 1 of 9</p>
							</div> -->
							<!-- End Pagination box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<div class="sidebar">
							<div class="widget social-widget">
								<div class="title-section">
									<h1><span>STAY CONNECTED</span></h1>
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
													<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
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
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="{{ asset('FrontEndMagazine/upload/addsense/g.gif') }}" alt="">
								</div>
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
															<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
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
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="{{ asset('FrontEndMagazine/upload/addsense/d.png') }}" alt="">
								</div>
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
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="{{ asset('FrontEndMagazine/upload/addsense/h.gif') }}" alt="">
								</div>
							</div>

							<div class="widget post-widget">
								<div class="title-section">
									<h1><span>Featured Video</span></h1>
								</div>
								<div class="news-post video-post">
									<img alt="" src="{{ asset($featured_video->featured) }} ">
									<a href="https://www.youtube.com/watch?v=NHSZ2_kV4cM&list=RD-B-Blw7Fd-w&index=20" class="video-link"><i class="fa fa-play-circle-o"></i></a>
									<div class="hover-box">
										<h2><a target="_blank" href="{{ route('post.single',['slug'=>$featured_video->slug]) }}">{{ $featured_video->title }}</a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i>{{ $featured_video->created_at->toFormattedDateString() }}</li>
										</ul>
									</div>
								</div>
								<!-- <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis. </p> -->
							</div>

							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="{{ asset('FrontEndMagazine/upload/addsense/f.gif') }}" alt="">
								</div>
							</div>
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="{{ asset('FrontEndMagazine/upload/addsense/e.jpg') }}" alt="">
								</div>
							</div>
						</div>
						<!-- End sidebar -->

					</div>


				</div>
				<div class="grid-box">
					<div class="title-section">
						<h1><span class="world">{{ $world_news->name }}</span></h1>
					</div>
					<div class="row">
						@foreach($world_news->posts()->orderBy('created_at','desc')->take(4)->get() as $post)
						<div class="col-sm-4 col-lg-3 col-md-6">
							<div class="news-post standard-post2">
							<div class="post-gallery">
								<img width="270" height="200"  src="{{ asset($post->featured) }}" alt="">
								<a class="category-post tech" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
							</div>
							<div class="post-title">
								<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
									<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
									<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
									<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
								</ul>
							</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="grid-box">
					<div class="title-section">
						<h1><span class="world">{{ $play->name }}</span></h1>
					</div>
					<div class="row">
						@foreach($play->posts()->orderBy('created_at','desc')->take(4)->get() as $post)
						<div class="col-sm-4 col-lg-3 col-md-6">
							<div class="news-post standard-post2">
							<div class="post-gallery">
								<img width="270" height="200"  src="{{ asset($post->featured) }}" alt="">
								<a class="category-post tech" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
							</div>
							<div class="post-title">
								<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
									<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
									<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
									<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
								</ul>
							</div>
							<!-- <div class="post-content">
								<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
								<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
							</div> -->
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="grid-box">
					<div class="title-section">
						<h1><span class="world">{{ $politics->name }}</span></h1>
					</div>
					<div class="row">
						@foreach($politics->posts()->orderBy('created_at','desc')->take(4)->get() as $post)
						<div class="col-sm-4 col-lg-3 col-md-6">
							<div class="news-post standard-post2">
							<div class="post-gallery">
								<img width="270" height="200"  src="{{ asset($post->featured) }}" alt="">
								<a class="category-post tech" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
							</div>
							<div class="post-title">
								<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
									<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
									<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
									<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
								</ul>
							</div>
							<!-- <div class="post-content">
								<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
								<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
							</div> -->
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="grid-box">
					<div class="title-section">
						<h1><span class="world">{{ $covin->name }}</span></h1>
					</div>
					<div class="row">
						@foreach($covin->posts()->orderBy('created_at','desc')->take(4)->get() as $post)
						<div class="col-sm-4 col-lg-3 col-md-6">
							<div class="news-post standard-post2">
							<div class="post-gallery">
								<img width="270" height="200"  src="{{ asset($post->featured) }}" alt="">
								<a class="category-post tech" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
							</div>
							<div class="post-title">
								<h2><a  href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
									<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
									<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
									<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
								</ul>
							</div>
							<!-- <div class="post-content">
								<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
								<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
							</div> -->
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="heading-news2" style="background: white;">
					<div class="title-section">
						<h1><span class="world">{{ $picture->name }}</span></h1>
					</div>
					<div class="container">
						<div class="iso-call heading-news-box">
							<div class="image-slider snd-size">
								@foreach($picture->posts()->orderBy('created_at','desc')->take(1)->get() as $post)
								<div class="news-post image-post">
									<img width="586" height="490" src="{{ asset($post->featured) }}" alt="">
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
											<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
												<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
												<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
												<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
												<li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
											</ul>
										</div>
									</div>
								</div>
								@endforeach()
							</div>
							@foreach($picture->posts()->orderBy('created_at','desc')->take(4)->get() as $post)
							<div class="news-post image-post default-size">
								<img width="293" height="240" src="{{ asset($post->featured) }}" alt="">
								<div class="hover-box">
									<div class="inner-hover">
										<a class="category-post" href="{{ route('post.category',['id'=>$post->category->id]) }}">{{ $post->category->name }}</a>
										<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><span>{{ $post->created_at->toFormattedDateString() }}</span></li>
											<li><i class="fa fa-user"></i>by <a href="#">{{ $post->user->name }}</a></li>
											<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
											<li><i class="fa fa-eye"></i>{{ $post->views }}</li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach()
						</div>	
					</div>
				</div>
				</div>
			</div>
			</div>
		</section>
		<!-- block-wrapper-section
			================================================== -->
		@include('includes.footer')

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