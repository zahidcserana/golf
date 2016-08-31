<?php
  $asset = asset('/');
?>
<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
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
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{$asset}}js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
	<div class="row">
		<div class='col-sm-4 col-md-offset-4'>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
			<form method="POST" action="{{ route('admin_login') }}">
				{!! csrf_field() !!}
				<div class="form-group">
					<input type="text" class="form-control" name="email" placeholder="Enter name">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Enter password">
				</div>
				<div class="form-group">
					<label class="fn"><input type="checkbox"> <span>Remember me</span></label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
  </body>
</html>