<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStroyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required','string'],
            'user_id' => ['required'],
            'phone' => ['string'],
            'address' => ['string'],
            'latitude' => ['regex:/^[0-9]+(\.[0-9][0-9]?)?$/'],
            'longitude' => ['regex:/^[0-9]+(\.[0-9][0-9]?)?$/']
        ];
    }
}
