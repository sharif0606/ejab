<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
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
        $id=Request::instance()->id;
        return [
            "name" => "required",
            "email" => "required|email|unique:users,email,$id",
            "contact" => "required|unique:users,contact,$id",
            "username" => "required|unique:users,username,$id",
            "role_id" => "required",
            "status" => "required",
        ];
    }

    public function message(){
        return [
            'required' => 'The :attribute field is required'
        ];
    }
}
