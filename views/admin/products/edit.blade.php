@extends('admin.layouts.master')
@section('css')
<style>
    .variant{
        border-style: solid;
        border-color: green;
        margin-top: 10px;
    }
</style>
@endsection
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
                    <form role="form" id="contactForm" action="{{route('edit_product', $data['product']->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="products[category_id]">
                                @foreach ($results as $result)
                                <option
                                @if($data['product']->category_id == $result->id)
                                    selected
                                @endif
                                value="{{$result->id}}">{{$result->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="products[name]" value="{{$data['product']->name}}">
                        </div>
                        @foreach ($data['productDetail'] as $productDetail)
                        <div class="variant row">
                            
                            @foreach ($attributes as $attribute)
                            <div class="form-group col-lg-6">
                                <label>{{$attribute->name}}</label>
                                <input type="text" class="form-control" name="attribute_products[{{$productDetail->id}}][{{$attribute->id}}]" 

                                @foreach($data['attributeProduct'] as $attributeProduct)
                                @foreach($attributeProduct as $item)
                                @if($attribute->id == $item->attribute_id && $item->product_detail_id == $productDetail->id)
                                value="{{$item->value}}"
                                @endif
                                @endforeach
                                @endforeach
                                >
                            </div>
                            @endforeach
                            <div class="form-group col-lg-6">
                                <label>Price</label>
                                <input type="text" class="form-control" name="product_details[{{$productDetail->id}}][price]" value="{{$productDetail->price}}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Image</label>
                            <br>
                                <img id='test{{$productDetail->id}}' class="view_image" src="../images/uploads/{{$productDetail->image}}"  style="max-height: 80px; max-width: 80px; margin-bottom: 10px;" >
                            <br>
                                <input onchange="document.getElementById('test{{$productDetail->id}}').src = window.URL.createObjectURL(this.files[0])" class="add_image" type="file" class="form-control" name="product_details[{{$productDetail->id}}][image]" id="image{{$productDetail->id}}" >
                               
                            </div>

                            
                          
                            <div class="form-group col-lg-6">
                                <label>Quantity</label>
                                <input type="text" class="form-control" name="product_details[{{$productDetail->id}}][quantity]" value="{{$productDetail->quantity}}" >
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Description</label>
                                <input type="text" class="form-control" name="product_details[{{$productDetail->id}}][description]" value="{{$productDetail->description}}">
                                <input type="text" class="form-control" style="display: none" name="product_details[{{$productDetail->id}}][id]" value="{{$productDetail->id}}">
                            </div>
                            <div class="col-lg-6">
                                <p class="delete_variant" style="background:green;width:30px;height:30px;border-radius:5px;color:white;font-size:18px;text-align:center;line-height:30px;cursor:pointer;font-weight:bold">-</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="append">

                        </div>
                        <div class="col-lg-6">
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
<script>
  $(document).ready(function(){
    $('.add_image').change(function(evt){
      
    });
  
    
    $('.add_variant').click(function(){
      let count = uuidv4();
      let html = 
      `<div class="variant row">`+
          <?php 
          foreach ($attributes as $attribute){ ?>
          `<div class="form-group col-lg-6">
              <label>`+`<?php echo $attribute->name; ?>`+`</label>
              <input type="text" class="form-control" name="attribute_products[${count}][<?php echo $attribute->id; ?>]" required>
          </div>`+
          <?php } ?>
          `
          <div class="form-group col-lg-6">
              <label>Price</label>
              <input type="number" class="form-control" name="product_details[${count}][price]" required>
          </div>
          <div class="form-group col-lg-6">
              <label>Image</label>
              <br>
                <img id='test${count}' class="view_image" style="max-height: 80px; max-width: 80px; margin-bottom: 10px;" >
                <br>
                <input onchange="document.getElementById('test${count}').src = window.URL.createObjectURL(this.files[0])" class="add_image" type="file" class="form-control" name="product_details[${count}][image]"  required>
          </div>
          <div class="form-group col-lg-6">
              <label>Quantity</label>
              <input type="number" class="form-control" name="product_details[${count}][quantity]" required>
          </div>
          <div class="form-group col-lg-6">
              <label>Description</label>
              <input type="text" class="form-control" name="product_details[${count}][description]" required>
              <input type="text" class="form-control" style="display: none" name="product_details[${count}][id]" >
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

    function uuidv4() {
        return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
            (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
        );
    }
});


</script>


@endsection

