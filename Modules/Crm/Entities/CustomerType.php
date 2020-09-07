<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    protected $fillable = [];

    public function customer()
    {
        return $this->hasOne('Modules\Crm\Entities\Customer','id','type_id');
    }
}
