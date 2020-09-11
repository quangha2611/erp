<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneCallRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title'           => 'required|min:4',
            'direction'       => 'required',
            'status_id'       => 'required',
            'result'          => 'required',
            'content'         => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'title'           => 'Tiêu đề',
            'direction'       => 'Chiều gọi',
            'status_id'       => 'Tình trạng gọi',
            'result'          => 'Kết quả',
            'content'         => 'Nội dung'
        ];
    }


    public function messages()
    {
        return [
            'required'      => ':attribute không được để trống',
            'min'           => ':attribute phải ít nhất :min ký tự',
        ];
    }
    public function authorize()
    {
        return true;
    }
}
