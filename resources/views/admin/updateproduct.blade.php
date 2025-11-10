@extends('admin.maindesign')



@section('add_product')

    @if(session('product_update_message'))
        <div style="margin:1rem; background-color:#d1fae5; border:1px solid #4ade80; color:#047857; padding:1rem; border-radius:0.25rem; position:relative;">
            {{ session('product_update_message') }}
        </div>
    @endif
    <div class="container-fluid">
        <form action="{{route('admin.postupdateproduct',$product->id)}}" method="POST", enctype="multipart/form-data" >
            @csrf
            <input type="text" name="product_title" value="{{$product->product_title}}"  required><br><br>
            <textarea name="product_description" value="{{$product->product_description}}">
                Product Description!...
            </textarea><br><br>
            <input type="number" name="product_quantity" value="{{$product->product_quantity}}" required><br><br>
            <input type="number" name="product_price" value="{{$product->product_price}}"  required><br><br>
            <img style="width: 100px" src="{{ asset('products/'.$product->product_image) }}"> <label>Old Image</label>
            <input type="file" name="product_image" ><label>Add new Image here!</label><br><br>
            
            <select name="product_category">    
                <option value="{{$product->product_category}}"> 
                    {{$product->product_category}}
                </option>
                @foreach($categories as $category)
                <option value="{{$category->category}}">
                    {{$category->category}}
                </option>
                @endforeach
            </select> <label >Select Category</label> <br><br>
            <input type="submit" name="submit" value="Update Product">
        </form>
    </div>

@endsection