<?php
  $asset = asset('/');
  use Illuminate\Routing\Route;
  $route = \Request::route()->getName();

?>
<!doctype html>
<html class="no-js" lang="">
  <head>
  @section('html_header')
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Golfer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <link rel="stylesheet" href="{{$asset}}css/bootstrap.min.css">
        <link rel="stylesheet" href="{{$asset}}css/font-awesome.min.css">
        <link rel="stylesheet" href="{{$asset}}css/style.css">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="{{$asset}}css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{$asset}}css/dashboard.css" rel="stylesheet">
        <link href="{{$asset}}/css/bootstrap-datepicker.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="{{$asset}}js/ie-emulation-modes-warning.js"></script>
		<script src="{{$asset}}js/jquery.min.js"></script>
		<script src="{{$asset}}js/bootstrap.min.js"></script>
  @show
  </head>
  <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Golf</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right resNavHide">
            <li><a href="{{route('user_logout')}}">Logout</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right resNavShow">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{$asset}}form">Add Round</a></li>
            <li><a href="{{$asset}}list">Round List</a></li>
            <li><a href="{{route('user_logout')}}">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            

             <li <?php echo $route=='profile_view'?'class="active"':'' ?> ><a href="{{ URL::to('/') }}">Home<span class="sr-only">(current)</span></a></li>


            <li <?php echo $route=='form'?'class="active"':'' ?> ><a href="{{$asset}}form">Add Round<span class="sr-only">(current)</span></a></li>

            <li <?php echo ($route=='list'||$route=='course_view' ||$route=='course_edit')?'class="active"':'' ?> ><a href="{{$asset}}list">Round List<span class="sr-only">(current)</span></a></li>

            
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           
           @yield('content')

        </div>
      </div>
    </div>
  </body>
</html>