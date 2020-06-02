@extends('layouts.app')
@section('content')
    <form method="post" class="form-horizontal" action="{{route('save_category')}}">
        @csrf
        <div class="form-group">
            @include('admin.messageshow')

        <label for="category_name">Category name</label>
        <input class="form-control" type="text" data-validation="length alphanumeric" data-validation-length="min4" name="category_name" id="category_name" value="{{ old('category_name') }}" placeholder="category_name">
            @error('category_name')
            <strong class="text-bold text-danger">{{$message}}</strong>
            @enderror
        </div>
        <div class="form-group">
        <button class="btn btn-primary" type="submit" name="submit" >Add</button>
        </div>

    </form>
@endsection
