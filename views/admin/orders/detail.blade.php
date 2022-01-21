@extends('admin.layouts.master')
@section('content')

<div class="content">
    <!-- Your awesome content goes here -->

<div class="row">
<div class="col-md-12">
<div class="widget">
<div class="widget-header transparent">
<h2>Id Order : {{$order->id}}</h2>
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

</div>
</div>

<div class="table-responsive">
<table data-sortable class="table table-hover table-striped">
<thead>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Variant</th>
        <th>image</th>
        <th>Quantity</th>
    </tr>
</thead>
<tbody>
    @foreach ($order->order_details()->get() as $key => $value)
    <tr>
        <td>{{@$value->product_detail->product->name}}</td>
        <td>{{number_format(@$value->product_detail->price)}}</td>
        <td>
            @foreach (@$value->product_detail->attribute_products()->get() as $v)
            {{$v->attribute->name}}: {{$v->value}} <br>
            @endforeach
        </td>
        <td><img src="../images/uploads/{{$value->product_detail->image}}"  style="max-height: 80px; max-width: 80px; margin-bottom: 10px;" ></td>
        <td>{{$value->quantity}}</td>
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

<div class="form-group">
    <p>Shipping Cost: {{$order->shipping_cost}}</p> 
    <p>Total Price: {{$order->total_price}}</p> 
</div>
<div class="widget-content padding">
    <form role="form" id="contactForm" action="{{route('edit_status', $order->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
            <label>Status</label>
                <select class="form-control" name="orders[status]">
                    <option
                    @if($order->status == 0)
                        selected
                    @endif
                    value="0">Đang chuẩn bị</option>
                    <option 
                    @if($order->status == 1)
                        selected
                    @endif
                    value="1">Đang giao</option>
                    <option
                    @if($order->status == 2)
                        selected
                    @endif
                    value="2">Giao Thành công</option>
                    <option 
                    @if($order->status == 3)
                        selected
                    @endif
                    value="3">Đã Hủy</option>
                </select>
        </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="data-table-toolbar">
{{-- {!!h_paginate($results)!!} --}}
</div>
</div>
</div>
</div>

</div>


</div>


@endsection
