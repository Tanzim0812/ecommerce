@extends('layouts.app')
@section('content')

    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%;border: 1px solid midnightblue">
        @include('admin.messageshow')
        <thead class="bg-info">
        <tr>
            <th>Order Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Paid Status</th>
            <th>Order Status</th>
            <th>Order Time</th>
            <th>Action</th>
            <th>Admin comment</th>



        </tr>
        </thead>
        <tbody>


@foreach($view as $row)
            <tr>
                <td>#EC-{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->phone}}</td>
                <td>
                    @if($row->is_paid == 0)
                        <button class="btn-group-sm btn-danger">Not paid</button>
                    @else
                        <button class="btn-group-sm btn-success">Paid</button>
                    @endif

                </td>
                <td>
                    @if($row->is_completed == 0)
                        <button class="btn-group-sm btn-danger">Not Completed</button>
                    @else
                        <button class="btn-group-sm btn-success">Completed</button>
                    @endif
                </td>
                <td>
                    {{$row->created_at}}
                </td>
                <td>

                    <!-- --------------------------------- SHOW BUTTON CODE START HERE---------------------------------------------------------------- -->
                    <a href="{{route('order-showw',$row->id)}}" class="btn btn-warning">Go</a>
                    <a href="{{route('pdf-invoice',$row->id)}}" class="btn btn-primary">Print invoice</a>
                    <button type="button" class="btn btn-info" onclick="moda({{$row->id}})" data-toggle="modal" data-target="#myModal23">View</button>
                    <a href="{{route('delete-order-admin',$row->id)}}" onclick="return confirm('Are you delete it?')" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a>

                </td>
                <td>
                    <form class="form-inline" method="post" action="{{route('update-order-admin',$row->id)}}">
                        @csrf

                        <textarea class="form-control unicase-form-control text-input" name="comment">{{$row->comment}}</textarea>
                        <button class="btn-group-sm btn-success" type="submit">&#10004</button>
                    </form>
                </td>


            </tr>
@endforeach

        <!-- Modal -->
        <div class="modal fade" id="myModal23" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="nam"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-6">
                            <label for="phn">Phone</label>
                            <p id="phn"></p>
                            <label for="eml">Email</label>
                            <p id="eml"></p>
                            <label for="dis">District</label>
                            <p id="dis"></p>
                            <label for="upz">Upazilla</label>
                            <p id="upz"></p>
                            <label for="fulladd">Address</label>
                            <p id="fulladd"></p>
                            <label for="postalcode">Postal Code</label>
                            <p id="postalcode"></p>
                        </div>
                        <div class="col-md-6" style="border-left: 1px solid deepskyblue">
                            <label for="price">Total Amout (Cost+Delivery charge)</label>
                            <p id="price"><span id="ttlcost"></span>+<span id="dcost"></span>=<span id="lastcost"></span> Taka</p>
                            <label for="paymethod">Payment Method</label>
                            <p id="paymethod"></p>
                            <label for="trxid">Transaction ID</label>
                            <p id="trxid"></p>
                            <label for="msg">User additional Message</label>
                            <p id="msg" class="clearfix"></p>
                        </div>
                        <div class="col-md-12 bg-success">
                            <h5 class="text-center" id="dat"></h5>
                        </div>



                    </div>
                    <div class="modal-footer">

                    </div>
                </div>

            </div>
        </div>

        </tbody>
    </table>

@endsection
