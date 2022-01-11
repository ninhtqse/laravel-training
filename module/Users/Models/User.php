<?php
namespace Module\Users\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Infrastructure\Database\Traits\Uuids;

class User extends Authenticatable
{
    use Uuids;

    protected $table = 'users';

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $keyType = 'string';

    protected $casts = [ 'id' => 'string' ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = password_hash($value, PASSWORD_BCRYPT);
    }

}
