@extends('layouts.app')
@section('content')
    <h3 class="text-center"><span class="alert-info">Edit Sub Group Item</span></h3>
    <form method="post" class="form-horizontal" action="{{route('update-subgroupitem')}}">
        @csrf
        <div class="form-group">
            @include('admin.messageshow')
            <input type="hidden" name="id" value="{{$editsubgrpitem->id}}">
            <label for="subgroup_name">Group name</label>
            <input class="form-control" type="text" data-validation-length="min4" name="subgroup_name" id="subgroup_name" value="{{$editsubgrpitem->subgroup_name}}" >

            @error('subgroup_name')
            <strong class="text-bold text-danger">{{$message}}</strong>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit" name="submit" >Update</button>
        </div>

    </form>
@endsection


