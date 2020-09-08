<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    public function rules()
    {
        return [
            'companyId' => 'required',
            'name'      => 'required|min:4',
            'code'      => 'required|unique:accounts|min:4',
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống',
            'min'       => ':attribute ít nhất :min ký tự',
            'unique'    => ':attribute không được trùng'
        ];
    }


    public function attributes()
    {
        return [
            'companyId' => 'Công ty',
            'name'      => 'Tên tài khoản',
            'code'      => 'Mã code'  
        ];
    }

    public function authorize()
    {
        return true;
    }
}
