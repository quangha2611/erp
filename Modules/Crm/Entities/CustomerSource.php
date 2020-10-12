<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class CustomerSource extends Model
{
    protected $fillable = [];

    public function customers()
    {
        return $this->hasMany('Modules/Crm/Entities/Customer', 'source_id', 'id');
    }
}
