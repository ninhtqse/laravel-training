<?php

namespace Module\Products\Models;

use Infrastructure\Database\Eloquent\Model;
use Module\Products\Models\Product;
use Module\Products\Models\Attribute;
use Infrastructure\Database\Traits\Uuids;

class ProductDetail extends Model
{
    use Uuids;
    protected $table = 'product_details';
    protected $guarded = [];

    public function product()
    {
      return $this->belongsTo(Product::class);
    }

    public function attribute_products()
    {
        return $this->hasMany(AttributeProduct::class);
    }

    public function attributes()
    {
      return $this->belongsToMany(Attribute::class, 'attribute_products', 'product_detail_id', 'attribute_id')
        ->as('attribute_products')
        ->withPivot('value')
        ->withTimestamps();
    }

}