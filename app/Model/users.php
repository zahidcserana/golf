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

	public function GetAllUser()
	{	
	      return DB::table($this->table)->paginate(5);
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
	public function GetProfilePhoto($userId)
	{
		return DB::table($this->table)->where('id', $userId)->first();
	}
	public function UpdateImage($userId,$fileName)
	{
		return DB::table($this->table)->where('id', $userId)->update(['photo'=>$fileName]);	
	}
	public function UpdateName($userId, $name)
	{
		return DB::table($this->table)->where('id', $userId)->update(['name'=>$name]);	

	}
	public function AdminCheck($email,$password)
	{
		return DB::table($this->table)->where('email', $email)->where('password',$password)->where('user_type', 'admin')->first();
	}
	public function MakeAdmin($id,$type)
	{
		return DB::table($this->table)->where('id', $id)->update(['user_type'=>$type]);	

	}
	public function DowngradeToUser($id,$type)
	{
		return DB::table($this->table)->where('id', $id)->update(['user_type'=>$type]);	

	}
	
}