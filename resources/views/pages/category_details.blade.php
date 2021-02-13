<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>title</title>
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
.product-item {
    padding: 15px;
    background: #fff;
    margin-top: 20px;
    position: relative;
}

.product-item:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
    font-size: 0;
    line-height:0;
}
.sticker {
    position: absolute;
    top: 0;
    left: 0;
    width: 73px;
    height: 63px;
}
.sticker-new {
    background: url(http://keenthemes.com/assets/bootsnipp/new.png) no-repeat;
    left: auto;
    right: 0;
}
.pi-img-wrapper {
    position: relative;
}
.pi-img-wrapper div {
    background: rgba(0,0,0,0.3);
    position: absolute;
    left: 0;
    top: 0;
    display: none;
    width: 100%;
    height: 100%;
    text-align: center;
}
.product-item:hover>.pi-img-wrapper>div {
    display: block;
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
    <div class="col-md-10" align="center" style="font-size:16px;"><img class="img-responsive" src="{{asset('images/categories/' . $category->image)}}"/></div>
    <div class="col-md-1" style="border-top:1px #9a9a9a solid;"></div>
  </div>
  <div class="row" align="left" style="margin-left:0px; padding-top:10px; padding-left:10px; font-size:14px; font-weight:bold; border-left:1px #ecc766 solid;">{{ $category->name }}</div>
  <div class="row" align="left" style="margin-left:0px; padding-top:10px; padding-left:10px; border-left:1px #ecc766 solid; font-size:14px; font-weight:bold; padding-right:10px;">
    <div class="col-md-5" style="border-top:1px #9a9a9a solid; padding-bottom:10px;"></div>
    <div class="col-md-2" align="center" style="font-size:16px;">{{ $category->name }}</div>
    <div class="col-md-5" style="border-top:1px #9a9a9a solid;"></div>
  </div>
  <div class="row" align="center" style="margin-left:0px; border-left:1px #ecc766 solid; min-height:750px;">
    <div class="container">
      <div class="row"> 
	  
	  @foreach($category_details as $category_detail)
        <div class="col-md-3">
          <div class="product-item">
            <div class="pi-img-wrapper"> <img src="{{asset('images/subcategories/' . $category_detail->image2)}}" class="img-responsive" alt="{{$category_detail->name}}"> </div>
            <div style="font-size:15px; text-align:center; padding-top:10px;"> <a sub-category-id="{{ $category_detail->id }}" class="Sub_category_click" style="color:#000000;" href="#">{{$category_detail->name}}</a> </div>
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