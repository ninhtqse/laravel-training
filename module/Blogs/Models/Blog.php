<?php

namespace Module\Blogs\Models;

use Illuminate\Database\Eloquent\Model;
use Module\Users\Models\User;
use Infrastructure\Database\Traits\Uuids;
class Blog extends Model
{
    use Uuids;
    protected $keyType = 'string';
    protected $table = 'blogs';
    protected $guarded = [];
    
    public function user()
  {
    return $this->belongsTo(User::class);
  }

}