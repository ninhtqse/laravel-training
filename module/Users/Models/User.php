<?php
    namespace Module\Users\Models;

    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

    class User extends Authenticatable implements CanResetPasswordContract
    {
        protected $table = 'users';

        protected $hidden = [
            'password',
            'remember_token',
        ];

    }
