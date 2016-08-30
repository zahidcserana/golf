@extends('master')
@section('content')
<?php
  $asset = asset('/');
?>


<div class="table-responsive">
	<table class="table table-striped">
		<thead>
	      	<tr>
	        	<th>Course Id</th>
	        	<th>Date</th>
	        	<th>Action</th>
	      	</tr>
	    </thead>
	    <tbody>
	    	@foreach ($courseResult as $course)
	    	<tr>
	    		<?php 
	    			$timestamp = strtotime($course->created_at);
					$date = date('d-m-Y', $timestamp);
				?>
	    		<td>{{$course->id}}</td>	
	    		<td>{{$date}}</td>	
	    		<td><a href="{{route('course_details', ['course_id'=>$course->id])}}">Details</a></td>	
	    	</tr>
	    	@endforeach
	    </tbody>
	</table>
</div>
@stop