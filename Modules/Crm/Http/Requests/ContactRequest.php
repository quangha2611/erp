<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'            => 'required',
            'gender'          => 'required',
            'phone'           => 'required',
        ];
    }

    public function attributes() {
        return [
            'name'            => 'Tên liên hệ',
            'gender'          => 'Giới tính',
            'phone'           => 'Số điện thoại',
        ];
    }


    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'unique'   => ':attribute không được trùng',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
