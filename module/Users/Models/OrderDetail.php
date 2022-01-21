<?php

namespace Module\Users\Models;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Database\Traits\Uuids;
use Module\Products\Models\ProductDetail;
use Module\Users\Models\Order;

class OrderDetail extends Model
{

    use Uuids;

    protected $table = 'order_details';

    protected $guarded = [];

    protected $keyType = 'string';

    public function order()
    {
      return $this->belongsTo(Order::class);
    }
    
    public function product_detail()
    {
      return $this->belongsTo(ProductDetail::class);
    }


   

   

}