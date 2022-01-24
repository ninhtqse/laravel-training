<?php

namespace Module\Products\Models;

use Infrastructure\Database\Eloquent\Model;
use Module\Products\Models\Category;
use Infrastructure\Database\Traits\Uuids;

class Product extends Model
{
    use Uuids;
    protected $table = 'products';

    protected $guarded = [];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function product_details()
    {
        return $this->hasMany(ProductDetail::class);
    }
}