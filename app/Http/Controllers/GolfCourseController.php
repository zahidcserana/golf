<?php

namespace App\Http\Controllers;
use App\Model\GolfCourse;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;

class GolfCourseController extends Controller
{
	public function HomeForm()
	{
		return view('user.form');

	}
    	public function Form( Request $request )
	{
		$golfCourseObj = new GolfCourse;
		$datetime = date('Y-m-d H:i:s');
		$userId = Session::get('userId');
		$golfCourseObj->user_id = $userId;
		$golfCourseObj->data = json_encode($request->gameResult);
		$golfCourseObj->summary_data = json_encode($request->summaryResult);
		$golfCourseObj->location = $request->nameFromUser;

		$golfCourseObj->par3_scoring = $request->summaryResult['par3_scoring'][0];
		$golfCourseObj->par4_scoring = $request->summaryResult['par4_scoring'][0];
		$golfCourseObj->par5_scoring = $request->summaryResult['par5_scoring'][0];
		$golfCourseObj->hash_par3 = $request->summaryResult['hash_par3'][0];
		$golfCourseObj->hash_par4 = $request->summaryResult['hash_par4'][0];
		$golfCourseObj->hash_par5 = $request->summaryResult['hash_par5'][0];
		$golfCourseObj->eagles = $request->summaryResult['eagles'][0];
		$golfCourseObj->birdies = $request->summaryResult['birdies'][0];
		$golfCourseObj->pars = $request->summaryResult['pars'][0];
		$golfCourseObj->bogeys = $request->summaryResult['bogeys'][0];
		$golfCourseObj->dblbogeys = $request->summaryResult['dblbogeys'][0];
		$golfCourseObj->others = $request->summaryResult['others'][0];
		$golfCourseObj->fairways = $request->summaryResult['fairways'][0];
		$golfCourseObj->fir_percentage = $request->summaryResult['fir_percentage'][0];
		$golfCourseObj->greens = $request->summaryResult['greens'][0];
		$golfCourseObj->gir_percentage = $request->summaryResult['gir_percentage'][0];
		$golfCourseObj->played_holes_equation = $request->summaryResult['played_holes_equation'][0];
		$golfCourseObj->hole_rds_18 = $request->summaryResult['hole_rds_18'][0];
		$golfCourseObj->scramble_opp_equation = $request->summaryResult['scramble_opp_equation'][0];
		$golfCourseObj->scramble_sav_equation = $request->summaryResult['scramble_sav_equation'][0];
		$golfCourseObj->scramble_percentage = $request->summaryResult['scramble_percentage'][0];
		$golfCourseObj->sand_opp_equation = $request->summaryResult['sand_opp_equation'][0];
		$golfCourseObj->sand_sav_equation = $request->summaryResult['sand_sav_equation'][0];
		$golfCourseObj->sand_sav_percentage = $request->summaryResult['sand_sav_percentage'][0];
		$golfCourseObj->missed_gir = $request->summaryResult['missed_gir'][0];
		$golfCourseObj->put_1_nogir = $request->summaryResult['put_1_nogir'][0];
		$golfCourseObj->avg_dist_chip = $request->summaryResult['avg_dist_chip'][0];
		$golfCourseObj->total_putts = $request->summaryResult['total_putts'][0];
		$golfCourseObj->putts_div_hole = $request->summaryResult['putts_div_hole'][0];
		$golfCourseObj->avg_score = $request->summaryResult['avg_score'][0];
		$golfCourseObj->putt_opp_5_equation = $request->summaryResult['putt_opp_5_equation'][0];
		$golfCourseObj->putt_opp_5_9_equation = $request->summaryResult['putt_opp_5_9_equation'][0];
		$golfCourseObj->putt_opp_10_19_equation = $request->summaryResult['putt_opp_10_19_equation'][0];
		$golfCourseObj->putt_opp_20_29_equation = $request->summaryResult['putt_opp_20_29_equation'][0];
		$golfCourseObj->putt_opp_30_equation = $request->summaryResult['putt_opp_30_equation'][0];
		$golfCourseObj->putt_make_5_equation = $request->summaryResult['putt_make_5_equation'][0];
		$golfCourseObj->putt_make_5_9_equation = $request->summaryResult['putt_make_5_9_equation'][0];
		$golfCourseObj->putt_make_10_19_equation = $request->summaryResult['putt_make_10_19_equation'][0];
		$golfCourseObj->putt_make_20_29_equation = $request->summaryResult['putt_make_20_29_equation'][0];
		$golfCourseObj->putt_make_30_equation = $request->summaryResult['putt_make_30_equation'][0];
		$golfCourseObj->make_percentage_5 = $request->summaryResult['make_percentage_5'][0];
		$golfCourseObj->make_percentage_5_9 = $request->summaryResult['make_percentage_5_9'][0];
		$golfCourseObj->make_percentage_10_19 = $request->summaryResult['make_percentage_10_19'][0];
		$golfCourseObj->make_percentage_20_29 = $request->summaryResult['make_percentage_20_29'][0];
		$golfCourseObj->make_percentage_30 = $request->summaryResult['make_percentage_30'][0];

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

	public function ViewCourseList( Request $request )
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

	public function EditCourse( $courseIdFromRoute )
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
		return view('user.course_edit', ['summaryResult'=>$summaryResults, 'gameResult'=>$gameResults, 'dates'=>$courseDetails->date, 'locationName'=>$courseDetails->location, 'courseId'=>$courseIdFromRoute]);
	}

	public function ViewCourse( $courseIdFromRoute )
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
		return view('user.course_view', ['summaryResult'=>$summaryResults, 'gameResult'=>$gameResults, 'dates'=>$courseDetails->date, 'locationName'=>$courseDetails->location, 'courseId'=>$courseIdFromRoute]);
	}

	public function EditForm(Request $request , $courseIdFromRoute )
	{
		$golfCourseObj = new GolfCourse;
		$editedLocation = $request->nameFromUser;
		//dd($editedLocation);
		$editedData = json_encode($request->gameResult);
		$editedSummaryData = json_encode($request->summaryResult);

		$golfCourseObj->UpdateCourse($courseIdFromRoute, $editedData, $editedSummaryData, $editedLocation);
		$msg = "You have successfully updated a round.";
   		return redirect()->route('user_message', ['message'=>$msg]);
		//echo $courseIdFromRoute;
	}


	public function Delete( $courseIdFromRoute )
	{
		$golfCourseObj = new GolfCourse;
		$golfCourseObj->DeleteCourse($courseIdFromRoute);
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

	public function Message( $message )
    {
         $data['message'] = $message;
         return view('user.message', $data);
    }
}
