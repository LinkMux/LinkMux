<?php

namespace App\Http\Requests;

class ShortlinkRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'original_url' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'original_url' => __('shortlink.original_url'),
        ];
    }
}
