@extends('layouts.app')
@section('content')
   <h3 class="alert-success" style="display:inline-block">Add Sub Group</h3>
    <div class="container">
   <form method="post" class="form-horizontal" action="{{route('save-subgroupitem')}}">
        @csrf
        <div class="form-group">
            @include('admin.messageshow')

                <label for="grouptime">Sub group name</label>
                <select id="grouptime" class="form-control" name="grp_id">
                    <option class="alert-danger">Select</option>
                @foreach($groupitem as $row)
                    <option value="{{$row->id}}">{{ucwords($row->group_name)}}</option>
                    @endforeach
                </select>

        </div>
            <div class="form-group">

                <input class="form-control" type="text" name="subgroup_name" id="subgroup_name" value="" placeholder="Sub group name">
                @error('subgroup_name')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror

        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit" >Add</button>
        </div>

    </form>
    </div>
@endsection

