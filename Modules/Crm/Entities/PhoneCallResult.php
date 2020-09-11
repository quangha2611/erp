<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class PhoneCallResult extends Model
{
    protected $fillable = [];

    public function phoneCall()
    {
        return $this->hasOne('Modules\Crm\Entities\PhoneCall','id','result_id');
    }
}
