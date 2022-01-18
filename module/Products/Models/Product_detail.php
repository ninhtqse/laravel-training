<?php
namespace Module\Products\Models;

use Infrastructure\Database\Eloquent\Model;
use Module\Products\Models\Product;
use Infrastructure\Database\Traits\Uuids;

class Product_detail extends Model
{
    use Uuids;
    protected $table = 'product_details';
    protected $guarded = [];

    public function product()
    {
      return $this->belongsTo(Product::class);
    }

    public function attributeProducts()
    {
        return $this->hasMany(AttributeProduct::class);
    }

}