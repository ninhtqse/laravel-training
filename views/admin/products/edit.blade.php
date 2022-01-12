@extends('admin.layouts.master')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-sm-12 portlets">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Contact</strong> Form</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form role="form" id="contactForm" action="{{route('create_product')}}" method="POST" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label>Category</label>
                            <select class="form-control" name="products[category_id]">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                @if($category->id == $result->product->category_id)
                                selected
                                @endif
                                >{{$category->name}}</option>
                            @endforeach
                            </select>
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="product_details[name]" value="{{$result->name}}" >
                      </div>
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="product_details[price]" value="{{$result->price}}">
                      </div>
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="product_details[quantity]" value="{{$result->quantity}}">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
          
            
        </div>
    </div>
    
                    
</div>
@endsection