<footer class="main-footer alternate" style="background-image: url({{asset('website_resorce/images/background/5.jpg')}});">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="{{route('index')}}"><img src="{{asset('website_resorce/images/footer-logo.png')}}" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">An Interior Design Company in Doha-Dhaka Based "Reputable and Experienced Team of Designers, Engineers and Project Managers.</div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Recent Posts</h2>
                                     <!--Footer Column-->
									@foreach($blogproducts2 as $blogproducts2)
                                    <div class="widget-content">
                                        <div class="post">
										<div class="thumb"><a href="{{ route('blog_view', $blogproducts2->slug) }}"><img src="{{asset('images/blogproducts/' . $blogproducts2->image)}}" alt=""></a></div>
                                            <h5><a href="{{ route('blog_view', $blogproducts2->slug) }}">{{$blogproducts2->title}}</a></h5>
                                            <ul class="info">
                                                <li>Created at: {{$blogproducts2->created_at-> format('d-m-y')}}</li>
                                            </ul>
                                        </div>

                                    </div>
									
									@endforeach
									
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!--Big Column-->
                    <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                 <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Useful links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="{{route('about')}}">About</a></li>
                                            <li><a href="{{route('Contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h2 class="widget-title">Recent Works</h2>
                                    <div class="widget-content">
                                        <div class="outer clearfix">
                                            <figure class="image">
                                                <a href="{{asset('website_resorce/images/gallery/1.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('website_resorce/images/resource/work-thumb-1.jpg')}}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{asset('website_resorce/images/gallery/2.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('website_resorce/images/resource/work-thumb-2.jpg')}}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{asset('website_resorce/images/gallery/3.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('website_resorce/images/resource/work-thumb-3.jpg')}}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{asset('website_resorce/images/gallery/4.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('website_resorce/images/resource/work-thumb-4.jpg')}}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{asset('website_resorce/images/gallery/5.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('website_resorce/images/resource/work-thumb-5.jpg')}}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{asset('website_resorce/images/gallery/1.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('website_resorce/images/resource/work-thumb-6.jpg')}}" alt=""></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="social-links">
                        <ul class="social-icon-two">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>

                    <div class="copyright-text">
                        <p>Copyright © 2018 <a href="#">Inventor Interior</a> All right reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>