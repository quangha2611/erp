<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class RequestCall extends Model
{
    protected $fillable = [
        'request_time_call',
        'tele_sale_id',
        'author',
    ];

    public function teleSale()
    {
        return $this->belongsTo('App\User', 'tele_sale_id', 'id');
    }
}
