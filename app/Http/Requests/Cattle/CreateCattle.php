<?php

namespace App\Http\Requests\Cattle;

use Illuminate\Foundation\Http\FormRequest;

class CreateCattle extends FormRequest
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
            "beneficiary_contact" => "required",
            "serial_no" => "required|unique:cattle"
        ];
    }

    public function message(){
        return [
            'required' => 'The :attribute field is required'
        ];
    }
}
