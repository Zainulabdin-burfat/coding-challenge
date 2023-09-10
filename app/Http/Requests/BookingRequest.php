<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'integer',
        ];
    }

    public function messages()
    {
        return [
            'user_id.integer' => 'User ID must be an integer',
        ];
    }
}
