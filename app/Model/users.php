<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;

class users extends Model
{
	protected $table = 'users';
	protected $fillable = ['id','name','password'];
	protected $primaryKey = 'id';
	public $timestamps = false;

	public function GetAllUser()
	{
	      return DB::table($this->table)->get();
	}
	
	public function UserEmailCheck($email)
	{
	      return DB::table($this->table)->where('email', $email)->get();
	}
	public function PasswordChange($id,$password)
	{
		 return DB::table($this->table)->where('id', $id)->update(['password'=>$password]);	
	}
	public function GetLogInInfo($email, $password)
	{
		//dd($password);
	    return DB::table($this->table)->where('email', $email)->where('password', $password)->first();
	}
}