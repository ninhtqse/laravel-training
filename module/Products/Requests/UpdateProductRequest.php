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
            'products.name'                 => 'required',
            'attribute_products'            => 'required|array',
            'product_details'               => 'required|array',
            'product_details.price'         => 'required|number',
            'product_details.image'         => 'required',
            'product_details.quantity'      => 'required|number',
            'product_details.description'   => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'users'        => __('user')
        ];
    }
}
