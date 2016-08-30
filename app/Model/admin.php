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
	
	public function AdminCheck($name,$password)
	{
		return DB::table($this->table)->where('name', $name)->where('password',$password)->first();
	}
}