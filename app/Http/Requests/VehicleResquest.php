<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleResquest extends FormRequest
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
            'name' => [
                'min:1', 'max:3'
            ],
            'brand' => [
                'min:1', 'max:3'
            ],
            'model' => [
                'min:1', 'max:3'
            ],
            'type' => [
                'min:1', 'max:3'
            ],
            'plate' => [
                'min:2', 'max:5'
            ]
        ];
    }
}
