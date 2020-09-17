<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [
        'afterSubmit',
        'btnSubmit'
    ];

    public function calendar()
    {
        return $this->hasOne('Modules\Crm\Entities\Calendar','id','customer_id');
    }

    public function type()
    {
        return $this->belongsTo('Modules\Crm\Entities\CustomerType','type_id','id');
    }

    public function level()
    {
        return $this->belongsTo('Modules\Crm\Entities\CustomerLevel', 'level_id','id');
    }

    public function source() {
        return $this->belongsTo('Modules\Crm\Entities\CustomerSource', 'source_id', 'id');
    }

    public function major() {
        return $this->belongsTo('Modules\Crm\Entities\CustomerMajor', 'major_id', 'id');
    }
}
