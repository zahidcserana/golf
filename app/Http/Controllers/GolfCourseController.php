<?php
namespace App\Http\Controllers;
use App\Model\GolfCourse;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;

class GolfCourseController extends Controller
{
    public function Form(Request $request)
	{

		$golfCourseObj = new GolfCourse;
		$datetime = date('Y-m-d H:i:s');
		$userId = Session::get('userId');
		$golfCourseObj->user_id = $userId;
		$golfCourseObj->data = json_encode($request->gameResult);
		$golfCourseObj->created_at = $datetime;
		$golfCourseObj->updated_at = $datetime;
		$golfCourseObj->save();
		return view('user.index');
	}

	public function ViewCourse(Request $request)
	{
		$golfCourseObj = new GolfCourse;
		$userId = Session::get('userId');
		//$courseResult = $golfCourseObj->GetUserCourse($userId);
		$number = 3;
		$pagination = $golfCourseObj->GetList($userId, $number);
   		//dd($userId);
   		if($pagination)
		{
			return view('user.list', ['courseResult'=>$pagination]);
			
		}
   		//return view('admin.products',['allProducts'=>$allProducts,'count'=> $count]);
		$msg = "No list exists!.";
   		return redirect()->route('user_message', ['message'=>$msg]);
		
	}
	public function ViewDetails($courseIdFromRoute)
	{
		$golfCourseObj = new GolfCourse;
		$courseDetails = $golfCourseObj->GetCourse($courseIdFromRoute);
		//dd($courseDetails);
		

			return view('user.course_details', ['gameResult'=>($courseDetails->data)]);
	}
	public function Message($message)
    {
          $data['message'] = $message;
          return view('user.message', $data);
          
    }
}
