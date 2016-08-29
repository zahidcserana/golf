<?php
namespace App\Http\Controllers;
use App\Model\Users;
use Illuminate\Http\Request;
use App\Http\Requests;

class LoginController extends Controller
{
    public function LoginForm()
	{
        return view('login');
    }

    public function Login(Request $request)
	{   	
		$usersObj = new Users;
		$userName = $request->userName;
		$password =md5($request->password);
        $userNameAndPassChecking = $usersObj->GetLogInInfo($userName, $password);
        if($userNameAndPassChecking==True) 
        {
            $customerId = $userNameAndPassChecking->user_id;
            //Session::put('customerId' , $customerId);

        	//$msg = "yes. logged in";
          	return redirect()->route('loginsuccess');
        }
        else
        {
        	$msg = "Give correct user name and password";
          	return redirect()->route('message', ['messages'=>$msg]);
        }	
	   return redirect('/');
	}
	public function Message($msg)
	{
		  return $msg;
	}

	
}
