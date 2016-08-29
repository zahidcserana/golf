<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\admin;
use App\Http\Requests;
use session;

class AdminController extends Controller
{
	public function AdminLoginForm()
	{
		return view('admin_login_form');
	}
	public function AdminLogin(Request $request)
	{
		$adminCheckObj = new admin;
		$name = $request->name;
		$password =md5($request->password);
		
		$adminCheck = $adminCheckObj->AdminCheck($name,$password);
		if ($adminCheck) {
			return redirect()->route('admin_home');
		}
		else
			return redirect()->route('admin');
	}
	public function AdminHome()
	{
		return view('admin_home');
	}
    	public function AdminLogout()
    	{
    		session()->flush();
		return redirect('/admin');
    	}
}
