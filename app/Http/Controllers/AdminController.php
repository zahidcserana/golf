<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\users;
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
		$adminCheckObj = new users;
		$email = $request->email;
		$password =md5($request->password);
		
		$adminCheck = $adminCheckObj->AdminCheck($email,$password);
		$rules = [
	          'email'             =>  'required|email',
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
		else if (!$adminCheck) 
		{
			return redirect()->route('admin')
			        	     ->withErrors('Email or Password no exist!')
			        	     ->withInput();
		}
     
		if ($adminCheck) 
		{
			$userId = $adminCheck->id;
            	$userType = $adminCheck->user_type;
            	Session::put('adminId' , $userId);
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
    	public function MakeAdmin($id,$email)
    	{
    		$type = 'admin';
    		$makingAdminObj = new users;
    		$makingAdmin = $makingAdminObj->MakeAdmin($id,$type);
    		Session::flash('message', 'Action successfully completed!'); 
    		return redirect()->route('user_view');
    		//$msg = "Action successfully completed.";
		//return redirect()->route('message', ['message'=>$msg]);
    	}
    	public function DowngradeToUser($id,$email)
    	{
    		$type = 'user';
    		$downgradeToUserObj = new users;
    		$downgradeToUser = $downgradeToUserObj->DowngradeToUser($id,$type);
    		
    		
    		Session::flash('message', 'Action successfully completed!'); 
		return redirect()->route('user_view');
			           
		//$msg = "Action successfully completed.";
		//return redirect()->route('message', ['message'=>$msg]);
    	}
}
