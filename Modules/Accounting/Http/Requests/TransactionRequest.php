<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'companyId'         => 'required',
            'departmentId'      => 'required',
            'applyDate'         => 'required',
            'accountId'         => 'required',
            'expenseCategoryId' => 'required',
            'amount'            => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required'          => ':attribute không được để trống',
        ];
    }


    public function attributes()
    {
        return [
            'companyId'         => 'Công ty',
            'departmentId'      => 'Phòng ban',
            'applyDate'         => 'Ngày hoạch toán',
            'accountId'         => 'Quỹ',
            'expenseCategoryId' => 'Khoản mục',
            'amount'            => 'Số tiền',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
