<?php

namespace Module\Users\Models;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Database\Traits\Uuids;

class Customer extends Model
{
    use Uuids;

    protected $table = 'customers';

    protected $guarded = [];

    protected $keyType = 'string';

    public function location()
    {
      return $this->belongsTo(Location::class);
    }
}