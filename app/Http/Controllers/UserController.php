<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\users;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Validator;
use Session;

class UserController extends Controller
{
	public function UsersList()
	{
		$userListObj = new users;
		$userList = $userListObj->GetAllUser();
		if (!$userList) {
			$msg = "No user exists! You can add user.";
			return redirect()->route('message', ['message'=>$msg]);
		}
		return view('admin.users', ['users'=>$userList]);
	}
	public function RegistrationForm()
	{
		return view('admin.registration_form');
	}
	public function Registration(Request $request)
	{
		$rules = [
		  'name'              =>  'required',
		  'email'             =>  'required|email|unique:users',
		  'password'          =>  'required|min:6',
		  'password_confirmation'  =>  'required|same:password'
		];
        	$allInput = $request->all();

        	$validator = Validator::make($allInput,$rules);

		if ($validator->fails()) 
		{
		return redirect()->route('registration_form')
		            ->withErrors($validator)
		            ->withInput();
		}

		$userCheckObj = new users;
		$name = $request->name;
		$email = $request->email;
		$password= $request->password;
		$confirmPassworde =  $request->password_confirmation;
		
		//$userCheck = $userCheckObj->UserEmailCheck($email);
		
		$password = md5($password);
		$userCheckObj->name= $name;
		$userCheckObj->password=$password;
		$userCheckObj->email= $email;
		$userCheckObj->save();
		$msg = "User successfully added!";
		return redirect()->route('message', ['message'=>$msg]);
		
	}
	public function ChangePassword($id,$email)
	{
		return view('admin.change_password',['id'=>$id, 'email'=>$email]);
	}
	public function PasswordReset(Request $request)
	{
		$id = $request->id;
		$email = $request->email;
		

		$rules = [
		  'password'          =>  'required|min:6',
		  'password_confirmation'  =>  'required|same:password'
		];
        	$allInput = $request->all();

        	$validator = Validator::make($allInput,$rules);

		if ($validator->fails()) 
		{
		return redirect()->route('password_change',['id'=>$id, 'email'=>$email])
		            ->withErrors($validator)
		            ->withInput();
		}

		$password= $request->password;
		
		$password = md5($password);
		$passwordChangeObj = new users;
		$passwordChangeObj->PasswordChange($id,$password);
		$msg = "Password changed successfully.";
		return redirect()->route('message', ['message'=>$msg]);
		//return redirect()->route('admin_home');
	}
	public function ProfileView()
	{
		$userId = Session::get('userId');
		$userProfileObj = new users;
		$userProfile = $userProfileObj->GetProfilePhoto($userId);
		//$photo = $userProfile->photo;
		return view('user.user_profile',['userProfile'=>$userProfile]);
	}
}
