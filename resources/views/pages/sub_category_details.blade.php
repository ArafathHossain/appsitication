<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Popy</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
<style>

.cart-box{
  position: fixed;
  bottom: 50%;
  right: 30px;
  width: 48px;
  height: 48px;
  z-index: 2147483000;
  cursor: pointer;
  background-position: 50%;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}
.cart-items-count{
    position:relative;
    display:flex;
    text-align:center;
    justify-content: center;
    top:-55px;
}

.notification-counter {   
    position: absolute;
    left: 8px;
    background-color: rgba(212, 19, 13, 1);
    color: #fff;
    border-radius: 3px;
    padding: 1px 3px;
    font: 8px Verdana;
}




</style>
<style>
h3.h3{text-align:center;margin:1em;text-transform:capitalize;font-size:1.7em;}

/********************* shopping Demo-1 **********************/
.product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;border:1px solid rgba(0,0,0,.1);overflow:hidden;position:relative;z-index:1}
.product-grid .product-image{position:relative;transition:all .3s ease 0s}
.product-grid .product-image a{display:block}
.product-grid .product-image img{width:100%;height:auto}
.product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
.product-grid:hover .pic-1{opacity:1}
.product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
.product-grid:hover .pic-2{opacity:1}
.product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
.product-grid:hover .social{opacity:1;top:50%}
.product-grid .social li{display:inline-block}
.product-grid .social li a{color:#fff;background-color:#333;font-size:16px;line-height:40px;text-align:center;height:40px;width:40px;margin:0 2px;display:block;position:relative;transition:all .3s ease-in-out}
.product-grid .social li a:hover{color:#fff;background-color:#ef5777}
.product-grid .social li a:after,.product-grid .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
.product-grid .social li a:hover:after,.product-grid .social li a:hover:before{opacity:1}
.product-grid .product-discount-label,.product-grid .product-new-label{color:#fff;background-color:#ef5777;font-size:12px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0}
.product-grid .product-discount-label{background-color:#333;left:auto;right:0}
.product-grid .rating{color:#FFD200;font-size:12px;padding:12px 0 0;margin:0;list-style:none;position:relative;z-index:-1}
.product-grid .rating li.disable{color:rgba(0,0,0,.2)}
.product-grid .product-content{background-color:#fff;text-align:center;padding:12px 0;margin:0 auto;position:absolute;left:0;right:0;bottom:-27px;z-index:1;transition:all .3s}
.product-grid:hover .product-content{bottom:0}
.product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid .title a{color:#828282}
.product-grid .title a:hover,.product-grid:hover .title a{color:#ef5777}
.product-grid .price{color:#333;font-size:17px;font-family:Montserrat,sans-serif;font-weight:700;letter-spacing:.6px;margin-bottom:8px;text-align:center;transition:all .3s}
.product-grid .price span{color:#999;font-size:13px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block}
.product-grid .add-to-cart{color:#000;font-size:13px;font-weight:600}
@media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
}

</style>
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
					
	<div>
			<div class="row" style="background:#FFFFFF; margin-left:0px; text-align:center; border-left:1px #ecc766 solid;" align="center">
				<div class="col-md-1" style="border-top:1px #9a9a9a solid; padding-bottom:10px;"></div>
				<div class="col-md-10" align="center" style="font-size:16px;"><img class="img-responsive" src="{{asset('images/subcategories/' . $subcategoryidByname->image)}}"/></div>
				<div class="col-md-1" style="border-top:1px #9a9a9a solid;"></div>
			</div>
			@php 
			$cateIdByname = DB::table('categories')->where('id', $subcategoryidByname->category_id)->value('name'); 
			@endphp
			<div class="row" align="left" style="margin-left:0px; padding-top:10px; padding-left:10px; font-size:14px; border-left:1px #ecc766 solid; font-weight:bold;">
			 {{ $cateIdByname }} >   {{ $subcategoryidByname->name }}
			</div>
			<div class="row" align="left" style="margin-left:0px; padding-top:10px; border-left:1px #ecc766 solid; padding-left:10px; font-size:14px; font-weight:bold; padding-right:10px;">
				<div class="col-md-5" style="border-top:1px #9a9a9a solid; padding-bottom:10px;"></div>
				<div class="col-md-2" align="center" style="font-size:16px;">{{ $subcategoryidByname->name }}</div>
				<div class="col-md-5" style="border-top:1px #9a9a9a solid;"></div>
			</div>
				
				
			<style>
				.del{			
				 text-decoration:line-through;
				 color:#000000;
				 }
				</style>	
			<div class="row" align="center" style="margin-left:0px; border-left:1px #ecc766 solid; min-height:700px; padding-top:20px;">
				  	<div class="container">
						<div class="row">
						 @foreach($subcategory_details as $subcategory_detail)
							<div class="col-md-3 col-sm-6" style="padding-top:10px;">
								<div class="product-grid" style="padding-bottom:0px;">
									<div class="product-image">
										<a href="{{ route('Product_details', $subcategory_detail->slug) }}">
											<img class="pic-1" src="{{asset('images/products/' . $subcategory_detail->image)}}">
											<img class="pic-2" src="{{asset('images/products/' . $subcategory_detail->image2)}}">
										
										<ul class="social">
											<li style="font-size:20px; font-weight:bold; color:#FFFFFF; border-bottom:1px #FFFFFF solid;">View details</li>
										</ul>
										</a>
									</div>
									
									<div style="color:#000000; font-weight:bold; font-size:14px; padding:5px;">{{ $subcategory_detail->title }}</div>
									<div style="color:#FF0000; font-weight:bold; font-size:14px; padding:5px;">
            						    BDT-{{ $subcategory_detail->price }} <del class="del">BDT-{{ $subcategory_detail->offer_price }} </del>
									 </div>
									<div class="" style="border:#e5e5e5 1px solid; color:#FF0000; font-weight:bold; font-size:14px; padding:5px;">
									
								<a product-id=""  quntity-id=""  class="cart_store hidden-lg hidden-md" style="cursor:pointer;"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart </a>
								
								<a onClick="openNav()" product-id=""  quntity-id=""  class="cart_store hidden-sm hidden-xs" style="cursor:pointer;"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart </a>
								
									</div>
								</div>
							</div>
						@endforeach 
						
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



    