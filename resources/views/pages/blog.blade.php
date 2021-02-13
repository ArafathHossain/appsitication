<!DOCTYPE html>
<html lang="en-US" >
  
<!-- Mirrored from demo.nrgthemes.com/projects/valence/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 15:16:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" >
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" >
    <meta name="format-detection" content="telephone=no" />
        <title>Blog &#8211; Application</title>
		@include('partiles.up_script_style')
	</head>
<body class="blog animsition wpb-js-composer js-comp-ver-5.4.7 vc_responsive" data-spy="scroll" data-offset="80" >
	<div class="se-pre-con" >
		<div class="timer"><span>Wait ...</span></div>
	</div>

	    <header class="not-index-header contact-page-header" >
			@include('partiles.nav')
	  <div class="animation-header">
    <span class='stars'></span>
    <span class="starsbg"></span>
    <span class="white-background-header"></span>
  </div>
  			<div class="container">
				<div class="row headline_inner">
											<div class="col-md-12 left-align">
							<h5>BLOG									<span>Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit.</span>
															</h5>
						</div>
									</div>
			</div>
		  </header>
<div class="blog-page blog-short-code">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        			<h1 class="page-header blog-header-tittle">
				News & Artical						<small>by Admin</small>
								</h1>
		  
		  @foreach($blogproducts as $blogproduct)
<article class="post-show wow fadeIn post-54 post type-post status-publish format-standard has-post-thumbnail hentry category-hosting category-server category-website category-whmcs tag-hosting tag-server tag-wcmcs" data-wow-delay="0.1s">
	<span class="cmsmasters-post-date ">
	<span class="cmsmasters-day">Created at: {{$blogproduct->created_at-> format('d-m-y')}}</span>
	</span>
		<figure class="cmsmasters_img_rollover_wrap preloader">
			<div class="info-post">
			<img width="580" height="350" src="{{asset('images/blogproducts/' . $blogproduct->image)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="{{asset('images/blogproducts/' . $blogproduct->image)}}" sizes="(max-width: 580px) 100vw, 580px" />
			<span>
				<a href=""><i class="fa fa-user-circle" aria-hidden="true"></i> ValenceUser</a>
				<a href=""><i class="fa fa-commenting" aria-hidden="true"></i> 4</a>
			</span>
			</div>
				<div class="post-sub">
					<h2>
						<a href="{{ route('blog_view', $blogproduct->slug) }}" title="" class="post-link">{{$blogproduct->title}}</a>
					</h2>
				</div>
		<div class="blog-text-demo"><p>{{ $string = Str::words(strip_tags($blogproduct->description) ,30) }}</p>
		</div>
		</figure>
</article>
                  @endforeach       
                          </div>
		<div class="pagination" align="center" style="text-align:center;"> 
			  {{ $blogproducts->links() }}
		   </div>
      <div class="col-md-4 blog-sidebar">
		  
        	<div class="widget widget_search"><form role="search" method="get" class="search-form" action="http://google.com">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form></div>
		  
		  <div class="widget widget_categories"><h4 class="widget-title-w">Blog categories</h4>		<ul>
		  @foreach($blogcategories as $blogblogcategorie)
	<li class="cat-item cat-item-2"><a href="{{ route('category_wise_blog', $blogblogcategorie->id) }}" >{{$blogblogcategorie->name}}</a>
</li>
		  @endforeach
		</ul>
</div>
		  <div class="widget widget_tag_cloud"><h4 class="widget-title-w">Tags</h4>
			   <div class="sidebar-widget latest-news">
                    <div class="sidebar-title"><h3>Recent Post</h3></div>
                    <div class="widget-content">
					@foreach($blogproducts3 as $blogproducts3)
                        <article class="post">
                            <div class="post-thumb"><a href="{{ route('blog_view', $blogproducts3->slug) }}"><img src="{{asset('images/blogproducts/' . $blogproducts3->image)}}" alt=""></a></div>
                            <h3><a href="{{ route('blog_view', $blogproducts3->slug) }}">{{$blogproducts3->title}}</a></h3>
                        </article>
							@endforeach
						
                    </div>
                </div>   
			</div>  

</div>
    </div>
  </div>
</div>
  
	  @include('partiles.footer')
	@include('partiles.bottom_script')
	
  </body>

</html>
