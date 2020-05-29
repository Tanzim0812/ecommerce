@extends('layouts.app')
@section('content')
    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%;border: 1px solid midnightblue">
        <thead class="bg-info">
        <tr>

            <th>Category_Name</th>
            <th>Category_status</th>
            <th>Created at</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        @include('admin.messageshow')

        @foreach( $category as $row)
        <tr>

            <td>{{$row->category_name}}</td>
            <td>{{$row->category_status == 0 ? 'Inactive':'Active'}}</td>
            <td>{{$row->created_at}}</td>
            <td>
                @if($row->category_status == 0)
                    <a href="{{route('active-category',$row->id)}}" class="btn btn-info" title="Active"><i class="fa fa-arrow-up"></i></a>

                @else
                    <a href="{{route('inactive-category',$row->id)}}" class="btn btn-primary" title="Inactive"><i class="fa fa-arrow-down"></i></a>
                @endif
                <a class="btn btn-warning" title="Edit"><i class="fa fa-edit" ></i></a>
                <a href="{{route('delete-category',$row->id)}}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to Delete it?')"><i class="fa fa-trash"></i></a>
            </td>


        </tr>


        @endforeach
        </tbody>
    </table>

@endsection
