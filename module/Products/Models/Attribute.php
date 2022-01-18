<?php
namespace Module\Products\Models;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Database\Traits\Uuids;

class Attribute extends Model
{

    use Uuids;

    protected $table = 'attributes';

    protected $guarded = [];

    protected $keyType = 'string';

}