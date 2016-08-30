@extends('admin.master')
@section('admincontent')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Change Password</h1>
                    
    <form method="POST" action="{{ url('password_reset') }}">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$id}}">
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter password">
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Enter confirm password">
        </div>
        
        <button type="submit" class="btn btn-default">Update</button>
    </form>
</div>
@stop