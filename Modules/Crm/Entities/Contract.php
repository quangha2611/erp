<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'customer_id',
        'company_id',
        'major_id',
        'sign_date', // Ngày ký
        'start_date', // Ngày bắt đầu
        'end_date', // Ngày kết thúc
        'expired_date', // Ngày kết thúc
        'contract_type', // Loại hợp đồng
        'sign_type', // Hình thức ký
        'is_checked',
        'description',
        'author',
    ];

    public function customer()
    {
        return $this->belongsTo('Modules\Crm\Entities\Customer','customer_id','id');
    }

    public function details()
    {
        return $this->hasMany('Modules\Crm\Entities\ContractDetail', 'contract_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','author','id');
    }

    public function company()
    {
        return $this->belongsTo('App\Company','company_id','id');
    }

    public function major()
    {
        return $this->belongsTo('Modules\Crm\Entities\CustomerMajor','major_id','id');
    }

    public function type()
    {
        return $this->belongsTo('Modules\Crm\Entities\ContractType','contract_type', 'id');
    }

    public function signType()
    {
        return $this->belongsTo('Modules\Crm\Entities\ContractSignType','sign_type', 'id');
    }

    public function transaction()
    {
        return $this->belongsTo('Modules\Crm\Entities\ContractTransaction', 'id', 'contract_id');
    }
}
