<?php
namespace App\Http\Controllers;
use Session;
use App\Model\users;
use Illuminate\Http\Request;
use App\Http\Requests;

class LoginController extends Controller
{
    public function LoginForm()
    {
        $sessionId = Session::get('userId');
        if(!$sessionId)
            return view('user.login');
        else 
        return view('user.index'); 
    }


    public function CompleteLogin(Request $request)
    {   //dd("Dfsdfsd");    
        $usersObj = new users;
        $email = $request->email;

        $password =md5($request->password);
        //echo $request->password;
        //echo "//".$password;
        //exit;
        $emailAndPassChecking = $usersObj->GetLogInInfo($email, $password);
        //dd($emailAndPassChecking);
        //dd($emailAndPassChecking);
        if($emailAndPassChecking==True) 
        {
            $userId = $emailAndPassChecking->id;
            $userType = $emailAndPassChecking->user_type;
            //session_regenerate_id();
            //$sessionId = session_id();
            Session::put('userId' , $userId);
            Session::put('userType' , $userType);
            //Session::put('customerId' , $customerId);
            //dd("hello");
            //$msg = "yes. logged in";
            return redirect()->route('index');
        }
        else
            return redirect()->route('home');
        /*else
        {
            $msg = "Give correct user name and password";
            return redirect()->route('message', ['messages'=>$msg]);
        }   
       return redirect('/');*/
    }
    public function Loginsuccess()
    {
        return view('user.index');
    }
    public function UserLogout()
    {
        session()->flush();
    return redirect('/');
    }
}
