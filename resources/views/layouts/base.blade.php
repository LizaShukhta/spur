<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>SPUR</title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  @section('styles')
  @show
 </head>
 <body>
<div class="cont">
@yield('content')
  </div> 
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
@section('scripts')
@show
 </body>
</html>