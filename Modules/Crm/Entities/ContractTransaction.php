<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class ContractTransaction extends Model
{
    protected $fillable = [
        'contract_id',
        'type_id',
        'auhtor',
        'checker_id',
        'checker_time',
        'is_checked',
        'status',

    ];

    public function contract()
    {
        return $this->belongsTo('Modules\Crm\Entities\Contract', 'contract_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'author', 'id');
    }

    public function checker()
    {
        return $this->belongsTo('App\User', 'checker_id', 'id');
    }
}
