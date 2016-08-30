<?php
session_start();
$asset = asset('/');
//$datetime = date('Y-m-d H:i:s');
echo Session::get('sessionId');
echo Session::get('customerId');
?>
<table><tr><th>Course Id</th><th>Date</th><th>Action</th></tr>
@foreach ($courseResult as $course)
	<tr>
	<div class="course">
		<?php $timestamp = strtotime($course->created_at);
		$date = date('d-m-Y', $timestamp);?>

		<td><div>{{$course->id}}</div></td>
		<td><div>{{$date}}</div></td>
		<td><a href="{{route('course_details', ['course_id'=>$course->id])}}">Details</a></td>

	</div>
	</tr>
@endforeach
</table>

<?php
Route::get('/edit_product/{productId}', ['as'=>'edit_product', 'uses'=>'AdminProductController@EditProduct']);
 public function EditProduct($productIdFromRoute)
    {
    	$productsObj = new products;
		$productDetails = $productsObj->GetProductDetails($productIdFromRoute);
    	return view('admin_edit_product', ['productDetails'=> $productDetails]);
    }