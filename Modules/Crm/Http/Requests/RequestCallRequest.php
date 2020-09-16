<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCallRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'             => 'required|min:4',
            'request_time_call' => 'required',
            'tele_sale_id'      => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'title'             => 'Tiêu đề',
            'request_time_call' => 'Thời điểm gọi',
            'tele_sale_id'      => 'Người gọi'
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống',
            'min'       => ':attribute phải ít nhất :min ký tự',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
