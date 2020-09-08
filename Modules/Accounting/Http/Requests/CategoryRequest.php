<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'companyId' => 'required',
            'name'      => 'required|min:4',
            'code'      => 'required|unique:account_categories|min:4',
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
            'name'      => 'Tên khoản mục',
            'code'      => 'Mã code'  
        ];
    }

    public function authorize()
    {
        return true;
    }
}
