<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'first_name'=>'required',
            'last_name'=>'required',
            'nation_code'=>'required|max:10|min:10',
            'username'=>'required|min:10',
            'email'=>'required|email|unique:admins,email',
            'phone_number'=>'required|min:10|max:11',

        ];
    }

    public function messages()
    {
        return [
            'first_name.required'=>'لطفا نام خود را وارد نمایید',
            'last_name.required'=>'لطفا نام خانوادگی خود را وارد نمایید',
            'nation_code.required'=>'لطفا کد ملی خود را وارد نمایید',
            'email.required'=>'لطفا ایمیل خود را وارد نمایید',
            'email.unique'=>'این ایمیل وجود دارد',
            'phone_number.required'=>'لطفا شماره تماس خود را وارد نمایید',
            'phone_number.min'=>'شماره تماس حداقل ده رقم میتواند باشد',
            'phone_number.max'=>'شماره تماس حداکثر یازده رقم میتواند باشد',
            'nation_code.max'=>'شماره ملی باید ده رقم باشد',
            'nation_code.min'=>'شماره ملی باید ده رقم باشد',
            'email.email'=>'فرمت ایمیل نادرست است',
        ];
    }
}
