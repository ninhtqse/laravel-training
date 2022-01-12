<?php
namespace Module\Products\Models;

use Illuminate\Database\Eloquent\Model;
use Module\Categories\Models\Category;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

   

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

}