@extends('admin.master')
@section('admincontent')
<br /><br />
	@if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
	@endif
	<table class="table">
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>USER TYPE</th>
			<th>ACTION</th>
			
		</thead>
		@foreach($users as $user)
		<tr>
		  <td>{{$user->id}} </td>
		  <td>{{$user->name}} </td>
		  <td>{{$user->email}} </td>
		  <td>{{$user->user_type}} </td>
		  <td><a href="{{route('password_change',['id'=>$user->id, 'email'=>$user->email])}}">change password</a>
		  @if($user->user_type == 'user')
		   	| <a href="{{route('make_admin', ['id'=>$user->id, 'email'=>$user->email])}}" title="make admin" onclick="return MakeAdmin();">upgrade to admin</a>
		  @endif
		  @if($user->user_type == 'admin')
		  	| <a href="{{route('downgrade_to_user',['id'=>$user->id, 'email'=>$user->email])}}"  title="downgrade" onclick="return Downgrade();">downgrade to user</a> 
		 @endif
		 | <a href="{{route('delete_user',['id'=>$user->id, 'email'=>$user->email])}}"  title="delete" onclick="return Delete();">delete</a> </td>
		</tr>
		@endforeach

	</table>
	{{ $users->links() }}
@stop

  	<script type="text/javascript">
            function MakeAdmin()
            {
                var chk=confirm('Do you really want to proceed this action?');
                if(chk)
                {
                    return true;
                }
                else{
                    return false;
                }
            }
            function Downgrade()
            {
                var chk=confirm('Do you really want to proceed this action?');
                if(chk)
                {
                    return true;
                }
                else{
                    return false;
                }
            }
            function Delete()
            {
                var chk=confirm('Do you really want to proceed this action?');
                if(chk)
                {
                    return true;
                }
                else{
                    return false;
                }
            }
	</script>