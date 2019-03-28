<?php

namespace App\Http\Requests;

use App\Http\Controllers\ApiTrait;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApiRequest extends FormRequest
{
    use ApiTrait;

    /**
     * Use json output error message.
     *
     * @param Validator $validator
     *
     * @throws HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            $this->return412Response('The given data was invalid.', $validator->errors())
        );
    }
}
