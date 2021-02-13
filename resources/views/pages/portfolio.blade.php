<!DOCTYPE html>
<html lang="en-US" >
<style media="screen">
*{
padding:0;
margin:0;
}

/*	general	*/

section{
  padding: 50px 0;
}

/*	gallery */

.gallery-title{
  font-size: 36px;
  color: #3F6184;
  text-align: center;
  font-weight: 500;
  margin-bottom: 70px;
}
.filter-button{
  font-size: 18px;
  border: 2px solid #3F6184;
padding:5px 10px;
  text-align: center;
  color: #3F6184;
  margin-bottom: 30px;
background:transparent;
}
.filter-button:hover,
.filter-button:focus,
.filter-button.active{
  color: #ffffff;
  background-color:#3F6184;
outline:none;
}
.gallery_product{
  margin: 0px;
padding:0;
position:relative;
}
.gallery_product .img-info{
position: absolute;
  background: rgba(0,0,0,0.5);
  left: 0;
  right: 0;
  bottom: 0;
  padding: 20px;
overflow:hidden;
color:#fff;
top:0;
display:none;
   -webkit-transition: 2s;
  transition: 2s;
}

.gallery_product:hover .img-info{
display:block;
 -webkit-transition: 2s;
  transition: 2s;
}

/*	end gallery */
</style>
<!-- Mirrored from demo.nrgthemes.com/projects/valence/domains/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 15:16:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" >
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" >
    <meta name="format-detection" content="telephone=no" />
        <title>Domains &#8211; Appsitication</title>
	@include('partiles.up_script_style')
</head>
<body class="page-template-default page page-id-246 animsition wpb-js-composer js-comp-ver-5.4.7 vc_responsive" data-spy="scroll" data-offset="80" >
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
								<h5>Portfolio										<span></span>
																	</h5>
							</div>
											</div>
				</div>
				</header>
	<div class="container">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<section class="portfolio" id="portfolio">
<div class="container-fluid">
<div class="row">

  <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="gallery-title">OUR WORK PORTFOLIO</h1>
  </div>



  <br/>

        <div class="gallery_product col-sm-4 col-xs-6 filter category2" style="padding: 2px;">
            <a href="https://fabricsworldusa.com/" target="_blank">
                <img alt="" src="{{asset('frontend/image/inventorinterior_cover.jpg')}}" height="180px" />
                <div class='img-info'>
                    <h4>Inventor Interior</h4>
                    <p>A Business Dyanamic Website Using Laravel-5.8</p>
                </div>
            </a>
        </div>

        <div class="gallery_product col-sm-4 col-xs-6 filter category3" style="padding: 5px;">
             <a href="https://fabricsworldusa.com/" target="_blank">
                <img alt="" src="{{asset('frontend/image/appsitication_covr.png')}}"height="180px" />
                <div class='img-info'>
                    <h4>Appsitication</h4>
                    <p>A Business Dyanamic Website Using Laravel-5.8</p>
                </div>
            </a>
        </div>

        <div class="gallery_product col-sm-4 col-xs-6 filter category1" style="padding: 5px;">
            <a href="https://fabricsworldusa.com/" target="_blank">
                <img  alt="" src="{{asset('frontend/image/appsitication-ecommerce-project.jpg')}}" height="180px"/>
                <div class='img-info'>
                    <h4>Fabrics World USA</h4>
                    <p>A Ecommerce Dyanamic Website Using Codeigniter</p>
                </div>
            </a>
        </div>

         <div class="gallery_product col-sm-4 col-xs-6 filter category1" style="padding: 5px;">
            <a href="https://fabricsworldusa.com/" target="_blank">
                <img  alt="" src="{{asset('frontend/image/appsitication_ielts_online_test.jpg')}}" height="180px"/>
                <div class='img-info'>
                    <h4>IELTS Online Practice Test</h4>
                    <p>A EDU Dyanamic Website Using Laravel-7</p>
                </div>
            </a>
        </div>

         <div class="gallery_product col-sm-4 col-xs-6 filter category1" style="padding: 5px;">
            <a href="https://fabricsworldusa.com/" target="_blank">
                <img  alt="" src="{{asset('frontend/image/appsitication_ecommerce.jpg')}}" height="180px"/>
                <div class='img-info'>
                    <h4>Ecommerce Project</h4>
                    <p>A Ecommerce Dyanamic Website Using Laravel-7</p>
                </div>
            </a>
        </div>

         <div class="gallery_product col-sm-4 col-xs-6 filter category1">
            <a href="https://fabricsworldusa.com/" target="_blank">
                <img  alt="" src="{{asset('frontend/image/appsitication_vue_inventory.jpg')}}" height="180px"/>
                <div class='img-info'>
                    <h4>Inventory Management System</h4>
                    <p>IMS Using Laravel-7 and Vue.js</p>
                </div>
            </a>
        </div>

       

        

</div>
</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="js/script.js"></script>

						</div>

	 @include('partiles.footer')
	@include('partiles.bottom_script')

  </body>
<script type="text/javascript">

/*	gallery */
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }

	        	if ($(".filter-button").removeClass("active")) {
			$(this).removeClass("active");
		    }
		    	$(this).addClass("active");
	    	});
});
/*	end gallery */

$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});


</script>
<!-- Mirrored from demo.nrgthemes.com/projects/valence/domains/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 15:16:50 GMT -->
</html>
<!-- Page supported by LiteSpeed Cache 2.3.1 on 2019-08-07 15:15:46 --><br />
<b>Notice</b>:  ob_end_flush(): failed to send buffer of zlib output compression (0) in <b>/home/demonrg/public_html/projects/valence/wp-includes/functions.php</b> on line <b>3778</b><br />
