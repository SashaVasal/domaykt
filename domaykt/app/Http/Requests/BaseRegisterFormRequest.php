<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRegisterFormRequest extends FormRequest
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
            'role' => ['integer'],
            'firstname' => ['required','string','max:100'],
            'lastname' => ['required','string','max:100'],
            'phone' => ['regex:/^(\+?7|8)(( |\()?\d{3}\)?)( |-)?\d{3}( |-)?\d{2}( |-)?\d{2}$/','min:11','max:12','nullable'],
            'login' => ['string','nullable','email:rfc'],
            'password' => ['string','nullable']
        ];
    }
}
