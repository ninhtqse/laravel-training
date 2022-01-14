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
                        <form role="form" id="contactForm" action="{{route('edit_product', $product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="products[category_id]">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}"
                                                @if($category->id == $product->category_id)
                                                selected
                                            @endif
                                        >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="products[name]" value="{{$product->name}}">
                            </div>
                            @foreach ($product->product_details as $key => $productDetail)
                                <div class="variant row">
                                    @foreach ($attributes as $attribute)
                                        @foreach ($productDetail->attributeProducts as $attributeProduct)
                                            @if($attribute->id == $attributeProduct->attribute_id)
                                                <div class="form-group col-lg-6">
                                                    <label>{{$attribute->name}}</label>
                                                    <input type="text" class="form-control" name="attribute_products[{{$key}}][{{$attribute->id}}]" value="{{$attributeProduct->value}}">
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                    <div class="form-group col-lg-6">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="product_details[{{$key}}][price]" value="{{$productDetail->price}}">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Quantity</label>
                                        <input type="text" class="form-control" name="product_details[{{$key}}][quantity]" value="{{$productDetail->quantity}}">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="product_details[{{$key}}][description]" value="{{$productDetail->description}}">
                                    </div>
                                    <div class="form-group col-lg-3 ">
                                        <label>Current Image</label>
                                        <div class="img-wrap">
                                            <img src="../images/uploads/{{$productDetail->images}}" style="width:200px;height:100px">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 ">
                                        <label>New Image</label>
                                        <input type="file" class="form-control" name="product_details[{{$key}}][images]">
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="delete_variant" style="background:green;width:30px;height:30px;border-radius:5px;color:white;font-size:18px;text-align:center;line-height:30px;cursor:pointer;font-weight:bold">-</p>
                                    </div>
                                </div>
                            @endforeach
                            <div class="append">
                            </div>
                            <br>
                            <div class="form-group col-lg-6">
                                <p class="add_variant" style="background:red;width:30px;height:30px;border-radius:5px;color:white;font-size:18px;text-align:center;line-height:30px;cursor:pointer;font-weight:bold">+</p>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.add_variant').click(function(){
                let count = uuidv4();
                let html =
                    `<div class="variant row">`+
                    <?php
                    foreach ($attributes as $attribute){ ?>
                    `<div class="form-group col-lg-6">
              <label>`+`<?php echo $attribute->name; ?>`+`</label>
              <input type="text" class="form-control" name="attribute_products[${count}][<?php echo $attribute->id; ?>]">
          </div>`+
                    <?php } ?>
                    `
          <div class="form-group col-lg-6">
              <label>Price</label>
              <input type="text" class="form-control" name="product_details[${count}][price]">
          </div>
          <div class="form-group col-lg-6">
              <label>Image</label>
              <input type="file" class="form-control" name="product_details[${count}][images]">
          </div>
          <div class="form-group col-lg-6">
              <label>Quantity</label>
              <input type="text" class="form-control" name="product_details[${count}][quantity]">
          </div>
          <div class="form-group col-lg-6">
              <label>Description</label>
              <input type="text" class="form-control" name="product_details[${count}][description]">
          </div>
          <div class="col-lg-6">
              <p class="delete_variant" style="background:green;width:30px;height:30px;border-radius:5px;color:white;font-size:18px;text-align:center;line-height:30px;cursor:pointer;font-weight:bold">-</p>
          </div>
      </div>`;
                $('.append').append(html)
            });
            $('body').on('click','.delete_variant',function(){
                $(this).parents('.variant').remove();
            })
        });

        function uuidv4() {
            return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
                (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
            );
        }
    </script>
@endsection
