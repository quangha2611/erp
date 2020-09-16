<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'title',
        'content',
        'action_id',
        'calendar_id',
        'phone_call_id',
        'request_call_id',
        'customer_id',
        'author',
    ];

    public function calendar()
    {
        return $this->belongsTo('Modules\Crm\Entities\Calendar','calendar_id','id');
    }

    public function phoneCall()
    {
        return $this->belongsTo('Modules\Crm\Entities\PhoneCall','phone_call_id','id');
    }

    public function action()
    {
        return $this->belongsTo('Modules\Crm\Entities\Action','action_id','id');
    }

    public function customer()
    {
        return $this->belongsTo('Modules\Crm\Entities\Customer','customer_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','author','id');
    }

    public function requestCall()
    {
        return $this->belongsto('Modules\Crm\Entities\RequestCall', 'request_call_id', 'id');
    }
}
