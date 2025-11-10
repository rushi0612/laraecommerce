@extends('maindesign')
<base href="/public">
@section('product_details')

        
    {{-- Product Details Section --}}
    <div class="container py-5">
        <div style="max-width: 1000px; marging:0 auto; padding:20px;"> 
          <button><a href="{{route('index')}}"> Back to Home</a></button>
        </div>

        <div class="row">
            {{-- Product Image --}}
            <div class="col-md-5 text-center">
                <img src="{{ asset('products/'.$product->product_image) }}" 
                     alt="{{ $product->product_title }}" 
                     class="img-fluid rounded shadow"
                     style="max-height: 400px;">
            </div>

            {{-- Product Info --}}
            <div class="col-md-7">
                <h2 class="mb-3">{{ $product->product_title }}</h2>
                <h5 class="text-muted mb-3">Category: {{ $product->product_category }}</h5>
                <h3 class="text-success mb-3">$ {{ number_format($product->product_price, 2) }}</h3>
                <h6 class="text-muted mb-3">Description:</h6>
                <p class="mb-4">{{ $product->product_description }}</p>

                {{-- Stock Info --}}
                @if($product->product_quantity > 0)
                    <p><strong class="text-success">In Stock:</strong> {{ $product->product_quantity }} available</p>
                @else
                    <p class="text-danger"><strong>Out of Stock</strong></p>
                @endif

                {{-- Add to Cart Form (optional) --}}
                <form action="" method="POST">
                    @csrf
                    <div class="row align-items-center g-3">
                        <div class="col-auto">
                            <input type="number" name="quantity" value="1" min="1" max="{{ $product->product_quantity }}" class="form-control w-75">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
@endsection>
