<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Blog</title>
<!-- Stylesheets -->
@include('partiles.stylesheetup')
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

        <!-- Main Header-->
        @include('partiles.nav')
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('website_resorce/images/background/10.jpg')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>News & Artical</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Section -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-classic">
                        <!-- News Block -->
						 @foreach($category_wise_blog_detail as $category_wise_blog_row)
                        <div class="news-block-two wow fadeIn">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="{{ route('blog_view', $category_wise_blog_row->slug) }}"><img src="{{asset('images/blogproducts/' . $category_wise_blog_row->image)}}" alt=""></a></figure>
                                </div>
                                <div class="caption-box">
                                    <div class="inner">
                                        <h3><a href="{{ route('blog_view', $category_wise_blog_row->slug) }}">{{$category_wise_blog_row->title}}</a></h3>
                                        <ul class="info">
                                            <li>Created at: {{$category_wise_blog_row->created_at-> format('d-m-y')}},</li>
                                            <li><a href="">Admin</a></li>
                                        </ul>
                                        <div class="text">{{strip_tags($category_wise_blog_row->description)}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
						@endforeach
						
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">
                        
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

					 <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Catagories</h3></div>
                            <ul class="cat-list">
							
							@foreach($blogcategories as $blogblogcategorie)
							<li><a href="{{ route('category_wise_blog', $blogblogcategorie->id) }}">{{$blogblogcategorie->name}} <span></span></a></li>
                                @endforeach

                            </ul>
                        </div>
                        

                         <!-- Latest News -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title"><h3>Recent Post</h3></div>
                            <div class="widget-content">
							@foreach($blogproducts as $blogproduct)
                                <article class="post">
                                    <div class="post-thumb"><a href="{{ route('blog_view', $blogproduct->slug) }}"><img src="{{asset('images/blogproducts/' . $blogproduct->image)}}" alt=""></a></div>
                                    <h3><a href="{{ route('blog_view', $blogproduct->slug) }}">{{$blogproduct->title}}</a></h3>
                                </article>
									@endforeach
								
                            </div>
                        </div>             
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!--End Blog Section -->
@include('partiles.footer')
    </div>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>
@include('partiles.scriptup')
</body>

<!-- Mirrored from expert-themes.com/html/contra/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2019 12:33:30 GMT -->
</html>
