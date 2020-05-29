@extends('layouts.app')
@section('content')
    <form method="post" class="form-horizontal" action="{{route('save_category')}}">
        @csrf
        <div class="form-group">
            @include('admin.messageshow')

        <label for="category_name">Category name</label>
        <input class="form-control" type="text" name="category_name" id="category_name" placeholder="category_name"></div>
        <div class="form-group">
        <button class="btn btn-primary" type="submit" name="submit" >Add</button>
        </div>

    </form>
@endsection
