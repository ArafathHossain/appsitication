



<nav class="navbar megamenu">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
						<span class="sr-only" >Toggle navigation</span>
						<span class="icon-bar" ></span>
						<span class="icon-bar" ></span>
						<span class="icon-bar btmone" ></span>
					</button>
								<a class="site-logo" href="{{route('index')}}"><img style="max-width: 160px;" src="{{asset('website_resorce/images/logo-2.png')}}" alt="site logo" /></a>
						</div>
				<div id="js-bootstrap-offcanvas" class="navbar-offcanvas navbar-offcanvas-touch main-nav" >
												
									
					<ul class="nav navbar-nav navbar-right"><li id="menu-item-312" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-312 li-img-has"><a href="{{route('index')}}"class="active">Home</a></li>
						
						

						
						<li class="dropdown mega-menu-fullwidth" style="padding-bottom: 12px">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">
								Services
							</a>
							<ul class="dropdown-menu" style=" background-color:; left: 60px; width: auto;" >
								<li>
									<div class="mega-menu-content disable-icons" style=" margin-left: 20px; margin-bottom: 10px">
										<div class="container" >
											<div class="row equal-height" >
												
												@foreach($subcategories as $subcategorie)
									@php $catgoryidByname = App\Product::where('sub_category_id', $subcategorie->id)->orderBy('id', 'desc')->get(); @endphp
												
												<div class="col-md-2 equal-height-in">
													<ul class="list-unstyled equal-height-list" style="font-weight: bold" >
														<li style=" color:#243F50;"><h3>{{$subcategorie->name}}</h3></li>
														<hr>
																 @foreach($catgoryidByname as $productevalue)												
														<li><a href="{{ route('view_details', $productevalue->slug) }}"><i class="fa fa-angle-right"></i>  {{$productevalue->title}} </a></li>
														<br>
													
														@endforeach
													</ul>
													
												</div>
												@endforeach
												
												
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
						
						
						

						
<li id="menu-item-309" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-309 li-img-has"><a href="{{route('about')}}">Why Us</a></li>
<li id="menu-item-311" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-311 li-img-has"><a href="{{route('portfolio')}}">Portfolio</a></li>
<li id="menu-item-313" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-313 li-img-has"><a href="{{route('blog')}}">blog</a></li>
<li id="menu-item-308" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-308 li-img-has"><a href="{{route('Contact')}}
	">Contact</a></li>
</ul>				</div>
			</div>
		</nav>