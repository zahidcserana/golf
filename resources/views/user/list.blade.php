@extends('user.master')
@section('content')
<?php
  $asset = asset('/');
?>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
	      	<tr>
	        	<th>Location</th>
	        	<th>Date</th>
	        	<th>Action</th>
	      	</tr>
	    </thead>
	    <tbody>
	    	@foreach ($courseResult as $course)
	    	<tr>
	    		<?php 
	    			//$timestamp = strtotime($course->created_at);
					//$date = date('d-m-Y', $timestamp);
				?>
	    		<td>{{$course->location}}</td>	
	    		<td>{{$course->date}}</td>	
	    		<td><a href="{{route('course_view', ['course_id'=>$course->id])}}">Details</a> | <a href="{{route('course_edit', ['course_id'=>$course->id])}}">Modify</a></td>	
	    	</tr>
	    	@endforeach
	    </tbody>
	</table>
	{{ $courseResult->render() }}
</div>
@stop