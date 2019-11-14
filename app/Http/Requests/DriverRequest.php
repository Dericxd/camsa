<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstName' => [
                'min:1', 'max:3'
            ],
            'lastName' => [
                'min:1', 'max:3'
            ],
            'ci' => [
                'min:1', 'max:3'
            ],
            'phone' => [
                'min:1', 'max:3'
            ],
        ];
    }
}
