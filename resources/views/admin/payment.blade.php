@extends('layouts.app')
@section('content')
    @include('admin.messageshow')
    <form method="post" class="form-horizontal" action="{{route('save-payment')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="name">shortname</label>
            <input class="form-control" type="text" name="shortname" id="shortname" placeholder="shortname">
        </div>
        <div class="form-group">
            <label for="number">number</label>
            <input class="form-control" type="text" name="number" id="number" placeholder="number">
        </div>
        <div class="form-group">
            <label for="type">type</label>
            <input class="form-control" type="text" name="type" id="type" placeholder="agent/personal">
        </div>
        <div class="form-group">
            <label for="image">image</label>
            <input class="form-control" type="file" name="image" id="image">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit" >Add</button>
        </div>

    </form>
@endsection
