@extends('master')
@section('content')
<form action = "{{ url('loginform') }}" method = "post" align="center">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
   <table>
      <tr>
         <td>User Name</td>
         <td><input type = "text" name = "userName" required /></td>
      </tr>
      <tr>
         <td>Password</td>
         <td><input type = "password" name = "password" required/></td>
      </tr>
      <tr>
         <td colspan = "2" align = "center">
            <input type = "submit" value = "Login" />
         </td>
      </tr>
   </table>
</form>
@stop