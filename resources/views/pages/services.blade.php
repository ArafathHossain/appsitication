<!DOCTYPE html>
<html lang="en-US" >
  
<!-- Mirrored from demo.nrgthemes.com/projects/valence/does-your-website-need-an-ssl-certificate/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 15:16:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" >
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" >
    <meta name="format-detection" content="telephone=no" />
        <title>{{ $Product_detail->title }}</title>
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
          <h5>{{ $Product_detail->title }}</h5>
        </div>
      </div>
    </div> 

  </header>
  <div class="blog-page blog-short-code">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
				 <h2>{{ $Product_detail->title }}</h2>
			<div class="row">
				<div class="col-md-12">
                     <div class="text" >
                      {!! $Product_detail->description !!}
                     </div>
				</div>
            </div>   
          <!--End Product Info Tabs-->  
        </div>
        
      </div>
    </div>
  </div> 
  
  @include('partiles.footer')
	@include('partiles.bottom_script')
  </body>

</html>
