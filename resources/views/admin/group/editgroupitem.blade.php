@extends('layouts.app')
@section('content')
    <h3 class="text-center"><span class="alert-info">Edit Group Item</span></h3>
    <form method="post" class="form-horizontal" action="{{route('update-groupitem')}}">
        @csrf
        <div class="form-group">
            @include('admin.messageshow')
            <input type="hidden" name="id" value="{{$groupitem->id}}">
            <label for="group_name">Group name</label>
            <input class="form-control" type="text" data-validation-length="min4" name="group_name" id="group_name" value="{{$groupitem->group_name}}" >

                @error('group_name')
            <strong class="text-bold text-danger">{{$message}}</strong>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit" name="submit" >Update</button>
        </div>

    </form>
@endsection


