<?php
  $asset = asset('/');
?>
<!DOCTYPE html >
<html>
<head>
<title>Admin Panel</title>
      <div align="center">
       
        <a href="{{ URL::to('/admin/home') }}"><span>Home</span></a>
        <a href="{{route('user_view')}}"><span>Users</span></a>
        <a href="{{ URL::to('/registration_form') }}"><span>Registration</span></a>
        <a href="{{route('admin_logout')}}"><span>Logout</span></a>
       
      </div>
     
   <div>
      @yield('admincontent')
      <div />
  
    