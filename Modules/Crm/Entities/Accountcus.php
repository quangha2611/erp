<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Accountcus extends Model
{
    protected $fillable = [];

    public function customer()
    {
        return $this->belongsTo('Modules\Crm\Entities\Customer','customer_id','id');
    }

    public function status()
    {
        return $this->belongsTo('Modules\Crm\Entities\AccountcusStatus','status_id','id');
    }
}
