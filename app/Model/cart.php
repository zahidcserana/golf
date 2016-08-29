<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;

class products extends Model
{
	protected $table = 'cart';
	protected $fillable = ['cart_id'];
	protected $primaryKey = 'cart_id';
	public $timestamps = false;

	public function GetCartId()
	{
	      return DB::table($this->table)->get();
	}
	public function GetDetails($productId)
	{
	      return DB::table($this->table)->where('product_id',$productId)-> get();
	}
	public function InsertGetId($input)
 	{
	      return DB::table($this->table)->insertGetId($input);
	}
	
}