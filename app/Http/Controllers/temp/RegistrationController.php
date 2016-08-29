<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\user_info;
use App\Http\Controllers\RegistrationController;
use App\Http\Requests;

class RegistrationController extends Controller
{
	public function RegistrationForm()
	{
		$data['title'] = 'Registration';
        	return view('register', $data);
    		
    	}

	public function RegistrationPost(Request $request)
	{   	
		$register = new user_info;
		$userName = $request->name;
      	$result = $register->GetAll($userName);
      	if ($result) {
      		$msg = "User name already exists!";
          		return redirect()->route('message', ['message'=>$msg]);
      	}
		$firstPassword = $request->password;
		$confirmPassword = $request->password_confirmation;
		
		if ($firstPassword!=$confirmPassword) 
		{
			$msg = "Password doesn't match!!";
          		return redirect()->route('message', ['message'=>$msg]);
		}
		$password =md5($request->password);
		$register->user_name = $request->name;
		$register->password = $password;
		//$register->password_confirmation = $request->password;
		$register->save();
		$msg = "Welcome Mr.".$userName;
		return redirect()->route('message', ['message'=>$msg]);
	}
	
	public function Message($message)
    	{
          	//dd($message);
          	return $message;
          	
    	}
    	
}
