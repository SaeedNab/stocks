<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            //
            'username'=>'required',
            'password'=>'required',


        ];
    }

    public function messages()
    {
        return [
            'username.required'=>'لطفا نام کد ملی  را وارد نمایید',
            'password.required'=>'لطفا کلمه عبور خود را وارد نمایید',

        ];
    }
}
