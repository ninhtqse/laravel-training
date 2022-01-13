<?php
namespace Module\Products\Models;

use Infrastructure\Database\Eloquent\Model;
use Infrastructure\Database\Traits\Uuids;
use Module\Products\Models\Category;

class Product extends Model
{
    use Uuids;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
