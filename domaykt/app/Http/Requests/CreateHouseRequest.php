<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHouseRequest extends FormRequest
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
     *
     *
     */

    public function rules()
    {
        return [
            'stroy_id' => ['required'],
            'image' => ['nullable','mimes:jpeg,jpg,png,gif','max:10000'],
            'address' => ['nullable','required','string','max:100'],
            'start_date' => ['nullable','date'],
            'end_date' => ['nullable','date','after_or_equal:start_date'],
            'latitude' => ['nullable','regex:/^[0-9]+(\.[0-9][0-9]?)?$/'],
            'longitude' => ['required'],
            'entrance' => ['nullable','integer'],
            'is_floor' => ['nullable'],
            'floors' => ['nullable', 'integer'],
            'status_object' => ['integer', 'nullable'],
        ];
    }
}
