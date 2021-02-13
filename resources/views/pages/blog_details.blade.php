<!DOCTYPE html>
<html lang="en-US" >
  
<!-- Mirrored from demo.nrgthemes.com/projects/valence/does-your-website-need-an-ssl-certificate/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 15:16:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" >
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" >
    <meta name="format-detection" content="telephone=no" />
        <title>Does your website need an SSL certificate 1? &#8211; Valence</title>
			@include('partiles.up_script_style')
	
	</head>
<body class="post-template-default single single-post postid-51 single-format-standard animsition wpb-js-composer js-comp-ver-5.4.7 vc_responsive" data-spy="scroll" data-offset="80" >
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
          <h5>{{$blog_detail->title}}</h5>
        </div>
      </div>
    </div> 

  </header>
  <div class="blog-page blog-short-code">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p class="blog-post-time"><span class="fa fa-clock-o"></span> Posted on{{$blog_detail->created_at-> format('d-m-y')}}          </p>
          <hr>
                      <img class="img-responsive" src="{{asset('images/blogproducts/' . $blog_detail->image)}}" alt="">
            <hr>
                    <p class="blog-post-lead">
            by <a href="">Admin</a>
          </p>
          <hr>
                      
            <hr>
          <p>{!! $blog_detail->description !!}</p>
          <hr>

			<div class="group-title"><h3>Comments</h3></div>
						@foreach($blog_comments as $blog_comments)
                        <div class="comments-area">
                            
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="" alt=""></div> 
                                    <div class="comment-info">
                                        <div class="comment-reply-title" style="color:#071B29;font-size:30px;">{{$blog_comments->name}}</div>
                                        <div class="date" style="color:#071B29; ">Date :{{$blog_comments->created_at-> format('d-m-y')}}</div>
                                    </div>
                                    <div class="text" style="weight=bold;">{{($blog_comments->description)}}</div>
                                </div>
                            </div>
                        </div>
						@endforeach
			
          <div style="display:none !Important;"></div>
          <hr>
	
			
			 <div id="respond" class="comment-respond">
                            <div class="group-title">
                                <h2 id="reply-title" class="comment-reply-title">Leave a Comment</h2>
								<hr>
                            </div>
                            <form method="post" action="{{ route('comment.store') }}"> 
							@csrf
							
							<input type="hidden" class="form-control" id="blog_id" name="blog_id" value="{{ $blog_detail->slug }}" required="">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"placeholder="Name" required="">
                                </div>
								
                                <div class="form-group">
								<input type="text" class="form-control" id="email_id" name="email_id" placeholder="Mail Address" required="">
                                </div>

                                <div class="form-group">
									<input type="text" class="form-control" style="height:130px;" id="details" name="details"placeholder="Your Comment" required="">
                                </div>
                                
                                <div class="form-group">
                                    <button class="submit" type="submit" name="submit-form">Post Comment</button>
                                </div>
                            </form>
                        </div>
			
			<!-- #respond -->
	
	<nav class="navigation post-navigation" role="navigation">
		<h2 class="screen-reader-text">Post navigation</h2>
		<div class="nav-links"><div class="nav-next"><a href="does-your-website-need-an-ssl-certificate-2/index.html" rel="next">Next Post &rarr;</a></div></div>
	</nav>
        </div>
        <div class="col-md-4 blog-sidebar">
          	<div class="widget widget_search"><form role="search" method="get" class="search-form" action="http://demo.nrgthemes.com/projects/valence/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form></div>
			
			<div class="widget widget_categories"><h4 class="widget-title-w">Blog categories</h4>		<ul>
	<li class="cat-item cat-item-2"><a href="category/hosting/index.html" >Hosting</a>
</li>
	<li class="cat-item cat-item-3"><a href="category/server/index.html" >Server</a>
</li>
	<li class="cat-item cat-item-4"><a href="category/website/index.html" >Website</a>
</li>
	<li class="cat-item cat-item-5"><a href="category/whmcs/index.html" >whmcs</a>
</li>
		</ul>
</div><div class="widget widget_tag_cloud"><h4 class="widget-title-w">Tags</h4><div class="tagcloud"><a href="../tag/hosting/index.html" class="tag-cloud-link tag-link-6 tag-link-position-1" style="font-size: 8pt;" aria-label="Hosting (1 item)">Hosting</a>
<a href="tag/server/index.html" class="tag-cloud-link tag-link-7 tag-link-position-2" style="font-size: 8pt;" aria-label="Server (1 item)">Server</a>
<a href="tag/wcmcs/index.html" class="tag-cloud-link tag-link-8 tag-link-position-3" style="font-size: 8pt;" aria-label="wcmcs (1 item)">wcmcs</a></div>
</div>        </div>
      </div>
    </div>
  </div> 
  
  @include('partiles.footer')
	@include('partiles.bottom_script')
  </body>

</html>
