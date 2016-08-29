<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\products;

class ProductController extends Controller
{
	public function ProductList()
	{
		$productListObj = new products;
		$allProducts = $productListObj->GetAllProducrts();
		$data = 'Product';
		return view('product')->with(
					            array(
					                'products' => $allProducts, 
					                'title' => $data
					            )
						);
    	}
     	public function ProductDetails($productId)
     	{
     		//return view('product_details',['productId' =>$productId]);

		$productDetailsObj = new products;
		$productDetails = $productDetailsObj->GetProductDetails($productId);
		
		return view('product_details',['products'=>$productDetails]);

		
						        
     	}
}
