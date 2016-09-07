<?php

namespace App\Http\Controllers;
use App\Model\GolfCourse;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;

class GolfCourseController extends Controller
{
    public function Form( Request $request )
	{
		$golfCourseObj = new GolfCourse;
		$datetime = date('Y-m-d H:i:s');
		$userId = Session::get('userId');
		$golfCourseObj->user_id = $userId;
		$golfCourseObj->data = json_encode($request->gameResult);
		$golfCourseObj->summary_data = json_encode($request->summaryResult);
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

	public function ViewCourse( Request $request )
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
			$msg = "No list exists!";
   			return redirect()->route('user_message', ['message'=>$msg]);
		}
	}

	public function ViewDetails( $courseIdFromRoute )
	{
		$golfCourseObj = new GolfCourse;
		$userId = Session::get('userId');
		//dd($userId);
		$courseDetails = $golfCourseObj->GetCourse($courseIdFromRoute, $userId);
		if(!$courseDetails)
		{
			$msg = "Try again.";
   			return redirect()->route('user_message', ['message'=>$msg]);
		}
		$gameData = $courseDetails->data;
		$summaryData = $courseDetails->summary_data;
		$summaryResults = json_decode($summaryData, true);
		$gameResults = json_decode($gameData, true);
		return view('user.course_details', ['summaryResult'=>$summaryResults, 'gameResult'=>$gameResults, 'dates'=>$courseDetails->date, 'locationName'=>$courseDetails->location, 'courseId'=>$courseIdFromRoute]);
	}

	public function EditForm(Request $request , $courseIdFromRoute )
	{
		$golfCourseObj = new GolfCourse;
		$editedData = json_encode($request->gameResult);
		$editedSummaryData = json_encode($request->summaryResult);
		$golfCourseObj->UpdateCourse($courseIdFromRoute, $editedData, $editedSummaryData);
		$msg = "You have successfully updated a round.";
   		return redirect()->route('user_message', ['message'=>$msg]);
		//echo $courseIdFromRoute;
	}

	public function Message( $message )
    {
         $data['message'] = $message;
         return view('user.message', $data);
    }
}
