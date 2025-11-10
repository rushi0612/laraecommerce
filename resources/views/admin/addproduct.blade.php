@extends('admin.maindesign')

<base href="/public">

@section('add_product')

    @if(session('product_message'))
        <div style="margin:1rem; background-color:#d1fae5; border:1px solid #4ade80; color:#047857; padding:1rem; border-radius:0.25rem; position:relative;">
            {{ session('product_message') }}
        </div>
    @endif
    <div class="container-fluid">
        <form action="{{route('admin.postaddproduct')}}" method="POST", enctype="multipart/form-data" >
            @csrf
            <input type="text" name="product_title" placeholder="Enter Product Title!" required><br><br>
            <textarea name="product_description">
                Product Description!...
            </textarea><br><br>
            <input type="number" name="product_quantity" placeholder="Enter Product Quantity here" required><br><br>
            <input type="number" name="product_price" placeholder="Enter Product Price here" required><br><br>
            <input type="file" name="product_image" ><br><br>
            
            <select name="product_category">
                @foreach($categories as $category)
                <option value="{{$category->category}}">{{$category->category}}</option>
                @endforeach
            </select><br><br>
            <input type="submit" name="submit" value="Add Product">
        </form>
    </div>

@endsection