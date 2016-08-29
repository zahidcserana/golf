<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\user_info;
use App\Http\Controllers\LoginController;


class LoginController extends Controller
{
	public function LoginForm()
	{
		$data['title'] = 'Login';
        	return view('login', $data);
    		
    	}

	public function LoginPost(Request $request)
	{   	
		$register = new user_info;
		$userName = $request->name;
		$password =md5($request->password);
		$userPassword = $password;
      	$result = $register->UserRegisterCheck($userName,$userPassword);
      	if (!$result) {
      		$msg = "Wrong User name or Password!";
          		return redirect()->route('message', ['message'=>$msg]);
      	}
		
		$msg = "Welcome Mr.".$userName;
		return redirect()->route('message', ['message'=>$msg]);
	}
	
	public function Message($message)
    	{
          	//dd($message);
          	return $message;
          	
    	}
    	
    
}
