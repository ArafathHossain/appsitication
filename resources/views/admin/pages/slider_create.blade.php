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
          <h4 class="page-title">Slider Add Manage</h4>
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
	  
	  
		<div style="padding-left:15px; padding-right:15px; margin-bottom:40px;">
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12" align="right" style="background:#34444c; padding-top:5px; padding-bottom:5px;">
          <a href="#AddModal" data-toggle="modal" style="padding-top:5px; padding-bottom:5px;"><i style="font-size:22px; color:#FFFFFF;" class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
		</div>
		
		 <!-- Add Modal Start -->
		<div class="modal" id="AddModal">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h5 class="modal-title">Add Slider</h5>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
					   <form method="post" enctype="multipart/form-data" action="{{ route('admin.slider.store') }}"/>
	  					@csrf
        				<div style="padding-bottom:10px;">
						  <label for="usr">Title :</label>
						  <input type="text" class="form-control" id="name" name="name">
					</div>
					
						<div style="padding-bottom:15px;">
						  <label for="usr">Image Upload :</label>
						  <input class="form-control" type="file" name="image" id="image">
					</div>
					
						
						<div class="form-group">
						 <button type="submit" class="btn btn-primary">Create</button> <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					   </form>
						
					  </div>
					  <!-- Modal footer -->
					  
				
					</div>
				  </div>
				</div>
		 <!-- Add Modal End -->
		 
		 
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
           <table class="table table-bordered">
			<thead>
			  <tr>
				<th style="background:#715ebc; color:#FF
					FFFF; font-weight:bold;"> Title</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Image</th>
				<th style="text-align:center; background:#715ebc; color:#FFFFFF; font-weight:bold;">Action</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($sliders as $sliders)
			  <tr>
				<td>{{$sliders->name}}</td>
				
				<td>
				
				
				   <img style="height:30px;" src="{{asset('images/slider/' . $sliders->image)}}"> 
				    
				</td>
				
				<td style="text-align:center;">
				<a href="#EditModal" data-toggle="modal" data-target="#EditModal{{ $sliders->id }}"><i class="fa fa-pencil" aria-hidden="true"></i> </a>| 
				
				 <!-- Edit Modal Start -->
				<div class="modal" id="EditModal{{ $sliders->id }}">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h5 class="modal-title" style="text-align:left;">Edit Slider</h5>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
					   <form method="post" enctype="multipart/form-data" action="{{ route('admin.slider.update', $sliders->id) }}"/>
	  					@csrf
        				<div style="padding-bottom:10px; text-align:left;">
						  <label for="usr">Title :</label>
						  <input type="text" class="form-control" id="name" value="{{ $sliders->name }}" name="name">
					</div>
					
						<div style="padding-bottom:15px; text-align:left;">
						  <label for="usr">Image Upload :</label>
						  <input class="form-control" type="file" name="image" id="image">
					</div>
					
						
						<div class="form-group" style="text-align:left;">
						 <button type="submit" class="btn btn-primary">Update</button> <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> 
						</div>
					   </form>
						
					  </div>
					  <!-- Modal footer -->
					  
				
					</div>
				  </div>
				</div>
		 		<!-- Edit Modal End -->
				
				<a href="#deleteModal" data-toggle="modal" data-target="#myModal{{ $sliders->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				
				<!-- Delete Modal Start -->
				<div class="modal" id="myModal{{ $sliders->id }}">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Are you sure to delete</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
					   <form method="post" enctype="multipart/form-data" action="{{ route('admin.slider.delete', $sliders->id) }}"/>
	  						@csrf
						<button type="submit" class="btn btn-danger">Yes</button>
						</form>
						
						 
					  </div>
					  <!-- Modal footer -->
					  
				
					</div>
				  </div>
				</div>
				<!-- Delete Modal end -->
				
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

</body>
</html>
