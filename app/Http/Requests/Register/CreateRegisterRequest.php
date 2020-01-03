<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class CreateRegisterRequest extends FormRequest
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
            'fname'=> 'required',
            'lname' => 'required',
            'email' => 'required|unique:ibc',
            'age' => 'required',
            'gender' => 'required',
            'privacyOK' => 'required'
        ];
    }
}
