@extends('layouts.app')
@section('content')

    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%;border: 1px solid midnightblue">
        <thead class="bg-info">
        <tr>

            <th>Group_Item Name</th>
            <th>Created at</th>
            <th>Group_Item status</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        @include('admin.messageshow')

        @foreach( $groupitem as $row)
            <tr>

                <td>{{$row->group_name}}</td>
                <td>{{$row->created_at}}</td>
                <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" id="groupitem-status" data-id="{{$row->id}}" {{$row->group_status== 1 ? 'checked':''}} ></td>
                <td>

                    <a href="{{route('edit-groupitem',$row->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-edit" ></i></a>
                    <a href="{{route('delete-groupitem',$row->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                </td>


            </tr>


        @endforeach
        </tbody>
    </table>

@endsection

