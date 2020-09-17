<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type_id'         => 'required',
            'name'            => 'required',
            'phone'           => 'required|unique:customers',
            'major_id'        => 'required',
            'email'           => 'required|unique:customers',
            'source_id'       => 'required',
            
            'company'         => 'min:4',
            'position'        => 'min:3',
            'department'      => 'min:3',
            'identification' => 'min:10',
            'taxcode'         => 'min:8',
            'address'         => 'min:5',
        ];
    }

    public function attributes() {
        return [
            'type_id'         => 'Loại thông tin',
            'name'            => 'Tên cá nhân',
            'phone'           => 'Điện thoại',
            'major_id'        => 'Chuyên ngành',
            'email'           => 'Email',
            'source_id'       => 'Nguồn thông tin',
            
            'company'         => 'Công ty',
            'position'        => 'Chức vụ',
            'department'      => 'Phòng ban',
            'identification' => 'CMND',
            'taxcode'         => 'Mã số thuế ',
            'address'         => 'Địa chỉ',
        ];
    }


    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'min'      => ':attribute phải ít nhất :min ký tự',
            'unique'   => ':attribute không được trùng',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
