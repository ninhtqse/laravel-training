<?php 

namespace Module\Products\Requests;

use Infrastructure\Http\ApiRequest;

class UpdateProductRequest extends ApiRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'products'                      => 'required|array',
        ];
    }

    public function attributes()
    {
        return [
            'users'        => __('user')
        ];
    }
}
