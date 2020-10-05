<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class PhoneCall extends Model
{
    protected $fillable = [
        'title',
        'direction',
        'status_id',
        'result_id',
        'content',
    ];

    public function result()
    {
        return $this->belongsTo('Modules\Crm\Entities\PhoneCallResult','result_id','id');
    }

}
