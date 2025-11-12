@extends('maindesign')

@section('viewcart_products')

     @if(session('remove_cart_message'))
            <div style="margin:1rem; padding:1rem; border-radius:0.25rem; position:relative; color:black; background-color:rgb(255, 132, 132);">
                {{session('remove_cart_message')}}
            </div>
        @endif
<table style="width:50%; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif; margin: 0 auto;">
    <div class="container py-5">
        <div style="max-width: 1000px; marging:0 auto; padding:20px;"> 
          <button><a href="{{route('index')}}"> Back to Home</a></button>
        </div>
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Title</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Price</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Image</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Action</th>
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
            <td style="padding: 12px;"><a style="padding: 10px; background-color:red; color:white" href="{{route('removecartproduct',$cart_product->id )}}">Remove</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
