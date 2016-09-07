<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;
class GolfCourse extends Model
{
    protected $table = 'golf_course';
	protected $fillable = ['id', 'users', 'data'];
	protected $primaryKey = 'id';
	public $timestamps = false;

	public function GetUserCourse($userId)
	{
		return DB::table($this->table)->where('user_id', $userId)->get();
	}
	public function GetCourse($courseId, $userId)
	{
		return DB::table($this->table)->where('id', $courseId)->where('user_id', $userId)->first();
	}
	public function GetList($userId, $number)
 	{
 	 	return DB::table($this->table)->where('user_id', $userId)->paginate($number);
 	}
 	public function CheckList($userId)
 	{
 	 	return DB::table($this->table)->where('user_id', $userId)->get();
 	}
 	public function UpdateCourse($courseIdFromRoute, $editedData, $editedSummaryData)
 	{
 	 	return DB::table($this->table)->where('id', $courseIdFromRoute)->update(['data'=> $editedData, 'summary_data'=> $editedSummaryData]);
 	}
	/*public function GetUserName($userName)
	{
	      return DB::table($this->table)->where('user_name', $userName)->get();
	}
	public function GetEmail($email)
	{
	      return DB::table($this->table)->where('email', $email)->get();
	}
	public function GetLogInInfo($userName, $password)
	{
	      return DB::table($this->table)->where('user_name', $userName)->where('password', $password)->first();
	}*/
}
