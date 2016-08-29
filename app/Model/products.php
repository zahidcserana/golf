<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;

class products extends Model
{
	protected $table = 'products';
	protected $fillable = ['product_id'];
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	public function GetAllProducrts()
	{
	      return DB::table($this->table)->get();
	}
	public function GetProductDetails($productId)
	{
	      return DB::table($this->table)->where('product_id',$productId)-> get();
	}
	
}