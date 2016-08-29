@extends('master')
@section('maincontent')
<div class="mainbar">
  <div class="article">
    <h2><span>Enter your correct </span> information</h2>
    <div class="clr"></div>

    <form method="POST" action="{{ url('register_post_view') }}">
    {!! csrf_field() !!}
        <table>
            <tr>
                <td>Your Name</td>
                <td><input type="text" name="name" value="{{ old('name') }}"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="password_confirmation"></td>
            </tr>      
        </table>
    <button type="submit">Register</button>
    </form>

    <ul class="sb_menu">
      <li><a href="#"><strong>Lorem ipsum</strong></a></li>
      <li><a href="#"><strong>Lorem ipsum</strong></a></li>
      <li><a href="#"><strong>Lorem ipsum</strong></a></li>
      <li><a href="#"><strong>Lorem ipsum</strong></a></li>
      <li><a href="#"><strong>Lorem ipsum</strong></a></li>
      <li><a href="#"><strong>Lorem ipsum</strong></a></li>
    </ul>
  </div>
</div>
@stop