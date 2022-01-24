<?php

namespace Module\Products\Models;

use Infrastructure\Database\Eloquent\Model;
use Infrastructure\Database\Traits\Uuids;

class AttributeProduct extends Model
{
    use Uuids;
    protected $table = 'attribute_products';
    protected $guarded = [];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}