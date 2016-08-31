<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\admin;
use App\Http\Requests;
use Session;
use Validator;

class AdminController extends Controller
{
	public function AdminLoginForm()
	{
		return view('admin.login_form');
	}
	public function AdminLogin(Request $request)
	{
		$adminCheckObj = new admin;
		$email = $request->email;
		$password =md5($request->password);
		
		$adminCheck = $adminCheckObj->AdminCheck($email,$password);
		$rules = [
	          'email'             =>  'required|email|exists:admin',
	          'password'          =>  'required'
	      ];
            $allInput = $request->all();

            $validator = Validator::make($allInput,$rules);

		if ($validator->fails()) 
		{
		return redirect()->route('admin')
		        ->withErrors($validator)
		        ->withInput();
		}
     
		if ($adminCheck) 
		{
			$userId = $adminCheck->id;
            	$userType = $adminCheck->user_type;
            	Session::put('userId' , $userId);
            	Session::put('userType' , $userType);
			return redirect()->route('admin_home');
			
		}
		else
			return redirect()->route('admin');
	}
	public function AdminHome()
	{
		return view('admin.home');
	}
    	public function AdminLogout()
    	{
    		session()->flush();
		return redirect('/admin/login');
    	}
    	public function Message($message)
    	{
          	$data['message'] = $message;
          	return view('message', $data);
          	
    	}
}
