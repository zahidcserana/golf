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
		$golfCourseObj->location = $request->nameFromUser;
		
		if(strlen($request->dateFromUser)>0)
			$date = \DateTime::createFromFormat('m/d/Y', $request->dateFromUser);
		else
			$date = new \DateTime();
		$newDate = $date->format('Y-m-d');
		$golfCourseObj->date = $newDate;
		
		$golfCourseObj->created_at = $datetime;
		$golfCourseObj->updated_at = $datetime;
		$golfCourseObj->save();
		$msg = "You have successfully submitted a round.";
   		return redirect()->route('user_message', ['message'=>$msg]);
	}

	public function ViewCourse(Request $request)
	{
		$golfCourseObj = new GolfCourse;
		$userId = Session::get('userId');
		$number = 5;
		$pagination = $golfCourseObj->GetList($userId, $number);
		$listCheck = $golfCourseObj->CheckList($userId);
   		if(($listCheck ))
		{
			return view('user.list', ['courseResult'=>$pagination]);
		}
   		else
		{
			$msg = "No list exists!.";
   			return redirect()->route('user_message', ['message'=>$msg]);
		}
	}

	public function ViewDetails($courseIdFromRoute)
	{
		$golfCourseObj = new GolfCourse;
		$courseDetails = $golfCourseObj->GetCourse($courseIdFromRoute);
			return view('user.course_details', ['gameResult'=>($courseDetails->data)]);
	}
	public function Message($message)
    {
          $data['message'] = $message;
          return view('user.message', $data);
          
    }
}
