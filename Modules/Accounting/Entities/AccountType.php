<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function account()
    {
        return $this->hasOne('Modules\Accounting\Entities\Account','id','type');
    }
}
