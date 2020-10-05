<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class ContractDetail extends Model
{
    protected $fillable = [
        'contract_id',
        'product_id',
        'product_name',
        'amount',
        'employee_id',
        'employee_name',
        'percent',
    ];

    public function contract()
    {
        return $this->belongsTo('Modules\Crm\Entities\Contract','contract_id','id');
    }

    public function product()
    {
        return $this->belongsTo('Modules\Crm\Entities\Product','product_id','id');
    }
}
