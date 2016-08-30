<?php
session_start();
$asset = asset('/');
$datetime = date('Y-m-d H:i:s');
echo Session::get('sessionId');
echo Session::get('customerId');
?>

@foreach ($allProducts as $products)
	<div class="product_item">

		<div class="ee"><a href="{{route('product_details', ['productId'=>$products->product_id])}}"><img src="{{$asset}}{{$products->product_image}}" width="300" height="200"></div>

		<div>{{$products->name}}</div></a>
		<div>${{$products->price}}</div>
		<div><input id="number_{{$products->product_id}}" type="text" name="quantity" value="1" size="2" />
		<button class="addToCart" value="{{$products->product_id}}" >Add To Cart</button>
		</div>

	</div>
	@endforeach