@extends('maindesign')

@section('viewcart_products')
<table style="width:100%; boarder-collapse: collapse; font-family: Arial, Helvetica, sans-serif">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Title</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Price</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart as $cart_product)
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 12px;">{{$cart_product->product->product_title}}</td>
            <td style="padding: 12px;">$ {{$cart_product->product->product_price}}</td>
            <td style="padding: 12px;">
                <img style="width:150px; " src="{{asset('products/'.$cart_product->product->product_image)}}" alt="">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
