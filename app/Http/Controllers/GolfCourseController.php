<?php

namespace App\Http\Controllers;
use App\Model\GolfCourse;
use Illuminate\Http\Request;

use App\Http\Requests;

class GolfCourseController extends Controller
{
    public function Form(Request $request)
	{
		$golfCourseObj = new GolfCourse;
		$golfCourseObj->data = json_encode($request->gameResult);
		$golfCourseObj->save();
		return view('index');
	}

	public function ViewCourse(Request $request)
	{
		$golfCourseObj = new GolfCourse;
		$userId ='2';
		$courseResult = $golfCourseObj->GetUserCourse($userId);
		dd($courseResult->data);
	}
}
