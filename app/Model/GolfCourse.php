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
