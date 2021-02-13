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
          <h4 class="page-title">Blog Manage</h4>
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
	  
	  <form method="post" enctype="multipart/form-data" action="{{ route('admin.blogproduct.store') }}"/>
	  {{ csrf_field() }}
        
        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
          <div class="form-group">
			  <label for="sel1">Blog Category Name:</label>
			  <select class="form-control" id="blog_category_id" name="blog_category_id">
			  <option value="">Select Blog Category Name</option>
			  @foreach($blogcategories as $blogcategories)
				<option value="{{$blogcategories->id}}">{{$blogcategories->name}}</option>
				@endforeach 
			  	
			  </select>
			</div>
        </div>
		<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
          <div class="form-group">
			  <label for="usr">Blog Name:</label>
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
				<label for="sel1" style="color:#de1636;">Image size: 770 * 370</label>
          <div class="form-group row">
		  
				<div class="col-md-4"><input class="form-control" type="file" name="image" id="image"></div>
				
				
			</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="sel1">Description :</label>
			 <textarea class="form-control" rows="12" name="description" id="ajaxfilemanager" value="" tabindex="20" style="height:250px;"></textarea>
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
				
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Blog Category Name</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Blog Name</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Image</th>
				<th style="text-align:center; background:#715ebc; color:#FFFFFF; font-weight:bold;">Action</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($blogproduct as $blogproduct)
			@php 
			$subcatIdByname = DB::table('blogcategories')->where('id', $blogproduct->blog_category_id)->value('name');
			@endphp
			  <tr>
				
				<td>{{$subcatIdByname}}</td>
				<td>{{$blogproduct->title}}</td>
				<td><img style="height:30px;" src="{{asset('images/blogproducts/' . $blogproduct->image)}}"> </td>
				
				<td style="text-align:center;">
				<a href="{{ route('admin.blogproduct.edit', $blogproduct->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> </a>| 
				<a href="#deleteModal" data-toggle="modal" data-target="#myModal{{ $blogproduct->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				
				
				<div class="modal" id="myModal{{ $blogproduct->id }}">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Are you sure to delete</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
					   <form method="post" enctype="multipart/form-data" action="{{ route('admin.blogproduct.delete', $blogproduct->id) }}"/>
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
	$.get("http://localhost/My_first_leravel_project/public/get-category/"+category_id, function(data) {
	
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
