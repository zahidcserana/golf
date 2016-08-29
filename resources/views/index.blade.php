<?php
  $asset = asset('/');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Golf</title>
	</head>
	<body>
		<center><h1>Golf</h1></center>
		<br>
		<div id = "menu" align="center">
			
			<a href="{{$asset}}">Home</a>
			<a href="{{$asset}}form">Form Submission</a>
			<a href="{{$asset}}list">View List</a>
			
		</div><br><br>
		<br>
		<br>
	</body>
</html>