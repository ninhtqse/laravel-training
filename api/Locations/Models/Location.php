<?php

namespace Api\Locations\Models;

use Infrastructure\Database\Eloquent\Model;
use Infrastructure\Database\Traits\Uuids;
use Module\Users\Models\User;

class Location extends Model
{
    use Uuids;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
