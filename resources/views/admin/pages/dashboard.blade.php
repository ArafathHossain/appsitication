<!DOCTYPE html>
<html>
<head>
 @include('admin.partiles.top_head')
    <link href="{{asset('public/backend/lib/summernote/summernote-bs4.css')}}" rel="stylesheet">

</head>
<body>
<div class="main-wrapper">

  @include('admin.partiles.top_header')
  
  @include('admin.partiles.left_menu')
  
  
  
  
  <div class="page-wrapper">
    <div class="content container-fluid">
      <div class="row">
        <div class="col-xs-4">
          <h4 class="page-title">Dashboard</h4>
        </div>
      </div>
      <div class="row staff-grid-row">
        <h1 style="text-align:center;">WelCome To Appsitication Admin Panel</h1>
		
      </div>
    </div>
  </div>
  
</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>

@include('admin.partiles.bottom_script')

    <script src="{{asset('public/backend/lib/medium-editor/medium-editor.js')}}"></script>
    <script src="{{asset('public/backend/lib/summernote/summernote-bs4.min.js')}}"></script>

 <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>

</body>
</html>
