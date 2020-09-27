<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_id'              => 'required',
            'sign_date'                => 'required',
            'start_date'               => 'required',
            'contract_type'            => 'required',
            'sign_type'                => 'required',
            'contract_product'         => 'required',
            'employee_product_product' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'customer_id'              => 'Khách hàng',
            'sign_date'                => 'Ngày ký',
            'start_date'               => 'Ngày bắt đầu',
            'contract_type'            => 'Loại hợp đồng',
            'sign_type'                => 'Hình thức ký',
            'contract_product'         => 'Giá trị hợp đồng',
            'employee_product_product' => 'Doanh số',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
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
