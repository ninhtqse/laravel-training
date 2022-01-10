<?php
    namespace Module\Users\Models;

    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable
    {

        protected $table = 'users';

        protected $guarded = [];

        protected $hidden = [
            'password',
            'remember_token',
        ];

        public function setPasswordAttribute($value)
        {
            $this->attributes['password'] = password_hash($value, PASSWORD_BCRYPT);
        }

    }
