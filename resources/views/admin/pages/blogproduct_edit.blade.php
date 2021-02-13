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
          <h4 class="page-title">Product Edit Manage</h4>
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
		</div>
        </div>
	  
	  <form method="post" enctype="multipart/form-data" action="{{ route('admin.blogproduct.update', $blogproduct->id) }}"/>
	  {{ csrf_field() }}
        <div class="col-md-6 col-sm-8 col-xs-8 col-lg-6">
          <div class="form-group">
		  @php $subcatIdByname = DB::table('blogcategories')->where('id', $blogproduct->blog_category_id)->value('name'); @endphp
		  
			   <label for="sel1">Blog Category Name:</label>
			  <select class="form-control" id="blog_category_id" name="blog_category_id">
		<option <?php if($blogproduct->blog_category_id == $blogproduct->blog_category_id){ echo "selected"; } ?> value="{{ $blogproduct->blog_category_id }}"  >{{ $subcatIdByname}}</option>
		@foreach($blogcategories as $blogcategories)
				<option value="{{$blogcategories->id}}">{{$blogcategories->name}}</option>
				@endforeach 
			  </select>
			</div>
        </div>
		<div class="col-md-6 col-sm-8 col-xs-8 col-lg-6">
          <div class="form-group">
			  <label for="usr">Blog Name:</label>
			  <input type="text" class="form-control" id="title" name="title" value="{{ $blogproduct->title }}">
		</div>
        </div>
		
		<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
          <div class="form-group">
			  <label for="sel1">Status :</label>
			  <select class="form-control" id="status" name="status">
				<option  @php if($blogproduct->status == '1'){ echo "selected"; } @endphp value="1">Active</option>
				<option @php if($blogproduct->status == '0'){ echo "selected"; } @endphp value="0">In-active</option>
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
			  <textarea class="form-control" rows="12" name="description" id="ajaxfilemanager" value="" tabindex="20" style="height:250px;">{{ $blogproduct->description }}</textarea>
			</div>
        </div>
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			 <button type="submit" class="btn btn-primary">Update</button>
			</div>
        </div>
		
		</form>
		
		
		
		
		
		
		
		
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
