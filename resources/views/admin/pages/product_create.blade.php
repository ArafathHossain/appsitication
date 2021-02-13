<!DOCTYPE html>
<html>
<head>
 @include('admin.partiles.top_head')
	
</head>
<body>
<div class="main-wrapper">

  @include('admin.partiles.top_header')
  
  @include('admin.partiles.left_menu')
  
  
  <div class="page-wrapper">
    <div class="content container-fluid">
      <div class="row">
        <div class="col-xs-4">
          <h4 class="page-title">Service Add Manage</h4>
        </div>
      </div>
      <div class="row staff-grid-row">
	  
		<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
          <div>
		@if ($errors->any())
			<div class="alert alert-danger">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
				<ul>
					@foreach ($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</ul>
			</div>
		@endif
		
		@if (Session::has('success'))
		<div class="alert alert-success">
		<a type="button" class="close" data-dismiss="alert">&times;</a>
		<p>{{ Session::get('success') }}</p>
		</div>
		@endif
		
		</div>
        </div>
	  
	  <form method="post" enctype="multipart/form-data" action="{{ route('admin.product.store') }}"/>
	  {{ csrf_field() }}
        
        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
          <div class="form-group">
			  <label for="sel1">Category Name:</label>
			  <select class="form-control" id="sub_category_id" name="sub_category_id">
			  <option value="">Select Category Name</option>
			  @foreach($subcategories as $subcategories)
				<option value="{{$subcategories->id}}">{{$subcategories->name}}</option>
				@endforeach 
			  	
			  </select>
			</div>
        </div>
		<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
          <div class="form-group">
			  <label for="usr">Service Name:</label>
			  <input type="text" class="form-control" id="title" name="title">
		</div>
        </div>
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="sel1">Status :</label>
			  <select class="form-control" id="status" name="status">
				<option value="1">Active</option>
				<option value="0">In-active</option>
				
			  </select>
			</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12" style="padding-top:10px;">
          <div class="form-group row">
				<div class="col-md-4"><input class="form-control" type="file" name="image" id="image"></div>
				<div class="col-md-4"><input class="form-control" type="file" name="image2" id="image2"></div>
				<div class="col-md-4"><input class="form-control" type="file" name="image3" id="image3"></div>
				
			</div>
        </div>
		  <div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
         	 <div class="form-group">
			 	 <div>
				 <label for="usr">Description: </label>
					<textarea name="description" id="description"></textarea>
						<script>
						  $('#description').summernote({ 
							placeholder: 'Description',
							tabsize: 2,
							height: 300,
						  });
						</script>
				</div> 
			</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			 <button type="submit" class="btn btn-primary">Create</button>
			</div>
        </div>
		
		</form>
		
		
		
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
           <table class="table table-bordered">
			<thead>
			  <tr>
				
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Category Name</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Service Name</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Image</th>
				<th style="text-align:center; background:#715ebc; color:#FFFFFF; font-weight:bold;">Action</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($products as $product)
			@php 
			$subcatIdByname = DB::table('sub_categories')->where('id', $product->sub_category_id)->value('name');
			@endphp
			  <tr>
				
				<td>{{$subcatIdByname}}</td>
				<td>{{$product->title}}</td>
				<td><img style="height:30px;" src="{{asset('images/products/' . $product->image)}}"> </td>
				
				<td style="text-align:center;">
				<a href="{{ route('admin.product.edit', $product->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> </a>| 
				<a href="#deleteModal" data-toggle="modal" data-target="#myModal{{ $product->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				
				
				<div class="modal" id="myModal{{ $product->id }}">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Are you sure to delete</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
					   <form method="post" enctype="multipart/form-data" action="{{ route('admin.product.delete', $product->id) }}"/>
	  						{{ csrf_field() }}
						<button type="submit" class="btn btn-danger">Yes</button>
						</form>
						
						 
					  </div>
					  <!-- Modal footer -->
					  
				
					</div>
				  </div>
				</div>
				
				</td>
			  </tr>
			@endforeach 
			  
			</tbody>
		  </table>
		  <div class="row">
		  	<div class="col-md-4"></div>
			<div class="col-md-6">
			<div class="pagination" align="center" style="text-align:center;"> 
			  {{ $products->links() }}
		   </div>
		   </div>
			<div class="col-md-2"></div>
		  </div>
        </div>
		
		
		
      </div>
    </div>
  </div>
  
</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>

@include('admin.partiles.bottom_script')

<script type="text/javascript">

$("#category_id").on('change', function(){
	var category_id = $("#category_id").val();
	$("#sub_category_id").html("");
	var option ="";
	$.get("http://localhost/Appsitication/public/get-category/"+category_id, function(data) {
	
		data = JSON.parse(data);
		
		data.forEach(function(element){
		 option +="<option value='"+ element.id +"'>"+ element.name +"</option>";
		});
		
		$("#sub_category_id").html(option);
	});
	
});

</script>

</body>
</html>
