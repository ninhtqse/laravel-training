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
use Infrastructure\Database\Traits\Uuids;
class User extends Authenticatable 
{
    use Uuids;
    protected $keyType = 'string';
    protected $table = 'users';
    protected $guarded = []; //cái này là để loại đi trường nào nếu không loại đi trường nào thì để mảng rỗng nè
    protected $hidden = [
        'password',
        'remember_token',
    ]; //chỗ này là để không hiển thị 2 trường đã viết ở trong mảng khi get nè

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = password_hash($value, PASSWORD_BCRYPT);
    }// function này là để set defalt sẽ mã hóa trường password khi update hoặc insert nà :D
    
}