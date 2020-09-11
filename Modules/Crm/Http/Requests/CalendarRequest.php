<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CalendarRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_id'      => 'required',
            'title'           => 'required|min:4',
            'begin_date_time' => 'required',
            'joins'           => 'required',
            'location'        => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'company_id'      => 'Công ty',
            'title'           => 'Tiêu đề',
            'begin_date_time' => 'Thời gian bắt đầu',
            'joins'           => 'Người tham gia',
            'location'        => 'Địa điểm',
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
