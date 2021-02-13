
<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<?php
						class BanglaConverter {
							public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
							public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
							public static function bn2en($number) {
								return str_replace(self::$bn, self::$en, $number);
							}
							public static function en2bn($number) {
								return str_replace(self::$en, self::$bn, $number);
							}
						}
					?>



	<table class="table table-condensed">
			
			<tbody>
			
			  <tr style="border-bottom:1px #fee29b solid;">
				<td><img style="height:50px; padding-top:10px;" src=""></td>
				<td style="">name</td>
				<td style="padding-top:15px;"> 
				<select class="form-control cartupdate cartupdate2" data-id="" style="width:60px;" id="qty" name="qty">
						<option value="1" >1</option>
						<option value="2" >2</option>
						<option value="3" >3</option>
						<option value="4" >4</option>
				  </select>
				  </td>
				<td style="padding-top:25px;">total_pro_price</td>
				<td style="padding-top:20px;"><i data-id="" style="font-size:24px; text-align:center; color:#000000;" class="fa fa-times deletecart" aria-hidden="true"></i></td>
			  </tr>
			  
			 
			  
			</tbody>
		  </table>


</body>
</html>
<script>


$('.cartupdate').on('change', function(){
		var row_id = $(this).attr("data-id");
		var qty = $(this).val();
		//alert(qty);
		var urlmgs = "<?php echo site_url('Cart/updateCartItem'); ?>";
		$.ajax({
			url:urlmgs,
			type:"POST",
			data:{row_id:row_id, qty:qty},
			success:function(data){
				$(".cart_html_view_list").html(data);
				
			}
		});
		
		var urlmgs2 = "<?php echo site_url('Cart/updateCartItem2'); ?>";
		$.ajax({
			url:urlmgs2,
			type:"POST",
			data:{row_id:row_id, qty:qty},
			success:function(data){
				$(".cart_row_amount").html(data);
			}
		});
		e.preventDefault();
	});

	

$('.deletecart').on('click', function(e){
		var row_id = $(this).attr("data-id");
		var urlmgs = "<?php echo site_url("Cart/cartdelete");?>";
		$.ajax({
			url:urlmgs,
			type:"POST",
			data:{row_id:row_id},
			success:function(data){
				$(".cart_html_view_list").html(data);
			}
		});
		e.preventDefault();
	});
	
$('.deletecart').on('click', function(e){
		var row_id = $(this).attr("data-id");
		var urlmgs = "<?php echo site_url("Cart/cartdelete2");?>";
		$.ajax({
			url:urlmgs,
			type:"POST",
			data:{row_id:row_id},
			success:function(data){
				$(".cart_row_amount").html(data);
			}
		});
		e.preventDefault();
});


</script>