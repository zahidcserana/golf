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
		return view('index');
	}

	public function ViewCourse(Request $request)
	{
		$golfCourseObj = new GolfCourse;
		$userId = Session::get('userId');
		$courseResult = $golfCourseObj->GetUserCourse($userId);
		/*for($i=0; $i<count($courseResult); $i++)
		{
			echo $courseResult[$i]->data;
		}*/
		return view('list', ['courseResult'=>$courseResult]);
		
	}
	public function ViewDetails($courseIdFromRoute)
	{
		$golfCourseObj = new GolfCourse;
		$courseDetails = $golfCourseObj->GetCourse($courseIdFromRoute);
		return view('course_details', ['gameResult'=>($courseDetails->data)]);
	}
}
