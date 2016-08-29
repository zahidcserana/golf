<?php
  $asset = asset('/');
?>
@extends('master')
@section('maincontent')
    @if (count($products) > 0)
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

                                <img src="{{$asset}}{{ $product->location }}"width="400" height="300"></a></div>
                                <div><input type="text" id="number_{{ $product->product_id }}" name="quantity" value="1" size="2" />
                                <button class="addToCart" value="{{ $product->product_id }}" >Add To Cart</button></div></td>
                               
                            </tr>
                            <tr>
                                
                                    <div><h2>{{ $product->desc1 }}</h2></div>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    <script>
            $(".addToCart").click(function()
            {   
                var productId = $(this).attr("value");
                var str1 = "#number_";
                var str2 = $(this).attr("value");
                var concateStr = str1.concat(str2);
                var quantity = $(concateStr).val();

                $.post( "cart_info.php", { productId: productId, quantity: quantity })
                   .done(function( data ) {
                      alert( "Product has been added to cart!" );
                });
            });
        </script>
@stop

