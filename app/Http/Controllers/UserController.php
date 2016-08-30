<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\users;
use App\Http\Requests;

class UserController extends Controller
{
	public function UsersList()
	{
		$userListObj = new users;
		$userList = $userListObj->GetAllUser();
		return view('admin.users', ['users'=>$userList]);
	}
	public function RegistrationForm()
	{
		return view('admin.registration_form');
	}
	public function Registration(Request $request)
	{
		$userCheckObj = new users;
		$name = $request->name;
		$email = $request->email;
		$password= $request->password;
		$confirmPassworde =  $request->password_confirmation;
		
		$userCheck = $userCheckObj->UserEmailCheck($email);
		if ($userCheck) {
			echo "Already exists!";
		}
		else if ($password!=$confirmPassworde) {
			echo "Sorry! Password doesn't match";
		}
		else
		{
			$password = md5($password);
			$userCheckObj->name= $name;
			$userCheckObj->password=$password;
			$userCheckObj->email= $email;
			$userCheckObj->save();
			return redirect()->route('admin_home');
		}
	}
	public function ChangePassword($id)
	{
		return view('admin.change_password',['id'=>$id]);
	}
	public function PasswordReset(Request $request)
	{
		$id = $request->id;
		$password= $request->password;
		$confirmPassworde =  $request->password_confirmation;
		if ($password!=$confirmPassworde) {
			echo "Sorry! Password doesn't match!";
		}
		else
		{
			$password = md5($password);
			$passwordChangeObj = new users;
			$passwordChangeObj->PasswordChange($id,$password);
			$msg = "Password changed successfully.";
			return redirect()->route('message', ['message'=>$msg]);
			//return redirect()->route('admin_home');
		}
		
	}
}
