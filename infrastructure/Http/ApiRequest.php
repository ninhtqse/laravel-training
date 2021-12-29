<?php 

namespace Infrastructure\Http;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Contracts\Validation\Validator;
use Infrastructure\Exceptions as FtwException;
use Illuminate\Foundation\Http\FormRequest;


abstract class ApiRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        if (method_exists($this,'createLog')) {
            $this->createLog();
        }
    	throw new FtwException\GeneralException("FWE009", null, null, [$validator->errors()->first()]);
    }

    protected function failedAuthorization()
    {
        if (method_exists($this,'createLog')) {
            $this->createLog();
        }
        throw new HttpException(403);
    }
}