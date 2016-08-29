<?php
  $asset = asset('/');
?>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{$asset}}js/jquery.min.js"></script>
<script src="{{$asset}}js/jquery.validate.min.js"></script>
@extends('master')
@section('maincontent')
    
        <div class="mainbar">
            <div align="center" class="article">
                <h2 ><span>Product List</h2>
                <div class="clr"></div>
                <table class="table table-striped task-table">
                    <thead>
                        <th>Id</th>        
                        <th>Category</th>
                        <th>Price</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                             <td class="table-text">
                                    <div>{{ $product->product_id }}</div>
                                </td>
                                <td>
                                    <div>{{ $product->category }}</div>
                                </td>
                                <td>
                                    <div>{{ $product->price }}</div>
                                </td>
                                <div class="product_image"><td>
                                <a href="{{route('product_details', ['productId'=>$product->product_id])}}">

                                <img src="{{$asset}}{{ $product->location }}"width="300" height="200"></a></div>

                                <div><input type="text" id="number_{{ $product->product_id }}" name="quantity" value="1" size="2" />
                                <button class="addToCart" value="{{ $product->product_id }}" >Add To Cart</button></div></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
@stop
    <script>
        $(document).ready(function()
        {
            $(".addToCart").click(function()
            {
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var user_id = '111';
                var productId = $(this).attr("value");
                var str1 = "#number_";
                var str2 = $(this).attr("value");
                var concateStr = str1.concat(str2);
                var quantity = $(concateStr).val();
                alert(productId);
                $.post("{{route('addToCart')}}", { productId: productId, quantity: quantity,user_id: user_id })
                         .success(function(){
                    //alert( "Product has been added to cart");
                });
            });
        });
    </script>

 
