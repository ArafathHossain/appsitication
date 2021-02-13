
<!DOCTYPE html>
<html lang="en">
<head>
@include('partiles.top_head_css_link')
<style>

/*****************globals*************/

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
</style>
<style>
		/* styles unrelated to zoom */
		* { border:0; margin:0; padding:0; }
		p { position:absolute; top:3px; right:28px; color:#555; font:bold 13px/1 sans-serif;}

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		#ex2 img:hover { cursor: url(grab.cur), default; }
		#ex2 img:active { cursor: url(grabbed.cur), default; }
	</style>
<script src='http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/js/jquery.zoom.js'></script>
<script>
$(document).ready(function(){
$('#ex1').zoom();
$('#ex2').zoom();
$('#ex3').zoom();		 
$('#ex4').zoom();
});
</script>
<style>
.rightnav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 99999999;
    top: 0;
    right: 0;
    background-color: #FFFFFF;
	border:2px #fdd670 solid;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	margin-top:70px;
}

.rightnav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color:#FFFFFF;
}
.closebtn:hover {
    color: #CCCCCC;
    text-decoration:none;
}
.sidenav1 {
    color: #FFFFFF;
	font-size:16px;
	text-align:center;
	background:#009933;
	padding-top:5px;
	padding-bottom:5px;
    text-decoration:none;
}

@media screen and (max-height: 450px) {
  .rightnav {padding-top: 15px;}
  .rightnav a {font-size: 18px;}
}
</style>
</head>
<body>
<div class="container-fluid">
  	@include('partiles.top_menu')
  
  
  <div class="row" style="padding-top:50px;">
		<div class="col-md-2 hidden-sm  hidden-xs sidenav" style="padding-left:0px;">
      <ul class="mtree transit" style="width:245px; background:#FFFFFF;">
        <li> <a style="background:#FFFFFF; font-weight:normal; font-size:14px; color:#000000; padding-top:10px;" href="#"> Offer
          <input style="background:#FFFFFF; border:1px #fdd670 solid; padding-top:1px; padding-left:5px; padding-right:5px; padding-bottom:1px;" name="" value="5" type="button">
          </a> </li>
        <li> <a style="background:#FFFFFF; font-weight:normal; font-size:14px; color:#000000; padding-top:10px;" href="#"> Product Request </a> </li>
        <li style="border-bottom:1px #dacfcf solid; padding-top:5px; padding-bottom:10px;"> </li>
        <li style="padding-top:10px;"> </li>

		@foreach($categories as $categories)
		@php $catgoryidByname = App\Sub_category::where('category_id', $categories->id)->orderBy('id', 'desc')->get(); @endphp
        <li><a category-id="{{ $categories->id }}" class="category_click" style="background:#FFFFFF; font-weight:normal; font-size:14px; color:#000000; padding-top:10px;" href="#"><i style="background:#FFFFFF; font-size:18px;" class="fa fa-child" aria-hidden="true"></i> {{ $categories->name }}</a>
          <ul>
		  @php foreach ($catgoryidByname as $subcategories) { @endphp
            <li><a sub-category-id="{{ $subcategories->id }}" class="Sub_category_click" style="background:#FFFFFF; color:#000000;" href="#">{{ $subcategories->name }}</a></li>
		 @php } @endphp
          </ul>
        </li>
		@endforeach


      </ul>
    </div>
		<div class="col-md-10 col-sm-12 col-xs-12 main category_Bysub_category subcategory_Bysub_subcategory search_product_Value"  style="padding-left:20px; padding-right:0px; min-height:700px; border-left:1px #ecc766 solid;">
		   <div style="border-left:1px #ecc766 solid; height:100%; min-height:700px;">
			
			
			
			@php 
			$cateIdByname = DB::table('categories')->where('id', $Product_detail->category_id)->value('name');
			$subcateIdByname = DB::table('sub_categories')->where('id', $Product_detail->sub_category_id)->value('name'); 
			@endphp
			
				
			
				
	<div class="container" style="padding-bottom:50px;">
	<div style="text-align:left; padding-bottom:20px; padding-top:60px; font-weight:bold;">Product Details > {{ $cateIdByname }} > {{ $subcateIdByname }} > {{ $Product_detail->title }} </div>
		<div class="">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><span class='zoom' id='ex1'>
		<img src='{{asset('images/products/' . $Product_detail->image)}}' width='555' height='320' alt='Daisy on the Ohoopee'/>
	</span></div>
						  <div class="tab-pane " id="pic-2">
						  
						  <span class='zoom' id='ex2'>
		<img src='{{asset('images/products/' . $Product_detail->image2)}}' width='290' height='320' alt='Roxy on the Ohoopee'/>
	</span>
							
							</div>
						  <div class="tab-pane" id="pic-3"><span class='zoom' id='ex3'>
		<img src='{{asset('images/products/' . $Product_detail->image3)}}' width='555' height='320' alt='Daisy on the Ohoopee'/>
	</span></div>
						</div>
						
						<ul class="preview-thumbnail nav nav-tabs" style="padding-left:100px;">
						<li><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('images/products/' . $Product_detail->image)}}" /></a></li>
						<li><a data-target="#pic-2" data-toggle="tab"><img src="{{asset('images/products/' . $Product_detail->image2)}}" /></a></li>
						<li><a data-target="#pic-3" data-toggle="tab"><img src="{{asset('images/products/' . $Product_detail->image3)}}" /></a></li>
						   						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$Product_detail->title}}</h3>
						
						<h4 class="price">BDT-{{$Product_detail->price}}</span></h4>
				  		<div class="title-attr" style="text-align:left; font-weight:bold; font-size:18px; padding-bottom:10px;">
				  
				  <select class="form-control" id="quntity_id" name="quntity_id" style="width:200px; height:50px;" required>
						<option selected="selected" value="">Select Quantity </option>
					<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
						
					  </select>
				  
				  </div>
				  
						<div class="action">
							<button class="add-to-cart btn btn-default cart_store" type="button">Add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
						<div style="padding-top:10px; font-size:14px;">
						Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
				
			<div class="row" style="background:#f7f7f7; margin-left:0px;">
          <div style="padding-bottom:55px; background:#f7f7f7;">
            <div style="padding-top:10px;font-weight:bold; border-left:1px #ecc766 solid; background:#f7f7f7;">
              <div class="col-md-4" style="padding-left:0px;"><img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/one_hour.png">1 hour delivery <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/delevery.png">cash on delivery</div>
              <div class="col-md-8" style="text-align:right;" align="right" >Please provide <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/1.png"> <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/2.png"> <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/3.png"> <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/4.png"> <img style="height:40px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/5.png"> </div>
            </div>
            <div style="padding-top:30px; color:#FFFFFF; font-size:16px; background:#f7f7f7;">
              <div style="padding-bottom:20px; padding-top:20px;"><img style="height:35px; width:200px;" class="img-responsive" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/uploads/1550983445.png" title="" alt=""/></div>
              <div class="col-md-8" align="left" style="color:#000000; font-size:13px; border-left:1px #ecc766 solid; background:#f7f7f7;">Poppy Market Bangladesh's first online-based shops. Byastataya on the sidelines of the society in its essentials to the people who are able to shop from home anayasei target market started with Poppy. "Save time, save costs," Poppy market with the slogan citizens engaged in trying to get rid of their daily harassment. This service is currently confined to the country, but we hope that soon this service will scatter throughout the country.
                <div class="row" style="color:#000000; padding-top:20px; background:#f7f7f7; font-size:13px; padding-left:0px;">
                  <div class="col-md-4">
                    <div style="border-bottom:1px #ededed solid; font-size:15px; font-weight:bold;">Customer service</div>
                    <div style="padding-top:5px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Contact.html">Contact Us</a></div>
                    <div style="padding-top:5px; padding-bottom:40px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Others/index/Frequently_asked_questions.html">Frequently asked questions</a></div>
                  </div>
                  <div class="col-md-4" >
                    <div style="border-bottom:1px #ededed solid; font-size:15px; font-weight:bold;">Poppy market</div>
                    <div style="padding-top:5px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Others/index/Privacy_Policy.html">Privacy Policy</a></div>
                    <div style="padding-top:5px; padding-bottom:40px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Others/index/Terms_of_Use.html">Rules of Use</a></div>
                  </div>
                  <div class="col-md-4" >
                    <div style="border-bottom:1px #ededed solid; font-size:15px; font-weight:bold;">For business</div>
                    <div style="padding-top:5px; padding-bottom:40px;"><a style="color:#000000;" href="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/Others/index/Corporate.html">Corporate </a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4" style="border-left:1px #ededed solid; background:#f7f7f7;">
                <div align="right" style="padding-right:0px; background:#f7f7f7;"> <img style="height:60px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/lp_getandroidapp.png"> <img style="height:60px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/lp_getappleapp.png"> </div>
                <div align="right" style="padding-right:0px; color:#000000; padding-top:5px;"> <img style="height:30px;" src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/call.png"> <span style="font-size:24px;"> 01853951775 </span><br/>
                  Or saifulbd943@gmail.com<br/>
                  <a style="color:#FFFFFF;" href="#" class="faa fa fa-facebook"></a> <a style="color:#FFFFFF;" href="#" class="faa fa fa-twitter"></a> <a style="color:#FFFFFF;" href="#" class="faa fa fa-youtube"></a> <a style="color:#FFFFFF;" href="#" class="faa fa fa-instagram"></a> <br/>
                  &nbsp; <br/>
                  &nbsp; </div>
              </div>
            </div>
          </div>
        </div>
			 <div class="row cart-box" id="Normal" style="margin-left:0px; margin-right:0px;">
			  <ul class="nav navbar-nav">
				<li class="dropdown"> <a style="background:#0000FF; border:1px #0000FF solid;" onClick="openNav()" class="draggable dropdown-toggle btn btn-primary btn-circle btn-xl" data-toggle="dropdown" role="button" aria-expanded="false"> <span style="color:#FFFFFF; padding-top:10px;" class="glyphicon glyphicon-shopping-cart"></span></a> <span  class="cart-items-count"><span class="notification-counter cart_row_amount">
				  BDT-1000
				  </span></span> </li>
			  </ul>
			</div>
		<!--Cart Nav start-->		
		<div id="mySidenav" class="rightnav">
		  <a href="javascript:void(0)" style="color:#000000;" class="closebtn" onClick="closeNav()">&times;</a>
		  <div class="sidenav1">Our Order Lists</div>
		  <div class="cart_html_view_list">
		  
			<table class="table table-condensed">
			
			<tbody>
			
			  
			  <tr style="border-bottom:1px #fee29b solid;">
				<td><img style="height:50px; padding-top:10px;" src=""></td>
				<td style="">name</td>
				<td style="padding-top:15px;"> 
				<select class="form-control cartupdate cartupdate2" data-id="" style="width:60px;" id="qty" name="qty">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						
				  </select></td>
				<td style="padding-top:25px;">
            						    1000
            						   
            						  
            						  </td>
				<td style="padding-top:20px;"><i data-id="" style="font-size:24px; text-align:center; color:#000000;" class="fa fa-times deletecart" aria-hidden="true"></i></td>
			  </tr>
			  
			 
			
			  <tr style="border:1px #fee29b solid; margin-top:20px;">
				<td colspan="5" style="color:#000000; text-align:right;">
				
				<a style="color:#000000; font-size:16px;" href="">Checkout</a>
				
				
				</td>
			  </tr>
			 
			
			</tbody>
		  </table>
		  
		  </div>
		  
			  
			
		</div>
		<!--Cart Nav end-->	
        	
			
			</div>
		</div>
	</div>
  
	
</div>
	
</body>
    </html>
<script src='http://cdnjs.cloudflare.com/ajax/libs/velocity/0.2.1/jquery.velocity.min.js'></script>
<script src="http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/left_menu/mtree.js"></script>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
		$("#Normal").addClass("hide");
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
		$("#Normal").removeClass("hide");
    }

<!--- Password view eys start --->
     $(".reveal3").mousedown(function() {
        $(".pwd3").replaceWith($('.pwd3').clone().attr('type', 'text'));
    })
    .mouseup(function() {
        $(".pwd3").replaceWith($('.pwd3').clone().attr('type', 'password'));
    })
    .mouseout(function() {
        $(".pwd3").replaceWith($('.pwd3').clone().attr('type', 'password'));
    });
<!--- Password view eys end --->
</script>
<script type="text/javascript">

$(".header_search_keyup").on('keyup', function() {
	var header_search_value = $(this).val();
	
	$.ajax({
		url : "{{ route('Product_search') }}",
		type : "GET",
		data : {header_search_value:header_search_value},
		dataType : 'html',
		success : function(data) {
			$(".search_product_Value").html(data);
		}
	});
	
});



$('.category_click').on('click', function(e){
		var category_id = $(this).attr('category-id');
		var urlmgs = "{{ route('Cat_details') }}";
		$.ajax({
			url:urlmgs,
			type:"GET",
			data:{category_id:category_id},
      		dataType:'html',
			success:function(data){
				$(".category_Bysub_category").html(data);
			}
		});
		e.preventDefault();
});

$('.Sub_category_click').on('click', function(e){
		var Sub_category_id = $(this).attr('sub-category-id');
		
		var urlmgs = "{{ route('Sub_cat_details') }}";
		$.ajax({
			url:urlmgs,
			type:"GET",
			data:{Sub_category_id:Sub_category_id},
      		dataType:'html',
			success:function(data){
				$(".subcategory_Bysub_subcategory").html(data);
			}
		});
		e.preventDefault();
});

</script>

