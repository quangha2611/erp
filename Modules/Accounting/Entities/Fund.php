<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    protected $fillable = [];

    

    public function transaction()
    {
        return $this->hasOne('Modules\Accounting\Entities\Transaction','id','accountId');
    }
}
