<?php
namespace App\Http\Controllers;

use App\Model\users;
use Illuminate\Http\Request;
use App\Http\Requests;

class LoginController extends Controller
{
    public function LoginForm()
    {
        return view('login');   
    }


    public function CompleteLogin(Request $request)
    {   //dd("Dfsdfsd");    
        $usersObj = new users;
        $userName = $request->userName;
        $password =md5($request->password);
        $userNameAndPassChecking = $usersObj->GetLogInInfo($userName, $password);
        if($userNameAndPassChecking==True) 
        {
            $userId = $userNameAndPassChecking->id;
            session_regenerate_id();
            $sessionId = session_id();
            Session::put('userId' , $userId);
            //Session::put('sessionId' , $userType);
            //Session::put('customerId' , $customerId);
            //dd("hello");
            //$msg = "yes. logged in";
            return redirect()->route('index');
        }
        /*else
        {
            $msg = "Give correct user name and password";
            return redirect()->route('message', ['messages'=>$msg]);
        }   
       return redirect('/');*/
    }
    public function Loginsuccess()
    {
        return view('index');
    }
   
}
