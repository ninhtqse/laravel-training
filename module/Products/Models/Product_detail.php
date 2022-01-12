<?php
namespace Module\Products\Models;

use Illuminate\Database\Eloquent\Model;
use Module\Products\Models\Product;
use Infrastructure\Database\Traits\Uuids;

class Product_detail extends Model
{
    use Uuids;
    protected $keyType = 'string';
    protected $table = 'product_details';
    protected $guarded = [];

    public function product()
    {
      return $this->belongsTo(Product::class);
    }

}