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
                    <form role="form" id="contactForm" action="{{route('create_product')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="products[category_id]">
                                @foreach ($results as $result)
                                <option value="{{$result->id}}">{{$result->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="product_details[name]">
                        </div>

                        <div class="variant row">
                            @foreach ($attributes as $attribute)
                            <div class="form-group col-lg-6">
                                <label>{{$attribute->name}}</label>
                                <input type="text" class="form-control" name="attribute_products[1][{{$attribute->name}}]">
                            </div>
                            @endforeach
                            <div class="form-group col-lg-6">
                                <label>Price</label>
                                <input type="text" class="form-control" name="product_details[1][price]">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Image</label>
                                <input type="text" class="form-control" name="product_details[1][image]">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Quantity</label>
                                <input type="text" class="form-control" name="product_details[1][quantity]">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Description</label>
                                <input type="text" class="form-control" name="product_details[1][description]">
                            </div>
                            <div class="col-lg-6">
                                <p class="add_variant" style="background:red;width:30px;height:30px;border-radius:5px;color:white;font-size:18px;text-align:center;line-height:30px;cursor:pointer;font-weight:bold">+</p>
                            </div>
                        </div>
                        <div class="append">

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
      let count = $('.variant').length + 1;
      let html = 
      `<div class="variant row">`+
          <?php 
          foreach ($attributes as $attribute){ ?>
          `<div class="form-group col-lg-6">
              <label>`+`<?php echo $attribute->name; ?>`+`</label>
              <input type="text" class="form-control" name="attribute_products[${count}][<?php echo $attribute->name; ?>]">
          </div>`+
          <?php } ?>
          `
          <div class="form-group col-lg-6">
              <label>Price</label>
              <input type="text" class="form-control" name="product_details[${count}][price]">
          </div>
          <div class="form-group col-lg-6">
              <label>Image</label>
              <input type="text" class="form-control" name="product_details[${count}][image]">
          </div>
          <div class="form-group col-lg-6">
              <label>Quantity</label>
              <input type="text" class="form-control" name="product_details[${count}][quantity]">
          </div>
          <div class="form-group col-lg-6">
              <label>Description</label>
              <input type="text" class="form-control" name="product_details[${count}][description]">
          </div>
      </div>`;
      
      
      $('.append').append(html)
    });
  })
</script>
@endsection