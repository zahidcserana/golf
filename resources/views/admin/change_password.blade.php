<?php
  $asset = asset('/');
?>
@extends('admin.master')
@section('validate')
@parent
<script src="{{$asset}}js/jquery.min.js"></script>
    <script src="{{$asset}}js/jquery.validate.min.js"></script>
    <script>
    $(document).ready(function() {

        $("#passChange").validate({
            rules: {
                name: "required",
                name: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                password_confirmation: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
            },
            messages: {
                name: "Please enter your firstname",
                name: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                password_confirmation: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
            }
        });

    });
    </script>
@stop
@section('admincontent')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 
    <h3 class="page-header">Change Password</h3>
                   
    <form method="POST" id="passChange" action="{{ url('password_reset') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <input type="text" name="id" class="form-control" value="{{$id}}">
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" value="{{$email}}" >
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
        </div>
        <div class="form-group">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Enter confirm password">
        </div>
        
        <button type="submit" class="btn btn-default">Update</button>
    </form>
</div>
@stop