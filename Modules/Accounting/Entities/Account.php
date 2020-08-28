<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'companyId',
        'name',
        'categoryId',
        'code',
        'type',
        'author'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company','companyId','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','author','id');
    }

    public function typeName()
    {
        return $this->belongsTo('Modules\Accounting\Entities\AccountType','type','id');
    }
}
