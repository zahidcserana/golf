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

        $("#signupForm").validate({
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
                confirm_password: {
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
    
<div align="center">
    <form class="cmxform" id="signupForm" method="POST" action="{{ url('registration') }}">
        {!! csrf_field() !!}
            <table>
                <tr>
                    <td>Your Name</td>
                    <td><input type="text" name="name" value="{{ old('name') }} " required></td>
                </tr>
                <tr>
                    <td>Your Email</td>
                    <td><input type="text" name="email" value="{{ old('email') }}" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="password_confirmation" required></td>
                </tr>      
            </table>
        <button type="submit">Register</button>
    </form>
</div>
@stop