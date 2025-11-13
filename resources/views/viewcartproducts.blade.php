@extends('maindesign')
@section('viewcart_products')

     @if(session('remove_cart_message'))
            <div style="margin:1rem; padding:1rem; border-radius:0.25rem; position:relative; color:black; background-color:rgb(255, 132, 132);">
                {{session('remove_cart_message')}}
            </div>
        @endif
<div style="max-width: 1000px; margin:0 auto; padding:20px;">     
    <table style="width:100%; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif; margin: 0 auto;">
        <div class="container py-5">
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
            @php
            $price = 0;
            @endphp
            @foreach($cart as $cart_product)
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 12px;">{{$cart_product->product->product_title}}</td>
                <td style="padding: 12px;">$ {{$cart_product->product->product_price}}</td>
                <td style="padding: 12px;">
                    <img style="width:150px; " src="{{asset('products/'.$cart_product->product->product_image)}}" alt="">
                </td>
                <td style="padding: 12px;"><a style="padding: 10px; background-color:red; color:white" href="{{route('removecartproduct',$cart_product->id )}}">Remove</a></td>
            </tr>
            @php
                $price=$price+$cart_product->product->product_price;
            @endphp
            @endforeach
            <tr style="border-bottom: 1px solid #ddd; background-color: rgb(155, 155, 155);">
                <td style="padding: 12px;">Total Price</td>
                <td style="padding: 12px;">$ {{$price}}</td>
                <td style="padding: 12px;"> </td>
                <td style="padding: 12px;"></td>
            </tr>
        </tbody>
    </table>
    <form action="{{route('conform_order')}}" method="post" style="margin-top:10px">
        @csrf
        <input type="text" name="receiver_address" id="" placeholder="Enter Your Address" required> <br><br><br>
        <input type="text" name="receiver_phone" id="" placeholder="Enter Your Phone Number" required><br><br><br>
        <input class="btn btn-primary" type="submit" value="Confirm Order" value="submit">
    </form>
</div>
@endsection
