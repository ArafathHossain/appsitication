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
          <h4 class="page-title">Content  Edit Manage</h4>
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
	  
	  <form method="post" enctype="multipart/form-data" action="{{ route('admin.brand.update', $brand->id) }}"/>
	  	@csrf
        
		 <div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Title:</label>
			  <input type="text" class="form-control" value="{{ $brand->name }}" id="name" name="name">
		</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="sel1">Select Content Type :</label>
			  <select class="form-control" id="type" name="type" required>
			  <option value="">Select Content Type</option>
				<option value="Home">Home</option>
				
			  </select>
			</div>
        </div>
		
		
		
		
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="sel1">Description :</label>
			  <textarea class="form-control" rows="12" name="description" id="ajaxfilemanager" value="" tabindex="20" style="height:250px;">{{ $brand->description }}</textarea>
			</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12" style="padding-top:10px;">
          <div class="form-group row">
				<div class="col-md-3"><input class="form-control" type="file" name="image" id="image"></div>
				
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

</body>
</html>
