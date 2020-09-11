<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class CustomerLevel extends Model
{
    protected $fillable = [];

    public function customer()
    {
        return $this->hasOne('Modules\Crm\Entities\Customer', 'id','level_id');
    }
}
