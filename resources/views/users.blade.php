<?php
    $asset = asset('/'); 
?>
<link href="{{$asset}}css/table.css" rel="stylesheet" type="text/css" />
@extends('admin_master')
@section('admincontent')
<br /><br />
	<table align="center">
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>DATE</th>
			<th>ACTION</th>
		</thead>
		@foreach($users as $user)
		<tr>
		  <td><div>{{$user->id}} </div></td>
		  <td><div>{{$user->name}} </div></td>
		  <td><div>{{$user->email}} </div></td>
		  <td><div>{{$user->created_at}} </div></td>
		  <td><div><a href="{{route('password_change',['id'=>$user->id])}}">password</a> </div></td>
		</tr>
		@endforeach
	</table>
@stop