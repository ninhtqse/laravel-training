<?php 
/* 
* (c) 2021 HANDA HEAVY INDUSTRIAL Co., Ltd. 
* 
* NOTICE: All source code, documentation and other information 
* contained herein is, and remains the property of HANDA HEAVY INDUSTRIAL Co., Ltd. 
* Dissemination of this information or reproduction of this material 
* is strictly forbidden unless prior written permission is obtained from HANDA HEAVY INDUSTRIAL Co., Ltd. 
*/

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