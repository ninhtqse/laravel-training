<?php
  
namespace Api\Locations\Models;

use Illuminate\Database\Eloquent\Model;
use Module\Users\Models\User;

class Locations extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}