<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'company_id',
        'website',
        'major'
    ];

    public function calendar()
    {
        return $this->hasOne('Modules\Crm\Entities\Calendar','id','customer_id');
    }

    public function company()
    {
        return $this->belongsTo('App\Company','company_id','id');
    }

    public function type()
    {
        return $this->belongsTo('Modules\Crm\Entities\CustomerType','type_id','id');
    }
}
