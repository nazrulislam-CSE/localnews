<!-- footer
            ================================================== -->
		<footer>
			<div class="container">
				<div class="footer-widgets-part">
					<div class="row">
						<div class="col-md-3">
							<div class="widget text-widget">
								<h1>About</h1>
								<p style="">{!! $siteinfo->about_site !!}</p>
								<p></p>
							</div>
							<div class="widget social-widget">
								<h1>Stay Connected</h1>
								<ul class="social-icons">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
									<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
									<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget posts-widget">
								<h1>Random Post</h1>
								<ul class="list-posts">
									@foreach($random->take(4) as $post)
									<li>
										<img src="{{ asset($post->featured) }}" alt="">
										<div class="post-content">
											<a href="{{ route('post.category',['id'=>$post->id]) }}">{{ $post->category->name }}</a>
											<h2><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
											</ul>
										</div>
									</li>
									@endforeach()
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget categories-widget">
								<h1>Hot Categories</h1>
								<ul class="category-list">
									@foreach($categories->take(14) as $category)
									<li>
										<a href="{{ route('post.category',['id'=>$category->id]) }}">
											{{ $category->name }}
											<span>{{ DB::table('posts')->where('category_id', '=', $category->id)->count() }}</span>
										</a>
									</li>
									@endforeach
									<!-- <li>
										<a href="#">Sport <span>26</span></a>
									</li>
									<li>
										<a href="#">LifeStyle <span>55</span></a>
									</li>
									<li>
										<a href="#">Fashion <span>37</span></a>
									</li>
									<li>
										<a href="#">Technology <span>62</span></a>
									</li>
									<li>
										<a href="#">Music <span>10</span></a>
									</li>
									<li>
										<a href="#">Culture <span>43</span></a>
									</li>
									<li>
										<a href="#">Design <span>74</span></a>
									</li>
									<li>
										<a href="#">Entertainment <span>11</span></a>
									</li>
									<li>
										<a href="#">video <span>41</span></a>
									</li>
									<li>
										<a href="#">Travel <span>11</span></a>
									</li>
									<li>
										<a href="#">Food <span>29</span></a>
									</li> -->
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget flickr-widget">
								<h1>Flickr Photos</h1>
								<ul class="flickr-list">
									@foreach($random->skip(10)->take(6) as $post)
									<li><a href="{{ route('post.single',['slug'=>$post->slug]) }}"><img src="{{ asset($post->featured) }}" alt=""></a></li>
									@endforeach()
								</ul>
								<a href="#">View more photos...</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p>{{ $siteinfo->copyright_text }}</p>
						</div>
						<div class="col-md-6">
							<nav class="footer-nav">
								<ul>
									@foreach($footer->take(5) as $top)
									<li><a href="#">{{ $top->name }}</a></li>
									@endforeach()
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer
            ================================================== -->