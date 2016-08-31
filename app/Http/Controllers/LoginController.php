<?php
namespace App\Http\Controllers;
use Session;
use App\Model\users;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;

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
        
        $emailAndPassChecking = $usersObj->GetLogInInfo($email, $password);
        $rules = [
          'email'             =>  'required|email|exists:users',
          'password'          =>  'required'
        ];
            $allInput = $request->all();

            $validator = Validator::make($allInput,$rules);

        if ($validator->fails()) 
        {
        return redirect()->route('home')
                    ->withErrors($validator)
                    ->withInput();
        }
     
        if($emailAndPassChecking==True) 
        {
            $userId = $emailAndPassChecking->id;
            $userType = $emailAndPassChecking->user_type;

            Session::put('userId' , $userId);
            Session::put('userType' , $userType);
            return redirect()->route('index');
        }
        else
            return redirect()->route('home');
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
