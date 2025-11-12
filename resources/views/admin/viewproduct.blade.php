@extends('admin.maindesign')

@section('view_category')

@if(session('deletecategory_message'))
    <div style="margin-bottom: 10px; color:black; background-color:orangered;">
        {{session('deletecategory_message')}}
    </div>
@endif

@section('view_category')
@if(session('deleteproduct_message'))
    <div style="margin-bottom: 10px; color:black; background-color:orangered;">
        {{session('deleteproduct_message')}}
    </div>
@endif
            <div class="list-inline-item">
              <form action="{{route('admin.searchproduct')}}" method="post">
                @csrf
                <div class="form-group">
                  <input type="search" name="search" placeholder="What are you searching for...">
                  <button type="submit" class="submit">Search</button>
                </div>
              </form>
            </div>

<table style="width:50%; boarder-collapse: collapse; font-family: Arial, Helvetica, sans-serif">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Title</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Description</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Quantity</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Price</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Image</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Product Category</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 12px;">{{$product->product_title}}</td>
            <td style="padding: 12px;">{{$product->product_description}}</td>
            <td style="padding: 12px;">{{$product->product_quantity}}</td>
            <td style="padding: 12px;">$ {{$product->product_price}}</td>
            <td style="padding: 12px;">
                <img style="width:150px; " src="{{asset('products/'.$product->product_image)}}" alt="">
            </td>
            <td style="padding: 12px;">{{$product->product_category}}</td>
            <td style="padding: 12px;">
                <a href="{{route('admin.updateproduct', $product->id)}}" style="color: green; padding:5px; margin:5px">Update</a>
                <a href="{{route('admin.deleteproduct',$product->id)}}"style="padding:5px; margin:5px "  onclick="return confirm('Are you sure')">Delete</a>
            </td>
        </tr>
        @endforeach
    
        <div style="margin-top: 15px;">
            {{ $products->links() }}
        </div>
    </tbody>

</table>
    
@endsection