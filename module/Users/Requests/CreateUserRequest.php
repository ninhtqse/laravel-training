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
            'users.name'  => 'required',
            'users.email'  => 'required|email',
            'users.password'  => 'required',
            'users.is_admin'  => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'user'              => __('user'),
            'user.name'        => __('name'),
            'user.email'        => __('email'),
            'user.password'        => __('password'),
            'user.is_admin'        => __('is_admin'),
        ];
    }
}
