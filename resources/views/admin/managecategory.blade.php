@extends('layouts.app')
@section('content')

    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%;border: 1px solid midnightblue">
        <thead class="bg-info">
        <tr>

            <th>Category_Name</th>
            <th>Created at</th>
            <th>Category_status</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        @include('admin.messageshow')

        @foreach( $category as $row)
        <tr>

            <td>{{$row->category_name}}</td>
            <td>{{$row->created_at}}</td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" id="category_status" data-id="{{$row->id}}" {{$row->category_status==1 ? 'checked':''}} ></td>
            <td>

                <a href="{{route('edit-category',$row->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-edit" ></i></a>
                <a id="deleteajax" data-id="{{$row->id}}" class="btn btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a>

            </td>


        </tr>


        @endforeach
        </tbody>
    </table>

@endsection
