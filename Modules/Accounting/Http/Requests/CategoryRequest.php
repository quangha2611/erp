<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'code' => 'min:4',
        ];
    }
    
    
    public function authorize()
    {
        return true;
    }
}
