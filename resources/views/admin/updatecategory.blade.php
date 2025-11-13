@extends('admin.maindesign')


@section('update_category')

    @if(session('category_updated_message'))
        <div style="margin:1rem; background-color:#dbeafe; border:1px solid #3b82f6; color:#1e3a8a; padding:1rem; border-radius:0.25rem; position:relative;">
            {{ session('category_updated_message') }}
        </div>
    @endif
    <div class="container-fluid">
        <form action="{{route('admin.postupdatecategory',$category->id)}}" method="POST" >
            @csrf

            <input type="text" name="category" value="{{$category->category}}" required>
            <input type="submit" name="submit" value="Update Category">
        </form>
    </div>

@endsection
