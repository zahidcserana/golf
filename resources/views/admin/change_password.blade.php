@extends('admin.master')
@section('admincontent')
<div align="center">
    <form method="POST" action="{{ url('password_reset') }}">
        {!! csrf_field() !!}
            <table>
                <tr>
                    <input type="hidden" name="id" value="{{$id}}">
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
</div>
@stop