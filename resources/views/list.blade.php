@extends('master')
@section('content')
<?php
  $asset = asset('/');
?>
<link href="{{$asset}}css/table.css" rel="stylesheet" type="text/css" />
<table><tr><th align="center">Course Id</th><th align="center">Date</th><th align="center">Action</th></tr>
@foreach ($courseResult as $course)
	<tr>
	<div class="course">
		<?php $timestamp = strtotime($course->created_at);
		$date = date('d-m-Y', $timestamp);?>
		<td align="center"><div>{{$course->id}}</div></td>
		<td align="center"><div>{{$date}}</div></td>
		<td align="center"><a href="{{route('course_details', ['course_id'=>$course->id])}}">Details</a></td>
	</div>
	</tr>
@endforeach
</table>
@stop