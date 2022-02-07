@extends('admin.layouts.master')
@section('content')

<div class="content">
    <!-- Your awesome content goes here -->

<div class="row">
<div class="col-md-12">
<div class="widget">
<div class="widget-header transparent">
<h2><strong>Order</strong> Table</h2>
<div class="additional-btn">
<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
</div>
</div>
<div class="widget-content">
<div class="data-table-toolbar">
<div class="row">
<div class="col-md-4">
    <form role="form">
    <input type="text" class="form-control" placeholder="Search...">
    </form>
    {{-- href="{{router('get_create')}}" --}}
</div>
<div class="col-md-8">
    <div class="toolbar-btn-action">
        <a class="btn btn-success" href="{{ route('get_create') }}" ><i class="fa fa-plus-circle"></i> Add new</a>
        {{-- <a class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
        <a class="btn btn-primary"><i class="fa fa-refresh"></i> Update</a> --}}
    </div>
</div>
</div>
</div>

<div class="table-responsive">
<table data-sortable class="table table-hover table-striped">
<thead>
    <tr>
        <th>Id Order</th>
        <th>Name's Customer</th>
        <th>Phone Number</th>
        <th>Total Price</th>
        <th>Status</th>
        <th data-sortable="false">Option</th>
    </tr>
</thead>

<tbody>
    @foreach ($results as $key => $result)
    <tr>
        
        <td><a href="{{route('get_order_detail', $result->id)}}">{{$result->id}}</a></td>
        @if($result->customer_id)
        <td>{{$result->customer->name}}</td>
        @elseif($result->user_id)
        <td>{{$result->user->name}}</td>
        @endif
        @if($result->customer_id)
        <td>{{$result->customer->phone}}</td>
        @elseif($result->user_id)
        <td>{{$result->user->phone}}</td>
        @endif
        <td>{{$result->total_price}}</td>
        @if($result->status == 0)
        <td><span class="label label-success">Đang trong giỏ hàng</span></td>
        @elseif($result->status == 1)
        <td><span class="label label-success">đanng giao</span></td>
        @elseif($result->status == 2)
        <td><span class="label label-success">giao thành công</span></td>
        @elseif($result->status == 2)
        <td><span class="label label-success">Đã hủy</span></td>
        @endif
        
        <td>User</td>    
     
        
        <td>
            <div class="btn-group btn-group-xs">
                <a data-toggle="tooltip" title="Active User" class="btn btn-default" href=""><i class="fa fa-power-off"></i></a>
                <a data-toggle="tooltip" title="Edit" class="btn btn-default" href=""><i class="fa fa-edit"></i></a>
                <a data-toggle="tooltip" title="Delete" class="btn btn-default" href=""><i class="fa fa-trash-o"></i></a>
            </div>
        </td>
    </tr>
    @endforeach
    

    
    
</tbody>
</table>
</div>

<div class="data-table-toolbar">
{!!h_paginate($results)!!}
</div>
</div>
</div>
</div>

</div>


</div>


@endsection
