<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;


class admin extends Model
{
	protected $table = 'admin';
	protected $fillable = ['id'];
	protected $primaryKey = 'id';
	public $timestamps = false;
	
	public function AdminCheck($email,$password)
	{
		return DB::table($this->table)->where('email', $email)->where('password',$password)->first();
	}
}