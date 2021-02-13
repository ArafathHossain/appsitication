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
	  
	  <form method="post" enctype="multipart/form-data" action="{{ route('admin.our_team.store') }}"/>
	  {{ csrf_field() }}
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Member Name:</label>
			  <input type="text" class="form-control" id="name" name="name">
		</div>
        </div>
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Position:</label>
			  <input type="text" class="form-control" id="position" name="position">
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
			  <input type="text" class="form-control" id="facebook" name="facebook">
		</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Twitter:</label>
			  <input type="text" class="form-control" id="twitter" name="twitter">
		</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Linkedin:</label>
			  <input type="text" class="form-control" id="linkedin" name="linkedin">
		</div>
        </div>
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
          <div class="form-group">
			  <label for="usr">Instagram:</label>
			  <input type="text" class="form-control" id="instagram" name="instagram">
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
				
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Member Name</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Position</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Image</th>
				<th style="text-align:center; background:#715ebc; color:#FFFFFF; font-weight:bold;">Action</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($our_teams as $our_teams)
			  <tr>
				<td>{{$our_teams->name}}</td>
				<td>{{$our_teams->position}}</td>
				<td><img style="height:30px;" src="{{asset('images/products/' . $our_teams->image)}}"> </td>
				
				<td style="text-align:center;">
				<a href="{{ route('admin.our_team.edit', $our_teams->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> </a>| 
				<a href="#deleteModal" data-toggle="modal" data-target="#myModal{{ $our_teams->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				
				
				<div class="modal" id="myModal{{ $our_teams->id }}">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Are you sure to delete</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
					   <form method="post" enctype="multipart/form-data" action="{{ route('admin.our_team.delete', $our_teams->id) }}"/>
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
