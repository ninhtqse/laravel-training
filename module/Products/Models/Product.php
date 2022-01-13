<?php
namespace Module\Products\Models;

use Infrastructure\Database\Eloquent\Model;
use Module\Categories\Models\Category;
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

}