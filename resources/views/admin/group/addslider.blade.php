@extends('layouts.app')
@section('content')
    <div class="container alert-primary">

        <h3 class="alert-success text-center" style="display:inline-block">Add Slider Image</h3>
    <div class="container">

@include('admin.messageshow')
        <form method="post" action="{{route('save-sliderimage')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="imagetitle">Image Title</label>
                <input type="text" class="form-control" id="imagetitle" aria-describedby="imagetitle" name="title" placeholder="Enter Image Title">
                    @error('imagetitle')
                    <strong class="text-bold text-danger">{{$message}}</strong>
                    @enderror
            </div>
            <div class="form-group">
                <label for="imagesubtitle">Image Sub title</label>
                <input type="text" class="form-control" id="imagesubtitle" name="sub_title" placeholder="Enter Image Sub title">
            </div>
            <div class="form-group">
                <label for="image">Choose Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <input type="reset" class="btn-group-sm">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
@endsection

