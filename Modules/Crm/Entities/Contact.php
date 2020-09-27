<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'customer_id',
        'phone',
        'description',
        'address',
        'email',
        'department'
    ];

    public function customer()
    {
        return $this->belongsTo('Modules\Crm\Entities\Customer', 'customer_id', 'id');
    }
}
