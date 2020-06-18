@extends('layouts.app')
@section('content')
    <div class="container alert-info">
        <a href="{{route('add-product')}}" class="btn btn-success" style="float: right"><i class="fa fa-plus"></i> Add Sub group</a>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%;border: 1px solid midnightblue">

            <thead class="bg-info">
            <tr>

                <th>Product Name</th>
                <th>Product info</th>
                <th>Image</th>
                <th>Previous price</th>
                <th>Offer price</th>
                <th>status</th>
                <th>Action</th>


            </tr>
            </thead>
            <tbody>
            @include('admin.messageshow')

            @foreach($product as $row)
                <tr>

                    <td>{{$row->title}}</td>
                    <td>{{$row->sub_title}}</td>
                    <td><img style="width: 60px" src="{{asset('files/uploads/'.$row->image)}}"></td>
                    <td><strike>{{$row->previous_price}}</strike></td>
                    <td>{{$row->offer_price}}</td>

                    <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" id="groupitem-status" data-id=""  ></td>

                    <td>

                        <a href="" class="btn btn-warning" title="Edit"><i class="fa fa-edit" ></i></a>
                        <a href="" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>



                </tr>
            @endforeach


            </tbody>
        </table>

        <hr>

    </div>
@endsection


