@extends('layouts.app')
@section('content')
    <h3 class="text-center text-info">Update Category</h3>
    <form method="post" class="form-horizontal" action="{{route('update-category')}}">
        @csrf
        <div class="form-group">
            @include('admin.messageshow')
            <input type="hidden" name="id" value="{{$category->id}}">
            <label for="category_name">Category name</label>
            <input class="form-control" type="text"  name="category_name" id="category_name" value="{{$category->category_name}}" placeholder="category_name" >
            @error('category_name')
            <strong class="text-bold text-danger">{{$message}}</strong>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit" >Add</button>
        </div>

    </form>
@endsection

