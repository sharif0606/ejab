<?php

namespace App\Http\Requests\AiDealer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDealer extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required",
            "contact_number" => "required|unique:ai_dealers,contact_number,".$this->aiDealer->id
        ];
    }

    public function message(){
        return [
            'required' => 'The :attribute field is required',
            'unique' => 'The :attribute field is already exists. Please try another'
        ];
    }
}
