<?php

namespace Module\Products\Models;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Database\Traits\Uuids;
use Module\Products\Models\ProductDetail;

class Attribute extends Model
{
  use Uuids;

  protected $table = 'attributes';

  protected $guarded = [];

  protected $keyType = 'string';

  public function productDetai()
  {
    return $this->belongsToMany(ProductDetail::class, 'attribute_products', 'attribute_id', 'product_detail_id')
      ->as('attribute_products')
      ->withPivot('value')
      ->withTimestamps();
  }
}