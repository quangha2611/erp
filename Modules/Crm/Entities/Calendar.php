<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'company_id',
        'customer_id',
        'title',
        'begin_date_time',
        'end_date_time',
        'location',
        'description',
        'author',
    ];

    public function customer()
    {
        return $this->belongsTo('Modules\Crm\Entities\Customer','customer_id','id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User','calendar_user','calendar_id','user_id');
    } 

    public function activity()
    {
        return $this->hasOne('Modules\Crm\Entities\Activity','id','calendar_id');
    }
}
