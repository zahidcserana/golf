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
         return redirect()->route('profile_view'); 
    }

    public function CompleteLogin(Request $request)
    {   //dd("Dfsdfsd");    
        $usersObj = new users;
        $email = $request->email;

        $password =md5($request->password);
        
        $emailAndPassChecking = $usersObj->GetLogInInfo($email, $password);
        $rules = [
          'email'             =>  'required|email',
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
        else if (!$emailAndPassChecking) 
        {
            return redirect()->route('home')
                             ->withErrors('Email or Password no exist!')
                             ->withInput();
        }
     
        if($emailAndPassChecking==True) 
        {
            $userId = $emailAndPassChecking->id;
            $userType = $emailAndPassChecking->user_type;

            Session::put('userId' , $userId);
            Session::put('userType' , $userType);
            return redirect()->route('profile_view');
        }
        else
            return redirect()->route('home');
   }

    public function Loginsuccess()
    {
         return redirect()->route('profile_view');
    }

    public function UserLogout()
    {
        session()->flush();
        return redirect('/');
    }
	
	public function GetCSRFToken()
	{
		$retArr = array('success'=>true,'token'=>csrf_token());
		echo json_encode($retArr);
	}
}
