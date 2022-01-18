<?php
namespace Module\Products\Models;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Database\Traits\Uuids;

class Category extends Model
{
    use Uuids;
    protected $keyType = 'string';
    protected $table = 'categories';
    protected $guarded = [];

}