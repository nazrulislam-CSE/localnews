<!-- Header
            ================================================== -->
		<header class="clearfix second-style">
			<!-- Bootstrap navbar -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation">

				<!-- Top line -->
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<ul class="top-line-list">
									@foreach($top_menu as $top)
									<li><a href="#">{{ $top->name }}</a></li>
									@endforeach
								</ul>
							</div>	
							<div class="col-md-3">
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									@if (Route::has('login'))
						                    @auth
						                    <li>
						                    	<a href="{{ url('/dashboard') }}" target="_blank" title="Dashboard is open" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa fa-th-large" aria-hidden="true"></i></a>	
						                    </li>
						                    @else
						                    <li>
						                    	<a target="_blank" href="{{ route('login') }}" title="Sign-in" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
						                    </li>
						                    @endauth
						            @endif
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<!-- End Top line -->

				<!-- Logo & advertisement -->
				<div class="logo-advertisement">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset($siteinfo->logo) }}" alt=""></a>
							<!-- <a href="navbar-brand"><img src="{{ asset($siteinfo->logo)}}" alt=""></a> -->
						</div>

						<div class="advertisement">
							<div class="desktop-advert">
								<span>Bd News24</span>
								<img width="936" height="120" src="{{ asset('FrontEndMagazine/upload/addsense/bd.jpg') }}" alt="">
							</div>
							<!-- <div class="tablet-advert">
								<span>Advertisement</span>
								<img src="{{ asset('FrontEndMagazine/upload/addsense/bd.jpg') }}" alt="">
							</div> -->
						</div>
					</div>
				</div>
				<!-- End Logo & advertisement -->

				<!-- navbar list container -->
				<div class="nav-list-container">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">
								@foreach($main_menu as $main)
								<li class="drop"><a class="home" href="{{ route('post.category',['id'=>$main->id]) }}">{{ $main->name }}</a>
									
									<!-- <ul class="dropdown">
										<li><a href="index.html">Homepage Version 1</a></li>
										<li><a href="home2.html">Homepage Version 2</a></li>
										<li><a href="home3.html">Homepage Version 3</a></li>
										<li><a href="home4.html">Homepage Version 4</a></li>
										<li><a href="home5.html">Homepage Version 5</a></li>
										<li><a href="home6.html">Homepage Version 6</a></li>
									</ul> -->
								</li>
								@endforeach

								<!-- <li><a class="world" href="#">World</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown world-dropdown">
												<div class="filter-block">
													<ul class="filter-posts">
														<li><a href="#">All</a></li>
														<li><a href="#">Politics</a></li>
														<li><a href="#">Business</a></li>
														<li><a class="active" href="#">Lifestyle</a></li>
														<li><a href="#">Economy</a></li>
														<li><a href="#">Music</a></li>
													</ul>
												</div>
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Lifestyle</h1>
														<div class="owl-carousel" data-num="4">
														
															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="{{ asset('FrontEndMagazine/upload/news-posts/art1.jpg') }}" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="{{ asset('FrontEndMagazine/upload/news-posts/art2.jpg') }}" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="{{ asset('FrontEndMagazine/upload/news-posts/art3.jpg') }}" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="{{ asset('FrontEndMagazine/upload/news-posts/art6.jpg') }}" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="{{ asset('FrontEndMagazine/upload/news-posts/art9.jpg') }}" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</li>

								<li><a class="travel" href="news-category3.html">Travel</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown travel-dropdown">

												<div class="owl-wrapper">
													<h1>Latest Posts</h1>
													<div class="owl-carousel" data-num="4">
													
														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art1.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art2.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art3.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art6.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art9.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div>
								</li>

								<li><a class="tech" href="news-category2.html">Tech</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown tech-dropdown">

												<div class="owl-wrapper">
													<ul class="horizontal-filter-posts">
														<li><a class="active" href="#">All</a></li>
														<li><a href="#">Software</a></li>
														<li><a href="#">Internet</a></li>
														<li><a href="#">Mobile</a></li>
													</ul>
													<div class="owl-carousel" data-num="4">
													
														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art1.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art2.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art3.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art6.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('FrontEndMagazine/upload/news-posts/art9.jpg') }}" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div>
								</li>

								<li><a class="fashion" href="news-category6.html">Fashion</a></li>

								<li><a class="video" href="video.html">Video</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown video-dropdown">

												<div class="owl-wrapper">
													<h1>Latest Posts</h1>
													<div class="owl-carousel" data-num="4">
													
														<div class="item news-post video-post">
															<img alt="" src="upload/news-posts/video1.jpg">
															<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
															<div class="hover-box">
																<h2><a href="single-post.html">Lorem ipsum dolor sit consectetuer adipiscing elit. Donec odio. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																</ul>
															</div>
														</div>
													
														<div class="item news-post video-post">
															<img alt="" src="upload/news-posts/video2.jpg">
															<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
															<div class="hover-box">
																<h2><a href="single-post.html">Quisque volutpat mattis eros. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																</ul>
															</div>
														</div>
													
														<div class="item news-post video-post">
															<img alt="" src="upload/news-posts/video3.jpg">
															<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
															<div class="hover-box">
																<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																</ul>
															</div>
														</div>
													
														<div class="item news-post video-post">
															<img alt="" src="upload/news-posts/video4.jpg">
															<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
															<div class="hover-box">
																<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																</ul>
															</div>
														</div>
													
														<div class="item news-post video-post">
															<img alt="" src="upload/news-posts/video1.jpg">
															<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
															<div class="hover-box">
																<h2><a href="single-post.html">Lorem ipsum dolor sit consectetuer adipiscing elit. Donec odio. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																</ul>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div>
								</li>

								<li><a class="sport" href="news-category5.html">Sport</a></li>
								<li><a class="food" href="news-category1.html">Food &amp; Health</a></li>

								<li class="drop"><a class="features" href="#">Features</a>
									<ul class="dropdown features-dropdown">
										<li class="drop"><a href="#">Category Layouts</a>
											<ul class="dropdown level2">
												<li><a href="news-category1.html">Large Image Sidebar</a></li>
												<li><a href="news-category2.html">Left Sidebar Thumbnail</a></li>
												<li><a href="news-category3.html">Both Sidebar</a></li>
												<li><a href="news-category4.html">2 Grid sidebar</a></li>
												<li><a href="news-category5.html">3 Grid no sidebar</a></li>
												<li><a href="news-category6.html">Fullwidth &amp; slider</a></li>
											</ul>
										</li>
										<li class="drop"><a href="#">Header Layouts</a>
											<ul class="dropdown level2">
												<li><a href="index.html">Default header</a></li>
												<li><a href="header2.html">header 2</a></li>
												<li><a href="header3.html">header 3</a></li>
												<li><a href="header4.html">header 4</a></li>
												<li><a href="header5.html">header 5</a></li>
											</ul>
										</li>
										<li class="drop"><a href="#">Post Formats</a>
											<ul class="dropdown level2">
												<li><a href="single-post.html">Single Post 1</a></li>
												<li><a href="single-post2.html">Single Post 2</a></li>
												<li><a href="single-post3.html">Single Post 3</a></li>
												<li><a href="single-post4.html">Single Post 4</a></li>
												<li><a href="single-post5.html">Single Post 5</a></li>
												<li><a href="single-post6.html">Single Post 6</a></li>
												<li><a href="single-post7.html">Single Post 7</a></li>
												<li><a href="single-post8.html">Single Post 8</a></li>
											</ul>
										</li>
										<li class="drop"><a href="#">Forum Pages</a>
											<ul class="dropdown level2">
												<li><a href="forums.html">Forums</a></li>
												<li><a href="forum-category.html">Topics</a></li>
												<li><a href="forum-topic.html">Single Topic</a></li>
											</ul>
										</li>
										<li><a href="allfooter.html">All footer widgets</a></li>
										<li><a href="autor-list.html">Autor List</a></li>
										<li><a href="autor-details.html">Autor Details</a></li>
										<li><a href="404-error.html">404 Error</a></li>
										<li><a href="underconstruction.html">Underconstruction</a></li>
										<li><a href="comming-soon.html">Comming soon Page</a></li>
									</ul>
								</li> -->

							</ul>
							<form action="{{ route('post.search') }}" method="get" class="navbar-form navbar-right" role="search">
								<input type="text" id="search" name="search" placeholder="Search here">
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- End navbar list container -->

			</nav>
			<!-- End Bootstrap navbar -->

		</header>
		<!-- End Header