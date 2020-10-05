<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'company_id',
        'title',
        'begin_date_time',
        'end_date_time',
        'location',
        'description',
    ];

    public function activity()
    {
        return $this->hasOne('Modules\Crm\Entities\Activity','calendar_id','id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User','calendar_user','calendar_id','user_id');
    } 

}
