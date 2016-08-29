<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\cart;

class CartController extends Controller
{
	public function Index(Request $request)
	{
		$productListObj = new cart;
		//$productListObj->quantity = $request->$quantity;
		//$productListObj->product_id = $request->$productId;
		$productListObj->user_id = $request->$user_id;
		//$allProducts = $productListObj->GetAllProducrts();
		//$result = cart::create(101);
		$productListObj->save();
    	}
    	
     	public function ProductDetails($productId)
     	{
     		//return view('product_details',['productId' =>$productId]);

		$productDetailsObj = new products;
		$productDetails = $productDetailsObj->GetProductDetails($productId);
		
		return view('product_details',['products'=>$productDetails]);

		
						        
     	}
}
