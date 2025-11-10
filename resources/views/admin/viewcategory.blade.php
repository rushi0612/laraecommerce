@extends('admin.maindesign')

@section('view_category')

@if(session('deletecategory_message'))
    <div style="margin-bottom: 10px; color:black; background-color:orangered;">
        {{session('deletecategory_message')}}
    </div>

@endif
           <div class="search-panel">
              <form id="searchForm" action="#">
                <div class="form-group">
                  <input type="search" name="search" placeholder="What are you searching for...">
                  <button type="submit" class="submit">Search</button>
                </div>
              </form>
            </div>
<table style="width:100%; boarder-collapse: collapse; font-family: Arial, Helvetica, sans-serif">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Category ID</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Category Name</th>
            <th style="padding: 12px; text-align:left; border-bottom: 1px solid #dd;">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 12px;">{{$category->id}}</td>
            <td style="padding: 12px;">{{$category->category}}</td>
            <td style="padding: 12px;">
                <a href="{{route('admin.categoryupdate',$category->id)}}" style="color: green">Update</a>

                <a href="{{route('admin.categorydelete',$category->id)}}" onclick="return confirm('Are you sure')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection