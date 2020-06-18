@extends('layouts.app')
@section('content')
    <div class="container alert-info">
        <a href="{{route('add-sliderimage')}}" class="btn btn-success" style="float: right"><i class="fa fa-plus"></i> Add Slider image</a>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%;border: 1px solid midnightblue">
        <thead class="bg-info">
        <tr>

            <th>Title</th>
            <th>Sub_title</th>
            <th>Image</th>
            <th>Created at</th>
            <th>Status</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        @include('admin.messageshow')

 @foreach( $slider as $row)
            <tr>

                <td>{{$row->title}}</td>
                <td>{{substr($row->sub_title,0,20)}}...</td>
                <td><img style="width: 60px" src="{{asset('files/uploads/'.$row->image)}}"></td>
                <td>{{$row->created_at}}</td>
                <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" id="groupitem-status" data-id=""  ></td>
                <td>

                    <a href="" class="btn btn-warning" title="Edit"><i class="fa fa-edit" ></i></a>
                    <a href="{{route('delete-sliderimage',$row->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                </td>


            </tr>
 @endforeach


        </tbody>
    </table>
    </div>

@endsection


