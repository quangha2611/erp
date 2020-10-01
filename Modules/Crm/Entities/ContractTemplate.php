<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class ContractTemplate extends Model
{
    protected $fillable = [
        'name',
        'company_id',
        'contract_type_id'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company','company_id','id');
    }
}
