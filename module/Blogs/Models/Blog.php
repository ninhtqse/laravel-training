<?php
namespace Module\Blogs\Models;

use Illuminate\Database\Eloquent\Model;
use Module\Users\Models\User;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $guarded = [];

    public function user()
  {
    return $this->belongsTo(User::class);
  }

}