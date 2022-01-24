<?php 

namespace Module\Users\Requests;

use Infrastructure\Http\ApiRequest;

class CreateUserRequest extends ApiRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'users'        => 'required|array',
            'users.email'  => 'required|email|unique:users,email',
            'users.password'  => 'required',
            'users.name'  => 'required',
        ];
    }
//chỗ này là để đổi tên hiển thị nè :D
    public function attributes()
    {
        return [
            'users'              => __('user'),
            'users.email'        => __('email'),
            'users.password'        => __('password'),
            'users.name'        => __('name'),
        ];
    }
}
