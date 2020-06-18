@extends('layouts.app')
@section('content')
<div class="container alert-info">
    <a href="{{route('add-subgroupitem')}}" class="btn btn-success" style="float: right"><i class="fa fa-plus"></i> Add Sub group</a>
    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%;border: 1px solid midnightblue">

        <thead class="bg-info">
        <tr>

            <th>Group_Item Name</th>
            <th>Sub Group name</th>
            <th>Created at</th>
            <th>Group_Item status</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        @include('admin.messageshow')

        @foreach($savesubgrpitem as $row)
            <tr>

                <td>{{$row->groupitem->group_name}}</td>
                <td>{{$row->subgroup_name}}</td>
                <td>{{$row->created_at}}</td>
                <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" id="groupitem-status" data-id=""  ></td>

                <td>

                    <a href="{{route('edit-subgroupitem',$row->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-edit" ></i></a>
                    <a href="{{route('delete-subgroupitem',$row->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                </td>



            </tr>
        @endforeach


        </tbody>
    </table>

    <hr>

</div>
@endsection


