@extends('layouts.app')
@section('content')
    <form method="post" class="form-horizontal" action="{{route('save-groupitem')}}">
        @csrf
        <div class="form-group">
            @include('admin.messageshow')

            <label for="group_name">Group name</label>
            <input class="form-control" type="text" data-validation="length alphanumeric" data-validation-length="min4" name="group_name" id="group_name" value="{{ old('group_name') }}" placeholder="group_name">
            @error('group_name')
            <strong class="text-bold text-danger">{{$message}}</strong>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit" >Add</button>
        </div>

    </form>
@endsection

