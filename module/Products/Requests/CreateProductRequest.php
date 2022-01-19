<?php

    namespace Module\Products\Requests;

    use Infrastructure\Http\ApiRequest;

    class CreateProductRequest extends ApiRequest
    {
        public function authorize()
        {
            return true;
        }

        public function rules()
        {
            return [
                'products'        => 'required|array',
                'products.category_id'  => 'required',
                'products.name'  => 'required',
            ];
        }

        public function attributes()
        {
            return [
                'products'              => __('products'),
                'products.category_id'        => __('category_id'),
                'products.name'        => __('name'),
            ];
        }
    }
