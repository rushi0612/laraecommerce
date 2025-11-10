@extends('admin.maindesign')

<base href="/public">
@section('add_category')

    @if(session('category_message'))
        <div style="margin:1rem; background-color:#d1fae5; border:1px solid #4ade80; color:#047857; padding:1rem; border-radius:0.25rem; position:relative;">
            {{ session('category_message') }}
        </div>
    @endif
    <div class="container-fluid">
        <form action="{{route('admin.postaddcategory')}}" method="POST" >
            @csrf
            <input type="text" name="category" placeholder="Enter Category Name" required>
                @error('category')
                    <div style="color:red; margin-top:5px;">{{ $message }}</div>
                @enderror
            <input type="submit" name="submit" value="Add Category">
        </form>
    </div>

@endsection