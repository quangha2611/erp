<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    protected $fillable = [];

    public function template()
    {
        return $this->hasOne('Modules\Crm\Entities\ContractTemplate','contract_type_id', 'id');
    }
}
