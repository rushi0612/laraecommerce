@extends('admin.maindesign')

@section('view_orders')
            
<table style="width:100%; boarder-collapse: collapse; font-family: Arial, Helvetica, sans-serif">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Customer Name</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Address</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Phone</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Price</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Image</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 12px;">{{$order->user->name}}</td>
            <td style="padding: 12px;">{{$order->receiver_address }}</td>
            <td style="padding: 12px;">{{$order->receiver_phone}}</td>
            <td style="padding: 12px;">{{$order->product->product_title}}</td>
            <td style="padding: 12px;">$ {{$order->product->product_price}}</td>
            <td style="padding: 12px;">
                <img style="width:150px; " src="{{asset('products/'.$order->product->product_image)}}" alt="">
            </td>
            <td style="padding: 12px;">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection