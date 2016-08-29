@extends('master')
@section('maincontent')
<div class="mainbar">
  <div class="article">
    <h2><span>Log in:</span> </h2>
    <div class="clr"></div>

    <form method="POST" action="{{ url('login_post_view') }}">
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