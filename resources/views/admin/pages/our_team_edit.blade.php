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
          <h4 class="page-title">Member Add Manage</h4>
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
	  
	  <form method="post" enctype="multipart/form-data" action="{{ route('admin.our_team.update', $our_teams->id) }}"/>
	  @csrf
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Product Name:</label>
			  <input type="text" class="form-control" id="name" name="name" value="{{ $our_teams->name }}">
		</div>
        </div>
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Position:</label>
			  <input type="text" class="form-control" id="position" name="position"value="{{ $our_teams->position }}">
		</div>
        </div>
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12" style="padding-top:10px;">
          <div class="form-group row">
				<div class="col-md-4"><input class="form-control" type="file" name="image" id="image"></div>
			</div>
        </div>
		<!-- Social Links -->
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Facebook:</label>
			  <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $our_teams->facebook }}">
		</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Twitter:</label>
			  <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $our_teams->twitter }}">
		</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Linkedin:</label>
			  <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $our_teams->linkedin }}">
		</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Instagram:</label>
			  <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $our_teams->instagram }}">
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
