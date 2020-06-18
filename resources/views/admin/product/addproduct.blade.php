@extends('layouts.app')
@section('content')
    <h3 class="alert-success" style="display:inline-block">Add Product</h3>
    <div class="container">
        <form method="post" class="form-horizontal" action="{{route('save-product')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group" id="div_grouptime">
                @include('admin.messageshow')
                <label for="grouptime">group name</label>
                <select id="grouptime" class="form-control" name="grp_id" required>
                    <option value="0" disabled="true" selected="true">-Select-</option>
                    @foreach($groupitem as $row)
                        <option value="{{$row->id}}">{{ucwords($row->group_name)}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group" id="div_subgrouptime">

                <label for="subgrouptime">Sub group name</label>

                <select id="subgrouptime" class="form-control" name="subgrp_id" required>
                    <option value="0" disabled="true" selected="true">-Select-</option>
                    @foreach($subgrpitem as $row)
                        <option class="{{'group'.$row->grp_id}} subgrpitem-option" value="{{$row->id}}">{{ucwords($row->subgroup_name)}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="title" id="title" placeholder="Title" required>
                @error('title')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="sub_title" id="sub_title" placeholder="sub_title" required>
                @error('sub_title')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="previous_price" id="previous_price" placeholder="previous_price" required>
                @error('previous_price')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="offer_price" id="offer_price" placeholder="offer_price" required>
                @error('offer_price')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror
            </div>

            <div class="form-group">
                <input class="form-control" type="file" name="image" id="image"  placeholder="image" required>
                @error('image')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit" >Add</button>
            </div>

        </form>
    </div>
@endsection


