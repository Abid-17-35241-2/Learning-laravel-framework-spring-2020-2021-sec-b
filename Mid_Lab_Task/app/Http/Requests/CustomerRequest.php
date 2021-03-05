<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|min:3|max:30|alpha',
            'username' => 'required|min:3|max:30|unique:customers',
            'email' => 'required|min:10|max:50',
            'password' => 'required|min:8|max:20|alpha_num',
            'cpassword' => 'required|min:8|max:20|alpha_num|same:password',
            'phone' => 'required|min:11|max:15',
            'city' => 'min:3|max:20',
            'country' => 'min:3|max:20',
            'company_name' => 'min:3|max:20'


        ];
    }

    public function messages()
    {
        return [

            'cpassword.same' => "Pasword not match----"
        ];
    }
}
