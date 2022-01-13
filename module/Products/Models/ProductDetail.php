<?php
namespace Module\Products\Models;

use Infrastructure\Database\Eloquent\Model;
use Module\Products\Models\Product;
use Infrastructure\Database\Traits\Uuids;

class ProductDetail extends Model
{
    use Uuids;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
