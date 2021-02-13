<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('partiles.header_link')

</head>
<body>
@include('partiles.nav')
<div class="container-fluid main-container">
  <div class="col-md-2 sidebar">
    @include('partiles.product-sidebar')
  </div>
  
  @yield('content')
  
  
  @include('partiles.footer')
</div>
</body>
</html>
