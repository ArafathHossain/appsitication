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
          <h4 class="page-title">Blogategory Add Manage</h4>
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
		 <div id="AddModal" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:680px;">
			
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Add Blog Category</h5>
				  </div>
				  <div class="modal-body">
					  <form method="post" enctype="multipart/form-data" action="{{ route('admin.blogcategory.store') }}"/>
	  					@csrf
        				<div style="padding-bottom:10px;">
						  <label for="usr">Title :</label>
						  <input type="text" class="form-control" id="name" name="name">
					</div>
					
						<div style="padding-bottom:15px;">
						  <label for="usr">Image Upload :</label>
						  <input class="form-control" type="file" name="image" id="image">
					</div>
					<div style="padding-bottom:15px;">
						  <label for="usr">Description :</label>
						   <textarea class="form-control" rows="12" name="description" id="ajaxfilemanager" value="" tabindex="20" style="height:250px;"></textarea>
					</div>
						
						<div class="form-group">
						 <button type="submit" class="btn btn-primary">Create</button> <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					   </form>
						
					  </div>
				  
				</div>
			
			  </div>
			</div>
		 <!-- Add Modal End -->
		
		<div class="col-md-12 col-sm-6 col-xs-6 col-lg-12">
           <table class="table table-bordered">
			<thead>
			  <tr>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Blogcategory Name</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Description</th>
				<th style="background:#715ebc; color:#FFFFFF; font-weight:bold;">Image</th>
				<th style="text-align:center; background:#715ebc; color:#FFFFFF; font-weight:bold;">Action</th>
			  </tr>
			</thead>
			<tbody>
			
			@foreach($blogcategories as $blogblogcategorie)
			
			  <tr>
				<td>{{$blogblogcategorie->name}}</td>
				<td>{{strip_tags($blogblogcategorie->description)}}</td>
				<td><img style="height:30px;" src="{{asset('images/blogcategories/' . $blogblogcategorie->image)}}"> </td>
				
				<td style="text-align:center;">
				<a href="#EditModal" data-toggle="modal" data-target="#EditModal{{ $blogblogcategorie->id }}"><i class="fa fa-pencil" aria-hidden="true"></i> </a> |
				
				 <!-- Add Modal Start -->
				  <div id="EditModal{{ $blogblogcategorie->id }}" class="modal fade" role="dialog">
				 <script language="javascript" type="text/javascript">
		tinyMCE.init({
			mode : "exact",
			elements : "ajaxfilemanager{{ $blogblogcategorie->id }}",
			//full url
			relative_urls : "false",
		    remove_script_host : false,
            convert_urls : false,
			//end full url,
			theme : "advanced",
			setup : function(ed) {
			      ed.onKeyUp.add(function(ed, l) {
			         tinyMCE.triggerSave();	                    
			      });
			},
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",

			theme_advanced_buttons1_add_before : "newdocument,separator",
			theme_advanced_buttons1_add : "fontselect,fontsizeselect",
			theme_advanced_buttons2_add : "separator,forecolor,backcolor,liststyle",
			theme_advanced_buttons2_add_before: "cut,copy,separator,",
			theme_advanced_buttons3_add_before : "",
			theme_advanced_buttons3_add : "media",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			extended_valid_elements : "hr[class|width|size|noshade]",
			file_browser_callback : "ajaxfilemanager",
			paste_use_dialog : false,
			theme_advanced_resizing : true,
			theme_advanced_resize_horizontal : true,
			apply_source_formatting : true,
			force_br_newlines : true,
			force_p_newlines : false,	
			relative_urls : true
		});

		function ajaxfilemanager(field_name, url, type, win) {
			var ajaxfilemanagerurl = SAWEB.getBaseAction("resource/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php");
			switch (type) {
				case "image":
					break;
				case "media":
					break;
				case "flash": 
					break;
				case "file":
					break;
				default:
					return false;
			}
            tinyMCE.activeEditor.windowManager.open({
                url: SAWEB.getBaseAction("resource/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php"),
                width: 700,
                height: 440,
                inline : "yes",
                close_previous : "no"
            },{
                window : win,
                input : field_name
            });
            
		}
	

</script>
					  <div class="modal-dialog" style="width:680px;">
					
						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h5 class="modal-title" style="text-align:left;">Edit Category </h5>
						  </div>
						  <div class="modal-body">
							   <form method="post" enctype="multipart/form-data" action="{{ route('admin.blogcategory.update', $blogblogcategorie->id) }}"/>
								@csrf
								<div style="padding-bottom:10px; text-align:left;">
								  <label for="usr" style="text-align:left;">Title :</label>
								  <input type="text" class="form-control" id="name" name="name" value="{{ $blogblogcategorie->name }}">
							</div>
							
								<div style="padding-bottom:15px; text-align:left;">
								  <label for="usr" >Image Upload :</label>
								  <input class="form-control" type="file" name="image" id="image">
							</div>
							<div style="padding-bottom:15px; text-align:left;">
								  <label for="usr">Description :</label>
								   <textarea class="form-control" rows="12" name="description" id="ajaxfilemanager{{$blogblogcategorie->id}}" value="" tabindex="20" style="height:250px;">{{ $blogblogcategorie->description }}</textarea>
							</div>
								
								<div class="form-group" style="text-align:left;">
								 <button type="submit" class="btn btn-primary">Update</button> <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								</div>
							   </form>
								
							  </div>
						  
						</div>
					
					  </div>
					</div>
				 <!-- Add Modal End -->
						
				
				<a href="#deleteModal" data-toggle="modal" data-target="#myModal{{ $blogblogcategorie->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				
				 <!-- Delete Modal Start -->
				<div class="modal" id="myModal{{ $blogblogcategorie->id }}">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Are you sure to delete</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
					   <form method="post" enctype="multipart/form-data" action="{{ route('admin.blogcategory.delete', $blogblogcategorie->id) }}"/>
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
		  <div class="row">
		  	<div class="col-md-4"></div>
			<div class="col-md-6">
			<div class="pagination" align="center" style="text-align:center;"> 
			  {{ $blogcategories->links() }}
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

</body>
</html>
